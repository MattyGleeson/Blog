<?php
/**
 * Created by IntelliJ IDEA.
 * User: matty
 * Date: 01/02/17
 * Time: 13:57
 */
session_start();

$_SESSION['loggedIn'] = true;
$_SESSION['loggedInUsername'] = "Guest";

header("Location: ../index.php");
die();