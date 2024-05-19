<html>
    <head><title>CHEKING PLEASE WAIT</title></head>
<body>
    <h1>Loading...</h1>
    <?php
        error_reporting(0);
        $username=$_POST["username"];
        $password=$_POST["password"];

        if($username=="admin" && $password=="1234")
        {
            $url="https://a1mobile-shop.000webhostapp.com/welcome.php";
            echo '<script language="javascript">window.location.href ="'.$url.'"</script>';
        }
        else{
            $url='https://a1mobile-shop.000webhostapp.com/login.php?mess=unsuccessful';
            echo '<script language="javascript">window.location.href ="'.$url.'"</script>';
        }    
    ?>
</body>
</html>