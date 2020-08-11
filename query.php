<?php

require_once 'config.php';
error_reporting(0);

// get values from client
$devid = $_POST["dev_id"];
$devpass = $_POST["dev_pass"];
$roll_no = $_POST["roll_no"];
$temp = $_POST["temp"];

if($devpass == "licet") {
    $sql = "INSERT INTO users (roll_no, temperature, devid) VALUES('$roll_no', '$temp', '$devid')";
    
    if($conn->query($sql)) {
        echo json_encode("success");
    }
    else {
        echo json_encode("failed");
    }
}
else {
    echo json_encode("invalid-auth-token");
}

$conn->close();