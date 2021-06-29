<?php

class A {



  public function __toString()
  {
    return "String version of me :D ";
  }

  
  public function __clone()
  {
    echo "Clone :D ";
  }

  
  public function __invoke()
  {
    echo "__invoke";
  }

  
  public function __debugInfo()
  {
    return [
      "classname" => self::class,
      "line" => __LINE__
    ];
  }

}

$var = new A();
echo $var;

// age __toString() ro nazari nemishe $var ro echo kard.
// echo faghat string chap mikone.
// mese in mimone ke ba echo bekhay array chap koni :D 