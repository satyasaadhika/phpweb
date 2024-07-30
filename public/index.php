<?php

$text = "Priyanshu Maurya";

$data = json_decode(file_get_contents(__DIR__ . "/assets/datas/data.json"), true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Application</title>
</head>
<body>
    <h1>Priyanshu Maurya PHP</h1>
    <p>The SHA256 hash of "Priyanshu Maurya" is
    087f671aa83511d9221dff5c0cb1c9bb5215bfca7f65e042865cc7bcb44e46be</p>
    <p><?= $text ?></p>
    <pre>
    ASCII ART:
        <!-- ASCII Art of the first letter of your name -->
        **   **
     ** **      **
    **  **      ** 
   **   **      **
        **     **
        **  **
        **
        **
        **
        **
        **
    </pre>
    <?php
    echo "SHA256: " . hash('sha256', "Priyanshu Maurya");
    ?>
    <br/>   
    <br/> 
   <a href="/public/assets/check.php">Click here to check the error setting</a>
   <br/>
    <a href="/public/assets/fail.php">Click here to cause a traceback</a>
    <?php foreach ($data as $paragraph) : ?>
        <div>
            <h2><?= $paragraph['title'] ?></h2>
            <p><?= $paragraph['text'] ?></p>
        </div>
    <?php endforeach ?>
</body>
</html>