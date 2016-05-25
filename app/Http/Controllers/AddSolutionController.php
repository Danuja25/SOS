<?php
/**
 * Created by PhpStorm.
 * User: Do
 * Date: 5/24/2016
 * Time: 9:23 PM
 */

namespace app\Http\Controllers;


use App\Domain\Philanthropist;
use App\Domain\Solution;

class AddSolutionController extends Controller
{

    public function showpage($issue_No){

        return view('UserViews.issues')
            ->with('issue',$issue_No)
            ->with('user',Auth::user());
    }

    public function addSolution($title,$cost,$description,$issueNo){
        $database = DataBase::getInstance();
        $solution = new Solution();
        $phil = new Philanthropist();
        $solution->setTitle($title);
        $solution->setCost($cost);
        $solution->setDescription($description);
        $solution->setIssueNo($issueNo);
        $submitter = $phil->getNid();
        $database->addIssue($issue,);
    }

}