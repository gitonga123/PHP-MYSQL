<?php
/**
* Customer Class
*/
namespace Bookstore\Domain;

class Customer
{
	private static $lastId = 0;
	private $id;
	private $firstname;
	private $surname;
	private $email;

	public function __construct(int $id,string $firstname,string $surname,string $email){
		if ($id == null) {
			$this->id = ++self::$lastId;
		}else{
			$this->id = $id;
			if ($id > self::$lastId) {
				self::$lastId = $id;
			}
		}
		$this->firstname = $firstname;
		$this->surname = $surname;
		$this->email = $email;

	}

	public function getId(): int{
		return $this->id;
	}

	public static function getLastId(): int {
		return self::$lastId;
	}

	public function getFirstname(): string{
		return $this->firstname;
	}

	public function getSurname(): string{
		return $this->surname;
	}

	public function getEmail(): string{
		return $this->email;
	}

	public function setFirstname(string $firstname): string{
		return $this->firstname = $firstname;
	}

	public function setSurname(string $surname): string{
		return $this->surname = $surname;
	}

	public function setEmail(string $email): string{
		return $this->email = $email;
	}

}