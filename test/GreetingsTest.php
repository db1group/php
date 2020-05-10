<?php

namespace Test\DojoPHP;

use DojoPHP\Greetings;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class GreetingsTest extends TestCase {

    public function test_shouldGreet() {
        $greetings = new Greetings();

        $sayHelloResult = $greetings->sayHello('World');

        Assert::assertEquals('Hello, World!', $sayHelloResult);
    }
}
