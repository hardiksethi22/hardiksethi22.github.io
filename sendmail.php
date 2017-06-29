<?php

$name = mysqli_real_escape_string($con, $_POST['contactName']);
$mes = mysqli_real_escape_string($con, $_POST['contactEmail']);
$sub = mysqli_real_escape_string($con, $_POST['contactSubject']);
$message = mysqli_real_escape_string($con, $_POST['contactMessage']);
$to="hardiksethi893@gmail.com";
/*$qu = mysqli_query($con,"SELECT * FROM users_cl where email='$mes'");
            if(mysqli_num_rows($qu) > 0){

                while($row = mysqli_fetch_assoc($qu)){
           $temp_id= $row['id'];
           $temp_id_check=$temp_id*2879;
$ms= "Please visit canceraidsociety.org/newpassword.php?token=$temp_id_check&mail=$mes to change your account password";
*/
                    mail($to,$sub,$message,'FROM: hardiksethi893@gmail.com');
                      
   
   header("location:index.html");
 
?>
