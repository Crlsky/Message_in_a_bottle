<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>----♂♀----</title>
    <script src="js/notif.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    <canvas id="canvas" width="1214" height="981"></canvas>
    <script src="js/noise.js"></script>
    <div id="least"></div>
    <script src="js/timer.js"></script>

    
    <div id="notif">
        <img id="x" src="img/exit.png" onclick="close_notif()">
        <form method="post" action="php/notification.php" id="form">
            <p>Want a notification?</p>
            <input type="email" name="mail">
            <div id="e">
            <?php 
                if(isset($_SESSION['e_email'])){
                    echo $_SESSION['e_email'];
                    session_destroy();
                }
            ?>
            </div>
            <div class="g-recaptcha" data-sitekey="6LfNmC4UAAAAAEbps9IMgRS63vJaX4NrRC-v4aem"></div>
            <div id="e">
            <?php 
                if(isset($_SESSION['e_captcha'])){
                    echo $_SESSION['e_captcha'];
                    session_destroy();
                }
            ?>
            </div>
            <input type="submit" value="OK">
        </form> 
    </div>
    <script>check_e()</script>
    <a onclick="notif()">notification?</a>
</body>
</html>
