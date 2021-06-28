<?php
include "iExporter.php";

class pdf implements iExporter
{
  public function export(array $data)
  {
    echo "<h1>data in pdf</h1>";
    var_dump($data);
  }
}
