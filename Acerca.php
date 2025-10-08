<php>
</php>	
<!DOCTYPE html>
<html lang="es">

<head>
     <Meta chartset="UTF-8">
     <Meta name= "viewport" content="width= device-width, initial-scale= 1.0">
     <title>Rune Games</title>
   <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* ====== Header ====== */
    header {
      background: #A021C2;
      color: white;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 {
      font-size: 22px;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
    }

    nav a:hover {
      color: #facc15;
    }

    /* ====== Contenido principal ====== */
    main {
      flex: 1;
      padding: 40px;
      background: #1553E6;
    }

    main h2 {
      margin-bottom: 15px;
    }

    /* ====== Footer ====== */
    footer {
      background: #E38A0E;
      color: white;
      text-align: center;
      padding: 15px 0;
    }
  </style>
</head>

<body>

	<header>
      <h1>Mi web Frontend</h1>
      <nav>
      	<ul>
      		<li><a href="mi primera página web.php">Inicio</a></li>
      		<li><a href="acerca.php">Acerca</a></li>
      		<li><a href="contacto.php">Contacto</a></li>
      	</ul>	
      </nav>
	</header>

	<main>
    <h1>Bienvenidos a mi página web</h1>
    <p>En este espacio te enseñaremos todo lo relacionado con el mundo de las consolas de videojuegos y juegos de su mejor calidad y su más avanzada generación.</p>
   	</main>	

	<footer>
     <p>Realizado por Juan José Rojo Rojo</p>
 	</footer>

</body>

</html>		