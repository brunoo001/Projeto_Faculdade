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
            <img src="images/template/premium-chocolates.png" alt="Logo">
        </div>
    </header>
    <div id="wrapper" class="toggled">
        <div id="sidebar-wrapper">
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="produto.php"> INVERNO </a></li>
                <li class="nav-item"><a class="nav-link" href="produto.php"> PRESENTES </a> </li>
                <li class="nav-item"><a class="nav-link" href="produto.php"> BOMBONS </a> </li>
                <li class="nav-item"><a class="nav-link" href="produto.php"> CLÁSSICOS PREMIUM </a> </li>
                <li class="nav-item"><a class="nav-link" href="produto.php"> TABLETES </a> </li>
                <li class="nav-item"><a class="nav-link" href="produto.php"> ZERO AÇÚCAR </a> </li>
                <li class="nav-item"><a class="nav-link" href="produto.php"> VARIEDADES </a> </li>
                <li class="nav-item"><a class="nav-link" href="produto.php"> DRAGEÉS </a> </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img style="height: 590px" class="d-block w-100" src="images/template/00002395_banner-fondue-ok-01.jpg" alt="Primeiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img style="height: 590px" class="d-block w-100" src="images/template/cacau.jpg" alt="Segundo Slide">
                        <div class="title">
                            <h1> PREMIUM CHOCOLATES </h1>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img style="height: 590px" class="d-block w-100" src="images/template/00002061_premium-chocolates-3.jpg" alt="Terceiro Slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-bemvindo">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Olá, Bem vindo a Premium chocolates!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="col-md-12">
                        <label class="label-cep"> Para ver os produtos disponíveis na sua região digite seu CEP: </label>
                    </div>
                    <div class="modal-footer">
                        <input type="text" class="form-control" name="cep" placeholder="00000-000">
                        <button type="submit" class="btn btn-brown">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="jquery-2.1.3.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function() {
        $("#modalExemplo").modal('show');
    });
</script>