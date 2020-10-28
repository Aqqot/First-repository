<?php
    /*Database credentials. Running 'root' user, no password. Databasse name is 'sampletoqqa' 
    Pls change if u have a diffrerentone */
        $servername = "http://35.192.161.221";
        $username = "root";
        $password = "yourpass";
        $dbname= "Toqqa_Database";
        $msg="";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("ERROR: Could not connect." .$mysqli->connect_error);
            //$msg = "Connection failed";
        } else{
            //$msg= "Connection successful";
        }
    ?>