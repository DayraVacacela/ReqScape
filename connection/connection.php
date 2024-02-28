<?php
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "Reqscape");
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
        // 'die' imprime y sale del script
    }

