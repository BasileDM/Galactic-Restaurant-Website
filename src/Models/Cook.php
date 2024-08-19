<?php

namespace src\Models;

class Cook
{
    private $id;
    private $firstName;
    private $lastName;
    private $role;
    private $facebook;
    private $twitter;
    private $insta;


    function __construct($id, $firstName, $lastName, $role, $facebook, $twitter, $insta)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->role = $role;
        $this->facebook = $facebook;
        $this->twitter = $twitter;
        $this->insta = $insta;
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
     * Get the value of firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     */
    public function setFirstName($firstName): self
    {
        $this->firstName = $firstName;

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
     * Get the value of role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     */
    public function setRole($role): self
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of facebook
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set the value of facebook
     */
    public function setFacebook($facebook): self
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get the value of twitter
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set the value of twitter
     */
    public function setTwitter($twitter): self
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get the value of insta
     */
    public function getInsta()
    {
        return $this->insta;
    }

    /**
     * Set the value of insta
     */
    public function setInsta($insta): self
    {
        $this->insta = $insta;

        return $this;
    }
}
