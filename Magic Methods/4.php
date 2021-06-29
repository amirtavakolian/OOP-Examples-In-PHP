<?php

class A {

  private $a = 1;
  private $data;

  public function __get($variable)
  {
    if (isset($this->data[$variable])){
      return $this->data[$variable];
    }else {
      return "{$variable} not found";
    }
  }

  public function __set($key, $val)
  {
    $this->data[$key] = $val;
  }
}


$obj = new A();

$obj->name = "amir";
$obj->family = ":D";

var_dump($obj);



echo $obj->name;
echo $obj->age;
//----------------