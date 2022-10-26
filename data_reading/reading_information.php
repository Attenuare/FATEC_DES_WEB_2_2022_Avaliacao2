<?php

    require_once('../data_registration/connection_information.php');
    require_once('../data_registration/connection_class.php');

    session_start();
    /*
            Verifying if the user is connected on his account, 
        if he's disconnected the user are going to be redirected 
        to the login page. 
    */
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
    {
        header("location: ../login/login_information.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> All Planet's </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <style type="text/css">
            .wrapper{ width: 350px; padding: 20px; }
        </style>
    </head>
    <body>
        <h2>  All Planet's </h2>
            <?php
                $database_connection = new Database_Connection($servername, $username, $password, $dbname);
                $command = "SELECT * FROM planets";
                $results = $database_connection->connection->query($command);
                if($results == TRUE)
                {
                    while($row = $results->fetch_assoc())
                    {
                        echo "&nbsp".$row["planet"]."&nbsp".$row["color"]." ".$row["distance"]."&nbsp";
                        echo "&nbsp".$row["discoverer"]."&nbsp".$row["country"]."&nbsp";
                        echo "<br>";
                    }                
                } else
                {
                    echo "Error showing record: " . $database_connection->error;
                }
            ?>
        <br><br>
        <form>
            <div>
                <a href="../data_registration/registration.php" class="btn btn-danger">New Planet</a>
            </div>
        </form>

    </body>
</html>