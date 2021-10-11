<?php

    session_start();

    if(isset($_POST['login'])){

        if( !empty($_POST['uname']) AND !empty($_POST['pwd'])){

            $user_default = "root";
            $mdp_defaulf = "root";

            $pseudo_saisi = htmlspecialchars($_POST['uname']);
            $mdp_saisi = htmlspecialchars($_POST['pwd']);

            if($pseudo_saisi == $user_default AND $mdp_saisi == $mdp_defaulf){
                $_SESSION == $mdp_saisi;
                header('Location:vue/home.php');
            }
            else{
                
            }

        }else{
            echo "Veuillez completer le champ";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="vue/css/style.css">
        <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="icons/font/all.css"> -->
        <title>Login form design</title>
    </head>
    <body>
        <div class="container">
            <h2>Login</h2>
            <form action="" method="POST">
                <div class="form_input">
                    <input type="text" required="" name="uname">
                    <label for="uname">User Name</label>
                </div>
                <div class="form_input">
                    <input type="password" required="" name="pwd" id="pwd">
                    <label for="pwd">Password</label>
                </div>
                <input type="submit" value="login" name="login" class="btn-login">

            </form>
        </div>
    </body>
</html>