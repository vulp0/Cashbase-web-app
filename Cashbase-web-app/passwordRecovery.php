<!DOCTYPE html>
<!--
Pagina donde el usuario debera de introducir su correo para recuperar su cuenta, luego recibira un codigo
de confirmacion que debera introducir y esto lo llevara a otra pagina para reestablecer su contraseña
-->
<html>
    <head>
        <title>Cashbase - Recuperar cuenta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
    </head>
    
    <body>
        
        <div class="formVerticalHorizontalCenter">
            <p style="color:#ffd300"> Aqui deberia haber un logo animado bien bonito </p><br><br>
            
            <form name="userPasswordRecoveryMail">
                <hr><br>
                <input type="email" class="credentialsInputField" placeholder="Tu email" required> <br><br>
                <button class="credentialsSubmitButton mainButton">Recuperar contraseña</button>
            </form>
            
        </div>
        
    </body>
</html>
