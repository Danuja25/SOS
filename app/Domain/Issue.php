<?php
/**
 * Created by PhpStorm.
 * User: Do
 * Date: 5/9/2016
 * Time: 7:12 PM
 */

namespace App\Domain;


class Issue
{
    private $title;
    private $location;
    private $description;
    private $maplocation;
    private $submitDate;

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }


        /**
     * @return mixed
     */
    public function getMaplocation()
    {
        return $this->maplocation;
    }

    /**
     * @return mixed
     */
    public function getSubmitDate()
    {
        return $this->submitDate;
    }

    /**
     * @param mixed $submitDate
     */
    public function setSubmitDate($submitDate)
    {
        $this->submitDate = $submitDate;
    }

    /**
     * @param mixed $maplocation
     */
    public function setMaplocation($maplocation)
    {
        $this->maplocation = $maplocation;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
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