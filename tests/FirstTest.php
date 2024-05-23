<?php

class FirstTest extends \PHPUnit\Framework\TestCase
{
    
    public function testString()
    {
        $return = \App\Stuff::generateRandomString();
        $this->assertIsString($return);
    }
    
}