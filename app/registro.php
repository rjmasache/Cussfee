<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
            <a href="../app/registro.php"><img src="../images/login.jpg" alt="Login"></a>
        </nav>
    </header>
    <main>
        <br>
        <br>
        <br>
        <section class="contenedor">
            <h2>Formulario</h2>
        </section>
        <form method="post" action="guardardatos.php">
            <div class="grupo">
                <label for="nombre">Nombres</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
            </div>
            <div class="grupo">
                <label for="correo">Correo</label>
                <input type="email" id="correo" name="correo" placeholder="Ingrese su correo" required>
            </div>
             <div class="grupo">
                <label for="cedula">Cédula</label>
                <input type="text" id="cedula" name="cedula" placeholder="Ingrese su DNI">
            </div>
             <div class="grupo">
                <label for="pais">Pais</label>
                <input type="text" id="pais" name="pais" placeholder="Ingrese su pais">
            </div>
             <div class="grupo">
                <label for="ciudad">Ciudad</label>
                <input type="text" id="ciudad" name="ciudad" placeholder="Ingrese su ciudad">
            </div>
             <div class="grupo">
                <label for="profesion">Profesión</label>
                <input type="text" id="profesion" name="profesion" placeholder="Ingrese su profesion">
            </div>
            <button type="submit" class="btnGuardar">Guardar</button>
            <br>
            <br>
            <h2>Participante</h2>
            <div class="grupo">
                <label for="tipoUsuario">Tipo de Usuario</label>
                    <select name="tipoUsuario" id="tipoUsuario">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="1">Profesor UTPL</option>
                        <option value="2">Estudiante UTPL</option>
                        <option value="3">Publico en generall</option>
                    </select>
            </div>
            <br>
            <h2>Evento</h2>
            <div>
                <label for="talleresEvento">Talleres del evento<br></label>
                <input type="radio" name="talleresEvento1" value="1">Visualización de datos: 180$<br>
                <input type="radio" name="talleresEvento2" value="2">Herramientas de explotación de datos: 160$<br>
                <input type="radio" name="talleresEvento3" value="2">Big Data: 155$<br>
            </div>
        </form>
    </main>
    <footer class="piePagina">
        <h6>Derechos Reservados</h6>
    </footer>
</body>
</html>