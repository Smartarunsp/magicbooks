<?php

    $con = mysqli_connect("localhost","root","","registration");
    if(!$con)
    {
        die('Connection failed');
    }

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $course = $_POST['course'];
        $branch = $_POST['branch'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql_query ="insert into user_details(name,course,branch,email,password) values ('
        $name','$course','$branch','$email','password');";
        if(mysqli_query($con,$sql_query))
        {
            echo "success"
        }
        else{
            echo "error"
        }
        mysqli_close($con);
    }
    ?>