<?php

echo ('Welcome to access modifiers ');
echo '<br>';
echo ('--------------------------------------------------');
echo '<br>';

// protected and private amra oi class r modde theke access korte parbo. oi class r bahire theke access korte parbo na.

class AccessModifiers
{
    protected $name = 'Pallob';
    private $roll;
    public $age;

    public function getData($roll)
    {
        $this->roll = $roll;
        echo $this->roll;
    }
}
$pallob = new AccessModifiers;
// echo ($pallob->roll);
echo ('<br>');
$pallob->getData(370);
