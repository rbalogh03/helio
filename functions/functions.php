<?php

    function emptyFields($username,$mail,$pw,$pwCheck) {
        $result = false;
        if (empty($username) || empty($mail) || empty($pw) || empty($pwCheck)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    function emptyFieldsLogin($mail,$pw) {
        $result = false;
        if (empty($mail) || empty($pw)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    function isValidMail($mail) {
        $result = false;
        if (!filter_var($mail,FILTER_VALIDATE_EMAIL)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    function isMatchingPassword($pw,$pwCheck) {
        $result = false;
        if ($pw != $pwCheck) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    function checkUser($connection,$mail) {
        $sql = "SELECT * FROM registration WHERE email = ?";
        $stmt = mysqli_stmt_init($connection);
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_bind_param($stmt,"s",$mail);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            return $row;
        } else {
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    function checkLogin($connection,$mail,$pw) {
        $checkUser = checkUser($connection,$mail);

        if ($checkUser === false) {
            header("Location: ../login.php?error=wronglogin");
            exit();
        }

        $hashedPw = $checkUser["password"];

        $checkPw = password_verify($pw,$hashedPw);

        if ($checkPw === false) {
            header("Location: ../login?error=invalidPassword");
            exit();
        } else if ($checkPw === true) {
            session_start();

            $_SESSION["userName"] = $checkUser["username"];
            $_SESSION["userMail"] = $checkUser["email"];
            header("Location: ../index.php?welcome");
            exit();
        }

    }


?>