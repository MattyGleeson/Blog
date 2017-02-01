<?php
/**
 * Created by IntelliJ IDEA.
 * User: matty
 * Date: 31/01/17
 * Time: 14:59
 */

session_start();

require_once("lib/db.php");

$DB = new DB();

$_DB_HOST = "localhost";
$_DB_USER = "blog";
$_DB_PASS = "blogdbpassword";
$_DB_DB = "blog";

if(empty($_POST['username']) || empty($_POST['password']))
{
    header("Location: login.php\r\n");
    die();
}
else
{
    $lookupUser = trim($_POST['username']);
    $lookupPass = sha1(trim($_POST['password']));

    $mysqli = new mysqli($_DB_HOST, $_DB_USER, $_DB_PASS, $_DB_DB);
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

//    if ($stmt = $DB->prepareStatement1("SELECT id, username FROM users WHERE username = ? AND password = ?", "ss", $lookupUser, $lookupPass))
    if ($stmt = $mysqli->prepare("SELECT id, username FROM users WHERE username = ? AND password = ?"))
    {
//        $params = array($lookupUser, $lookupPass);
//        $types = "ss";
//
//        $queryParams = array();
//        $queryParams[] = $types;
//
//        foreach ($params as $id => $term)
//        {
//            $queryParams[] = &$params[$id];
//        }
//
//        call_user_func_array(array($stmt, 'bind_param'), $queryParams);

        $stmt->bind_param("ss", $lookupUser, $lookupPass);
        $stmt->execute();
        $stmt->bind_result($db_uid, $db_username);

        if ($stmt->fetch())
        {
            $_SESSION['loggedIn'] = true;
            $_SESSION['loggedInUser'] = $db_uid;
            $_SESSION['loggedInUsername'] = $db_username;

            $stmt->close();
            $mysqli->close();
            header("Location: ../index.php");
            die();
        }

        $stmt->close();
        $mysqli->close();
    }

    header("Location: login.php?errmsg=login_failed\r\n");
    die();
}


