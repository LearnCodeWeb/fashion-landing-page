<?php
	if(isset($_REQUEST['email']) and $_REQUEST['email']!="")
	{
		 $to      	=		$_REQUEST['email']; //"zaidbinkhalidk@yahoo.com"; email sended To
		 $from		=		"zaidbinkhalidk@yahoo.com"; // Write your email address here. email send From
		 $name    	=		$_REQUEST['name']; //form Name here
		 $message   	=		$_REQUEST['message']; //form Message here
		 $subject = "This is subject"; //Your subject here
		 
		 $body = "<b>".$to."</b>";
		 $body .= "<h1>".$name."</h1>";
		 $body .= "<h1>".$message."</h1>";
		 
		 $header = "From:".$from." \r\n";
		 $header .= "MIME-Version: 1.0\r\n";
		 $header .= "Content-type: text/html\r\n";
		 
		 $retval = mail($to,$subject,$body,$header);
		 
		 if($retval==true){
			echo 1;
		 }
		 else{
			echo 0;
		 }
	}
?>
