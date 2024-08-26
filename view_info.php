<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        /* Card container */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        /* Title of the card */
        .title {
            color: grey;
            font-size: 18px;
        }

        /* Styling the buttons */
        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        /* Button hover effect */
        button:hover {
            opacity: 0.7;
        }

        /* Social media icons */
        .fa {
            padding: 20px;
            font-size: 22px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .fa-dribbble {
            background: #ea4c89;
            color: white;
        }

        .fa-twitter {
            background: #55acee;
            color: white;
        }

        .fa-linkedin {
            background: #007bb5;
            color: white;
        }

        .fa-facebook {
            background: #3b5998;
            color: white;
        }
    </style>
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<h2 style="text-align:center">User Profile</h2>

<div class="card">
    <!-- Displaying the user's name -->
    <h1><?php echo htmlspecialchars($_SESSION['firstname'] . ' ' . $_SESSION['lastname']); ?></h1>
    <p class="title">Username: <?php echo htmlspecialchars($_SESSION['username']); ?></p>
    <p>Email: <?php echo htmlspecialchars($_SESSION['email']); ?></p>
    <p>SimplePush Key: <?php echo htmlspecialchars($_SESSION['simplepush_key']); ?></p>

    <!-- Social media icons -->
    <div style="margin: 24px 0;">
        <a href="#"><i class="fa fa-dribbble"></i></a> 
        <a href="#"><i class="fa fa-twitter"></i></a>  
        <a href="#"><i class="fa fa-linkedin"></i></a>  
        <a href="#"><i class="fa fa-facebook"></i></a> 
    </div>

    <!-- Contact button -->
    <p><button>Contact</button></p>
</div>

</body>
</html>

