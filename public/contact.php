<?php
  //if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "ipox@live.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['message'];
  
  //send email
  mail($admin_email, "$subject", $comment, "De:" . $email);
  
  //Email response
  echo "Obrigado!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
	  echo "Favor informar e-mail.";
  }
?>
