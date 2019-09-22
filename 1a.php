<?php
session_start();
    if(isset($_SESSION["my1"]))
    {
        echo $_SESSION["my1"];
    }
    else
    {
        echo "Session not set";
    }
    session_unset();
    session_destroy();
?>
