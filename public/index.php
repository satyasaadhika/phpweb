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
    <p><?= $text ?></p>
    <?php
      echo "SHA256: " . hash('sha256', "Priyanshu Maurya");
      ?>
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
    <br/> 
   <a href="/public/assets/check.php">Click here to check the error setting</a>
   <br/>
    <a href="/public/assets/fail.php">Click here to cause a traceback</a>
</body>
</html>
