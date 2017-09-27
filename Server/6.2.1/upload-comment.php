<?php
/**
 * Created by PhpStorm.
 * User: Krallan
 * Date: 2017-09-27
 * Time: 12:59
 */
$db_host = "atlas.dsv.su.se";
$db_name = "db_17391005";
$db_username = "usr_17391005";
$db_password = "391005";

$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$website = strip_tags($_POST['website']);
$comment = strip_tags($_POST['comment']);

try {
    $connection = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
    $statement = $connection->prepare("INSERT INTO comments (name, email, website, comment) VALUES (?,?,?,?)");
    $statement->execute([$name, $email, $website, $comment]);
    header("Location: {$_SERVER['HTTP_REFERER']}");
} catch (PDOException $ex) {
    echo "Connection failed" . $ex->getMessage();
}