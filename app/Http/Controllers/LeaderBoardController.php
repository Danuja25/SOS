<?php
/**
 * Created by PhpStorm.
 * User: Do
 * Date: 5/17/2016
 * Time: 2:06 PM
 */


namespace App\Http\Controllers;
use app\DataBase\DataBase;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class LeaderBoardController extends Controller
{

    public function getLeaderboard(){
        $ldrpos = DB::select('SELECT FirstName,LastName,City,Points FROM Philanthropist ORDER BY Points');
        return $ldrpos;
    }

    public function ldrview(){
        return view('UserViews.leaderboard');
    }
}