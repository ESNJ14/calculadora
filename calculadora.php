<html>
	<head>
		<title>
			Site
		</title>		
	</head>

	<body>

		<form method="post" action="calculadora.php" >

		<legend>
			Clculadora
		</legend>

		<br>
		<br>
						
		<label>
			Primer Numero:
		</label>
		<input type="text" name="numero1">
		
		<br>

		<select name="opciones">
							
			<option value="0">Sumar</option>

			<option value="1">Restar</option>

			<option value="2">Multiplicar</option>

		</select>

		<br>

		<label>
			Segundo Numero:
		</label>
		<input type="text" name="numero2">

		<br>
		<button type="submit" name="calcular" value="Calcular">
			Clcular
		</button>
		<br>
		<br>

	</body>
</html>
<?php 
	
	include("calculo.php");

	if(isset($_REQUEST['calcular'])) {

		$n1=$_REQUEST['numero1'];
		$n2=$_REQUEST['numero2'];
		$op=$_REQUEST['opciones'];

		switch ($op) {
			case 0: echo "Calculo de: $n1 + $n2 = " .matematica::sumar($n1,$n2);
				break;
			case 1: echo "Calculo de: $n1 - $n2 = "	.matematica::restar($n1,$n2);
				break;
			case 2: echo "Calculo de: $n1 x $n2 = "	.matematica::multipicar($n1,$n2);
				break;
							
			default:
				
				break;
		}
	}
?>