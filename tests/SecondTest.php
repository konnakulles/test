<?php

class SecondTest extends \PHPUnit\Framework\TestCase
{
    
    public function testAtrray()
    {
        $return = \App\Stuff::generateRandomStringArray();
        $this->assertIsArray($return);
    }
    
}