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
        <title> All Planet's </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <style type="text/css">
            .wrapper{ width: 350px; padding: 20px; }
        </style>
    </head>
    <body>
        <h2>  All Planet's </h2>
            <?php
                if(file_exists("../data_registration/all_information.txt"))
                {
                    $saving_data = fopen("../data_registration/all_information.txt", "r");
                    while(!feof($saving_data))
                    {
                        echo fgets($saving_data) . "<br>";
                    }
                }else
                {
                    echo "The file doesn't exists! <br>";
                    header("location: registration.php");
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