<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/style-option.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	
	<title>Pizzaria Datena</title>

</head>

<body>

    <header class="cabecalho" style="background-image: url('IMG/fundo.png')">
        <img class = "logo" src="IMG/logo.png" alt="logo da empresa" style="float: left;">

            <h1 class="titulo">Pizzaria Datena</h1>
            <p class="frase">A melhor pizzaria de Jaraguá do Sul</p>
        
    </header>

    <p class="aviso">Atenção! Nossos serviços de encomenda só entrega em Jaraguá do Sul, dito isso, pedidos de outras cidades estão fora de questão!</p>

    <main style="background-image: url('IMG/fundo.png')">
    <section>
    <h2>Preencha os campos abaixo</h2>
    <br>
    <form action="confirmacao.php" method="post" id="usuarios" target="">

      <label for="usuario">Usuário</label><br>
      <input type="text" id="usuario" name="usuario" placeholder="Crie um Nome de Usuário">
      <br><br>
      <label for="email">E-Mail</label><br>
      <input type="email" id="email" name="email" placeholder="Digite seu e-mail">
      <br><br>
      <label for="senha">Senha</label><br>
      <input type="password" id="senha" name="senha" placeholder="Crie uma senha"><br><br>

      <input type="submit" class="botao" name="cadastrar">
      
    </form>
  </section >
       
    </main>

    <main style="background-image: url('IMG/fundo.png')">
    <section>
		<h2>Preencha os campos abaixo</h2>
		<br>
        
		<form action="confirmacao.php" method="post" id="usuarios" target="">
            <center>
			<label for="tamanho">Tamanho da Pizza</label><br>
			<select class="custom-select" name = "tam-pizza">
  				<option>Pequena</option>
  				<option>Média</option>
  				<option>Grande</option>
  				<option>Família</option>
            </select>

			<br><br>

			<label for="bebida">Escolha uma bebida</label><br>
			<select class="custom-select" name = "bebida-ql">
  				<option>Nenhuma</option>
  				<option>Coca-Cola 1,5L</option>
  				<option>Guaraná Antartica 1,5L</option>
  				<option>Fanta Laranja 1,5L</option>
                <option>Sprite 1,5L</option>
                <option>Pepsi 1,5L</option>
                <option>Pepsi Twist 1,5L</option>
            </select>

			<br><br>

			<input type="submit" class="botao" name="pedir">
			</center>
		</form>
	</section >
       
    </main>

    <footer style="background-image: url('IMG/fundo.png')">

        <p>Contato: (47) XXXX-XXXX  | <a href="mailto:emaildecontato@gmail.com" >emaildecontato@gmail.com</a></p>

    </footer>
</body>
</html>
