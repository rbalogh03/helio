<?php 
require_once "header.php";
?>

    <div class="container">
        <div class="row justify-content-center mt-4">
            <?php 
            
                if (isset($_GET["error"])) {
                    switch($_GET["error"]) {
                        case "emptyFields":
                            echo '<div class="alert alert-danger errorContainer text-center">Please fill all fields!</div>';
                            break;
                        case "invalidPassword":
                            echo '<div class="alert alert-danger errorContainer text-center">Invalid email/password!</div>';
                            break;
                        case "wronglogin":
                            echo '<div class="alert alert-danger errorContainer text-center">Invalid email/password!</div>';
                            break;
                    }
                }
            
            ?>
            <h1 class="text-center">Login</h1>
            <form action="/helio/includes/login.inc.php" method="post" id="loginForm">
                <label class="form-label" for="loginMail">E-mail:</label>
                <input class="form-control" type="text" name="loginMail" id="loginMail">
                <label class="form-label" for="loginPw">Password:</label>
                <input class="form-control" type="password" name="loginPw" id="loginPw">
                <button id="submitLogin" name="submitLogin" class="btn btn-primary">Log In!</button>
            </form>
        </div>
    </div>


<?php require_once "footer.php"; ?>