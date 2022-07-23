<?php
 class CreateDb
{
    public $servername;
    public $username;
    public $password;
    public $databasename;
    public $tablename;
    public $conn;


public function __construct(
    $servername="localhost",
    $username="root",
    $password="",
    $databasename="ProductDb",
    $tablename="productTb")
{
$this->servername=$servername;
$this->username=$username;
$this->password=$password;
$this->databasename=$databasename;
$this->tablename=$tablename;

//create connection
$this->conn=mysqli_connect($servername,$username,$password);

//check connection

if(!$this->conn)
{
    die("connection failed:" .mysqli_connect_error());
}
else
{
    //create query to create database
    $sql="CREATE DATABASE IF NOT EXISTS $databasename";
    
    //execute query
    if(mysqli_query($this->conn,$sql))
    {
        $this->conn=mysqli_connect($servername,$username,$password,$databasename);

        //create new table

        $sql="CREATE TABLE IF NOT EXISTS $tablename
        (
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        ProductName VARCHAR(25) NOT NULL,
        ProductPrice FLOAT,
        ProductImage VARCHAR(100)
        );";

        if(!mysqli_query($this->conn,$sql))
        {
            echo"ERROR CREATING TABLE". mysqli_error($this->conn);
        }
        
    }
}

}
public function GetInfo()
{
    $sql="SELECT *FROM productTb";
    $result=mysqli_query($this->conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        return $result;
    }
}

}
