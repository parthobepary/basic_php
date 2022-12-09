<?php
echo ('Welcome to PHP Array');
echo ('<br>');
echo ('-----------------------------------');
echo ('<br>');

$students = array('name' => 'pallob biswas', 'roll' => '35', 'reg' => '108826');
foreach ($students as $key => $value) {
    echo ($key . ' : ' . $value . '<br>');
}

function myfunction($v)
{
  return($v*$v);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));
print_r(array_map("myfunction",$a));
