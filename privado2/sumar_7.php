<!-- programa que nos muestre el numero de veces que se tiene que tirar 
dos dados hasta que la suma de los 2 sea 7 y nos muestre la combinación de dados.-->
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirada dados</title>
    <link href="../css/estilos.css" type="text/css" rel="stylesheet">
</head>

<body>
    <h3>Sumar 7 con dos dados</h3>
    
    <?php 
		$num_tiradas = 5;
		if(isset($_POST['numero_tiradas'])){
			$num_tiradas = $_POST['numero_tiradas'];	
		}
    	for($i = 0; $i < $num_tiradas; $i++){
        	$dado[$i] = rand(1,6);
            echo "<img class=img src='../img/$dado[$i].jpg' />";
        }
        for($i=0;$i < 1 ; $i++ ){
       if($dado[0] + $dado[1] == 7){
        $_REQUEST['num_cont']=1;
           
       } else{
        $_REQUEST['num_cont']++;
        
       }
    }
    ?>

<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
    Numero de dados a sumar: <input type="number" name="numero_tiradas"  max=2 min=2 value="<?php $num_tiradas; ?>">
    <input name="num_cont" type="hidden" value="<?= (empty($_REQUEST['num_cont']))?1:$_REQUEST['num_cont'] ?>">
    <input type="submit" value="Lanzar dados">
    <p>El número de tiradas que se han hecho es: <?=(empty($_REQUEST['num_cont']))?1:$_REQUEST['num_cont']?></p>
</form>

</body>

</html>





