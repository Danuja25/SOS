<?php
/**
 * Created by PhpStorm.
 * User: Do
 * Date: 5/9/2016
 * Time: 7:15 PM
 */

namespace App\Domain;


class Solution
{

    private $issueNo;
    private $deadline;
    private $cost;
    private $description;


    /**
     * @return mixed
     */
    public function getIssueNo()
    {
        return $this->issueNo;
    }

    /**
     * @param mixed $issueNo
     */
    public function setIssueNo($issueNo)
    {
        $this->issueNo = $issueNo;
    }

    /**
     * @return mixed
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * @param mixed $deadline
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;
    }



    /**
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param mixed $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


}