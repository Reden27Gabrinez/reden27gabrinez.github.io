<?php
include("configuration/config.php");
include("configuration/firebaseRDB.php");

$db = new firebaseRDB($databaseURL);


if(isset($_GET['id']))
{
    $id = $_GET['id'];
    if($id != ""){
    $delete = $db->delete("users", $id);
    header('location:index.php?page=user-list');
    }
}

if(isset($_GET['id2']))
{
    $id = $_GET['id2'];
    if($id != ""){
    $delete = $db->delete("hotlines", $id);
    header('location:index.php?page=hotlines');
    }
}

if(isset($_POST['add']))
{
    $insert = $db->insert("hotlines", [
        "team"     => $_POST['responder'],
        "hotLine"  => $_POST['number'],
        "lat"      => $_POST['lat'],
        "lng"      => $_POST['long']
     ]);
     header('location:index.php?page=hotlines');
}
