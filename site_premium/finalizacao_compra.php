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
                   <div class="col-md-12">
                        <div class="row">
                           <div class="col-md-4">
                               <h3 class="letter-white"> Dados pessoais</h3>
                               <label class="letter-white">E-mail: </label>
                               <input type="text" name="email" class="input-dados">
                               <div class="campo">
                                   <div class="col-md-6">
                                       <label class="letter-white">Nome: </label>
                                       <input type="text" name="nome" class="input-dados">
                                   </div>
                                   <div class="col-md-6">
                                       <label class="letter-white">Sobrenome: </label>
                                       <input type="text" name="sobrenome" class="input-dados">
                                   </div>
                               </div>
                               <div class="campo">
                                   <div class="col-md-6">
                                       <label class="letter-white">CPF: </label>
                                       <input type="text" name="cpf" class="input-dados">
                                   </div>
                                   <div class="col-md-6">
                                       <label class="letter-white">Telefone: </label>
                                       <input type="text" name="telefone" class="input-dados">
                                   </div>
                               </div>
                               <input type="checkbox" name="newsletter"> <label class="letter-white"> Quero receber e-mails com promoções </label>
                           </div>
                           <div class="col-md-4">
                                <h3 class="letter-white"> Pagamento </h3>
                                <label class="letter-white">Número do cartão: </label>
                                <input type="text" name="numero_cartao" class="input-dados">
                                <input type="radio" name="tipo-cartao" value="1" class="radio-tipo-cartao">
                                <input type="radio" name="tipo-cartao" value="2" class="radio-tipo-cartao">
                                <input type="radio" name="tipo-cartao" value="3" class="radio-tipo-cartao">
                                <input type="radio" name="tipo-cartao" value="4" class="radio-tipo-cartao">
                                <input type="radio" name="tipo-cartao" value="5" class="radio-tipo-cartao">
                                <input type="radio" name="tipo-cartao" value="6" class="radio-tipo-cartao">
                                <input type="radio" name="tipo-cartao" value="7" class="radio-tipo-cartao">
                                <img src="images/template/bandeiras_cartoes.png" class="bandeiras-pagmento" alt="Bandeiras">
                                <select name="pagamento" class="pagamento-arredondado">
                                    <option value="1"> Pagamento à vista </option>
                                    <option value="2"> Parcelado em 2x </option>
                                    <option value="3"> Parcelado em 3x </option>
                                    <option value="4"> Parcelado em 4x </option>
                                    <option value="5"> Parcelado em 5x </option>
                                </select>
                                <label class="letter-white">Nome impresso no cartão: </label>
                                <input type="text" name="nome_impresso_cartao" class="input-dados">
                                <label class="letter-white"> Validade </label>
                                 <select name="mes" class="arredondado">
                                    <option value=""> Mês </option>
                                    <option value="1"> Jan </option>
                                    <option value="2"> Fev </option>
                                    <option value="3"> Mar </option>
                                    <option value="4"> Abril </option>
                                    <option value="5"> Maio </option>
                                    <option value="6"> Jun </option> <option value="7"> Abril </option>
                                    <option value="7"> Jul </option>
                                    <option value="8"> Ago </option>
                                    <option value="9"> Set </option>
                                    <option value="10"> Out </option>
                                    <option value="11"> Nov </option>
                                    <option value="12"> Dez </option>
                                </select>
                                <label class="letter-white">/</label>
                                <select name="ano" class="arredondado">
                                    <option value=""> Ano </option>
                                        <?php for ($i = date(Y); $i != 1949; $i--){ ?>
                                            <option value="<?php echo $i;?>"> <?php echo $i;?> </option> 
                                        <?php };?>
                                </select>
                                <label class="letter-white"> Código de <br> segurança </label>
                                <input type="text" name="codigo_seguranca" class="input-codigo-seguranca"><br>
                                <input type="checkbox"> <label class="letter-white"> O endereço da fatura é o mesmo da entrega </label>
                           </div>
                           <div class="col-md-4">
                               <h3 class="letter-white"> Resumo do pedido </h3>
                               <label class="letter-white"> Subtotal</label> <label class="preco mg-left"> R$ 4,00 </label> <br>

                               <label class="letter-white"> Entrega </label> <label class="preco mg-left"> R$ 4,00 </label> <br>
                               <button class="finalizar-compra"> Finalizar compra </button>
                           </div>
                        </div>
                   </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>