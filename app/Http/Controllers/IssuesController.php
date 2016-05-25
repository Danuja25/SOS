<?php
/**
 * Created by PhpStorm.
 * User: Do
 * Date: 5/23/2016
 * Time: 7:59 PM
 */

namespace App\Http\Controllers;


use App\DataBase\DataBase;

class IssuesController extends controller
{

    public function issues(){
        $data = DataBase::getInstance()->loadIssuesByDate();

        return view('UserViews.issues')
            ->with('issueArray',$data)
            ->with('user',Auth::user());

    }

}