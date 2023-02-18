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