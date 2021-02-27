<?php
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("conn".mysqli_connect_error());
}
//echo "succ"
$name=$_POST['name'];
$sql="INSERT INTO stu ('name')  VALUES ('1');";
echo $sql;
?>