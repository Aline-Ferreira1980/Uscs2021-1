<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style>
        .titleRectangle{
            position: absolute;
            width: 642px;
            height: 66px; 
            background: #F8EFEF;
        }
    </style>

    <title>Document</title>
</head>
<body style = "background: rgb(220, 132, 29)">
<?php
    session_start();

    if($_SESSION['MensagemRequerLogin'] != ""){
        echo    "<div class='container'>
                    <div class='row'>
                            <div align=center class='alert alert-success'>".$_SESSION['MensagemRequerLogin']."!!!</div>
                    </div>
                </div>";
        $_SESSION['MensagemRequerLogin'] = "";
    }

    if($_SESSION['MensagemDeLogin'] == "Erro"){
            echo    "<div class='container'>
                        <div class='row'>
                            <div align=center class='alert alert-danger'>O login não foi efetuado</div>
                        </div>
                    </div>";
            $_SESSION['MensagemDeLogin'] = "";
    }

    if($_SESSION['MensagemCriacaoCadastro'] == "Sucesso"){
        echo    "<div class='container'>
                    <div class='row'>
                        <div align=center class='alert alert-success'>O cadastro foi realizado com sucesso!</div>
                    </div>
                </div>";
        $_SESSION['MensagemCriacaoCadastro'] = "";
    }
?>
<div class="container">
        <div class="row">
            <div class="col-md-7" style="margin-left:250px;margin-top:200px;">
                <div class = "titleRectangle"></div>
                    <br><br><br><br>
                    <form action="confirmaLogin.php" method="post">

                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="E-mail">
                    </div>
                    <br><br>
                    <div class="form-group">
                        <input class="form-control" type="password" name="senha" placeholder="Senha" required>
                    </div>
                    <br>
                    <div class="form-group">
                    <table width="100%">
                         <tr>
                            <td>
                                <input class="btn btn-block btn-primary" style="border-radius: 20px;" type="submit" value="Entrar" name="enviar">
                            </td>
                            <td align = "center">
                                <a href = "telaInicial.php" class="btn btn-block btn-info" style="border-radius: 20px;" > Voltar </a>
                            </td>
                            <td align = "right">
                                <a href = "CadastroUsuario.php" class="btn btn-block btn-info" style="border-radius: 20px;" > Cadastrar </a>
                            </td>
                        </tr>
                    </table>
                    </div>
                </form>
          </div>
      </div>
  </div>
    
</body>
</html>