<body>
   <h1>DIEGO MARQUEZ GOMEZ</h1>
   <br>
   <br>
   <br>
   <br>
    <?php
    if(!empty($_POST["remember"]))
    {
        setcookie("username", $_POST["username"], time()+ 3600);
        setcookie("password", $_POST["password"], time()+ 3600);
        echo "Cookies guardas con exito";
    } else {
        setcookie("username", "");
        setcookie("password", "");
        echo "Cookies no configuradas";
    }
?>
    <p><a href="index_login.php">Ir a pagina de login</a></p>
</body>