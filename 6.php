<?php
    session_start();
    if(isset($_POST["submit"]))
    {
        if(isset($_POST["rem"]))
        {
            $_SESSION["uname"] = $_POST["uname"];
            $_SESSION["password"] = $_POST["password"];
        }
    }
?>
<html>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
        <input type="text" name="uname" value="<?php if(isset($_SESSION["uname"])) echo $_SESSION["uname"]?>"/><br>
        <input type="password" name="password" value="<?php if(isset($_SESSION["password"])) echo $_SESSION["password"]?>"/><br>
        <input type="checkbox" name="rem"/> Remember me<br>
        <input type="submit" name="submit" value="Log In"/><br>
    </form>    
</body>
</html>