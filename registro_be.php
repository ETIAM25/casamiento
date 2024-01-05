<?php

  include './conexion_be.php';
$Nombre_Completo = $_POST["Nombre_Completo"];
$Email = $_POST["Email"];
$Usuario =  $_POST["Usuario"];
$Contrasena = $_POST['Contrasena'];

 $query = "INSERT INTO usuarios(Nombre_Completo, Email, Usuario, Contrasena)
          VALUES('$Nombre_Completo','$Email','$Usuario','$Contrasena')";
  //correo no repetido en base de datos

   $verificar_Email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Email = '$Email'");
   
   if(mysqli_num_rows($verificar_Email)> 0){
      echo' 
            <script>
            alert("Este correo ya esta registrado");
            window.location= "./iniciarsecion.php";
            </script>
      ';    
      exit();
      mysqli_close($conexion);
   }
    //Usuario no repetido en base de datos

    $verificar_Usuario= mysqli_query($conexion, "SELECT * FROM usuarios WHERE Usuario = '$Usuario'");
   
    if(mysqli_num_rows($verificar_Usuario)> 0){
       echo' 
             <script>
             alert("Este Usuario ya esta registrado");
             window.location= "./iniciarsecion.php";
             </script>
       ';    
       exit();
       mysqli_close($conexion);
    }
   $ejecutar  = mysqli_query($conexion, $query);

   if($ejecutar) {
    echo '
    <script>
    alert("Usuario registrado");
    window.location= "./iniciarsecion.php";
    </script>';
    }else{
    echo'
    <script>
    alert("Usuario  NO registrado");
    window.location= "./iniciarsecion.php";
    </script>';
   }
   mysqli_close($conexion);
?>