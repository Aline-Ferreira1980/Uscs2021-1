<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <link rel="stylesheet" href="Main.css">

  <title>Document</title>
</head>
<body>

  <body style="background: rgb(220, 132, 29)">
    <?php
      session_start();
      
      if($_SESSION['MensagemDeLogin'] == "Sucesso"){
        echo    "<div class='container'>
                    <div class='row'>
                            <div align=center class='alert alert-success'>Login Efetuado com Sucesso!</div>
                    </div>
                </div>";  
                $_SESSION['MensagemDeLogin'] = "";
    }

    ?>

    <div .container>
      <div class="container">
          <div class="col-md-7" style = "margin-left:220px; margin-top:90px;" >

          
              <div class = "titleRectangle"></div>

              <div class = "mainImages"><img  src = "Imagens/MainPage/MainTitle.png" style = "top: 17px; left: 212px;"></div>

              <div class="mainImages">
                <a class="buttonA" href = "muda.html" style = "top: 90px;" >Faça seu pedido</a>
                <a class="buttonA" href = "muda.html" style = "left: 139px; top: 90px;" >Cardápio</a>
                <a class="buttonA" href = "muda.html" style = "left: 279px; top: 90px;" >Promoções</a>
                <a class="buttonA" href = "muda.html" style = "left: 419px; top: 90px;" >Contato</a>
                <a class="buttonA" href = "loginScreen.php" style = "left: 560px; top: 90px;" >Login</a>
              </div>"
              
              
              <div class = "mover">
                <div class = "mainImages"><a href="Pizzas.html"><img class = "imagemHover" src = "Imagens/MainPage/MASSAS.png" width="337px" height="225px" style = "top: 150px; left: 0px;"></a></div>
                
                <div class = "mainImages">
                  <div class = "buttonHover" style = "top: 347px; left: 0px;">
                  <a href = "muda.html" style = "color: #111111; left: 20px;">
                      ESCOLHA A SUA MASSA FAVORITA
                    </a>
                  </div>
                </div>
              </div>

              <div class = "mover">
                <div class = "mainImages"><a href="Pizzas.php"><img class = "imagemHover"  src = "Imagens/MainPage/PIZZAS.jpg" width="337px" height="225px" style = "top: 150px; left: 343px;"></a></div>

                <div class = "mainImages">
                  <div class = "buttonHover" style = "top: 347px; left: 343px;">
                    <a href = "Pizzas.php" style="color: #111111; left: 25px">
                      ESCOLHA A SUA PIZZA FAVORITA
                    </a>
                  </div>
                </div>
              </div>

              <div class = "mover">
                <div class = "mainImages"><a href="Pizzas.html"><img class = "imagemHover"  src = "Imagens/MainPage/SALADAS.png" width="337px" height="225px" style = "top: 450px; left: 0px;"></a></div>

                <div class = "mainImages">
                  <div class = "buttonHover" style = "top: 648px; left: 0px;">
                    <a href = "Pizzas.html" style="color: #111111; left: 15px">
                      ESCOLHA A SUA SALADA FAVORITA
                    </a>
                  </div>
                </div>
              </div>
              
              <div class = "mover">              
                <div class = "mainImages"><a href="Pizzas.html"><img class = "imagemHover"  src = "Imagens/MainPage/SANDUICHES.png"  width="337px" height="225px" style = "top: 450px; left: 343px;"></a></div>

                <div class = "mainImages">
                  <div class = "buttonHover" style = "top: 648px; left: 343px;">
                    <a href = "Pizzas.html" style="color: #111111; left: 15px">
                      ESCOLHA O SEU LANCHE FAVORITO
                    </a>
                  </div>
                </div>
              </div>

          </div>
      </div>
  </div>
  
 </body>
</html>