<?php

require_once("dbconfig.php");

$source = $_POST["source"];
$destination = $_POST["destination"];
$amount = $_POST["amount"];

$query = "INSERT INTO Transfer_Table (TransferID, SourceID, DestinationID, Amount,Status,StartDate, FulfilledDate) VALUES (null, '$source', '$destination','$amount', false, now(), null)";
$res = mysqli_query($conn,$query);