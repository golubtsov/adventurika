<?php 

// класс для регистрации нового пользователя
class New_User{
    public $id;
    public $fname;
    public $lname;
    public $email;
    public $password;
    
    public function __construct(
        $id,
        $fname,
        $lname,
        $email,
        $password
    )
    {
        $this->id = $id;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->password = $password;
    }
}

// класс для вывода товаров из бд на front

class Product{
    public $id;
    public $name;
    public $img;
    public $price;
    public $category;
    public $podcategory;
    public $popular;
    public $new_prod;
    public $characteristics;
    public $description;
    public $gender;

    public function __construct(
        $id,
        $name,
        $img,
        $price,
        $category,
        $podcategory,
        $popular,
        $new_prod,
        $characteristics,
        $description,
        $gender
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->img = $img;
        $this->price = $price;
        $this->category = $category;
        $this->podcategory = $podcategory;
        $this->popular = $popular;
        $this->new_prod = $new_prod;
        $this->characteristics = $characteristics;
        $this->description = $description;
        $this->gender = $gender;
    }
}

// класс для заказов

class Oder {
    public $email_user;
    public $num_oder;
    public $id_prod;
    public $name_prod;
    public $count_prod;
    public $price;
    public $adres;

    public function __construct(
        $email_user,
        $num_oder,
        $id_prod,
        $name_prod,
        $count_prod,
        $price,
        $adres
    )
    {
        $this->email_user = $email_user;
        $this->num_oder = $num_oder;
        $this->id_prod = $id_prod;
        $this->name_prod = $name_prod;
        $this->count_prod = $count_prod;
        $this->price = $price;
        $this->adres = $adres;
    }
}