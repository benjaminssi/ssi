<?php
/* Session beginning */

session_start();

$_SESSION['name'] = 'username';
$_SESSION['time'] = time();

/* Then go to default page */

?>



<?php
/* Session in others pages */

session_start();

if($_SESSION['name'] == true)
{

	/* Display the content of the page */

}
else
{
	/* Go back to login page */
	header('Location: login.html');
}

?>





<?php
/* Session ending */

session_destroy();

?>
