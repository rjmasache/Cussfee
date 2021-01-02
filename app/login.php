<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <header class="headerMenu">
        <nav class="menu">
            <a href="../index.html"><img src="../images/logo.jpg" alt="Logo"></a>
            <a href="../internas/cafe.html">Café</a>
            <a href="../internas/filtro.html">Filtro</a>
            <a href="../internas/azucar.html">Azúcar</a>
            <a href="../internas/aperitivos.html">Aperitivos</a>
            <a href="login.php"><img src="../images/login.jpg" alt="Login"></a>
        </nav>
    </header>
    <main>
        <section class="contenedor">
            <h2>Formulario de registro al evento</h2>
        </section>
        <form method="post" action="validar.php">
             <div class="grupo">
                <label for="usuario">Usurio</label>
                <input type="text" id="usuario" name="usuario" placeholder="Ingrese su usuario">
            </div>
             <div class="grupo">
                <label for="clave">Clave</label>
                <input type="password" id="clave" name="clave" placeholder="Ingrese su clave">
            </div>
            <button type="submit" class="btnGuardar">Guardar</button>
        </form>
    </main>
    
    <footer class="piePagina">
        <h6>Derechos Reservados UTPL 2020 by: @rlramirez</h6>
    </footer>
</body>
</html>