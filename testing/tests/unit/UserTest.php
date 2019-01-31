<?php

namespace Test\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

/**
 * Sample test
 */
class UserTest extends TestCase
{
    private $email = "daniel@mutwiri.com";

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

    public function testFullNameIsReturned()
    {
        $user = new User;

        $user->setFirstName("Daniel");
        $user->setLastName("Mutwiri");
        
        $this->assertEquals($user->getFullName(), "Daniel Mutwiri");
    }

    public function testFirstAndLastNameAreTrimmed()
    {
        $user = new User;

        $user->setFirstName('Daniel  ');
        $user->setLastName("        Mutwiri");

        $this->assertEquals($user->getFullName(), "Daniel Mutwiri");
    }

    public function testEmailAddressCanBeSet()
    {
        
        $user = new User;

        $user->setEmail($this->email);

        $this->assertEquals($user->getEmail(), $this->email);
    }

    public function testEmailVariablesContainCorrectValues()
    {
        $user = new User;
        $user->setFirstName("Daniel");
        $user->setLastName("Mutwiri");
        $user->setEmail($this->email);

        $emailVariables = $user->getEmailVariables();

        $this->assertArrayHasKey('full_name', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);
        $this->assertEquals($emailVariables['email'], $user->getEmail());
        $this->assertEquals($emailVariables['full_name'], $user->getFullName());
    }
}
