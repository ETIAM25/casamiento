<?php
 session_start();
 if(!isset($_SESSION['Usuario'])){
    echo '
    <script>
    alert("Porfavor Iniciarsecion");
    window.location = "iniciarsecion"
    </script>
    ';
    
    session_destroy();
    die();
}
?>
<!DOCTYPE HTML>

<html> 
	<head>
		<title>Regalos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="http://localhost/casamiento/confirmacion/php/casamiento/bienvenidos.css">
	</head>
	 <body>
	 
		<div class="container">
			<nav class="menu">
		    <a href="./Registro_de_Invitados.html">Registro</a>
			<a href="./bienvenidos.php">Regalos</a>
		    <nav> 
		</div>
		
		<div class="lista">
		<h2>Algunas ideas para regalarnos</h2>
        <label for="">
		   <input type="checkbox">
		   <i>1</i>
		   <span>Cafetera</span>
		 </label>
		 <label form="">
		   <input type="checkbox">
		   <i>2</i>
		   <span>juego de sabanas de 2 1/2 plaza</span>
		 </label>
		 <label for="">
		   <input type="checkbox">
		   <i>3</i>
		   <span>Set de Copas de Vinos</span>
		 </label>
		 <label for="">
		   <input type="checkbox">
		   <i>4</i>
		   <span>Mantel</span>
		 </label>
		 <label for="">
		   <input type="checkbox">
		   <i>5</i>
		   <span>Set de Tazas</span>
		 </label>
		 <label for="">
		   <input type="checkbox">
		   <i>6</i>
		   <span>Tostadora</span>
		 </label>
		 <label for="">
		   <input type="checkbox">
		   <i>7</i>
		   <span>Set de Platos</span>
		 </label>
		 <label for="">
		   <input type="checkbox">
		   <i>8</i>
		   <span>Cubre cama 2 1/2 plaza</span>
		 </label>
		 <label for="">
		   <input type="checkbox">
		   <i>9</i>
		   <span>Secador de Pelo</span>
		 </label>
		 <label for="">
		   <input type="checkbox">
		   <i>10</i>
		   <span>Heladera</span>
		 </label>
		 <label for="">
		   <input type="checkbox">
		   <i>11</i>
		   <span>juego de sabanas de 2 1/2 plaza</span>
		 </label>
		 <label for="">
		   <input type="checkbox">
		   <i>12</i>
		   <span>Set de cubiertos</span>
		 </label>  
		 <label for="">
		   <input type="checkbox">
		   <i>13</i>
		   <span>Set de Copas de Champagne</span>
		 </label>
		 <label for="">
		   <input type="checkbox">
		   <i>13</i>
		   <span>Mantel</span>
		 </label>
		 <label for="">
		   <input type="checkbox">
		   <i>14</i>
		   <span>Cama de de 2 1/2 Plazas</span>
		 </label>
		 <label for="">
		   <input type="checkbox">
		   <i>15</i>
		   <span>Set de Copas de Helados</span>
		 </label>
		 <label for="">
		   <input type="checkbox">
		   <i>16</i>
		   <span>Pava Elctrica</span>
		 </label>
		 <label for="">
		   <input type="checkbox">
		   <i>16</i>
		   <span>Vinos</span>
		 </label>
		 <label for="">
		   <input type="checkbox">
		   <i>17</i>
		   <span>Termo</span>
		 </label>
		 <label for="">
		   <input type="checkbox">
		   <i>18</i>
		   <span>Juego de Mates</span>
		 </label>
		 <label for="">
		   <input type="checkbox">
		   <i>19</i>
		   <span> Waflera</span>
		 </label>
		 <label for="">
		   <input type="checkbox">
		   <i>20</i>
		   <span>Otros</span>
        </label>
		
     </div>			
</body>
</html>