<?php

namespace src\Models;

class Reservation
{
    private $id;
    private $lastName;
    private $mail;
    private $resaDate;
    private $resaTime;
    private $numberOfGuests;
    private $isValide;
    private $idAdmin;

    function __construct($id, $lastName, $mail, $resaDate, $resaTime, $numberOfGuests, $isValide, $idAdmin)
    {
        $this->id = $id;
        $this->lastName = $lastName;
        $this->mail = $mail;
        $this->resaDate = $resaDate;
        $this->resaTime = $resaTime;
        $this->numberOfGuests = $numberOfGuests;
        $this->isValide = $isValide;
        $this->idAdmin = $idAdmin;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     */
    public function setLastName($lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of mail
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     */
    public function setMail($mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of resaDate
     */
    public function getResaDate()
    {
        return $this->resaDate;
    }

    /**
     * Set the value of resaDate
     */
    public function setResaDate($resaDate): self
    {
        $this->resaDate = $resaDate;

        return $this;
    }

    /**
     * Get the value of resaTime
     */
    public function getResaTime()
    {
        return $this->resaTime;
    }

    /**
     * Set the value of resaTime
     */
    public function setResaTime($resaTime): self
    {
        $this->resaTime = $resaTime;

        return $this;
    }

    /**
     * Get the value of numberOfGuests
     */
    public function getNumberOfGuests()
    {
        return $this->numberOfGuests;
    }

    /**
     * Set the value of numberOfGuests
     */
    public function setNumberOfGuests($numberOfGuests): self
    {
        $this->numberOfGuests = $numberOfGuests;

        return $this;
    }

    /**
     * Get the value of idAdmin
     */
    public function getIdAdmin()
    {
        return $this->idAdmin;
    }

    /**
     * Set the value of idAdmin
     */
    public function setIdAdmin($idAdmin): self
    {
        $this->idAdmin = $idAdmin;

        return $this;
    }

    /**
     * Get the value of isValide
     */
    public function getIsValide()
    {
        return $this->isValide;
    }

    /**
     * Set the value of isValide
     */
    public function setIsValide($isValide): self
    {
        $this->isValide = $isValide;

        return $this;
    }
}
