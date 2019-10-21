<?php

if(isset($_POST[ 'verify' ])) {
    
    require 'server.php';
    
    $mailuid=$_POST['email'];
    $sq=$_POST['SQ'];
    $ans=$_POST['Ans'];

    if(empty($mailuid) || empty($sq) || empty($ans)){
        header("Location: ../reset.php?error=emptyfields");
        exit();
    }
    else{
        $sql="SELECT * FROM login WHERE username=? OR email=?;";
        $stmt=mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../reset.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"ss",$mailuid,$mailuid);
            mysqli_stmt_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
            if($row=mysqli_fetch_assoc($result)){
                $ansCheck=password_verify($ans,$row['ans']);
                $sqCheck=$row['sq'];
                if($ansCheck == false || $sqCheck != $sq){
                    header("Location: ../reset.php?error=wronganswerORwrongquestion");
                    exit();
                }
                else if($ansCheck == true && $sqCheck == $sq){
                    session_start();
                    $_SESSION['userId1']=$row['id'];
                    $_SESSION['userUid1']=$row['username'];

                    header("Location: ../reset2.php?verification=success");
                    exit();
                }
                else{
                    header("Location: ../reset.php?error=wronganswer1");
                    exit();
                }
            }
            else{
                header("Location: ../reset.php?error=nouser");
            exit();
            }
        }
    }
}
else{
    header("Location: ../login.php");
    exit();
}