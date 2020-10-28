<?php

require_once("dbconfig.php");

$transferID = $_POST["transferID"];

$query = "UPDATE Transfer_Table SET Status=true, FulfilledDate=now() WHERE TransferID=$transferID";
$res = mysqli_query($conn,$query); 

?>