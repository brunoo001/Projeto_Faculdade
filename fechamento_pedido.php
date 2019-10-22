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
    <div class="col-md-12">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <p class="prod-name">Produto</p>
                    </div>
                    <div class="col-md-3">
                        <p class="prod-name">Preço</p>
                    </div>
                    <div class="col-md-3">
                        <p class="prod-name">Quantidade</p>
                    </div>
                    <div class="col-md-3">
                        <p class="prod-name">Total</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img class="prod-lista" src="images/template/img_produto/prod1.jpg" alt="Prouto">
                    </div>
                    <div class="col-md-3">
                        <p class="preco">R$ 200,00 </p>
                    </div>
                    <div class="col-md-3">
                        <form name="me" class="qtd-horizontal">
                            <input class="qtd" type="button" name="botaomais" value="+" onclick="mais1();"><br>
                            <input class="qtd" type="text" name="textgol" value="1"><br>
                            <input class="qtd" type="button" name="botaomenos" value="-" onclick="menos1();">
                        </form>
                    </div>
                    <div class="col-md-3">
                        <p class="prod-name">R$ 20,00 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4 formas-entrega">
                        <label class="letter-white"> Formas de entrega </label>
                        <div class="content">
                            <form action="">
                                <div class="container">
                                    <label for=""> Calcular frete: </label><br>
                                    <label for="cep"> CEP: </label>
                                    <input type="" id="cep" name="cep">
                                    <button type="submit" class="button-padrao"> Calcular </button>
                                    <label for=""> Total frete: </label> <label> R$2,00</label><br>
                                    <small> Tipos de entrega </small>
                                    <div class="form-group">
                                        <input type="radio" name="frete"> Retirar na loja. <br>
                                        <input type="radio" name="frete"> Receber no meu endereço.
                                    </div>   
                                </div>
                            </form>
                        </div>
                        <a href="preenche_email.php" type="button" class="button-padrao margin-top"> Fechar pedido </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="container">
                <label class="letter-white  label-bandeiras"> Pague com: </label>
                <div class="row">
                    <img class="bandeiras_cartoes" src="images/template/bandeiras_cartoes.png" alt="">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script>
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