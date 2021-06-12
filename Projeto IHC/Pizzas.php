<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <style>
    .titleRectangle{
        position: absolute;
        width: 680px;
        height: 66px; 
        background: #F8EFEF;
    }

    .Titulo{
        position: absolute;
    }

    img{
        position: absolute;
    }


    .MensagemPortuguesa {
	    position: absolute;
    }

    .MensagemQuatroQueijos {
	    position: absolute;
    }

    .MensagemMarguerita {
	    position: absolute;
    }

    .MensagemCalabresa {
	    position: absolute;
    }

    .MensagemPeperoni {
	    position: absolute;
    }

    .MensagemFrango {
	    position: absolute;
    }


    .btnPortuguesa {
        cursor: pointer;
	    position: absolute;
    }

    .btnQuatroQueijos {
        cursor: pointer;
	    position: absolute;
    }
    
    .btnMarguerita {
        cursor: pointer;
	    position: absolute;
    }

    .btnCalabresa {
        cursor: pointer;
	    position: absolute;
    }

    .btnPeperoni {
        cursor: pointer;
	    position: absolute;
    }

    .btnFrango {
        cursor: pointer;
	    position: absolute;
    }

    .btncancelar{
    }


    </style>

</head>
<body style="background: rgb(220, 132, 29)">
    <?php
        session_start();
        if($_SESSION['EfetuadoLogin'] == "No"){
            $_SESSION['MensagemRequerLogin'] = "É necessário realizar o login para continuar";
            header('Location: loginScreen.php');
        }

    ?>

    <div .container>
        <div class="container">
            <div class="col-md-7" style = "margin-left: 250px; margin-top: 90px;" >

                <div class = "titleRectangle"></div>
                
   
                <div class = "btnPortuguesa">
                        <img  src = "Imagens/Pizzas/PizzaPortuguesa.png"  width="337px" height="225px" style = "top: 100px; left: 0px;">
                </div>                
                
                <div class = "btnQuatroQueijos">
                    <img  src = "Imagens/Pizzas/PizzaQuatroQueijos.png"  width="337px" height="225px" style = "top: 100px; left: 343px;">
                </div>
                

                <div class = "btnMarguerita">
                    <img  src = "Imagens/Pizzas/PizzaMarguerita.jpg"  width="337px" height="225px" style = "top: 500px; left: 0px;">
                </div>

                <div class = "btnCalabresa">
                    <img  src = "Imagens/Pizzas/PizzaCalabresa.jpg"  width="337px" height="225px" style = "top: 500px; left: 343px;">
                </div>

                <div class = "btnPeperoni">
                    <img  src = "Imagens/Pizzas/PizzaPepperoni.png"  width="337px" height="225px" style = "top: 900px; left: 0px;">
                </div> 

                <div class = "btnFrango">
                    <img  src = "Imagens/Pizzas/PizzaFrango.jpg" width="337px" height="225px" style = "top: 900px; left: 343px;">
                </div>

                <div class = "Titulo"><img  src = "Imagens/Pizzas/Titulo.png" style = "top: 20px; left: 287px;"></div>
              
                <div class = "MensagemPortuguesa">
                    <div class='container p-3 my-3 bg-dark text-white' style = "width: 500px; height: 193px; position: absolute; left: 93px; border-radius: 20px;">
                        <form action="AtualizaFood.php" method="post">
                            <div class="form-group">
                                <p align = center> Qual a Quantidade desejada de <b>Pizzas de Portuguesa</b> ?</p><br>
                                <input type = "hidden" name = "pizza" value = "Pizza de Portuguesa">
                                <p align = center>
                                    <input class="form-control" type="number" name="qtd" placeholder="1-9" min = "1" max = "9" style='border-radius: 30px; width: 70px;' required>
                                <p>
                                <table width = 100%>
                                    <tr>
                                        <td>
                                        <input class="btn btn-block btn-success" type="submit" value="Comprar" name="comprar">
                                        </td>
                                        <td align = right>
                                            <div class = "btncancelar">
                                                <button type ="button" class="btn btn-danger"> Cancelar</button>
                                            <div>
                                        </td>
                                    </tr>
                                </table>
                            </div>  
                        </form>
                    </div>
                </div>

                <div class = "MensagemQuatroQueijos">
                    <div class='container p-3 my-3 bg-dark text-white' style = "width: 500px; height: 193px; position: absolute; left: 93px; border-radius: 20px;">
                        <form action="AtualizaFood.php" method="post">
                            <div class="form-group">
                                <p align = center> Qual a Quantidade desejada de <b>Pizzas de Quatro Queijos</b> ?</p><br>
                                <input type = "hidden" name = "pizza" value = "Pizza de Quatro Queijos">
                                <p align = center>
                                    <input class="form-control" type="number" name="qtd" placeholder="1-9" min = "1" max = "9" style='border-radius: 30px; width: 70px;' required>
                                <p>
                                <table width = 100%>
                                    <tr>
                                        <td>
                                        <input class="btn btn-block btn-success" type="submit" value="Comprar" name="comprar">
                                        </td>
                                        <td align = right>
                                            <div class = "btncancelar">
                                                <button type ="button" class="btn btn-danger"> Cancelar</button>
                                            <div>
                                        </td>
                                    </tr>
                                </table>
                            </div>  
                        </form>
                    </div>
                </div>

                <div class = "MensagemMarguerita">
                    <div class='container p-3 my-3 bg-dark text-white' style = "width: 500px; height: 193px; position: absolute; left: 93px; border-radius: 20px;">
                        <form action="AtualizaFood.php" method="post">
                            <div class="form-group">
                                <p align = center> Qual a Quantidade desejada de <b>Pizzas de Marguerita</b> ?</p><br>
                                <input type = "hidden" name = "pizza" value = "Pizza de Marguerita">
                                <p align = center>
                                    <input class="form-control" type="number" name="qtd" placeholder="1-9" min = "1" max = "9" style='border-radius: 30px; width: 70px;' required>
                                <p>
                                <table width = 100%>
                                    <tr>
                                        <td>
                                        <input class="btn btn-block btn-success" type="submit" value="Comprar" name="comprar">
                                        </td>
                                        <td align = right>
                                            <div class = "btncancelar">
                                                <button type ="button" class="btn btn-danger"> Cancelar</button>
                                            <div>
                                        </td>
                                    </tr>
                                </table>
                            </div>  
                        </form>
                    </div>
                </div>

                <div class = "MensagemCalabresa">
                    <div class='container p-3 my-3 bg-dark text-white' style = "width: 500px; height: 193px; position: absolute; left: 93px; border-radius: 20px;">
                        <form action="AtualizaFood.php" method="post">
                            <div class="form-group">
                                <p align = center> Qual a Quantidade desejada de <b>Pizzas de Calabresa</b> ?</p><br>
                                <input type = "hidden" name = "pizza" value = "Pizza de Calabresa">
                                <p align = center>
                                    <input class="form-control" type="number" name="qtd" placeholder="1-9" min = "1" max = "9" style='border-radius: 30px; width: 70px;' required>
                                <p>
                                <table width = 100%>
                                    <tr>
                                        <td>
                                        <input class="btn btn-block btn-success" type="submit" value="Comprar" name="comprar">
                                        </td>
                                        <td align = right>
                                            <div class = "btncancelar">
                                                <button type ="button" class="btn btn-danger"> Cancelar</button>
                                            <div>
                                        </td>
                                    </tr>
                                </table>
                            </div>  
                        </form>
                    </div>
                </div>

                <div class = "MensagemPeperoni">
                    <div class='container p-3 my-3 bg-dark text-white' style = "width: 500px; height: 193px; position: absolute; left: 93px; border-radius: 20px;">
                        <form action="AtualizaFood.php" method="post">
                            <div class="form-group">
                                <p align = center> Qual a Quantidade desejada de <b>Pizzas de Peperoni</b> ?</p><br>
                                <input type = "hidden" name = "pizza" value = "Pizza de Peperoni">
                                <p align = center>
                                    <input class="form-control" type="number" name="qtd" placeholder="1-9" min = "1" max = "9" style='border-radius: 30px; width: 70px;' required>
                                <p>
                                <table width = 100%>
                                    <tr>
                                        <td>
                                        <input class="btn btn-block btn-success" type="submit" value="Comprar" name="comprar">
                                        </td>
                                        <td align = right>
                                            <div class = "btncancelar">
                                                <button type ="button" class="btn btn-danger"> Cancelar</button>
                                            <div>
                                        </td>
                                    </tr>
                                </table>
                            </div>  
                        </form>
                    </div>
                </div>

                <div class = "MensagemFrango">
                    <div class='container p-3 my-3 bg-dark text-white' style = "width: 500px; height: 193px; position: absolute; left: 93px; border-radius: 20px;">
                        <form action="AtualizaFood.php" method="post">
                            <div class="form-group">
                                <p align = center> Qual a Quantidade desejada de <b>Pizza de Frango com Catupiry</b> ?</p><br>
                                <input type = "hidden" name = "pizza" value = "Pizza de Frango com Catupiry">
                                <p align = center>
                                    <input class="form-control" type="number" name="qtd" placeholder="1-9" min = "1" max = "9" style='border-radius: 30px; width: 70px;' required>
                                <p>
                                <table width = 100%>
                                    <tr>
                                        <td>
                                        <input class="btn btn-block btn-success" type="submit" value="Comprar" name="comprar">
                                        </td>
                                        <td align = right>
                                            <div class = "btncancelar">
                                                <button type ="button" class="btn btn-danger"> Cancelar</button>
                                            <div>
                                        </td>
                                    </tr>
                                </table>
                            </div>  
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>

    $("div.MensagemPortuguesa").hide();
    $("div.MensagemQuatroQueijos").hide();
    $("div.MensagemMarguerita").hide();
    $("div.MensagemCalabresa").hide();
    $("div.MensagemPeperoni").hide();
    $("div.MensagemFrango").hide();
    
        $("div.btnPortuguesa").click(function() {
            $("div.MensagemPortuguesa").fadeIn('slow').animate
            ({"top": "40%"}, (1500));
            $("div.MensagemQuatroQueijos").hide();
            $("div.MensagemMarguerita").hide();
            $("div.MensagemCalabresa").hide();
            $("div.MensagemPeperoni").hide();
            $("div.MensagemFrango").hide();
        });

        $("div.btnQuatroQueijos").click(function() {
            $("div.MensagemQuatroQueijos").fadeIn('slow').animate
            ({"top": "40%"}, (1500));
            $("div.MensagemPortuguesa").hide();
            $("div.MensagemMarguerita").hide();
            $("div.MensagemCalabresa").hide();
            $("div.MensagemPeperoni").hide();
            $("div.MensagemFrango").hide();

        });

        $("div.btnMarguerita").click(function() {
            $("div.MensagemMarguerita").fadeIn('slow').animate
            ({"top": "40%"}, (1500));
            $("div.MensagemPortuguesa").hide();
            $("div.MensagemQuatroQueijos").hide();
            $("div.MensagemCalabresa").hide();
            $("div.MensagemPeperoni").hide();
            $("div.MensagemFrango").hide();
        });

        $("div.btnCalabresa").click(function() {
            $("div.MensagemCalabresa").fadeIn('slow').animate
            ({"top": "40%"}, (1500));
            $("div.MensagemPortuguesa").hide();
            $("div.MensagemQuatroQueijos").hide();
            $("div.MensagemMarguerita").hide();
            $("div.MensagemPeperoni").hide();
            $("div.MensagemFrango").hide();
        });

        $("div.btnPeperoni").click(function() {
            $("div.MensagemPeperoni").fadeIn('slow').animate
            ({"top": "40%"}, (1500));
            $("div.MensagemPortuguesa").hide();
            $("div.MensagemQuatroQueijos").hide();
            $("div.MensagemMarguerita").hide();
            $("div.MensagemCalabresa").hide();
            $("div.MensagemFrango").hide();
        });

        $("div.btnFrango").click(function() {
            $("div.MensagemFrango").fadeIn('slow').animate
            ({"top": "40%"}, (1500));
            $("div.MensagemPortuguesa").hide();
            $("div.MensagemQuatroQueijos").hide();
            $("div.MensagemMarguerita").hide();
            $("div.MensagemCalabresa").hide();
            $("div.MensagemPeperoni").hide();

        });

        $("div.btncancelar").click(function() {
            $("div.MensagemPortuguesa").hide();
            $("div.MensagemQuatroQueijos").hide();
            $("div.MensagemMarguerita").hide();
            $("div.MensagemCalabresa").hide();
            $("div.MensagemPeperoni").hide();
            $("div.MensagemFrango").hide();
        });

</script>
        
    
</body>
</html>