<?php

class HumanTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    function it_should_construct()
    {
        $human = new \EaPHP\Domain\Races\Human(
            'Aragorn',
            10
        );

        $this->assertInstanceOf(\EaPHP\Domain\Races\Human::class, $human);
    }

    /** @test */
    function it_should_fail_when_no_key_is_given()
    {
        $this->setExpectedException(\InvalidArgumentException::class);

        $human = new \EaPHP\Domain\Races\Human(
            'Aragorn',
            'Arwen'
        );
    }
}
