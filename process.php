<?php

include 'database.php';

//Check if form is submitted
if(isset($_POST['submit']) == "submit") 
{
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
            
    //Set timezone
    date_default_timezone_set('Europe/Amsterdam');
    $time = date('h:i:s a',time());
   
    //Validate input
    if(!isset($user) || $user == '' || !isset($message) || $message == '') 
    {
        $error = "Please fill in your name and a message"; 
        header("Location: index.php?error=" . urlencode($error));
        exit();
    }
    else
    {
        $sql = "INSERT INTO shout(user,message,time) VALUES('$user','$message','$time')";
        
        if( ! mysqli_query($conn,$sql)) 
        {
            die("Error: no connection possible with db => " . mysqli_error($conn));
        }
        else
        {
            header("Location:index.php");
            exit();
        }
    }
}
