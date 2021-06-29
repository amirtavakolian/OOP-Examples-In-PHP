<?php

/*

__get ($property)

__set ($property, $value)

__set is used for creating properties which are not execisted.

__call ($method, $arg_array)

*/

?>


<?php

class Student {
    public $name;

    public function describe(){
        echo "I am a student <br>";
    }

    public function __get ($pm){
        echo "$pm is here";
    }
}

$st = new Student();
$st->describe();
$st->Amir;

//=============================================================================

?>

<?php

class Math {

    private $name1;

public function __set ($name, $value) {

   echo 'Setting ' . $name . ' to <b> ' . $value . '</b>';

    $this->name1 = 5;


}

    public function __get($name)
    {
        echo '<br>';
        echo $this->name1;

    }
}


$obj = new Math ();

 // After creating obj from a class, if that class had __set(), you can:
$obj->amir = 'Testing1';
// we have  __set ($name,$value) -->  amir goes on $name,   Testing1 goes on $value

echo $obj->name;


/*
 __set is used for creating properties which are not execisted.
we have  __set ($name,$value) --> 
			amir goes on $name,   
			Testing1 goes on $value
*/



?>

--------------------------------

<?php
class Math {
	
    private $name1;

	public function __set ($name, $value) {
	   $this->name1 = $name;
	}

    public function __get($name)
    {
        echo '<br>';
        echo $this->name1;
    }
}

$obj = new Math ();
$obj->amir = 'Testing1';
/*
__set ($name,$value) -->  amir goes on $name,   
						  Testing1 goes on $value
*/

echo $obj->name;

?>

-------------------------------

<?php
class Math {
    private $name1;

public function __set ($name, $value) {
   $this->name1 = $name;
}

    public function __get($name)
    {
        echo '<br>';
        echo $this->name1;
    }

}
$obj = new Math ();
$obj->amir = 'Testing1';
echo $obj->name;

?>

------------------------------

<?php

class Person {

 private $firstName;

 public function __get($propertyName){
 echo "reading: $propertyName";
 }

 public function __set($propertyNane, $propertyValue){
 echo "setting: $propertyNane <br>";
 }
}

$p = new Person();

$p->firstName = 'Doe';
$p->firstName;

?>
