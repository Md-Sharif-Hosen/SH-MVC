<?php
namespace App\Models;

use mysqli;

class Model{
    protected $db;
    public function __construct($servername="localhost", $username="root", $password="" , $database="mvc_project")
    {
        // dd('oky got it');
        $this->db=mysqli_connect($servername,$username , $password, $database);
        if(!$this->db){
            die("connection failed:" .mysqli_connect_error());
        }
        echo "connect successfully <br>";
    }

}
?>