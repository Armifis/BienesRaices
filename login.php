<?php 


    require 'includes/config/database.php';
    $db = conectarDB();

    $errores = [];
    //Autenticar usuario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(!$email) {
            $errores [] = "El email es incorrecto";
        }
        if(!$password) {
            $errores [] = "El password es obligatorio";
        }
        if(empty($errores)) {
           //Revisar si el usuario existe
           
            $query = "SELECT * FROM usuarios WHERE email = '$email'";
            $resultado = mysqli_query($db, $query);

            if ($resultado->num_rows){       
                //Si hay conincidencia en el email
                $usuario = mysqli_fetch_assoc($resultado);        
                //Verificamos si el password es correcto
                $auth = password_verify($password, $usuario['password']);
               

                if($auth) {
                    //El usuario esta autenticado
                    session_start();

                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;
                    
                    header('Location: /admin');

                }else {
                    $errores []  = "El password es incorrecto";
                }
            } else {
            $errores [] = "El usuario no existe";
            }

           
        }
       
    }
    require 'includes/funciones.php';
    incluirTemplate('header');
    
    ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesión</h1>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form method="POST" class="formulario ">
            <fieldset>
                <legend>Email y Password</legend>

                <label for="email">E-mail</label>
                <input type="email" name="email" autocomplete="off" placeholder="Tu Email"  id="email">

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Tu password"  id="password">

            </fieldset>

            <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
        </form>
    </main>

    <?php incluirTemplate('footer') ?>