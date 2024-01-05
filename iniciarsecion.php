
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="link rel="preconnect href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./registro.css">
    <title>registro</title>
</head>
<body>
    <main>
     <div class="contenedor__todo">
        <div class="caja__trasera">
            <div class="caja__trasera-login">
            <h3>¿Ya tienes una Cuenta?</h3>
            <p>inicia seción para ingrsar a nuestra Boda</p>
            <button id="btn__Iniciar-Sesion">Iniciar Sesion</button>
        </div>
        <div class="caja__trasera-register">
            <h3>¿Aún no tienes una Cuenta?</h3>
            <p>inicia seción para ingrsar a nuestra Boda</p>
            <button id="btn__Registrarse">Registrarse</button>
        </div>
        
        <div class="contenedor__login-register">

            <form action="login_Usuario.be.php" method="POST" class="formulario__login">
                <h2>Iniciar Sesión</h2>
                <input type="text" placeholder="Email" name="Email">
                <input type="password" placeholder="Cantraseña" name="Contrasena">
                <button>Ingresar</button>
            </form>
            <form action="./registro_be.php" method="POST" class="formulario__register">
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre Completo" name="Nombre_Completo">
                <input type="text" placeholder="Email" name="Email">
                <input type="text" placeholder="Usuario" name="Usuario">
                <input type="password" placeholder="Contraseña" name="Contrasena">
                <button>Registrarse</button>
            </form>
        </div>
     </div>
    </main>
    <script src="./registros.js"></script>
</body>
</html>
