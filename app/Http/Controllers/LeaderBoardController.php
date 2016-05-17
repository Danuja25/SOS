<?php
/**
 * Created by PhpStorm.
 * User: Do
 * Date: 5/17/2016
 * Time: 2:06 PM
 */

namespace App\Http\Controllers;


class LeaderBoardController
{

    public function getLeaderboard(){
        $ldrpos = DB::select('SELECT FirstName,LastName,City,Points FROM Philanthropist ORDER BY Points');
        return $ldrpos;
    }

}