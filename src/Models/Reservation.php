<?php

namespace src\Models;

use src\Repositories\ReservationRepository;

class Reservation
{
    private $id;
    private $name;
    private $mail;
    private $date;
    private $time;
    private $numberOfGuests;
    private $isValid;

    function __construct($id, $name, $mail, $date, $time, $numberOfGuests, $isValid)
    {
        $this->id = $id;
        $this->name = $name;
        $this->mail = $mail;
        $this->date = $date;
        $this->time = $time;
        $this->numberOfGuests = $numberOfGuests;
        $this->isValid = $isValid;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of lastName
     */
    public function setName($name): self
    {
        $this->name = $name;

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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of resaDate
     */
    public function setDate($date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of resaTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set the value of resaTime
     */
    public function setTime($time): self
    {
        $this->time = $time;

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
     * Get the value of isValide
     */
    public function getIsValid()
    {
        return $this->isValid;
    }

    /**
     * Set the value of isValide
     */
    public function setIsValid($isValid): self
    {
        $this->isValid = $isValid;

        return $this;
    }

    public function __toString()
    {
        return $this->id;
    }
}
