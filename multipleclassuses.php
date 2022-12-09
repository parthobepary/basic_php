<?php
echo 'Welcome to multiple class uses';
echo ('<br>');
echo ('-----------------------------------------');
echo ('<br>');

trait TridName1
{
    public function showName1()
    {
        echo 'partho bepary';
    }
}
trait TridName2
{
    public function showName2()
    {
        echo 'pallob biswas';
    }
}

class accessTowClass
{
    use TridName1;
    use TridName2;
}

$partho = new accessTowClass;
$first = $partho->showName1();

$second = $partho->showName2();

$results = array($first, $second);
echo ($results);
