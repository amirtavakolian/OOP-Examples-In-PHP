<?php
include "iExporter.php";

class excel implements iExporter
{
  public function export(array $data)
  {
    echo "<h1>data in excel</h1>";
    var_dump($data);
  }
}
