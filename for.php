<?php
$a=simplexml_load_file("students.xml");
foreach($a->student as $b){
  echo "RegNo:".$b->regno."<br>";
  echo "Name:". $b->name."<br>";
  echo "Dept:". $b->dept."<br>";
  echo "<br>";
}
?>