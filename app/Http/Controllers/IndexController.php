<?php
/**
 * Created by PhpStorm.
 * User: Do
 * Date: 5/11/2016
 * Time: 3:55 PM
 */

namespace App\Http\Controllers;
use app\DataBase\DataBase;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


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

    public function checkUser($username,$password){
        $users = DB::select('SELECT * FROM User WHERE Username = ? AND Password = ?',[$username,$password]);
        if(count($users)<=0)
            return false;
        return true;
    }

    /*public function getMarkers($location){
        $places = DB::select('SELECT MapLocation FROM Issues WHERE MapLocation')

    }*/

    public function getUserAddedIssues($nid){
        $userIssues = DB::select('SELECT Title,Location,MapLocation,No_of_votes FROM Issues WHERE Submitter = ? ORDER BY SubmittedDate DESC ', [$nid]);
        return $userIssues;
    }

    public function getUserVotedIssues($nid){
        $userVotes = DB::select('SELECT Title,Location,MapLocation,No_of_votes FROM IssueVotes NATURAL JOIN Issues WHERE VoterID = ? ORDER BY SubmittedDate DESC', [$nid]);
        return $userVotes;
    }



}