<?php

require "vendor/autoload.php";

var_dump(\Carbon\Carbon::now()->format('d.m.Y'));

foreach( range(1, 5) as $i )
{
    var_dump(\App\Stuff::generateRandomStringArray());
    echo "<br><br>";
}

echo "<br><br>";

foreach( range(1, 5) as $i )
{
    var_dump(\App\Stuff::generateRandomString());
    echo "<br><br>";
}

