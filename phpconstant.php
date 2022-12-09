<?php

echo ('Welcome to constent variable ');
echo '<br>';
echo ('--------------------------------------------------');
echo '<br>';

//const start hot const keyword dia and capital letter r hoy

class tvShow
{
    const TV_CHANNEL = 'Aksh bangls';

    public function message()
    {
        //const variable ke function ar modde use korte hole self keyword ta use korte hoy
        return self::TV_CHANNEL . ' i am  from methode';
    }
}

echo tvShow::TV_CHANNEL;
echo ('<br>');

$tv = new tvShow;
echo $tv->message();
