<?php

namespace src\Models;

class CustomerReview
{
    private $id;
    private $pictureUrl;
    private $firstName;
    private $lastName;
    private $role;
    private $comments;

    function __construct($id, $pictureUrl, $firstName, $lastName, $role, $comments)
    {
        $this->id = $id;
        $this->pictureUrl = $pictureUrl;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->role = $role;
        $this->comments = $comments;
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
     * Get the value of pictureUrl
     */
    public function getPictureUrl()
    {
        return $this->pictureUrl;
    }

    /**
     * Set the value of pictureUrl
     */
    public function setPictureUrl($pictureUrl): self
    {
        $this->pictureUrl = $pictureUrl;

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
     * Get the value of comments
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set the value of comments
     */
    public function setComments($comments): self
    {
        $this->comments = $comments;

        return $this;
    }
}
