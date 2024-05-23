<?php

class SecondTest extends \PHPUnit\Framework\TestCase
{
    
    public function testString()
    {
        $return = \App\Stuff::generateRandomStringArray();
        $this->assertIsArray($return);
    }
    
}