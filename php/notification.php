<?php
    session_start();
    require_once "dbconnect.php";
    
    $work=true;

    if(strlen($_POST['mail'])!=0){
        $secret = "6LfNmC4UAAAAALvJ551RN8b2-L0wb59lHKEXdjFE";
        $check_captcha = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $respond = json_decode($check_captcha);

        if(!($respond->success)){
            $_SESSION['e_captcha']="<p class='error'>Check captcha</p>";
            $work=false;
            header("Location: ..");

        }

        if($work==true){            
            $connection = @new mysqli($host, $user, $password, $db_name);

            if($connection->connect_errno!=0){
                echo "Error: ".$connection->connect_errno;
                //header("Location: ..");
            }else{ 
                $e_mail = urlencode($_POST['mail']);
                $check_email = "SELECT * FROM `emails` WHERE email = '$e_mail'";

                if($result = @$connection->query($check_email)){
                    $email_n = $result->num_rows;
                    if($email_n>0){
                        $_SESSION['e_email']="<p class='error'>This email i already singed up</p>";
                        $connection->close();
                        header("Location: ..");
                    }else{
                        $date=date("Y-m-d");
                        $insert_email="INSERT INTO `emails` (`id`, `email`, `date`) VALUES (NULL, '$e_mail', '$date')";
                        $connection->query($insert_email);
                        $connection->close();
                        $_SESSION['thx']="<p id='thx'>Thanks for trust us</p>";
                        header("Location: ..");
                    }
                }
            }   
        }
    }else{
        $_SESSION['e_email']="<p class='error'>Write email!!</p>";
        header("Location: ..");
    }
?>