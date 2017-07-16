<!DOCTYPE html>
<html>
<head>
    <title>Layout Demo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600" rel="stylesheet">
</head>
<style>
    .a{
        text-decoration: none;
        font-size: larger;
        font-family: Cambria;
    }
</style>
<body>

<div class="container">
    <br>
    <h2 class="text-center" style="font-size: larger; text-align: center;"><b style="font-size: 30px; font-family: Bavro; letter-spacing: 2px;">LAYOUT DEMO</b></h2>
    <br>
    <?php
    require_once 'Layout1_show.html';
    ?>
    <br>
    <div style="text-align: center;">
        <div style="display: inline-block; padding: 20px; text-align: center;">
            <label for="submit" style="font-size: 27px; font-family: Bavro; text-transform: uppercase; letter-spacing: 2px;">Download above layout here</label><br>
            <br>
            <?php
            $zip=new ZipArchive();
            $zip->open("Layout1.zip",ZipArchive::CREATE);
            $zip->addFile('Layout1_show.html','Layout1_show.html');
            $zip->addFile('Layout1_style.css','Layout1_style.css');
            $zip->close();
            ?>
            <a href="Layout1.zip" download="Layout1.zip" style="margin-right: 20px;" class="a">Download the ZIP file!</a>
        </div>
    </div>
</div>
</body>
</html>