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
    protected $user;
    public function setUp()
    {
        $this->user = new User;
    }
    public function testTrueAssertsToTrue()
    {
        $this->assertFalse(false);
    }

    public function testThatWeCanGetTheFirstName()
    {

        $this->user->setFirstName('Daniel');

        $this->assertEquals($this->user->getFirstName(), "Daniel");
    }

    public function testThatWeCanGetTheLastName()
    {

        $this->user->setLastName("Mutwiri");

        $this->assertEquals($this->user->getLastName(), "Mutwiri");
    }

    public function testFullNameIsReturned()
    {
        $this->user->setFirstName("Daniel");
        $this->user->setLastName("Mutwiri");
        
        $this->assertEquals($this->user->getFullName(), "Daniel Mutwiri");
    }

    public function testFirstAndLastNameAreTrimmed()
    {
        $this->user->setFirstName('Daniel  ');
        $this->user->setLastName("        Mutwiri");

        $this->assertEquals($this->user->getFullName(), "Daniel Mutwiri");
    }

    public function testEmailAddressCanBeSet()
    {
        $this->user->setEmail($this->email);

        $this->assertEquals($this->user->getEmail(), $this->email);
    }

    public function testEmailVariablesContainCorrectValues()
    {
        $this->user->setFirstName("Daniel");
        $this->user->setLastName("Mutwiri");
        $this->user->setEmail($this->email);

        $emailVariables = $this->user->getEmailVariables();

        $this->assertArrayHasKey('full_name', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);
        $this->assertEquals($emailVariables['email'], $this->user->getEmail());
        $this->assertEquals($emailVariables['full_name'], $this->user->getFullName());
    }
}
