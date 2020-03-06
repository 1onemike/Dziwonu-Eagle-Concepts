<?php 
 
                $name = $_POST["name"];
                $email = $_POST["email"];
                $subject = $_POST["subject"];
                $message = $_POST["message"];
              
               
             

				$to = "info@dziwonueagleconcept.com"; 
				$subject = "One New Message"; 
				

		
		

$email_body = '


			    Dear Admin,<br/><br/>
			    You have one new message from <strong>'.$name.'</strong><br/>
			    Email: <strong>'.$email.'</strong><br/>
                Subject: <strong>'.$subject.'</strong><br/>
				Message : <strong>'.$message.'</strong><br/>
               


			';
           
			
			
				// create email headers
			    $header = "From:".$_POST['name']." \r\n"; 
				$header .= "Reply-To:".$_POST['email']." \r\n";
				$header .= "MIME-Version: 1.0\r\n"; 
				$header .= "Content-type: text/html\r\n"; 

				$retval = mail ($to,$subject,$email_body,$header); 
				if( $retval == true ) 
						{ 
                            echo "1";
                        }else
						{
							echo "2";
						}
                       

						
				
				
?>