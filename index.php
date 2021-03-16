<?php

class Product {
    protected $name;
    protected $price;
    protected $category;
    protected $description;
    protected $image;

    public function __construct(string $name, string $price, string $category, string $description, string $image) {
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

class CreditCard {
    protected $type;
    protected $number;
    protected $owner;
    protected $expireDate;
    private $cvc;

    public function __construct(string $type, string $number, string $owner, string $expireDate, int $cvc) {
        $this->type = $type;
        $this->number = $number;
        $this->owner = $owner;
        $this->expireDate = $expireDate;
        $this->cvc = $cvc;
    }
}

class Seller extends User {

}

class Buyer extends User {

    protected $creditCards = [];
    public function addCreditCard(CreditCard $creditCard) {
        $this->creditCards = $creditCard;
    }

    public function getCreditCard() {
        return $this->creditCards;
    }
}

/* Nel negozio c'è questo prodotto: */
$newProduct = new Product('The Witcher 3', '29,99€', 'videogiochi', 'lorem ipsum', 'src');
var_dump($newProduct);
echo '<br> <br>';

/* Questo acquirente: */
$newBuyer = new Buyer('Tommaso', 'Zorzi', 'Tommy95', 'tommaso@live.it', 'pippo');
var_dump($newBuyer);

/* Vuole comprarlo con questa carta di credito: */
$newCreditCard = new CreditCard('Mastercard', '4858XXX', 'Tommaso Zorzi', '05/2022', 035);
echo '<br> <br>';

$newBuyer->addCreditCard($newCreditCard);
print_r($newBuyer->getCreditCard());
