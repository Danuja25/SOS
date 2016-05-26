<?php
/**
 * Created by PhpStorm.
 * User: Do
 * Date: 5/17/2016
 * Time: 2:23 PM
 */

namespace App\Http\Controllers;


use App\DataBase\DataBase;
use App\Domain\Issue;
use App\Domain\Requester;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class AddIssueController extends Controller
{
    public function addIssue($title,$location,$description,$maploc){
        $database = DataBase::getInstance();
        $issue = new Issue();
        $requester = new Requester();
        $issue->setTitle($title);
        $issue->setLocation($location);
        $issue->setDescription($description);
        $issue->setMaplocation($maploc);
        $issue->setSubmitDate(date("y-m-d"));
        $submitter = $requester->getNid();
        $database->addIssue($issue,Auth::user());

    }


}