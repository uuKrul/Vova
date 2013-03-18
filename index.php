<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 */

$argv1=array('./data/file.csv');
$m=new Main($argv1);
$m->parse();

class Main extends csv {

  function __construct($argv) {
    self::parent($argv);
    
  }

}

class csv {

  private $filename;
  private $filedescr;

  function __construct($filename) {
    $this->filename = $filename;
    $this->filedescr = fopen('Num.csv', 'r');
  }

  function destructor() {
    if ($this->filedescr)
      fclose($this->filedescr);
  }

  function parse() {
    while (($data = fgetcsv($file, 1000, ';')) !== FALSE) {

      $sum = $sum + $data[1];
      echo $sum;
    }
  }

}

?>
