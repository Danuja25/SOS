<?php
/**
 * Created by PhpStorm.
 * User: Do
 * Date: 5/9/2016
 * Time: 7:09 PM
 */

namespace App\Domain;


class Philanthropist extends User
{

    private $occupation;
    private $placeOfWork;
    private $city;



    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }


    /**
     * @return mixed
     */
    public function getPlaceOfWork()
    {
        return $this->placeOfWork;
    }

    /**
     * @param mixed $placeOfWork
     */
    public function setPlaceOfWork($placeOfWork)
    {
        $this->placeOfWork = $placeOfWork;
    }

    /**
     * @return mixed
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * @param mixed $occupation
     */
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;
    }

}