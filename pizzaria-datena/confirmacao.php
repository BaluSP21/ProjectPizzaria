<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/confirm-style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	
	<title>Pizzaria Datena</title>

</head>

<body>

    <header class="cabecalho" style="background-image: url('IMG/fundo.png'); background-repeat: no-repeat" >
        <img class = "logo" src="IMG/logo.png" alt="logo da empresa" style="float: left;">

            <h1 class="titulo">Pizzaria Datena</h1>
            <p class="frase">A melhor pizzaria de Jaraguá do Sul</p>
        
    </header>

    <p class="aviso">Atenção! Nossos serviços de encomenda só entrega em Jaraguá do Sul, dito isso, pedidos de outras cidades estão fora de questão!</p>

    <main style="background-image: url('IMG/fundo.png')">
        <section descricao>

        <!--INICIO DA PARTE DE ANALISE DO PEDIDO EM PHP--> 
                
                <?php
                
                    $pizza_ql = $_POST["pizza-ql"];
                    $tamanho = $_POST["tam-pizza"];
                    $bebida_ql = $_POST["bebida-ql"];
                    $nc_entrega = $_POST["nc-entrega"];

                    $valor_total = 0.000;

                    

                    //SWITCH - CASE 1: pizza-ql

                    switch($pizza_ql) 
                    {
                        case 'Pepperoni':
                                $valor_total += 22.50;                            
                        break;

                        case 'Quatro Queijos':
                                $valor_total += 20.99;                            
                        break;

                        case 'Frango com Catupiry':
                                $valor_total += 22.00;                            
                        break;

                        case 'Portuguesa':
                                $valor_total += 21.99;                            
                        break;

                        case 'Chocolate Branco':
                            if($pizza_ql == "Chocolate Branco")
                                $valor_total += 27.99;                            
                        break;

                        case 'Chocolate com Morango':
                                $valor_total += 25.99;
                        break;

                        default:
                            echo "Soda";
                    }

                    // SWITCH - CASE 2: TAMANHO

                    switch($tamanho) 
                    {
                        case 'Pequena':
                                $valor_total += 2.00;
                        break;

                        case 'Média':
                                $valor_total += 3.50;                            
                        break;

                        case 3:
                                $valor_total += 5.00;
                        break;

                        case 'Família':
                                $valor_total += 7.00;                            
                        break;

                        default:
                            echo "Soda";
                    }

                    // SWITCH - CASE 3: BEBIDA

                    switch($bebida_ql) 
                    {
                        case 'Coca-Cola 1,5L':
                                $valor_total += 8.50;
                        break;

                        case 'Guaraná Antartica 1,5L':
                                $valor_total += 7.99;
                        break;

                        case 'Fanta Laranja 1,5L':                            
                                $valor_total += 7.50;                            
                        break;

                        case 'Sprite 1,5L':
                                $valor_total += 6.99;
                        break;

                        case 'Pepsi 1,5L':
                                $valor_total += 7.50;                            
                        break;

                        case 'Pepsi Twist 1,5L':
                                $valor_total += 7.99;                            
                        break;

                        case 'Nenhuma':
                                $valor_total += 0.00;
                        break;

                        default:
                            echo "Algo de errado";
                    }

                    // SWITCH - CASE 4: entrega

                    switch($nc_entrega) 
                    {
                        case 'Sim, por favor!':
                                $valor_total += 5.00;
                        break;

                        case 'Não, irei buscar!':
                                $valor_total += 0.00;
                        break;

                        default:
                            echo "Algo errado no pedido ou ";
                    }                
                ?>

                <!--FIM DA ANALISE DO PEDIDO EM PHP--> 

        <div class="valor">

                <?php
                
                        echo "O Valor Total do seu pedido foi de: $" . number_format($valor_total, 2);

                ?>

                <p class="forma-de-pagar">Você Gostaria de Pagar de Qual Maneira?</p>

                <center>

                        <button class="botao">
                                <img src="IMG/pix.jpg" alt="Ícone">
                                <span>PIX</span>
                        </button>

                        <br>

                        <button onclick="window.location.href='forma-de-pagamento.html'" class="botao">
                                <img src="IMG/cartao.jpg" alt="Ícone">
                                <span>Cartão</span>
                        </button>

                        <br>

                        <button class="botao">
                                <img src="IMG/dinheiro.jpg" alt="Ícone">
                                <span>Dinheiro</span>
                        </button>

                </center>

        </div>

        </section>
       
    </main>

    <footer style="background-image: url('IMG/fundo.png')">

        <p>Contato: (47) XXXX-XXXX  | <a href="mailto:emaildecontato@gmail.com" >emaildecontato@gmail.com</a></p>

    </footer>
</body>
</html>
