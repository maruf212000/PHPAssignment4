<?php  
    session_start();
    print_r($_SESSION);
    if(time() > ($_SESSION["destroy"]))
    {
        session_unset();
        session_destroy();
    }
    else{
        echo "Session will be deleted after :- " . ($_SESSION["destroy"] - time());
    }
?>