<?php
echo 'Welcome to Advanced modifiers';
echo ('<br>');
echo ('-----------------------------------------');
echo ('<br>');

//inheritance / uttorAdikar sutre paoa somppoti

class parentClass
{
    protected $name;
    public $address;

    public function __construct($name, $add)
    {
        $this->name = $name;
        $this->address = $add;
    }

    public function setName()
    {
        return $this->name . ' ' . $this->address;
    }
}

class childClass extends parentClass
{
    public $fullName;
    public $phone;

    public function __construct($name, $add, $phone)
    {
        $this->name = $name;
        $this->address = $add;
        $this->phone = $phone;
    }

    public function __destruct()
    {
        echo $this->phone;
    }

    public function namePrient()
    {
        $this->fullName = $this->setName();
        return $this->fullName . 'i am come from parentClass';

    }
}
$pallob = new childClass('pallob', 'dhaka, panthopath', '01798339054');

echo ($pallob->setName());
echo ('<br>');

echo ($pallob->namePrient());
echo ('<br>');

// final keyword use kore amra kono class or function or variable ke child class a use korar permision bondo kore dite pari
