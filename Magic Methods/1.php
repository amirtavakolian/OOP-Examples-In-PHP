
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

class Math
{
    private $name1;

    public function __set($name, $value)
    {
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



$obj->amir = 'Testing1';
echo $obj->name;

//=============================================================================
?>


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


