<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $con = mysqli_connect('localhost', 'root', '', 'deliverybank');
        $sql = "SELECT * FROM user WHERE EMail = '$email' and Senha ='$senha'";
              
        if(mysqli_num_rows(mysqli_query($con, $sql)) == 1) {
            $_SESSION['EfetuadoLogin'] = "Yes";
            $_SESSION['MensagemDeLogin'] = "Sucesso";
            header('Location: telaInicial.php');
        }else{
            $_SESSION['EfetuadoLogin'] = "No";
            $_SESSION['MensagemDeLogin'] = "Erro";
            header('Location: loginScreen.php');
        }
    ?>
</body>
</html>