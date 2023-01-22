<?php

    include("configuration/config.php");
    include("configuration/firebaseRDB.php");

    $email      = $_POST['email'];
    $password   = $_POST['password'];

    if($email == "")
    {
        echo "Email is required";
    }
    else if($password == "")
    {
        echo "Password is required";
    }
    else
    {
        $rdb = new firebaseRDB($databaseURL);
        $retrieve = $rdb->retrieve("/user", "email", "EQUAL", $email);
        $data = json_decode($retrieve, 1);

        if(!isset($data['email']))
        {
            echo "Email not registered";
        }
        else if($data['password'] != $password)
        {
            echo "Invalid password";
        }
        else
        {
            echo "Login success";
        }
    }
