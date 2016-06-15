<?php
/**
 * Created by PhpStorm.
 * User: Do
 * Date: 5/11/2016
 * Time: 3:55 PM
 */

namespace App\Http\Controllers;
use app\DataBase\DataBase;
use Illuminate\Support\Facades\Auth;
use App\Issue;
use App\IssueVotes;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{

    public function addIssue(){
        return view('addIssue');
    }

    public function issues(){
        return view('UserViews.issues');
    }

    public function login(){
        return view('projectViews.login');

    }

    public function register(){
        return view('projectViews.register');
    }

    public function contact(){
        return view('UserViews.contact');
    }

    public function reqIndex()
    {
        $user = Auth::user();
        $addedIssues=Issue::all()->where('Submitter',$user->NID);
        $issue = new Issue();
        $votes = $user->votes();

        return view('UserViews.reqIndex')
            ->with('addedIssues', $addedIssues)
            ->with('votes', $votes)
            ->with('user', Auth::user());

    }



}