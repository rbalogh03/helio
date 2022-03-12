<?php
    require_once "db.inc.php";
    require_once "../functions/functions.php";

    if (isset($_POST["submitLogin"])) {
        
        $loginMail = $_POST["loginMail"];
        $loginPw = $_POST["loginPw"];

        if (emptyFieldsLogin($loginMail,$loginPw) !== false) {
            header("location: ../login.php?error=emptyFields");
            exit();
        }

        checkLogin($connect,$loginMail,$loginPw);
    }

?>