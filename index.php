<!DOCTYPE html>

<html lang= "pt-br">
	<head>
		<meta charset= "UTF-8"/>
		<meta http-equiv= "X-UA-Compatible" content= "IE-Edge"/>
		<meta name= "Viewport" content= "width-device-width, scale-initial= 1.0"/>
		
		<title> Atividade Pratica final- PHP com MySQL</title>
		<link rel= "stylesheet" type= "text/css" href= "estilo.css"/>
	</head>
	<body>
			
			
			<form name="listaChurrascoMarcelo" action= "processo.php" method= "POST">
				
						<fieldset><legend><h3>ADICIONAR CONVIDADO</h3></legend>
																	
								<table class= "listar">
									<tr>
										<td><h4>Nome do convidado</h4></td>
										<td><img src= "pessoas.jpg"/></td>
									</tr>
									<tr>
										<td><input type= "text" name= "convidado" id= "convidado" size= "40"/></td>
									</tr>
									
									<tr>
										<td><input id= "bt_adicionar" type="submit" value="Adicionar Convidado"/></td>
									</tr>
								</table>
						</fieldset>
			</form>	
					
			<form name="listaChurrascoMarcelo" action= "processo.php" method= "POST">	
						<fieldset>
							<legend><h3>LISTA DE ITENS</h3></legend>
							<table class= "itens">
								<tr>
									<td><h4>Produto</h4></td>
									<td><img src= "espetinho.gif"/></td>
								</tr>
								<tr>
									<td><input type="text" name="listitens" id= "listitens"/></td>
									<td><label for="quantidade">Quantidade:</label></td>
									<td><input type="number" name="quantidade" id="quantidade" required></td>
									<td><input id= "bt_itens" type="submit" value="Adicionar Item"></td>
								</tr>	
								
							</table>	
						</fieldset>
			</form>
			
			<form name="listaChurrascoMarcelo" action= "processo.php" method= "POST">	
				<td><input id= "bt_itens" type="submit" name= "calcular" value="Calcular Consumo"></td>
			</form>		
			
	</body>

</html>