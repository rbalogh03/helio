<?php require_once "header.php"; ?>
    <div class="container">
        <div class="row justify-content-center text-center mt-4">
            <h1>
                <?php
                
                    if (isset($_SESSION["userName"])) {
                        echo "Hey welcome ".$_SESSION["userName"]."!";
                    } else {
                        echo "No user logged in";
                    }
                
                ?>
            </h1>
        </div>
    </div>
<?php require_once "footer.php"; ?>