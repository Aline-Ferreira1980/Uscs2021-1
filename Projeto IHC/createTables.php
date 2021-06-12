<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php
        Session_Start();
                $con = mysqli_connect("localhost","root","","DeliveryBank");
                $mysql[0] = "CREATE TABLE User(EMail VARCHAR(30), Nome VARCHAR(30), Senha VARCHAR(30), PRIMARY KEY(EMail))";
                $mysql[1] = "CREATE TABLE Food(codigo INT(30) NOT NULL AUTO_INCREMENT, Nome VARCHAR(30), Valor INT(5), Quantidade INT(2),  PRIMARY KEY(codigo))";

                //fazer isso para todos os alimentos
            $mysql[2] = "INSERT INTO food (Nome, Valor, Quantidade) VALUES ('Pizza de Portuguesa', 40, 0)";
            $mysql[3] = "INSERT INTO food (Nome, Valor, Quantidade) VALUES ('Pizza de Quatro Queijos', 30, 0)";
            $mysql[4] = "INSERT INTO food (Nome, Valor, Quantidade) VALUES ('Pizza de Marguerita', 36, 0)";
            $mysql[5] = "INSERT INTO food (Nome, Valor, Quantidade) VALUES ('Pizza de Calabresa', 30, 0)";
            $mysql[6] = "INSERT INTO food (Nome, Valor, Quantidade) VALUES ('Pizza de Peperoni', 40, 0)";
            $mysql[7] = "INSERT INTO food (Nome, Valor, Quantidade) VALUES ('Pizza de Frango com Catupiry', 36, 0)";
                
                
                for($i = 0; $i < count($mysql); $i++){
                    $sql = strval($mysql[$i]);
                    if (mysqli_query($con,$sql)){
                        $_SESSION['MensagemCriarTabela'] = "BD e tabelas criadas com exito!";
                        header('Location: index.php');
                    }else{
                        $_SESSION['MensagemCriarTabela'] = ("Erro " . mysqli_error($con));
                        header('Location: index.php');
                    }
                }
                
        ?>
    </body>
</html>