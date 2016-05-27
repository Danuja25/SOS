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

}