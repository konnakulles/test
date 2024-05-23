<?php

class FirstTest extends \PHPUnit\Framework\TestCase
{
    
    public function testString()
    {
        $return = \App\Stuff::generateRandomString();
        $this->assertIsString($return);
    }
    
    public function testAtrray()
    {
        $return = \App\Stuff::generateRandomStringArray();
        $this->assertIsArray($return);
    }
    
}