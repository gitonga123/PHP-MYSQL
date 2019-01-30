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
}
