<?php
Class dbObj
{
    var $dbhost = "localhost:3307";
    var $username = "root";
    var $password = "";
    var $dbname = "phpproject";
    var $conn;

    function getConnstring()
    {
        $con = mysqli_connect($this->dbhost, $this->username, $this->password, $this->dbname);
        if(mysqli_connect_errno())
        {
            printf("Connect faild: %s\n", mysqli_connect_error());
            exit();
        }
        else{
            $this->conn = $con;
        }
        return $this->conn;
    }
}
?>