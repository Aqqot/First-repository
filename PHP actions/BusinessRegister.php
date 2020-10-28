<?php

require_once("dbconfig.php");

$owner = $_POST["owner"];
$name = $_POST["name"];
$description = $_POST["description"];
$profile_image = $_POST["profile_image"];

$query = "SELECT * FROM Business WHERE Name LIKE '$name'";
$res = mysqli_query($conn,$query);
$data = mysqli_fetch_array($res);

if($data[0]>1){
    echo json_encode("Business name already exists");
} else {
    $query = "INSERT INTO Business (ID, OwnerID, Name, Description, ProfileImage) VALUES (null, '$owner', '$name','$description', '$profile_image')";
    

    if(($res = mysqli_query($conn,$query);)){
        echo json_encode("true");
    } else {
        echo json_encode("false");
    }
}

?>