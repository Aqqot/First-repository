<?php

require_once("dbconfig.php");

$owner = $_POST["owner"];
$description = $_POST["description"];
$M_image = $_POST["M_image"];

$query = "INSERT INTO Marketing (MarketingID, OwnerID, Description, Marketing_Image) VALUES (null, '$owner', '$description', '$M_image')";
$res = mysqli_query($conn,$query);
?>