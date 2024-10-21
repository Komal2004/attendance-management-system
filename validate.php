<?php
    $msg = 0;
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(empty($_POST['name'])){
            echo "<br>Name can't be blank";
            $msg = 1;
        }
        if(!is_numeric($_POST['mobile'])| $POST['mobile']<10){
            echo "<br>Enter valid Mobile Number";
            $msg = 1;
        }
        
        $pattern = '/\b[\w.-]+@[\w.-]+\.[A-Z a-z]{2,6}\b/';

        if(!preg_match($pattern,$_POST['email'])){
            echo "<br>Enter valid Email id";
            $msg = 1;
        }
        if($msg==0){
          include "insertmember.php";
        }
        else{
            header("Location:index.php");
        }
    }
  ?>