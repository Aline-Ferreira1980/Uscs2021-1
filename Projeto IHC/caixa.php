<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<style>
    
    td{
        text-align: center;
      }

    .btnAdiciona{
        cursor: pointer;
        border: none;
    }

    .btnSubtrai{
        cursor: pointer;
        border: none;
    }
        
    
</style>

</head>
<body style="background: rgb(220, 132, 29)">
<?php
    Session_Start();
        $con = mysqli_connect('localhost', 'root', '', 'deliverybank');
        $sql = "SELECT * FROM food";
        if (mysqli_query($con,$sql)){
            $resultado = mysqli_query($con, $sql);
        }
        else{
            //$_SESSION['MensagemErro'] = "É necessário criar a base de dados primeiro para acessar a página de registros";  
            //header('Location: Controller.php');      
            echo "cai no errado";
        }

        mysqli_close($con);
?>    

<div .container>
    <div class="container">
        <div  class="col-md-9" style = "margin-left:135px; margin-top:90px;" >

            <table class="table table-bordered table-dark">
                <thead>
                    <tr align=center>
                        <th>Imagem</th>
                        <th>Nome</th>
                        <th>Quantidade</th>
                        <th>Valor</th>
                        <th>Total por produto</th>
                        <th>Excluir</th>
                    </tr>
                    <?php
                        $somaTotal = 0;
                        while ($food = mysqli_fetch_array($resultado)){
                            
                            $quantidade = $food['Quantidade'];
                            if($quantidade > 0){
                                $codigo = $food['codigo'];
                                $nome = $food['Nome'];
                                $valor = $food['Valor'];
                                $totalProduto = $valor*$quantidade;
                                $somaTotal = $somaTotal + $totalProduto;
                                $somar = $quantidade+1;
                                $subtrair = $quantidade-1;

                                echo "<tr class=table-light >
                                        <td>";
                                        if($codigo == 1){
                                            echo    "<img src = 'Imagens/Pizzas/PizzaPortuguesa.png' width='70px' height='45px'>";
                                        }

                                        if($codigo == 2){
                                            echo    "<img src = 'Imagens/Pizzas/PizzaQuatroQueijos.png' width='70px' height='45px'>";
                                        }

                                        if($codigo == 3){
                                            echo    "<img src = 'Imagens/Pizzas/PizzaMarguerita.jpg' width='70px' height='45px'>";
                                        }

                                        if($codigo == 4){
                                            echo    "<img src = 'Imagens/Pizzas/PizzaCalabresa.jpg' width='70px' height='45px'>";
                                        }

                                        if($codigo == 5){
                                            echo    "<img src = 'Imagens/Pizzas/PizzaPepperoni.png' width='70px' height='45px'>";
                                        }

                                        if($codigo == 6){
                                            echo    "<img src = 'Imagens/Pizzas/PizzaFrango.jpg'
                                            width='70px' height='45px'>";
                                        }

                                echo    "</td>
                                        <td>$nome</td>
                                        <td>";
                                            if($quantidade < 9){                                            echo "<a style = left: 5px; class = 'btnAdiciona' href = 'AtualizaQuantidade.php?valor=$somar&nome=$nome'><img src = 'Imagens/PaginaCarrinho/Somar.png'></a>";
                                            }
                                            echo "&emsp;&emsp;".$quantidade."&emsp;&emsp;";
                                            if($quantidade > 1){
                                            echo "<a class = 'btnSubtrai' href = 'AtualizaQuantidade.php?valor=$subtrair&nome=$nome'><img src = 'Imagens/PaginaCarrinho/Subtrair.png'></a>";
                                            }       
                                echo    "</td>
                                        <td>R$$valor</td>
                                        <td>R$$totalProduto</td>
                                        <td><a href='AtualizaQuantidade.php?valor=0&nome=$nome'><img src = 'Imagens/PaginaCarrinho/Lixeira.png' width='45px' height='45px' ></a></td>
                            </tr>";
                            }
                            }
                            echo "<tr>
                            <td colspan=4>Soma de todos os itens no carrinho: </td>
                            <td>R$$somaTotal</td>
                            <td></td>
                            </tr>";
                    ?>

                </thead>
                <tbody>
        </div>
    </div>
</div>

</body>
</html>