<?php

namespace App\Models;

/**
 * User Model
 */
class User
{
    private $first_name;
    private $last_name;
    private $email;

    public function setFirstName($first_name)
    {
        $this->first_name = trim($first_name);
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = trim($last_name);
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getFullName()
    {
        return $this->first_name . " " . $this->last_name;
    }

    public function setEmail(string $email)
    {
        $this->email = trim($email);
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getEmailVariables(): array
    {
         return [
          'full_name' => $this->getFullName(),
          'email' => $this->getEmail()
         ];
    }
}
