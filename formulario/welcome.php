<?php 

if(isset($_POST['user'])) $usuario = $_POST['user'];
if(isset($_POST['pass'])) $senha = $_POST['pass'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Manrope&display=swap" rel="stylesheet">

    <title>Boas-vindas</title>

</head>
<body>
    
<div class="container">
    <div class="box-result">
        <h1 class="welcome">Olá 
            <?php 
                echo $usuario
            ?>
        !</h1>
        <a class="btn-return" href="index.html" >Voltar</a>
    </div>
</div>

</body>
</html>