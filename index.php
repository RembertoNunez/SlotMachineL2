<?php
    include 'inc/function.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
        <style type="text/css">
            @import url("css/styles.css")
        </style>
    </head>
    <body>
        <div id="main">
            <form>
                <input type="submit" value="Spin!"/>
            </form>
            <?php 
                play();
            ?>
        </div>
    </body>
</html>