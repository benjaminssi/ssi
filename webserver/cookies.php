<?php
/* Créer des Cookies */

$value = 'Test';

setcookie("TestCookie", $value, time()+3600);  /* expire dans 1 heure */

?>



<?php
/* Accès aux Cookies */

if (isset($_COOKIE['TestCookie'])) 
{
	echo $_COOKIE['TestCookie'];
}
?>




<?php
/* Suppression du Cookie */

unset($_COOKIE['TestCookie']);

?>
