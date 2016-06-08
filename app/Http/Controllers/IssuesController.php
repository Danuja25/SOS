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

class IssuesController extends controller
{

    public function issues()
    {
        $issues=Issue::all();

        return view('UserViews.issues')
            ->with('issues', $issues)
            ->with('user', Auth::user());

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
        $issue = new Issue();
        $issue->Title = $request->title;
        $issue->Submitter= $user;           ;
        $issue->Location = $request->city;
        $issue->Description = $request->description;
        $issue->MapLocation = $request->maploc;
        $issue->SubmittedDate = date("y-m-d");
        $issue->Image = $request->image;
        $issue->save();


        return redirect()->to('login')->with('success', 'User registered successfully. Please login');
    }

}