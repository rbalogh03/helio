<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Helio test</title>
</head>
<body>

    <div class="container-fluid p-0">
        <header class="d-flex justify-content-center py-3 bg-dark">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/helio/index.php" class="nav-link text-white" aria-current="page">Home</a></li>
            <?php 
                if (!isset($_SESSION["userName"])) {
                    echo '<li class="nav-item"><a href="/helio/login.php" class="nav-link text-white">Login</a></li>';
                    echo '<li class="nav-item"><a href="/helio/signup.php" class="nav-link text-white">Sign-up</a></li>';
                } else {
                    echo '<li class="nav-item"><a href="/helio/logout.php" class="nav-link text-white">Logout</a></li>';
                }
            ?>
            
        </ul>
        </header>
    </div>