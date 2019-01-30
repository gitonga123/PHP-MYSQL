<?php

namespace Test\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

/**
 * Sample test
 */
class UserTest extends TestCase
{
    public function testTrueAssertsToTrue()
    {
        $this->assertFalse(false);
    }

    public function testThatWeCanGetTheFirstName()
    {
        $user = new User;

        $user->setFirstName('Daniel');

        $this->assertEquals($user->getFirstName(), "Daniel");
    }

    public function testThatWeCanGetTheLastName()
    {
        $user = new User;
        $user->setLastName("Mutwiri");

        $this->assertEquals($user->getLastName(), "Mutwiri");
    }

    public function testThatWeCanGetTheFullName()
    {
        $user = new User;
        $user->setLastName("Mutwiri");
        $user->setFirstName("Daniel");

        $this->assertEquals($user->getLastName(), ($user->getFirstName() . " " .$user->getLastName()));
    }
}
