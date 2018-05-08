<?php
/* Connexion à MySQL */

$mysql_user = '';
$mysql_password = '';
$mysql_database = '';
$mysql_server = '127.0.0.1';
$mysql_port = 3306;

$mysqli = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_database, $mysql_port);

if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else
{

echo $mysqli->host_info . "\n";


/* Requêtes et contenu de la page */





mysqli_close($mysqli);
}

?>




<?php
/* Authentification via MySQL */

$res = $mysqli->query("SELECT id, username, email FROM users WHERE username = ".$username." AND password = ".$password.";");

if($res == false)
{
	/* Le nom d'utilisateur ou le mot de passe est incorrect */
}
else
{
$row = $res->fetch_assoc();

echo 'id = ' .$row['id'];. '<br />';
echo 'username = ' .$row['username']. '<br />';
echo 'email = ' .$row['email']. '<br />';

$mysqli->close();
}

?>
