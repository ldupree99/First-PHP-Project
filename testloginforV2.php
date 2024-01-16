<?php
 
//protection of website

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["pwd"]);
                    
    //Header option:User sent back to front page after input when they enter the code. also put it within the $_SERVER function
    /*header("Location: LoginV2.php");
    }
    else {
        header("Location: LoginV2.php");
    }*/
}


//later will run how to use conditions like 'if' and 'true"