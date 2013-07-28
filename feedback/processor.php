<?php

$where_form_is="http://".$_SERVER['SERVER_NAME'].strrev(strstr(strrev($_SERVER['PHP_SELF']),"/"));

session_start();
if( ($_SESSION['security_code']==$_POST['security_code']) && (!empty($_POST['security_code'])) ) { 
mail("quote@i-proquest.biz","phpFormGenerator - Form submission","Form data:

Your Name: " . $_POST['field_1'] . " 
Your Email:: " . $_POST['field_2'] . " 
Phone:: " . $_POST['field_3'] . " 
Brief description of your Project: " . $_POST['field_4'] . " 
Your Website here: " . $_POST['field_5'] . " 
First name:: " . $_POST['field_6'] . " 
Last name:: " . $_POST['field_7'] . " 
Email:: " . $_POST['field_8'] . " 
Phone:: " . $_POST['field_9'] . " 
Comments:: " . $_POST['field_10'] . " 


 powered by phpFormGenerator.
");

include("confirm.html");
}
else {
echo "Invalid Captcha String.";
}

?>