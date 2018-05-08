<?php 
namespace Bookstore\Domain;
	//Classes are defination of what an object looks like and what it can do,
/**
* Book Class
*/
class Book 
{
	///class properties
	private $isbn;
	private $title;
	private $author;
	private $available;

	//class methods
	public function __construct(string $title, string $author, string $isbn, int $available = 0){
		$this->$isbn = $isbn;
		$this->$title = $title;
		$this->$author = $author;
		$this->$available = $available;
	}

	public function getIsbn(): int{
		return $this->isbn;
	}

	public function getTitle(): string{
		return $this->title;
	}

	public function getAuthor(): string{
		return $this->author;
	}

	public function isAvailable(): string{
		return $this->available;
	}


	public function getPrintableTitle(): string{
		$result = "<i>". $this->title . "</i>" ." => " .$this->author;
		if(!$this->available){
			$result .= "<b> Not Available</b>";
		} 

		return $result;
	}

	public function getCopy(): bool {
		var_dump($this->available);
		if($this->available < 1) {
			return false;
		}else{
			$this->available --;
			return true;
		}
	}

	public function addCopy(){
		$this->available++;
	}
}
