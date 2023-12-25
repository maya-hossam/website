<?php
 $email=$_REQUEST['email']
 $pass=$_REQUEST['passwored']


 if(isset($_POST['btn1']))
 {
    $host="localhost";
    $user="root";
    $password="";
    $dtb="form";



    $conn= mysqli_connect($host,$user,$passwors,$dtb);

    $insert="insert into client values('$email,$pass')";

    mysqli_query($conn,$insert);

    if($conn)
    {
        echo("<h1 style='color:green;'> your enter is done!</h1>");
    }
    else{
        echo("<h1 style='color:red;'> your enter is faild!</h1>"); 
    }
 }
?>