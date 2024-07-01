<?php

use PHPUnit\Framework\TestCase;
use App\Service\Greetings;

class GreetingsTest extends TestCase
{
    public function testGreet()
    {
        $greetings = new Greetings();
        $result = $greetings->greet('Alice');
        $this->assertEquals('Hello, Alice!', $result);
    }

    public function testBye()
    {
        $greetings = new Greetings();
        $result = $greetings->bye('Alice');
        $this->assertEquals('Goodbye, Alice!', $result);
    }
}