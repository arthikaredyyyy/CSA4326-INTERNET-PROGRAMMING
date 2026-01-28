<?php
$con = mysqli_connect("localhost","root","","students");
$result = mysqli_query($con,"select * from users");

while ($re = mysqli_fetch_assoc($result)) {
    echo "name:".$re['name']."<br>";
    echo "id:".$re['id']."<br><br>";
}
?>
