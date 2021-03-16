<?php

class Product {
    protected $name;
    protected $price;
    protected $category;
    protected $description;
    protected $image;

    public function __construct(string $name, float $price, string $category, string $description, string $image) {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->description = $description;
        $this->image = $image;
    }

    /* getter */
    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getDescription() {
        return $this->Description;
    }
    /* setter */
    public function setPrice() {
        $this->$price = $price;
    }
}

class User {
    protected $name;
    protected $surname;
    protected $username;
    protected $email;
    private $password;

    public function __construct(string $name, string $surname, string $username, string $email, string $password) {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }
}