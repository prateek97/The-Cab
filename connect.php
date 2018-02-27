<?php
function Connect()
{
    if (!($link=mysql_connect("localhost","root","")))
    {
        echo "Error to connect to DataBase.";
        exit();
    }
    if (!mysql_select_db("DataBase_Name",$link))
    {
        echo "Error to select DataBase.";
        exit();
    }
    return $link;
}

?>