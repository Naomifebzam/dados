<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Tirada de dados</title>
    <link href="css/estilos.css" type="text/css" rel="stylesheet">;
</head>
<body>
    <?php
    session_start();
    session_destroy();
    ?>
    <?php
    
    if ((!(empty($_REQUEST['email']) && empty($_REQUEST['clave'])) &&
        $_REQUEST['email'] == 'juan@gmail.com' && $_REQUEST['clave'] == 'juan') 
        || (!empty($_SESSION['logueado']) && $_SESSION['logueado'] === true)) {
        $_SESSION['logueado'] = true;
        header('Location: menu/menu.html', true);
    }

    if (isset($_POST["login"])) {
        if (!empty($_POST['email']) && !empty($_POST['clave'])) {
            $username = $_POST['email'];
            $password = $_POST['clave'];
        }
    } else {
        $MESSAGE = "No pueden quedar campos vacíos";
    }
    if (session_destroy()) {
        echo "Sesión destruida correctamente";
    } else {
        echo "Error al destruir la sesión";
    }
    ?>
    <div class="contlogin">
        <div id="login">
            <h2 id="color">LOG IN</h2>
            <form method="POST" action="<?php $_SERVER["PHP_SELF"]; ?>" name="loginform" id="loginform">
                <p>
                    <input type="text" name="email" id="username" class="input" value="" size="20" placeholder="Email" /></label>
                </p>
                <p>
                    <input type="password" name="clave" id="password" class="input" value="" size="20" placeholder="Password" /></label>
                </p>
                <p class="submit">
                    <input type="submit" name="login" class="button" value="Log in" />
                </p>
            </form>
        </div>
    </div>
</body>

</html>