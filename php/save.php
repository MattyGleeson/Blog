<?php
/**
 * Created by IntelliJ IDEA.
 * User: matty
 * Date: 01/02/17
 * Time: 14:16
 */

session_start();

$_DB_HOST = "localhost";
$_DB_USER = "blog";
$_DB_PASS = "blogdbpassword";
$_DB_DB = "blog";

if (empty($_POST['title']) || empty($_POST['content']) || empty($_SESSION['loggedInUsername']))
{
    trigger_error("Something went wrong");
    die();
}
else
{
    trigger_error("[!!!] SUCCESS");

    $mysqli = new mysqli($_DB_HOST, $_DB_USER, $_DB_PASS, $_DB_DB);
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    if ($stmt = $mysqli->prepare("INSERT INTO posts (title, content, date, user, userId) VALUES (?, ?, ?, ?, ?)"))
    {
        $loggedInUserId = empty($_SESSION['loggedInUsername']) ? null : empty($_SESSION['loggedInUsername']);

        $stmt->bind_param("ssssi", $_POST['title'], $_POST['content'], date("Y-m-d H:i:s"), $_SESSION['loggedInUsername'], $loggedInUserId);
        $stmt->execute();

        echo "New post created successfully";

        $stmt->close();
        $mysqli->close();

        header("Location: ../index.php");
        die();
    }

    header("Location: login.php?errmsg=login_failed\r\n");
    die();
}