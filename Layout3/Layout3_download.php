<!DOCTYPE html>
<html>
<head>
    <title>Layout Demo</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Layout3_style.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Crete+Round|Dancing+Script|Fresca|Oxygen|Pacifico|Raleway|Roboto|Satisfy|Yantramanav"
          rel="stylesheet">
</head>
<body>
<h2 class="text-center" style="font-size: larger; text-align: center;"><b style="font-size: 30px; font-family: Bavro; letter-spacing: 2px;">LAYOUT DEMO</b></h2>
<div style="text-align: center;">
    <div style="display: inline-block; padding: 0 20px 20px 20px; text-align: center;">
        <label for="submit" style="font-size: 20px; font-family: Bavro; text-transform: uppercase; letter-spacing: 2px;">Download below layout here</label><br>
        <br>
        <?php
        $zip=new ZipArchive();
        $zip->open("Layout3.zip",ZipArchive::CREATE);
        $zip->addFile('Layout3_show.html','Layout3_show.html');
        $zip->addFile('Layout3_style.css','Layout3_style.css');
        $zip->addFile('4.jpg','4.jpg');
        $zip->addFile('6.jpg','6.jpg');
        $zip->addFile('53.jpg','53.jpg');
        $zip->close();
        ?>
        <a href="Layout3.zip" download="Layout3.zip" style="margin-right: 20px;font-family: Cambria;" class="a">Download the ZIP file!</a>
    </div>
</div>
<br>
<?php
require_once "Layout3_show.html";
?>
</body>
</html>
