<?php 

    require_once "db.inc.php";
    require_once "../functions/functions.php";

    if (isset($_POST["submitSignup"])) {

        $signupUsername = $_POST["signupUsername"];
        $signupMail = $_POST["signupMail"];
        $signupPw = $_POST["signupPw"];
        $signupPwCheck = $_POST["signupPwCheck"];

        if (emptyFields($signupUsername,$signupMail,$signupPw,$signupPwCheck) !== false) {
            header("location: ../signup.php?error=emptyFields");
            exit();
        }

        if (isValidMail($signupMail) !== false) {
            header("location: ../signup.php?error=invalidEmail");
            exit();
        }

        if (isMatchingPassword($signupPw,$signupPwCheck) !== false) {
            header("location: ../signup.php?error=passwordsNotMatching");
            exit();
        }

        if (checkUser($connect,$signupMail) !==false) {
            header("location: ../signup.php?error=userAlreadyExists");
            exit();
        }

        $stmt = $connect->prepare("INSERT INTO registration(username,email,password) VALUES(?,?,?)");
        $hashedPw = password_hash($signupPw,PASSWORD_DEFAULT);
        $stmt->bind_param("sss",$signupUsername,$signupMail,$hashedPw);
        $stmt->execute();
        $stmt->close();
        header("location: ../signup.php?error=none");
        exit();
    }

?>