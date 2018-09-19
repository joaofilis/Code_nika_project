<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<title> Relatorio Cliente </title>
			<meta name="description" content="Relatorio Cliente">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<link rel="stylesheet" type="text/css" href="../Static/CSS/cssPadrao.css">
			<link rel="sortcut icon" href="imagem/logo2.png" type="image/png"/>	
			<link rel="stylesheet" href="../Static/CSS/estilomenu.css" type="text/css">
  			<link rel="stylesheet" href="../Static/bootstrap/dist/css/bootstrap.min.css">
		</head>
		<body>
			<div class="interface">
					<!-- 
		=================
		INICIO DO MENU
		=================
		-->
		<div style="display: flex;">
			<div style="display: flex; background-color:black; text-align: center;  width: 100%; ">
				<div>
					<img class="logo1" src="../img/logo2.png" alt="logo_nika"/>
					<!--<img src="imagem/logo2.png"" alt="logo_nika"/>-->
				</div>
				<div class="row">
					<div class="intcont">
						<?php
							echo "<span class='bem' >Bem vindo! Vinicius";
							$logado;
							echo "</span>";
						?>
					</div>
					<div class="menu-container">
						<ul class="menu clearfix">
							<li><a href="#">Administração</a>
								<ul class="sub-menu clearfix">
									<li><a href="#">Cadastro</a>
									<li><a href="#">Relatorios</a>
										<ul class="sub-menu">
											<li><a href="relatorioViagem.php">Viagem</a></li>
											<li><a href="relatorioMotorista.php">Motorista</a></li>
											<li><a href="relatorioCliente.php">Cliente</a></li>
										</ul>
									</li>
								</ul><!-- submenu -->
							</li>
							<li><a href="#">Financeiro</a>
							<li><a href="#">Entregas</a>
							<li><a href="#">Gestão</a>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- 
			=================
			FIM DO MENU
			=================
		-->
				
				<div class="cabecalho">
					<br/>
					<h1>Relatório Cliente</h1>
					<br/>
				</div>
				
				<div class="formulario">
					<br/>
					<h2 id="subsubtit">Dados Clientes</h2>
					<form method="post" id="RelClient-FormDadosClientes">
						<fieldset id="RelClient-FDadosClientes">
							<p><label for="RelClientnome"> Nome:   <input type="text"  name="tname" id="RelClient-name" size="40" maxlength="40" /></label>
							<label for="RelClient-cod"> Codigo Cliente:   <input type="text"  name="tcod" id="RelClient-cod" size="10" maxlength="10" /></label>
							<p><label for="RelClient-cpf/cnpj"> CPF/CNPJ:  <input type="text"  name="tcpf" id="RelClient-cpf/cnpj" size="20" maxlength="15" /></label></p>
							<p><label for="RelClient-telefone1"> Telefone: <input type="text"  name="ttel1" id="RelClient-tel1" size="15" maxlength="12" /></label>
							<label for="RelClient-telefone2"> Ramal:  <input type="text"  name="ttel2" id="RelClient-tel2" size="10" maxlength="8" /></label>
							<label for="RelClient-telefone3"> Celular: <input type="text"  name="ttel3" id="RelClient-tel3" size="15" maxlength="12" /></label></p>
							<p><label for="RelClient-email"> Email: <input type="email"  name="temail" id="RelClient-email" size="40" maxlength="15" /></label></p>
							<p><label for="RelClient*site"> Site: <input type="esite"  name="tsite" id="RelClient-site" size="40" maxlength="15" /></label></p>		
						</fieldset>
						<br/>
					</form>
				</div>
				
				<div class="RelClient-pendencias">
					<br/>
					<h2 id="subsubtit">Pendencias aparecerão aqui </h2>
					<h3>Não ha pendencias </h3>
					<p><input type="checkbox" name="RelClient-divi" value="Divida" checked /> O Cliente quitou sua divida </p>
					<br/>
					<br/>
					
				</div>
				
				<div class="RelClient-ultimosservicos">
					<br/>
					<h2 id="subsubtit"> Ultimos Serviços</h2>
					<fieldset id="RelClient-fultimosservicos">
										
						<p><input type="text" name="atext1" id="RelClient-text1" size="40" maxlength="40" value="Entrega realizada em Manaus 12/05/2018"/> <input type="submit" value="Veja Mais"></p>
						<p><input type="text" name="atext2" id="RelClient-text2" size="40" maxlength="40" value="Entrega realizada em Osasco 11/05/2018"/> <input type="submit" value="Veja Mais"></p>
						<p><input type="text" name="atext3" id="RelClient-text3" size="40" maxlength="40" value="Entrega realizada em Vitoria 12/05/2018"/> <input type="submit" value="Veja Mais"></p>

					</fieldset>	
					<br/>
				</div>
			</div>
		</body>
	</html>