<?php
	require_once('saving_information_class.php');
	require_once('connection_information.php');
	require_once('connection_class.php');

	$occurrence_saved = new Saving_occurrence($_POST);
	if($occurrence_saved->confirmation_counter = 5)
	{
		$database_connection = new Database_Connection($servername, $username, $password, $dbname);
		$database_connection->inserting_occurrence
		(
			$occurrence_saved->color,
			intval($occurrence_saved->distance),
			$occurrence_saved->planet,
			$occurrence_saved->discoverer,
			$occurrence_saved->country
		);
	}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>
	<form>
	    <div>
	        <a href="../data_registration/registration.php" class="btn btn-danger">New Planet</a>
	    </div>
	</form>
</body>