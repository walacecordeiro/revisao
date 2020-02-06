<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);
    echo "E-mail :".$email."<br>";
    echo "Senha :".$senha;




    ?>
</body>
</html>