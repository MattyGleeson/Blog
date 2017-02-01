<?php
/**
 * Created by IntelliJ IDEA.
 * User: matty
 * Date: 01/02/17
 * Time: 13:14
 */
session_start();
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

    <div class="col-sm-2 fill-vertical sidebar-background">
        <div class="sidebar material-elevation fill-vertical">
            <h2 style="text-align: center; color: white">BLOG</h2>
            <div class="horizontal-line"></div>

            <a class="material-menu-item material-ripple sidebar-option" href="../index.php"><h4>HOME</h4></a>

            <a class="material-menu-item material-ripple sidebar-logout-option" href="logout.php"><h4>LOGOUT ( <?php echo $_SESSION['loggedInUsername'] ?> )</h4></a>
        </div>
    </div>

    <div class="col-sm-10 main-content fill-vertical" style="padding: 50px">
        <div id="post-container" style="height: 100%;">

            <div class="card" style="width: 100%">
                <div class="col-sm-12">
                    <h3>Card 1</h3>

                    <p>
                        <span style="font-weight: bold">Date - </span>27/01/2017<br>
                        <span style="font-weight: bold">User - </span>Admin<br>
                    </p>

                    <p class="post-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ligula purus, tincidunt non laoreet ornare, molestie vel libero. In suscipit turpis at nulla malesuada, ut egestas metus feugiat. Morbi nulla neque, tincidunt et elementum ac, iaculis ac orci. Fusce at arcu scelerisque, laoreet sem et, vehicula augue. Nulla sit amet libero vitae erat congue laoreet. Proin ut ligula vehicula, ultricies nunc vitae, fermentum risus. Phasellus vel arcu sodales elit commodo accumsan sed ut risus. Suspendisse non tellus a velit accumsan tempus. Nunc auctor urna ut eros commodo, et mollis quam ullamcorper.
                    </p>

                    <div class="horizontal-line-dark" style="width: 100%; margin-top: 20px; margin-bottom: 20px"></div>

                    <a class="material-button material-ripple col-sm-1 col-sm-offset-11" href="#">Modify</a>

                </div>
            </div>

        </div>

    </div>
</div>
</body>
</html>
