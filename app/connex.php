<?php

class connection{


public function con() :PDO{
$host="localhost";
$dbname="cinemaDB";
$user="user";
$password="user_password";
$port="3305";
return new PDO("mysql:host=$host;dbname=$dbname;port=$port",$user ,$password );
}
}
?>