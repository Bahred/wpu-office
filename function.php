<?php 

$conn = mysqli_connect("localhost","root","","github");

function register($data) {
    global $conn;
   
        $username = ($data["username"]);
        $email = ($data["email"]);
        $password = ($data["password"]);   

    //mengambil query
    $query = "INSERT INTO user
    VALUES
   
    ('','$username','$email','$password')
   
    ";
   
    // $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>