<?php  namespace App\Domain;



class User
{

    private $firstName;
    private $lastName;
    private $nid;
    private $contactNo;

    private $username;
    private $password;
    private $conpass;
    private $designation;

    /**
     * @return mixed
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * @param mixed $designation
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getNid()
    {
        return $this->nid;
    }

    /**
     * @param mixed $nid
     */
    public function setNid($nid)
    {
        $this->nid = $nid;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getConpass()
    {
        return $this->conpass;
    }

    /**
     * @param mixed $conpass
     */
    public function setConpass($conpass)
    {
        $this->conpass = $conpass;
    }


    /**
     * @return the name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param name the name to set
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return the contactNo
     */
    public function getContactNo() {
        return $this->contactNo;
    }

    /**
     * @param contactNo the contactNo to set
     */
    public function setContactNo($contactNo) {
        $this->contactNo = $contactNo;
    }

    /**
     * @return the password
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * @param password the password to set
     */
    public function setPassword($password) {
        $this->password = $password;
    }

}