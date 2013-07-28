<?php

$where_form_is="http://".$_SERVER['SERVER_NAME'].strrev(strstr(strrev($_SERVER['PHP_SELF']),"/"));

session_start();
if( ($_SESSION['security_code']==$_POST['security_code']) && (!empty($_POST['security_code'])) ) { 
// File upload handling
if($_FILES['field_5']['name']!=''){
$field_5_filename = "file_5_".date("sihdmY").substr($_FILES['field_5']['name'],strlen($_FILES['field_5']['name'])-4);
if(!move_uploaded_file($_FILES['field_5']['tmp_name'], "./files/".$field_5_filename)){
die("File " .  $_FILES['field_5']['name'] . " was not uploaded.");
}
}

// File upload handling
if($_FILES['field_6']['name']!=''){
$field_6_filename = "file_6_".date("sihdmY").substr($_FILES['field_6']['name'],strlen($_FILES['field_6']['name'])-4);
if(!move_uploaded_file($_FILES['field_6']['tmp_name'], "./files/".$field_6_filename)){
die("File " .  $_FILES['field_6']['name'] . " was not uploaded.");
}
}

// File upload handling
if($_FILES['field_7']['name']!=''){
$field_7_filename = "file_7_".date("sihdmY").substr($_FILES['field_7']['name'],strlen($_FILES['field_7']['name'])-4);
if(!move_uploaded_file($_FILES['field_7']['tmp_name'], "./files/".$field_7_filename)){
die("File " .  $_FILES['field_7']['name'] . " was not uploaded.");
}
}

mail("quote@i-proquest.biz","Proquest - Quote Submission","Form data:

First name:: " . $_POST['field_1'] . " 
Last name:: " . $_POST['field_2'] . " 
Email:: " . $_POST['field_3'] . " 
Phone:: " . $_POST['field_4'] . " 
if($_FILES['field_5']['name']!=''){
	Attach photo:: ".$where_form_is."files/".$field_5_filename." (original file name: " . $_FILES['field_5']['name'] . ")
}
if($_FILES['field_6']['name']!=''){
	Attach photo:: ".$where_form_is."files/".$field_6_filename." (original file name: " . $_FILES['field_6']['name'] . ")
}
if($_FILES['field_7']['name']!=''){
	Attach photo:: ".$where_form_is."files/".$field_7_filename." (original file name: " . $_FILES['field_7']['name'] . ")
}

Comments:: " . $_POST['field_8'] . " 


 powered by phpFormGenerator.
");

include("confirm.html");
}
else {
echo "Invalid Captcha String.";
}

?>