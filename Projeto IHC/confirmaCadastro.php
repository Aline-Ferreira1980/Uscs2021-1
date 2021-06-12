<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $nome   = $_POST["nome"];
        $senha  = $_POST["senha"];
        $email  = $_POST["email"];

        $con = mysqli_connect('localhost', 'root', '', 'deliverybank');
        $sql = "INSERT INTO user VALUES ('$email','$nome', '$senha')";
        if (mysqli_query($con, $sql)){
            $_SESSION['MensagemCriacaoCadastro'] = "Sucesso";
            header('Location: loginScreen.php');
        }else{
            $sql2 = "SELECT * FROM user WHERE EMail = '$email'";
                if(mysqli_num_rows(mysqli_query($con, $sql2)) == 1){
                    $_SESSION['MensagemCriacaoCadastro'] = "ErroEmail";
                    header('Location: CadastroUsuario.php');
                }else{
                    $_SESSION['MensagemCriacaoCadastro'] = "ErroExtra";
                    header('Location: CadastroUsuario.php');
                }
        }
        mysqli_close($con);



    ?>
</body>
</html>