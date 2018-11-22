<?php
include("constant.php");
function creatdata($name)
{
    try{
    $db=new PDO("mysql:host".host,user,password);
    $db->exec("CREATE DATABASE IF NOT EXISTS $name");
    }
    catch(Exception $e)
    {
    die ("Erorr is".$e->getMessag());
    }
}
creatdata(da);
?>