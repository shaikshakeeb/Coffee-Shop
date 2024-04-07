<?php

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost','root','','coffee') or die("Connection Failed");

        if(isset($_POST['Email address']) && isset($_POST['Password']) )
        {
            $Email_a = $_POST['Email address'];
            $Password = $_POST['Password'];
            

            $sql = "INSERT INTO user (, Password)  VALUES ('$Username','$Password')";

          

            if(mysqli_query($conn,$sql))
            {
              //  echo '<script language="javascript">';
               // echo 'alert("message successfully sent")';
              //  echo 'document.location=../index.html';
              //  echo '</script>';*/
               // header("Location: ../index.html");
                echo "Entry Successfull";
            }
            else
            {
                echo "Error Occured";
            }

        }
    }



?>