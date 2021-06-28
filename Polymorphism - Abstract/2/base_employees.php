<?php

abstract class employees
{
  public $id;
  public $name;
  public $family;
  private $salary; 

  public function print_name()
  {
    echo "Name: $this->name <br>";
    echo "Family: $this->family <br>";
  }

  public abstract function calculate_salary($money);

  public function get_salary() {
    # If login :D 
    return $this->salary;
  }
  public function set_salary($employe_salary) {
    $this->salary = $employe_salary;
  }


}

