<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    Session_Start();
    $nome = $_POST["pizza"];
    $qtd = $_POST["qtd"];
    echo $nome." ".$qtd;

    $con = mysqli_connect('localhost', 'root', '', 'deliverybank');
    $sql = "SELECT quantidade FROM food WHERE Nome = '$nome'";

    if (mysqli_query($con,$sql)){
    $resultado = mysqli_query($con, $sql);
    }
    else{
        echo "cai no erro";
        //$_SES SION['MensagemErro'] = "É necessário criar a base de dados primeiro para acessar a página de registros";  
        //header('Location: Controller.php');      
    }

    $cliente = mysqli_fetch_array($resultado);
    $AtualQtd = $cliente['quantidade'];

    if(($AtualQtd + $qtd) <= 9){
        $AtualQtd = $AtualQtd + $qtd;
        $sql = "UPDATE food SET Quantidade = '$AtualQtd' WHERE Nome = '$nome'";
        if(mysqli_query($con,$sql)){
            echo "Item inserido no caixa com sucesso";
            header('Location: caixa.php');
        }else{
            echo "Cai no errado tente rever o sql novamente";
        }
    }else{
        if($AtualQtd < 9){
            echo "Valor limite ultrapassado cabem apenas: ". (9-$AtualQtd). " ". $nome." no carrinho";
            echo "Valor atualizado para o valor máximo";
            $AtualQtd = 9;
            $sql = "UPDATE food SET Quantidade = '$AtualQtd' WHERE Nome = '$nome'";
            if(mysqli_query($con,$sql)){
                echo "cai no certo e atualizei a tabela com o valor máximo permitido";
            }else{
                echo "Cai no errado tente rever o sql novamente erro 2";
            }
        }else{
            echo "Não cabem mais ".$nome. " no carrinho";
        }
    }

    mysqli_close($con);
?>


</body>
</html>