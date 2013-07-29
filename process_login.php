<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$db_server = "";
if(isset($_POST["db_server"]))
{
    $db_server = $_POST["db_server"];
}

$db_name = "";
if(isset($_POST["db_name"]))
{
    $db_name = $_POST["db_name"];
}

$db_ip = "";
if(isset($_POST["db_ip"]))
{
    $db_ip = $_POST["db_ip"];
}

$db_usrnm = "";
if(isset($_POST["db_usrnm"]))
{
    $db_usrnm = $_POST["db_usrnm"];
}

$db_pwd = "";
if(isset($_POST["db_pwd"]))
{
    $db_pwd = $_POST["db_pwd"];
}

try {  
    
    switch($db_server)
    {
        case "mysql":
              # MySQL with PDO_MYSQL  
              $DBH = new PDO("mysql:host=$db_ip;dbname=$db_name", $db_usrnm, $db_pwd);
            echo "mysql connected";
        break;
    
        case "mssql":
              # MS SQL Server with PDO_DBLIB  
              $DBH = new PDO("mssql:host=$db_ip;dbname=$db_name, $db_usrnm, $db_pwd");  
            echo "mssql connected";
        break;
    
        case "oci":
                #oracle
                $tns = " 
                          (DESCRIPTION =
                              (ADDRESS_LIST =
                                (ADDRESS = (PROTOCOL = TCP)(HOST = '".$db_ip."')(PORT = 1521))
                              )
                              (CONNECT_DATA =
                                (SERVICE_NAME = orcl)
                              )
                            )
                     ";
                  $DBH = new PDO("oci:dbname=$tns, $db_usrnm, $db_pwd");  
                  echo "oci connected";
        break;
    }
    
    
}  
catch(PDOException $e) {  
    echo $e->getMessage();  
} 
?>
