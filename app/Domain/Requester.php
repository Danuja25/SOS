<?php
/**
 * Created by PhpStorm.
 * User: Do
 * Date: 5/9/2016
 * Time: 7:07 PM
 */

namespace App\Domain;


class Requester extends User
{
    private $address;

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

}