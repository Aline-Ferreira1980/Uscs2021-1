<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <?php
            Session_Start();
                $con = mysqli_connect("localhost","root","");
                if(mysqli_connect_errno()){
                    echo "Erro ao conectar com a base de  dados: " . mysqli_connect_errno();
                }else{
                    $sql="CREATE DATABASE DeliveryBank";
                    if(mysqli_query($con,$sql)){
                        header('Location: createTables.php');
                    }else{
                        $mensagemErro = "Erro: " .mysqli_error($con);
                        if($mensagemErro === "Erro: Can't create database 'bank'; database exists"){
                            $_SESSION['MensagemDeErroBD'] = "Erro: Banco de dados já existe!";
                            header('Location: telaInicial.php');
                        }else;
                            $_SESSION['MensagemDeErroBD'] = $mensagemErro;
                    }
                mysqli_close($con);
                }  
            
        ?>
</body>
</html>
