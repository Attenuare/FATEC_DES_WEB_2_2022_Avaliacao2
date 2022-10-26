<?php
 /*
    require_once('../data_registration/connection_information.php');
    require_once('validating_user.php');

    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $user = new User_connection($_SERVER, $_POST, $_SESSION, $servername, $username, $password, $dbname);
        $user->validating_user();
        if($user->session['loggedin'] == TRUE)
        {
            $_SESSION["username"] = $user->session['username'];
            $_SESSION['loggedin'] = TRUE;

        } else
        {
            $_SESSION['loggedin'] = FALSE;
        }
    }
*/
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['username'] == 'fatec' and $_POST['password'] == 'araras'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Fatec Araras';
         header("location: ../data_registration/registration.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}

?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
            body{
                background-image: url("../img/planet.webp");
                background-size: 100%;
                background-repeat: no-repeat;
                font: 14px sans-serif;
            }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2 style="margin: auto; color:#ffffff;">Login</h2>
        <br>
        <p style="margin: auto; color:#ffffff;">Please, enter with user and password</p>
        <br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label style="margin: auto; width: 240px; color:#ffffff;">Username</label>
                <input type="text" name="username" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label style="margin: auto; width: 240px; color:#ffffff;">Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-danger" value="Submit">
            </div>
        </form>
    </div>    
</body>
</html>
