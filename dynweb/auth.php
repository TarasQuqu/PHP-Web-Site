<?php
    if((isset($_COOKIE['user1'])) && ($_COOKIE['user1'] =='Да'))
	setcookie('user1','Да',time() - 3600,'/');
    else{
	setcookie('user1','Да',time() + 3600,'/');	
	}
	header('Location:/');
?>