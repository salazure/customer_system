<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Gourmet Guru Order Form">
    </head>
    <body>
        <?php
            $itemInfo = fopen("items.txt", "r") or die("Unable to get item information.");
            echo fread($myfile,filesize("items.txt"));
            fclose($myfile);
        ?>
    </body>
</html>