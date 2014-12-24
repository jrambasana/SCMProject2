<html>
    <head>
    <title> Hello! </title>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    
    <meta name='txtweb-appkey' content='03d09ff0-1205-4033-ad64-d8e934713666' />
    
    </head>
    <body>
<?php

    $host = 'mysql9.000webhost.com';
    $username = '43'; 
    $password = 'fdsf'; 
    $db_name = '34'; 
    $tbl_name = '123';
    mysql_connect($host, $username, $password) or die('cannot connect');
    mysql_select_db($db_name) or die('cannot select DB');

  ?>
     
  
    <?php      
          if(isset($_GET['txtweb-message']))    $message = $_GET['txtweb-message'];
            if(isset($_GET['txtweb-mobile']))     $number = $_GET['txtweb-mobile'];

    
    $sql = "INSERT INTO `a8806915_todo`.`todo` (`mobile_id`, `username`) VALUES('$number','$message')";	
                        if($result=mysql_query($sql)){
				echo 'You are registered sucessfully';
			}else{
				echo 'Sorry.We  could not signup';
			}



    ?>
 
    </body>
    </html>