<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 12/29/2015
 * Time: 11:38 PM
 */

namespace App\DataBase;
use App\Domain\Sport;
use DB;

class DataBase{
    private static $instance;
    public static function getInstance(){
        if(null==static::$instance){
            static::$instance = new static();
        }
        return static::$instance;
    }

    protected function  __construct()
    {
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /*
     * Insert Data.........................
     * */
    public function addRequester($requester){
        DB::insert('INSERT INTO Requester VALUES(?,?,?,?,?,?,?,?,?,?) ',
            [NULL,$requester->getfirstName(),$requester->getlastName(),$requester->getnid(),$requester->getcontactNo(),$requester->getaddress(),$requester->getdesignation(),$requester->getusername(),
            $requester->getpassword(),NULL]);
        $this->addUser($requester);

    }

    public function addPhilanthropist($philanthropist){
        DB::insert('INSERT INTO Philanthropist VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)',
            [NULL,$philanthropist->getfirstName(),$philanthropist->getlastName(),$philanthropist->getnid(),$philanthropist->getcontactNo(),$philanthropist->getdesignation(), $philanthropist->getoccupation(),$philanthropist->getplaceOfWork(),$philanthropist->getcity(),$philanthropist->getusername(),
                $philanthropist->getpassword(),NULL,NULL]);
        $this->addUser($philanthropist);
    }

    public function addUser($user){
        DB::insert('INSERT INTO User VALUES(?,?)',
            [NULL,$user->getnid()]);

    }

    public function addItem($item){
        DB::insert('INSERT INTO Item VALUES(?,?)',
            [NULL,$item->getType()]);
    }

    public function addIssue($issue,$user){
        DB::insert('INSERT INTO Issues VALUES(?,?,?,?,?,?,?,?,?)',
            [NULL,NULL,$issue->gettitle(),$user->getnid(),$issue->getcity(),$issue->getdescription(),$issue->getmaplocation(),$issue->getsubmitDate(),
            1]);
    }

    public function addSolution($solution,$user){
        DB::insert('INSERT INTO Solutions VALUES(?,?,?,?,?,?,?,?)',
        [NULL,NULL,$solution->getissueNo(),$user->getnid(),$solution->getdescription(),$solution->getdeadline(),$solution->getcost(),1]);
    }

    public function addMedia($media){
        DB::insert('INSERT INTO Media VALUES(?,?,?)',
        [NUll,NULL,$media->getmediaItem()
        ]);

    }

    public function loadIssuesByDate(){
        $issues = DB::select('SELECT Title,Submitter,Location,Description,MapLocation,SubmittedDate,No_of_votes FROM Issues ORDER BY SubmittedDate DESC LIMIT 25' );
        return $issues;
    }

    public function loadIssuesByVotes(){
        $issues = DB::select('SELECT Title,Submitter,Location,Description,MapLocation,SubmittedDate,No_of_votes FROM Issues ORDER BY No_of_votes DESC LIMIT 25' );
        return $issues;
    }



    /*
     * Update data.............................................................................
     */

    /*
     * Load Data.................................................
     */

    public function loadSports(){

        /*$sportList = array();
        $sports = DB::select('SELECT * FROM Sport');
        if(count($sports)<=0) {
            $sport = new Sport();
            $sport
            array_push($sportList, $utilization);
        }
        return true;*/
    }

    public function loadUsers(){
      return DB::select('SELECT * FROM users');
    }

    //DB::statement("UPDATE favorite_contents,
    // contents SET favorite_contents.type = contents.type where favorite_contents.content_id = contents.id");
    /*
     * Check Data...........................
     * */

    public function checkUser($username,$password){
        $users = DB::select('SELECT * FROM users WHERE Name = ? AND Password = ?',[$username,$password]);
        if(count($users)<=0)
            return false;
        return true;
    }


}