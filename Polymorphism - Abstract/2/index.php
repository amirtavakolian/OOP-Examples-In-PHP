<?php
require "base_employees.php";
require "fulltime.php";
require "parttime.php";

$fulltime = new fulltime_employess();
$fulltime->name = "Alex";
$fulltime->family = "Mira";

$fulltime->print_name();

$money = 87000;
$fulltime->calculate_salary($money);

employees::amir();  