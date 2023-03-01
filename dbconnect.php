<?php
$server="localhost";
$username="root";
$password="";
$db="product";
$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
    echo "your connection is establish on the localhost";
}


