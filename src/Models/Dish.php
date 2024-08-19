<?php

namespace src\Models;

class Dish
{
    private $id;
    private $typeOfDish;
    private $isRobot;
    private $isAvailable;
    private $price;
    private $title;
    private $description;
    private $idAdmin;

    function __construct($id, $typeOfDish, $isRobot, $isAvailable, $price, $title, $description, $idAdmin)
    {
        $this->id = $id;
        $this->typeOfDish = $typeOfDish;
        $this->isRobot = $isRobot;
        $this->isAvailable = $isAvailable;
        $this->price = $price;
        $this->title = $title;
        $this->description = $description;
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
     * Get the value of typeOfDish
     */
    public function getTypeOfDish()
    {
        return $this->typeOfDish;
    }

    /**
     * Set the value of typeOfDish
     */
    public function setTypeOfDish($typeOfDish): self
    {
        $this->typeOfDish = $typeOfDish;

        return $this;
    }

    /**
     * Get the value of isRobot
     */
    public function getIsRobot()
    {
        return $this->isRobot;
    }

    /**
     * Set the value of isRobot
     */
    public function setIsRobot($isRobot): self
    {
        $this->isRobot = $isRobot;

        return $this;
    }

    /**
     * Get the value of isAvailable
     */
    public function getIsAvailable()
    {
        return $this->isAvailable;
    }

    /**
     * Set the value of isAvailable
     */
    public function setIsAvailable($isAvailable): self
    {
        $this->isAvailable = $isAvailable;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice($price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description): self
    {
        $this->description = $description;

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
}
