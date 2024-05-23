<?php namespace App;

class Stuff
{
    
    public static function generateRandomStringArray()
    {
        $arr = [];
        foreach( range(1, rand(20, 35)) as $length )
        {
            $arr[] = self::generateRandomString();
        }
        return $arr;
    }

    public static function generateRandomString()
    {

        $seed = "ABCDEFGHIJKLMNOPQRSabcdefghijklmnopqr-_s1234567890*tuvwxyz";

        $string = '';

        foreach( range(rand(10, 12), rand(20, 35)) as $length )
        {
            $key = random_int(0, (strlen(trim($seed))-1));
            $string .= $seed[$key];
        }

        return str_rot13($string);

    }
}