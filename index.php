<?php
    session_start();
    require_once('php/sweetcaptcha.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>----♂♀----</title>
    <script src="js/notif.js"></script>
</head>
<body>
    <script src="js/notif.js">check_e()</script>
    <canvas id="canvas" width="1214" height="981"></canvas>
    <script src="js/noise.js"></script>
    <div id="least"></div>
    <script src="js/timer.js"></script>

    
    <div id="notif">
        <img id="x" src="img/exit.png" onclick="close_notif()">
        <form method="post" action="php/notification.php" id="form">
            <p>Want a notification?</p>
            <input type="email" name="mail">
            <p class="error">błąd</p>
            <?php echo $sweetcaptcha->get_html() ?>
            <input type="submit" value="OK">
        </form> 
    </div>
    <script>check_e()</script>
    <a onclick="notif()">notification?</a>
</body>
</html>