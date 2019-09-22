<?php
    session_start();
    $_SESSION["user"] = 1;
    if(isset($_SESSION["views"]))
    {
        $_SESSION["views"] = $_SESSION["views"] + 1;
    }
    else
    {
        $_SESSION["views"] = 1;
    }
    echo "views:- " . $_SESSION["views"] . "<br>";
    if(isset($_COOKIE["PHPSESSID"]))
    {
        if($_COOKIE["PHPSESSID"] != session_id())
        {
            $_SESSION["user"] = $_SESSION["user"] + 1;
        }
        echo $_SESSION["user"];
    }
?>