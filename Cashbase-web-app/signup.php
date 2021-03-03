<!DOCTYPE html>
<!--
Pagina para que el usuario se registre, le pedira un nombre de usuario, correo y contraseña
-->
<html>
    <head>
        <title>Cashbase - Crear cuenta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body style="text-align:center;">
        <link rel="stylesheet" href="styles.css">
        
        <div class="formVerticalHorizontalCenter">
            <p style="color:#ffd300"> Aqui deberia haber un logo animado bien bonito </p><br><br>
            
            <form name="userSignupData">
                <!-- Campo de nombre usuario, opcional -->
                <hr><br>
                <input type="text" class="credentialsInputField" placeholder="Tu nombre de usuario" optional>
                
                <!-- Campo de correo, obligatorio -->
                <br><br>
                <input type="email" class="credentialsInputField" placeholder="*Tu email" required>
                
                <!-- Campo de contraseña, obligatorio -->
                <br><br>
                <input type="password" class="credentialsInputField" placeholder="*Tu contraseña" required> 
                
                <!-- texto explicativo -->
                <br><br> 
                <p style="color:#ffd300">*Los campos con asterisco son obligatorios</p>
                <hr>
                <br>
                <button class="credentialsSubmitButton mainButton">Registrar cuenta</button>
                <br><br>
            </form>
            <a href="login.php">
                <button id="lostPasswordButton">Inicio de sesion</button>
            </a>
            
        </div>
        
    </body>
</html>
