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
use Illuminate\Support\Facades\Input;

class AddIssueController extends Controller
{
    public function addIssue(){
        $database = DataBase::getInstance();
        $issue = new Issue();
        $requester = new Requester();
        $issue->setTitle(Input::get('title'));
        $issue->setLocation(Input::get('location'));
        $issue->setDescription(Input::get('description'));
        $issue->setMaplocation($maplocation);
        $issue->setSubmitDate(date("y-m-d"));
        $submitter = $requester->getNid();
        $database->addIssue($issue,);
    }


}