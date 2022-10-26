<?php

    require_once('../data_registration/connection_class.php');

class User_connection
{
    public $username;
    public $password;
    public $command;
    public $session;
    public $database_connection;
    public $right_password;

    public function __construct(array $server, array $post, array $session, string $servername, string $username, string $password, string $dbname)
    {
        $this->database_connection = $database_connection = new Database_Connection($servername, $username, $password, $dbname);
        if(isset($session))
        {
            $this->session = $session;
        }
        if(isset($post['username']))
        {
            $this->username = $post['username'];
        }
        if(isset($post['password']))
        {
            $this->password = $post['password'];
        }
    }

    public function validating_user()
    {
        $this->command = "SELECT password FROM users WHERE username = '" . $this->username . "';";

        if($this->database_connection->connection->query($this->command) == TRUE)
        {
            $this->right_password = $this->database_connection->connection->query($this->command);
        } else
        {
            echo "Error updating record: " . $this->database_connection->connection->error;
        }
        if(isset($this->right_password))
        {
            if($this->right_password == $this->password)
            {
                $this->session['loggedin'] = TRUE;
                $this->session['username'] = $this->username;
            }else
            {
                $this->session['loggedin'] = FALSE;
            }
        }
    }
}
?>