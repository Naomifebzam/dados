<html>
<head>
    <title>PAR IMPAR </title>
    <link href="../css/estilos.css" type="text/css" rel="stylesheet">
</head>

<body>
    <h3>Par impar</h3>
    
    <?php 
  
        if ($_POST) {
            $resul = 0;
            $acierto = '';
            $par = 'par';
            
            for($i = 0; $i < 3; $i++){
                $dado[$i] = rand(1,6);
                echo "<img class=img src='../img/$dado[$i].jpg' />";
                $resul += $dado[$i];
            }
            
            if ($resul % 2 != 0)
                $par = 'impar';
            
            if (($resul % 2 == 0 && $_POST['valor'] == 0) || ($resul % 2 != 0 && $_POST['valor'] != 0)) {
                $acierto = 'ACERTASTE';
            } else {
                $acierto = 'FALLASTE';
            }
            
            echo "<script>
                alert('¡$acierto! La suma de los números es $par.')
            </script>";
            
        } else {
            ?>
            <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
                <input type="radio" name="valor" value='0' checked>PAR <br>
                <input type="radio" name="valor" value='1'>IMPAR <br>
                <input type="submit" value="Comprobar"> <br>
                
            </form>
            <?php
        }
        ?>


</body>
</html>