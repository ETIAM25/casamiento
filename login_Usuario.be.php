<?php
 session_start();
 include './conexion_be.php';

 $Email = $_POST["Email"];
 $Contrasena = $_POST["Contrasena"];

  $Validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Email= '$Email' and
  Contrasena = '$Contrasena' ");
   if(mysqli_num_rows($Validar_login)> 0){
    $_SESSION['Usuario'] = $Email;
    header("location: ./bienvenidos.php ");
    exit;
   }else{
    echo'
    <script>
     alert("Usuario no existe");
     window.location= "../iniciarsecion.php";
     </script>
     ';
     exit();
   }

?>