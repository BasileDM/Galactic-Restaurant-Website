<?php

namespace src\Models;

class Admin
{
    private $id;
    private $username;
    private $password;
    private $role;

    function __construct($id, $username, $password, $role)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
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
     * Get the value of username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     */
    public function setUsername($username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword($password): self
    {
        $this->password = $password;

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
}
