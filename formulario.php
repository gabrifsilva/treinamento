<?php
    define ("USER", "admin");
    define ("SENHA", "123456");

    if(isset($_post["btnLogin"])){
            $login = $_POST["btnLogin"];
            $senha = base 64_encode($_POST["txtSenha"]);
            if($login == USER && base64_decode($senha) == SENHA) {
                $login = base64_decode($login);
                header("location:index.php?user=$login");
            }else{
                echo "<script>alert('Login e senha incorretos');</script>";
            }


        }
?>        
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Exemplo de php</title>
</head>
<body>
    <h1>Olá Mundo XXX</h1>
    <form name="form1" method="GET" action="index.php">
        <label>Numero 1</label>
        <input type="text" name="numero1" />
        <label>Numero 2</label>
        <input type="text" name="numero2" />
        <label>Numero 3</label>
        <input type="text" name="numero3" />
        <label>Numero 4</label>
        <input type="text" name="numero4" />
        <input type="submit" name="btnCalcular" value="Enviar" />
    </form>
    <a href="index.php">Formulário</a>
</body>
</html>
