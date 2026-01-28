<form method="post">
name:<input type="text" name="u">
<br>
id:<input type="number" name="p"><br>
<input type="submit" name="su" value="submit">
</form>
<?php
$r=mysqli_connect("localhost","root","");
mysqli_query($r,"create database if not exists students");
mysqli_query($r,"use students");
mysqli_query($r,"create table if not exists users(name varchar(20),id int)");
if(isset($_POST['su']))
    mysqli_query($r,"insert into users(name,id) values('$_POST[u]','$_POST[u]')");
?>
