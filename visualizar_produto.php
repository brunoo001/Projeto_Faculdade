<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title> Loja - Premium</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <header class="header">
        <div class="menu">
            <ul>
                <li> <a href=""> Minha conta </a> </li>
                <li> <a href="fechamento_pedido.php"> Sac </a> </li>
                <li>
                    <form class="busca" action="" method="">
                        <input type="text" class="buscar" placeholder="O QUE PROCURA?" name="busca" autocomplete="off">
                        <button class="button-busca"><i class=""> buscar</i></button>
                    </form>
                </li>
            </ul>
        </div>
        <div class="logo">
            <a href="index.php"><img src="images/template/premium-chocolates.png" alt="Logo"></a>
        </div>
    </header>
    <div class="col-md-12 content">
        <div class="row">
            <div class="col-md-5" style="text-align: center;">
                <img src="images/template/img_produto/prod1.jpg" alt="" class="img-prod-2">
            </div>
            <div class="col-md-3">
                <h2 class="nome-prod"> Hot Chocolate</h2>
                <div class="row">
                    <div class="col-md-6 max-width">
                        <form name="me">
                            <input class="qtd" type="button" name="botaomais" value="+" onclick="mais1();"><br>
                            <input class="qtd" type="text" name="textgol" value="1"><br>
                            <input class="qtd" type="button" name="botaomenos" value="-" onclick="menos1();">
                        </form>                
                    </div>
                    <div class="col-md-6">
                        <p class="preco-prod">R$ 20,00</p>
                    </div>
                    <div class="botoes">
                        <a type="button" href="produto.php"> Continuar compra </a>
                        <a type="button" href="fechamento_pedido.php"> Finalizar compra </a>
                    </div>
                </div>
                <div class="row">
                    <div class="descricao">
                        <h3 class="letter-white"> Descrição do Produto </h3>
                        <p class="letter-white justify"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    <script src="jquery-2.1.3.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    function mais1() {
        me.textgol.value = parseInt(me.textgol.value)+1;
    }
    function menos1(){
        var dec = parseInt(me.textgol.value);
        if(dec <= 1){
            me.textgol.value=1;
        } else {
            me.textgol.value=dec-1;
        }
    }
</script>