<?php
/**
 * Created by PhpStorm.
 * User: Do
 * Date: 5/23/2016
 * Time: 7:59 PM
 */

namespace App\Http\Controllers;


use App\DataBase\DataBase;
use App\Issue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class IssuesController extends controller
{

    public function issues()
    {
        $issues=Issue::all();

        return view('UserViews.issues')
            ->with('issues', $issues)
            ->with('user', Auth::user());

    }

    public function viewAddIssue()
    {
        return view('addIssue')
            ->with('user', Auth::user());
    }

    public function viewIssueDetails($issueNo)
    {
        $viewIssue = Issue::all()->find($issueNo);

        return view('UserViews.issueDetails')
            ->with('user', Auth::user())
            ->with('issue',$viewIssue);
    }

    public function createIssue(Request $request)
    {
        Log::info($request->all());
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'city' => 'required',
            'description' => 'required'

        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = Auth::user();
        $nid = $user->NID;
        $issue = new Issue();
        $issue->Title = $request->title;
        $issue->Submitter= $nid;           ;
        $issue->Location = $request->city;
        $issue->Description = $request->description;
        $issue->MapLat = $request->maplat;
        $issue->MapLng = $request->maplng;
        $issue->SubmittedDate = date("y-m-d");
        $issue->Image = $request->image;
        $issue->save();


        return redirect()->to('issues')->with('success', 'Issue added successfully. Thank you!!!');
    }

}