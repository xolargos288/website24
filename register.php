<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store the form data in the session
    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['lastname'] = $_POST['lastname'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password']; // In real applications, passwords should be hashed!
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['simplepush_key'] = $_POST['simplepush_key'];

    // Redirect to the page where the user can view their information
    header("Location: view_info.php");
    exit();
}
?>
