<!DOCTYPE html>
<html lang="en">

<head>
    <title>configuracion Sala de Juegos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@500&family=Poppins&display=swap" rel="stylesheet">
    <meta name="robots" content="noindex, follow">
    
</head>
<body style="background-image: url(images/Marte1.jpg);">
    <!-- Estableciendo creación del navBar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-black">
        <div class="container-fluid px-3">
            <a href="{{ url('/')}}">
                <img src="images/Logo - copia.png" class="image-fluid custom-image12" alt="">
                <b class="navbar-brand px-2" style="color:white">SPACE QUIZ</b>        
            </a>     
        </div>
        <!-- Estabeciendo iconos del lado derecho del navbar -->
        <div class="col-2" id="navclock">
            <div class="d-flex align-items-center justify-content-center">
                <i class="ri-home-fill icono"></i>
                <i class="ri-arrow-left-circle-fill icono"></i>
                <i class="ri-user-line icono"></i>
            </div>
        </div>
    </nav>
    <!-- Estableciendo cuerpo de la creación del juego por parte del docente -->
    <div class="container col-md-12 py-2" id="cuerpo">
        <!-- Estabkeciendo color transparente del container -->
        <div style="background-color: rgba(97, 97, 97, 0.5);" class="rounded-5">
            <p></p>
            <div id="encabezado" class="container">
                <div class="row">
                    <!-- Estableciendo Una sola fila de 12 col para el título de container -->
                    <div class="col-sm-12 d-flex align-items-center justify-content-center" id="pregunta">
                        <b class="text-center textotitulo">¡ Crea tu juego a tu manera !</b>
                    </div>
                <!-- </div> -->
                <!-- Estableciendo fila que se dividirá en 2 -->
                <div class="row  mt-3">
                    <!-- Primera divición de 6 columnas -->
                    <div class="col-md-6" id="columna1" >        
                        <!-- Estableciendo un grupo de checkbox para quiz, V o F y Puzzle -->
                        <div class="form-group mx-auto">
                            <label for="questionType">
                                <!-- Creando encabezado de Tipo de Pregunta -->
                                <div class="textotipopregunta ">
                                    Tipo de pregunta
                                </div>
                            </label>
                            <!-- Creación de checkbox de QUIZ -->
                            <div class="checkbox">
                                <input class="form-check-input" type="checkbox" id="quizCheckbox">
                                <label class="form-check-label" for="quizCheckbox">
                                    Quiz
                                </label>
                            </div>
                            <!-- Creación de checkbox de VERDADERO O FALSO -->
                            <div class="checkbox">
                                <input class="form-check-input" type="checkbox" id="trueFalseCheckbox">
                                <label class="form-check-label" for="trueFalseCheckbox">
                                    Verdadero o Falso
                                </label>
                            </div>
                            <!-- Creación de checkbox de PUZZLE -->
                            <div class="checkbox">
                                <input class="form-check-input" type="checkbox" id="puzzleCheckbox">
                                <label class="form-check-label" for="puzzleCheckbox">
                                    Puzzle
                                </label>
                            </div>
                        </div>
                        <!-- Creando otra fila que ocupe 6 columnas dentro de la fila de 6 columnas para crear número de preguntas-->
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="questionCountRange" id="textocol1">Número de preguntas</label>
                                    <input type="range" class="form-range" min="0" max="20" step="1" id="questionCountRange" value="0">
                                    <input type="number" class="form-control mt-2" min="0" max="20" step="1" id="questionCountInput" value="0">     
                                </div>
                            </div>
                        </div>
                        <!-- Creando otra fila que ocupe 6 columnas dentro de la fila de 6 columnas para crear tiempo de prueba en minutos-->
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="timeLimitRange" id="textocol1">Tiempo de prueba en minutos</label>
                                    <input type="range" class="form-range" min="0" max="120" step="1" id="timeLimitRange" value="0">      
                                    <input type="number" class="form-control mt-2" min="0" max="120" step="1" id="timeLimitInput" value="0">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Creación de Elementos de la segunda división también de 6 columnas  -->
                    <div class="col-md-6" id="columna2">
                        <div class="row align-items-center">
                            <!-- Creando select ESPECIALIDAD que ocupará 7 col de las 12 col de la 2da division -->
                            <div class="col-md-7">
                                <div class="form-group combito" >
                                    <label for="specialtySelect" id="textocol2">Especialidad</label>
                                    <select class="form-select" id="specialtySelect">
                                        <option value="3C24">3C24</option>
                                        <option value="5C23">5C23</option>
                                        <option value="2C24">2C24</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Creando select CURSO que ocupará 7 col de las 12 col de la 2da division -->
                            <div class="col-md-7">
                                <div class="form-group combito">
                                    <label for="courseSelect" id="textocol2">Curso</label>
                                    <select class="form-select" id="courseSelect">
                                        <option value="Diseño">Diseño</option>
                                        <option value="BDA">BDA</option>
                                        <option value="SO">SO</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Creando select MODULO que ocupará 7 col de las 12 col de la 2da division -->
                            <div class="col-md-7">
                                <div class="form-group combito">
                                    <label for="moduleSelect" id="textocol2">Módulo</label>
                                    <select class="form-select" id="moduleSelect">
                                        <option value="1">Semana 1</option>
                                        <option value="2">Semana 2</option>
                                        <option value="3">Semana 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <!-- Creación de otra fila en la parte inferior de las 2 divisiones anteriores -->
                <!-- Estabkeciendo botones guardary cerrar -->
                <div class="row mt-3">
                    <div class="col-md-12 d-flex justify-content-center">
                        <button class="btn btn-dark boton botonfinal">Guardar</button>
                        <button class="btn btn-dark boton botonfinal">Cerrar</button>
                    </div>
                </div>
                <!-- Estableciendo botón de Generar Código -->
                <div class="row mt-3">
                    <div class="col-md-12 d-flex justify-content-center">
                        <a href="codigosala.html"><button class="btn btn-lg btn-dark botonfinal generarboton">Generar Código</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/configuracion.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
</body>
