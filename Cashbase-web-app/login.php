<!DOCTYPE html>
<!-- 
colores que podria usar para la pagina
color amarillo: #ffd300
color azul marino: #071325
-->

<html>
    <head>
        <title>Cashbase - Iniciar Sesion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
    </head>
    
    <body style="text-align:center;">
        
        <!-- Form to enter user data for login -->
        <div class="formVerticalHorizontalCenter">
            <p style="color:#ffd300"> Aqui deberia haber un logo animado bien bonito </p><br><br><br>
            
            <!--  el action y method es un intento mio de procesar la form de aqui abajo usando php, pero la verdad no le se al php -->
            <!-- placeholder.php es un placeholder, aqui deberia de estar el dashboard pero necesito ver como registrar y confirmar usuarios -->
        <form name="userLoginData" action="placeholder.php" method="post">
            <hr> <br>
            <!-- Text fields for Username and Password input -->
            <input name="userNameOrMail" type="text" class="credentialsInputField" placeholder="Tu usuario o email" required> <br> <br>
            <input name="password" type="password" class="credentialsInputField" placeholder="Tu contraseña" required> <br> <br>
            
            <!-- Buttons to submit Username and Password input given above, and to recover password -->
            <input type="submit" class="credentialsSubmitButton mainButton"  value="Iniciar Sesion"> <br> <br>
        </form>
            <!-- Button to recover password -->
            <a href="passwordRecovery.php">
                <button id="lostPasswordButton">Perdiste tu contraseña?</button> 
            </a>
            <hr> <br>
            
            <!-- Button to create an account -->
            <p style="color:#ffd300;">No tienes cuenta?</p>
            <a href="signup.php">
                <button class="credentialsSubmitButton mainButton">Crear cuenta</button>
            </a>
        </div>
        
    </body>
</html>
