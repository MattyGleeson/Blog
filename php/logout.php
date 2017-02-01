<?php
/**
 * Created by IntelliJ IDEA.
 * User: matty
 * Date: 01/02/17
 * Time: 14:00
 */

session_start();

$_SESSION['loggedIn'] = false;
$_SESSION['loggedInUser'] = "";
$_SESSION['loggedInUsername'] = "";

header("Location: login.php");
die();