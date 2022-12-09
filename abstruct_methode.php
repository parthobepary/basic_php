<?php

echo ('Welcome to abstruct_methode ');
echo '<br>';
echo ('--------------------------------------------------');
echo '<br>';

// abostruct class a abosso e akta abostruct function thakte hobe, and abostruct function name, parent function and child function same to same hote hobe, argument same name, same amd modifiers same or lower hot hobe.

abstract class makeName
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function setNmae();
}

class childClass extends makeName
{
    public function setNmae()
    {
        return 'welcome to ' . $this->name . ' channel';
    }
}

$boisakhi = new childClass('Boishakhi');
echo ($boisakhi->setNmae());
