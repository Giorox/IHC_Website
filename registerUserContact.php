<?php
require_once("config.php");

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Insert the message
$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO usermessages ( name, email, subject, message ) VALUES ( :name, :email, :subject, :message )";

$st = $conn->prepare ( $sql );
$st->bindValue( ":name", $name, PDO::PARAM_STR );
$st->bindValue( ":email", $email, PDO::PARAM_STR );
$st->bindValue( ":subject", $subject, PDO::PARAM_STR );
$st->bindValue( ":message", $message, PDO::PARAM_STR );

try
{
	$st->execute();
	http_response_code(200);
}
catch (PDOException $e)
{
	http_response_code(400);
}

$conn = null;

?>
