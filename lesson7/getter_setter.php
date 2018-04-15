<?php
class Mail{
    private $to; //Դրսից հասանելի չէ
    private $from;
    public $subject; //Դրսից հասանելի է
    public $messege;
    public $succsess=true;
    public function setTo($t) //Դրսից հասանելի է
    {
        //Ստուգում եմ որ լինի մեյլ
        if($this->validateEmail($t))
        {
            $this->to=$t;   
        }
        else{
            $this->succsess = false;
        }
    }
    public function getTo()
    {
        return $this->to;
    }
    public function setFrom($t)
    {
        //Ստուգում եմ որ լինի մեյլ
        if($this->validateEmail($t))
        {
            $this->from=$t;
        }
        else
        {
            $this->succsess = false;    
        }
    }
    public function getFrom()
    {
        return $this->from;
    }
    
    public function sendMail()
    {
        echo "Մեյլը ուղարկվեց";
    }
    
    private function validateEmail($a) //Դրսից հասանելի չէ
    {
        return true; // false;
    } 
    
    public function typeOf()
    {
        echo __CLASS__;
    }
 }
 
    $mail1 = new Mail();
    
    $mail1->setTo("gago@mail.com");
    
    $mail1->setFrom("zaaa@mail.com");
    $mail1->subject="Բարիլուս";
    $mail1->messege="Լալա տապալյա";
    $mail1->typeOf();
    //Սա չի կանչվի, fatal error
    //$mail1->validateEmail("asdfsda");
    if($mail1->succsess)
    {
        $mail1->sendMail(); 
    }else{
        echo "error";
    }
    echo "<pre>";
    var_dump($mail1);
    echo "</pre>";
    