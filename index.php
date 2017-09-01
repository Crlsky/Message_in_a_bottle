<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>♂♀</title>
    <script src="js/notif.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>  
    <canvas id="canvas" width="1214" height="981"></canvas>
    <script src="js/noise.js"></script>

    <div id="least"></div>
    <script src="js/timer.js"></script>
    
    <div id="notif">
        <img id="x" src="" onclick="close_notif()">
        <form method="post" id="form">
            <input type="email">
            <div class="g-recaptcha" data-sitekey="6LfNmC4UAAAAAEbps9IMgRS63vJaX4NrRC-v4aem"></div>
            <input type="submit" value="OK">
        </form>
    </div>
    <a onclick="notif()">notification?</a>
        
</body>
</html>