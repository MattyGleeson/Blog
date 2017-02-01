<?php
/**
 * Created by IntelliJ IDEA.
 * User: matty
 * Date: 31/01/17
 * Time: 12:44
 */

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css" type="text/css" />
    <link rel="stylesheet" href="../css/material-design.css" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js"></script>
    <script src="../js/material-button.js"></script>
</head>
<body>
<div class="fill-vertical">
    <div class="col-sm-4 card login-panel" style="text-align: center; margin-top: 0;">
        <h2 style="text-align: end; padding-right: 5%">Login</h2>

        <div class="horizontal-line-dark"></div>

        <div class="col-sm-8 col-sm-offset-2" style="margin-top: 40px;">

            <form method="post" action="doAuth.php" name="login">
                <div class="group">
                    <input class="material-input" type="text" name="username" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label class="material-label">Username</label>
                </div>

                <div class="group">
                    <input class="material-input" type="text" name="password" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label class="material-label">Password</label>
                </div>

                <input type='hidden' id='hx' name='hx' value=''>



            </form>

            <form method="post" action="loginGuest.php" name="loginGuest">

            </form>
            <a class="material-button material-ripple login-button col-sm-5" style="background-color: gray;" type="submit" href="#" onclick="document.forms['loginGuest'].submit();">Guest</a>
            <a class="material-button material-ripple login-button col-sm-5 col-sm-offset-2" type="submit" href="#" onclick="document.forms['login'].submit();">Login</a>

        </div>

    </div>
</div>
</body>
</html>
