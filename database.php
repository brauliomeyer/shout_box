<?php
//Vars for connection with database
/*$db_localhost = "localhost";
$db_user = "user";
$db_pw = "user";
$db_name = "shoutit"; */

//Mysqli Connection with database 
$conn = mysqli_connect("localhost","user","user","shoutit");

//Test connection with database

if(mysqli_connect_errno($conn)) 
{
    echo 'Error: no connection possible with db => ' . mysqli_connect_errno($conn) . "<br>";
    echo die('Error: no connection possible with db => ' . mysqli_connect_error($conn));
}
else
{
    //echo 'Success: connection possible with db! ' . var_dump($conn);
}






