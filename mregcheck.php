<?php
include 'config.php'; 

if (!empty($_POST['username'])) {
    $username = $_POST['username'];
    $query = "SELECT username FROM members WHERE username = '$username' LIMIT 1;";
    $results = mysqli_query($link, $query);
    if($results->num_rows == 0) {
        echo "true";
    }
    else {
        echo "false";
    }
}
else {
    echo "false";
}
