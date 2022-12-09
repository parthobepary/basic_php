<?php
echo ('Welcome to OOP');
echo ('<br>');

//Class and object

class ManInfo
{
    public $first_name;
    public $second_name;
    public $age;

    public function fullName($fName, $sName)
    {
        $this->first_name = $fName;
        $this->second_name = $sName;
        echo "$this->first_name $this->second_name";
    }
};

$pallob = new ManInfo;
// echo ($pallob->fullName('pallob', 'biswas'));
// echo ('<br>');
$nasir = new ManInfo;
// echo ($nasir->fullName('nasir', 'uddin'));

// using constractor

class Studes
{
    public $name;
    public $roll;

    public function __construct($name, $roll)
    {
        $this->name = $name;
        $this->roll = $roll;
        //construct function first set variable
    }
    /* public function setName()
    {
    return "Name : " . $this->name . ", Roll" . $this->roll;
    } */

    //destruct function show value

    public function __destruct()
    {
        echo $this->name . ' ' . $this->roll;
    }
}

$somen = new Studes("pallob", '20');
// echo ($somen->setName());
