<?php
    session_start();
    require_once "dbconnect.php";
    
    $connection = @new mysqli($host, $user, $password, $db_name);
    
    if($connection->connect_errno!=0){
        echo "Error: ".$connection->connect_errno;
    }else{
        $e_mail = $_POST['mail'];
        
        $check_email="SELECT * FROM `emails` WHERE email = '$e_mail'";
        
        if($result = @$connection->query($check_email)){
            $email_n = $result->num_rows;
            if($email_n>0){
                $_SESSION['error']="<p>This email is alredy signed up</p>";
                echo "<p style='color: red' >This email is alredy signed up</p>";
            }else{
                $date=date("Y-m-d");
                $insert_email="INSERT INTO `emails` (`id`, `email`, `date`) VALUES (NULL, '$e_mail', '$date')";
                $connection->query($insert_email);
            }
        }
        
        
        $connection->close();
    echo $e_mail;
        
    }
?>