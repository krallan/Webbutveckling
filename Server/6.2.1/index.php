<?php
$db_host = "atlas.dsv.su.se";
$db_name = "db_17391005";
$db_username = "usr_17391005";
$db_password = "391005";

$comments = array();

try {
    $connection = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
    $statement = $connection->query("SELECT * FROM comments ORDER BY created ASC");
    $comments = $statement->fetchAll(PDO::FETCH_OBJ);


} catch (PDOException $ex) {
    echo "Connection failed" . $ex->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>6.2.1 Relationsdatabaser och säkerhet</title>
</head>
<body>
<form action="upload-comment.php" method="post">
    <input type="text" name="name" id="name" placeholder="Namn">
    <br>
    <br>
    <input type="text" name="email" id="email" placeholder="E-post">
    <br>
    <br>
    <input type="text" name="website" id="website" placeholder="Hemsida">
    <br>
    <br>
    <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Kommentar"></textarea>
    <br>
    <input type="submit" value="Lägg till inlägg">
</form>

<?php
$count = 1;
foreach ($comments as $comment) : ?>
    <div>
        <hr>
        <p><strong>Inlägg:</strong><?= $count; ?></p>
        <p><strong>Tid:</strong><?= date("Y-m-d H:i:s", strtotime($comment -> created)) ?></p>
        <p><strong>Från:</strong><a href="<?= $comment->website ?>"><?= $comment->name ?></a></p>
        <p><strong>E-post:</strong><a href="mailto:<?= $comment->email ?>"><?= $comment->email ?></a></p>
        <p><strong>Kommentar:</strong><?= $comment->comment ?></p>
    </div>
    <?php $count++; endforeach; ?>
</body>
</html>