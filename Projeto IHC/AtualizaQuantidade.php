<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $qtdAtual = $_GET['valor'];
        $nome = $_GET['nome'];

        $con = mysqli_connect('localhost', 'root', '', 'deliverybank');
        $sql = "UPDATE food SET Quantidade = '$qtdAtual' WHERE Nome = '$nome'";
        if(mysqli_query($con,$sql)){
            //echo "Alterado com sucesso";
            header('Location: caixa.php');
        }else{
            echo "Cai no errado tente rever o sql novamente";
        }
    ?>
 
</body>
</html>