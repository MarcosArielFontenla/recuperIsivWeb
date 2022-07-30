<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Recuperatorio Isiv Leng. de Prog. Web</title>
</head>
<body>

    <header class="header">
        <div class="header-title">
            <h3>Recuperatorio Programacion Web</h3>
        </div>
        <div class="header-student-name">
            <h4>Nombre del alumno</h4>
        </div>
    </header>
    <section class="content-wrapper">
        <div class="container">
            <form action="../../business/services/form-data-services.php" method="POST" id="form" class="form mt-5">
                <div class="row p-lg-3">
                    <div class="col input-name">
                        <label for="nameInput"> Ingresar el nombre</label>
                        <input id="nameInput" type="text" class="form-control" placeholder="Nombre" name="Nombre">
                    </div>
                    <div class="col input-lastname">
                        <label for="lastnameInput">Ingresar el apellido</label>
                        <input id="lastnameInput" type="text" class="form-control" placeholder="Apellido" name="Apellido">
                    </div>
                    <div class="col input-age">
                        <label for="ageInput">Ingresar la edad</label>
                        <input id="ageInput" type="text" class="form-control" placeholder="Edad" name="Edad">
                    </div>
                    <div class="col button-container">
                        <button id="btnSend" type="submit" class="btn btn-warning">Enviar</button>
                    </div>
                </div>
                <div class="display-data-person">
                    <h4>Datos Generales de la persona:</h4>
                    <p id="result">Aqui deberá aparecer un mensaje con los datos ingresados.</p>
                </div>
            </form>
            <div class="row">
                <div class="col-sm-3 date-wrapper">
                    <div class="date-body-wrapper">
                        <div class="date-day">
                            <h1>05</h1>
                        </div>
                        <div class="date-month">
                            <p>Agosto</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="list-architecture-wrapper">
                        <div class="row m-lg-3">
                            <div class="col">
                                <p>Preguntas Teoricas:</p>
                                <ul>
                                    <li>Capa de Presentación.</li>
                                    <li>Capa de Negocio.</li>
                                    <li>Capa de Datos.</li>
                                </ul>
                            </div>
                            <div class="col">
                                <p>Ventajas de arquitectura Cliente/Servidor</p>
                                <ol>
                                    <li>la integridad de los datos son controlados por el servidor de forma que un programa cliente no autorizado no pueda dañar el sistema.</li>
                                    <li>Escalabilidad: se puede aumentar la capacidad de clientes y servidores por separado.</li>
                                    <li>Fácil mantenimiento: al estar distribuidas las funciones y responsabilidades es posible modificar y trasladar un servidor, sin que los clientes no sean afectados.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../../business/js/main.js"></script>
</body>
</html>