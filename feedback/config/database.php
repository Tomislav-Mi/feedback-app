<?php
    define("DB_USER", "");
    define("DB_PASS", "");
    define("DB_NAME", "");
    define("DB_HOST", "");

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if($conn->connect_error) {
        die("Connection Failed" . $conn->connect_error);
    }

?>