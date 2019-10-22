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
    <div class="row">
        <div class="container">
            <form action="">
                <div class="row">
                    <div class="email col-md-6">
                        <label class="letter-white"> Para finalizar a compra, informe seu e-mail. Rápido. Fácil. Seguro.</label><br>
                        <input type="text" placeholder="seu@email.com" class="input-email" required>
                        <a href="finalizacao_compra.php" class="button-continuar-email"> Continuar </a>
                        <label class="letter-white margin-top-lbl"> Usamos seu e-mail de forma 100% segura para: </label>
                        <ul>
                            <li class="letter-white d-block"> Identificar seu perfil </li>
                            <li class="letter-white d-block"> Notificar sobre o andamento do seu pedido </li>
                            <li class="letter-white d-block"> Gerenciar seu histórico de compras </li>
                            <li class="letter-white d-block"> Acelerar o preenchimento de suas informações </li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>