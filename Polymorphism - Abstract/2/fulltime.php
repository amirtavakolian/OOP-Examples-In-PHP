<?php
class fulltime_employess extends employees
{
  public function calculate_salary($money)
  {
    $this->set_salary($money);
    echo $this->get_salary();
  }
}
