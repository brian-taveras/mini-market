<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/categoria.css">
   
    <link rel="stylesheet" href="../css/objeto.css">
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>


     <!--header - menu-->
     <header>

<div class="header-content">
    <div class="logo">
        <h1>Mini Market Rosa <b>Online</b> </h1>
    </div>
    <div class="menu">

        <nav>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="categoria.php">Categoria</a></li>
                <li><a href="contactenos.php">Contactenos</a></li>
                <li><a href="#">Nosotros</a></li>
            </ul>
        </nav>

    </div>
</div>

</header>
                        



<!--Contenido-->

<?php

	require ('../conexion.php');

	$con = new Conexion();

	$categorias = $con ->getCategorias();




?><img src ="
    

<div class="tienda">
        <td class="cuerpo-productos">

		<?php
			foreach ($categorias as $categoria){
				

				echo '<div class="categoria">';
				echo '<a href="productos.php">';   
				
				echo '<img src="'.$categoria['imagen'].'"/ width="200px" height="163px">';
				echo '<p>'.$categoria['nombre'].'</p>';
				echo '</a>';
				echo '</div>';

			}


		?>
					
    
</body>
</html>