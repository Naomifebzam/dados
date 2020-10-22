<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirada dados</title>
    <link href="../css/estilos.css" type="text/css" rel="stylesheet">
</head>

<body>
    <h3>Tirada de dados</h3>
    <!-- Escribe un script PHP que realice la simulacion de lanzar 5 dados y muestre una
imagen con los valores obtenidos en cada uno de los dados-->
    <?php 
		$num_tiradas = 5;
		if(isset($_POST['numero_tiradas'])){
			$num_tiradas = $_POST['numero_tiradas'];	
		}
    	for($i = 0; $i < $num_tiradas; $i++){
        	$dado[$i] = rand(1,6);
            echo "<img class=img src='../img/$dado[$i].jpg' />";
        }
        

    ?>

<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
    Numero de dados a tirar: <input type="number" name="numero_tiradas" value="<?php $num_tiradas; ?>">
    <input type="submit" value="Lanzar dados">
</form>
</body>

</html>