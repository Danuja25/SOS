<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Issue;
use Illuminate\Support\Facades\Auth;
use App\Solutions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class SolutionsController extends Controller {

	public function solutions()				/*Return all solutions provided for the particular issue*/
	{
		$solutions=Solutions::all();

		return view('UserViews.solution')
			->with('solutions', $solutions)
			->with('user', Auth::user());

	}

	public function viewAddSolution($issueNo)		/*Dispaly add solutions page*/
	{
		$viewIssue = Issue::all()->find($issueNo);
		return view('UserViews.solution')
			->with('issue',$viewIssue)
			->with('user',Auth::user());
	}

	public function viewIssueSolution($issueNo)		/*Display the solution details*/
	{
		$issue = Issue::all()->find($issueNo);
		$solutions = $issue->Solution()->get();
		$solutio = Solutions::all()->where('Issue_No','3');
		return view('UserViews.viewSolutions')
			->with('user', Auth::user())
			->with('solutions',$solutions);
	}


	public function viewSolutionDetails($solutionNo)		/*Show details of the particular solution*/
	{
		$viewSolution = Solutions::all()->find($solutionNo);

		return view('UserViews.solutionDetails')
			->with('user', Auth::user())
			->with('solution', $viewSolution);
	}

	/**
	 * Create new solution
	 *
	 * @param Request $request
	 * @return $this|\Illuminate\Http\RedirectResponse
	 */
	public function createSolution(Request $request)
	{
		Log::info($request->all());
		$validator = Validator::make($request->all(), [			/*Validating the given input*/
			'title' => 'required',
			'cost' => 'required',
			'description' => 'required'

		]);
		if ($validator->fails()) {
			return back()->withErrors($validator)->withInput();
		}


		$user = Auth::user();
		$nid = $user->NID;
		$solution = new Solutions();
		$solution->Issue_No = $request->issueNo;
		$solution->Title = $request->title;
		$solution->Submitter= $nid;
		$solution->Description = $request->description;
		$solution->EstimatedCost = $request->cost;
		$solution->SubmittedDate = date("y-m-d");

		$solution->save();


		return redirect()->to('issues')->with('success', 'Solution was submitted successfully. Thank you!!!');
	}

	public function toggleVote($solutionNo)			/*Toggling the vote for the solution considering the active user*/
	{
		$user = Auth::user();
		$solution = Solutions::find($solutionNo);
		$No_of_votes = $solution->No_of_votes;
		$vote = $solution->votes()->where('VoterID', $user->NID)->first();
		if (is_null($vote)) {
			$vote = new SolutionVotes();
			$vote->VoterID = $user->NID;
			$solution->votes()->save($vote);
			$No_of_votes += 1;
			$solution->No_of_votes = $No_of_votes;
			$solution->save();
			return response()->json(['status' => 1]);
		} else {
			$vote->delete();
			return response()->json(['status' => 0]);
		}
	}


}
