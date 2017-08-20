<?php

class person{
	public $name;
	public $age;

	//gives the object a value when it is made
	public function __construct($person_name,$person_age) {
		$this->name = $person_name;
		$this->age = $person_age;
	}

	public function set_firstName($new_firstName){
		$this->name = $new_name;
	}
	function get_name(){
		return $this->name;
	}

	public function set_age($new_age){
		$this->lastName = $new_age;
	}
	function get_age(){
		return $this->age;
	}

}

class Student extends person {
}

class Teacher extends person {
}

?>