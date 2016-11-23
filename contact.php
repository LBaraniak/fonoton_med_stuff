<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
	$tel = $_POST['tel'];
    $message = $_POST['message'];
    $from = 'From: Sprzęt medyczny'; 
    $to = 'handlowy@fonoton.pl'; 
    $subject = 'Wiadomość ze strony Sprzęt medyczny';
    $human = $_POST['human'];
			
    $body = "OD: $name\n E-Mail: $email\n Numer telefonu: $tel\n Wiadomość:\n $message";
				
	/*if ($_POST['submit']) {
	    if ($name != '' && $email != '' && $tel != '') {
	        if ($human == '4') {				 
	            if (mail ($to, $subject, $body, $from)) { 
		        echo '<p>Twoja wiadomość zostałą wysłana!</p>';
		    } else { 
		        echo '<p>Nastąpił błąd wysłania wiadomości, cofnij się i spróbuj jeszcze raz!</p>'; 
		    } 
		} else if ($_POST['submit'] && $human != 'fonoton') {
		    echo '<p>Twoja odpowiedź na pytanie antyspamowe jest nieprawidłowa!</p>';
		}
    } else {
        echo '<p>Musisz uzupełnić wszystkie pola!!</p>';
    }*/
	
if ($_POST['submit']) {
    if ($name != '' && $email != '' && $tel != '' && $message != '') {
        if ($_POST['submit'] && $human != 'fonoton') {
	    echo header("Location: antispam_fail.html");
		} 
		else {
			if ($human == 'fonoton') {				 
           		if (mail ($to, $subject, $body, $from)) { 
	        	echo header("Location: done.html");
	    		} 
	    		else { 
	        	echo header("Location: fail.html"); 
				}
		}}
	}
    else {
        echo header("Location: fields_fail.html");
    }
}
?>