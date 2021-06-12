<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Document</title>
</head>
<body style="background: rgb(220, 132, 29)">

<div .container>
      <div class="container">
          <div class="col-md-7" style = "margin-left:250px; margin-top:250px;" >
          
    <?php

        ini_set('display_errors', 0 );
        error_reporting(0);

        session_start();
        if($_SESSION['MensagemCriarTabela'] != ""){
            echo    "<div class='container'>
                        <div class='row'>
                            <div class='col-md-7' style='margin-left:140px;'>
                                <div align=center class='alert alert-success'>".$_SESSION['MensagemCriarTabela']."!!!</div>
                            </div>
                        </div>
                    </div>";
        }
        
        $_SESSION['Start'] = 1;
        $_SESSION['EfetuadoLogin'] = "No";
        $_SESSION['MensagemDeLogin'] = "";
        $_SESSION['MensagemRequerLogin'] = "";
        $_SESSION['MensagemDEErroDB'] = "";
        $_SESSION['MensagemCriarTabela'] = "";
        $_SESSION['MensagemCriacaoCadastro'] = "";

        

        $con = mysqli_connect("localhost","root","","deliverybank");
        if(mysqli_connect_errno()){

            echo "<div class='alert alert-danger'>
            
            <div style = 'text-align: justify;'>
            <h2 style = 'text-align: center;'><b>Atenção!</b></h2>
            <br>
            Verificamos um erro na comunicação com o Banco de Dados. <br>
            Caso seja a primeira vez que esteja acessando o projeto será necessário fazer a criação do Banco de Dados no MySQL.<br>
            Para acessar as demais páginas é necessário criar o Banco de Dados, para isso clique no botão abaixo.
            </div>
            <br>
            As configurações inicais do XAMPP as quais são necessárias para a criação do BD são:<br><br>
            <b>Local de acesso:</b> localhost<br>
            <b>Usuário:</b> root.<br>
            <b>Senha:</b> <i>Não deve possuir senha de acesso</i>.<br>
            </div>
            <p align=center>
            <br> <br> 
            <a class='btn btn-small btn-dark' style='border-radius: 30px;' href = 'createDatabase.php'>Criar BD e tabelas</a>
            </p>";

        }else{
            echo "
                    <div class='container p-3 my-3 bg-dark text-white'>
                        <h5 align=center>Seja bem-vindo ao Delivery da Turma</h5>
                        <br> &emsp;&emsp;&emsp; Neste projeto poderemos acessar alguns dos pratos mais consumidos e saborosos e estão disponíveis para você e sua família se deliciarem. Bom Apetite!!!<br><br>
                        At.te <br>
                        Aline Ferreira.<br>
                        Lucas Leite Meslisi.
                    </div>

                    <p align=center>
                        <br> <br>  
                        <a class='btn btn-small btn-primary' style='border-radius: 30px;' href='telaInicial.php'>Acessar página de entrada</a>
                    </p>";
        }
  
    ?>

            </div>
        </div>
    </div>
</body>
</html>