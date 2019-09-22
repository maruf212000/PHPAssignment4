<?php
if(isset($_COOKIE["username"]))
    {
        print_r($_COOKIE);
        if(time() > $_COOKIE["expire"])
        {
            setcookie("username","",time()-1);
            setcookie("cname","",time()-1);
            setcookie("expire","",time()-1);
        }
    }
    ?>