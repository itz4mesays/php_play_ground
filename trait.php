<?php

trait MyTrait {

	public function sayHello()
	{
		print 'Hello '. PHP_EOL;
	}
}

trait MyTrait2 {

	public function sayWorld()
	{
		print ' World'. PHP_EOL;
	}
}

trait MyTrait3 {

	public function sayWorld()
	{
		print 'John';
		parent::sayWorld();
	}
}

/**
 * 
 *  Inheritance With Traith
 * */
class ParentClass {
	public function sayWorld()
	{
		print ' Doe';
	}
}

class NewClass extends ParentClass
{
	use MyTrait3;

}

class HelloWorld {

	//Multiple Traits
	use MyTrait, MyTrait2;

}


// $x = new HelloWorld();
// $x->sayHello();
// $x->sayWorld();

$myObj = new NewClass();
$myObj->sayWorld();