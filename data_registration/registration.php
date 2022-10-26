<?php
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
        <title> Registrating Planet's </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <style type="text/css">
            body{
                background-image: url("../img/planet.webp");
                background-size: 100%;
                font: 14px sans-serif;
            }
            .wrapper{ width: 350px; padding: 20px; }
        </style>
    </head>
    <body>
        <h2  style="margin: auto; width: 240px; color:#ffffff;";> Registrating new Planets! </h2>
        <br>
        <form action="main_saving.php" method="post" style="margin: auto; width: 220px";>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="planet" name="planet" placeholder="Planet's name"><br><br>
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="color" name="color" placeholder="Color"><br><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="distance" name="distance" placeholder="Distance from earth"><br><br>
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="discoverer" name="discoverer" placeholder="Discoverer name"><br><br>
                </div>
            </div>
            <div class="row">
                <input type="text" class="form-control" id="country" name="country" name="country" placeholder="Country"><br><br>
            </div>
            <input type="submit" class="btn btn-danger" value="Submit">
            <a href="../login/logout_information.php" class="btn btn-danger">Logout</a>
            <br><br>
            <a href="../data_reading/reading_information.php" class="btn btn-danger">See all Planets</a>
        </form>
    </body>
</html>
