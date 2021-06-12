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
        if($_SESSION['MensagemCriacaoCadastro'] == "ErroEmail"){
            echo    "<div class='container'>
                         <div class='row'>
                            <div align=center class='alert alert-danger'>E-mail já cadastrado anteriormente</div>
                        </div>
                    </div>";
            $_SESSION['MensagemCriacaoCadastro'] = "";
        }

        if($_SESSION['MensagemCriacaoCadastro'] == "ErroExtra"){
            echo    "<div class='container'>
                         <div class='row'>
                            <div align=center class='alert alert-danger'>Não foi possível efetuar o cadastro<br>
                            Verifique os dados inseridos novamente</div>
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
                <form action="confirmaCadastro.php" method="post">

                    <div class="form-group">
                        <input class="form-control" type="text" name="nome" placeholder="Nome" style='border-radius: 30px;' required>
                    </div>
                    <br>

                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="E-mail" style='border-radius: 30px;' required>
                    </div>
                    <br>
             
                    <div class="form-group">
                        <input class="form-control" type="password" id="senha" name="senha" placeholder="Senha" style='border-radius: 30px;' required>
                    </div>
                    <br>
                    <div class="form-group">
                        <input class="form-control" type="password" id="senhaConfirma"name="senhaConfirma" placeholder="Confirmar senha" style='border-radius: 30px;' required>
                    </div>
                    <br>
                    
                    <div class="form-group">
                    <table width="100%">
                         <tr>
                            <td align = "center">
                                <input class="btn btn-block btn-primary" style="border-radius: 20px;" type="submit" value="Confirmar" name="confirmar">
                            </td>
                        </tr>
                    </div>
                </form>

          </div>
      </div>
  </div>
  <script>
          var senha = document.getElementById("senha"),
              senhaConfirma = document.getElementById("senhaConfirma");

        function validatePassword(){
            if(senha.value != senhaConfirma.value) {
                senhaConfirma.setCustomValidity("Senhas diferentes!");
            } else {
                senhaConfirma.setCustomValidity('');
            }
        }

        senha.onchange = validatePassword;
        senhaConfirma.onkeyup = validatePassword;
    </script>
</body>
</html>