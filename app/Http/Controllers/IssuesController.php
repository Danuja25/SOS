<?php
/**
 * Created by PhpStorm.
 * User: Do
 * Date: 5/23/2016
 * Time: 7:59 PM
 */

namespace App\Http\Controllers;


class IssuesController extends controller
{

    public function issues(){
        return view('UserViews.issues');
    }

}