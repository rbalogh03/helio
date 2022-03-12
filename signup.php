<?php require_once "header.php"; ?>

    <div class="container">
        <div class="row justify-content-center mt-4">
        <?php 
            
            if (isset($_GET["error"])) {
                switch($_GET["error"]) {
                    case "emptyFields":
                        echo '<div class="alert alert-danger errorContainer text-center">Please fill all fields!</div>';
                        break;
                    case "invalidEmail":
                        echo '<div class="alert alert-danger errorContainer text-center">Invalid email format!</div>';
                        break;
                    case "passwordsNotMatching":
                        echo '<div class="alert alert-danger errorContainer text-center">Passwords are not matching!</div>';
                        break;
                    case "userAlreadyExists":
                        echo '<div class="alert alert-danger errorContainer text-center">Email already registered!</div>';
                        break;
                    case "none":
                        echo '<div class="alert alert-success errorContainer text-center">Registered successfully!</div>';
                        break;
                }
            }
        
        ?>
            <h1 class="text-center">Sign-up</h1>
            <form action="/helio/includes/signup.inc.php" method="post" id="signupForm">
                <label class="form-label" for="signupUsername">Username:</label>
                <input class="form-control" type="text" name="signupUsername" id="signupUsername">
                <label class="form-label" for="signupMail">E-mail:</label>
                <input class="form-control" type="text" name="signupMail" id="signupMail">
                <label class="form-label" for="signupPw">Password:</label>
                <input class="form-control" type="password" name="signupPw" id="signupPw">
                <label class="form-label" for="signupPwCheck">Confirm password:</label>
                <input class="form-control" type="password" name="signupPwCheck" id="signupPwCheck">
                <button id="submitSignup" name="submitSignup" class="btn btn-primary">Sign-up!</button>
            </form>
        </div>
    </div>

<?php require_once "footer.php"; ?>