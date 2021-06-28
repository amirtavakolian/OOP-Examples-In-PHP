<?php
include "iExporter.php";

class txt implements iExporter
{
  public function export(array $data)
  {
    echo "<h1>data in text</h1>";
    var_dump($data);
  }
}
