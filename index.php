<?php 
class Animal 
{
	public $name;
	public $health;

	public function __construct($name)
	{
		$this->name = $name;
		$this->health = 100;
	}

	public function walk()
	{
		$this->health -=  1;
		return $this;
	}

	public function run()
	{
		$this->health -= 5;
		return $this;
	}

	public function displayHealth()
	{
		echo $this->name . "<br>";
		echo $this->health . "<br>";
		return $this;
	}
}
class Dog extends Animal
{
	public function __construct($name)
	{
		$this->name = $name;
		$this->health = 150;
	}

	public function pet()
	{
		$this->health += 5;
		return $this;
	}
}
class Dragon extends Animal
{
	public function __construct($name)
	{
		$this->name = $name;
		$this->health = 170;
	}

	public function fly()
	{
		$this->health -= 10;
		return $this;
	}

	public function talk()
	{
		echo 'This is dragon!<br>';
		return $this;
	}
}
$lion = new Animal('lion');
$lion->walk()->walk()->walk()->run()->run()->displayHealth();
$dog = new Dog('dog');
$dog->walk()->walk()->walk()->run()->run()->pet()->displayHealth();
$dragon = new Dragon('dragon');
$dragon->walk()->walk()->walk()->run()->run()->fly()->fly()->talk()->displayHealth();
$lion->fly();
?>