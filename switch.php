<?php 
$mark=93;
switch($mark){
case($mark>=90 && $mark<=100):
echo "S grade";
break;
case($mark>=80 && $mark<90):
echo "A grade";
break;
case($mark>=70 && $mark<80):
echo "B grade";
break;
case($mark>=60 && $mark<70):
echo "C grade";
break;
case($mark>=50 && $mark<60):
echo "D grade";
break;
case($mark<50):
echo "F grade";
break;
}
?>