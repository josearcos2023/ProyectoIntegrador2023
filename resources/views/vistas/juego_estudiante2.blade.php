<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</head>

<body>
<div class="container-fluid" style="background-image:url(images/cielo.jpg) ">
    <!-- Main='contenido principal de body' estableciendo estilo del body -->
    <main style="height: 100vh; display: flex;flex-direction: column;" class="px-5">
        <!-- Estableciendo diseño de la barra superior con avance de las preguntas -->
        <div style="background-color: black;display: flex;" class="rounded-5">
             <!--Texto indicando el número de preguntas en la que estás y su posición-->
            <div style="display: flex; flex-grow: 1;justify-content: center;align-items: center;">
                <p class="text-white">2/10</p>
            </div>
            <!--Estableciendo barra de avance de preguntas-->
            <div style="display: flex; flex-grow: 8;flex-direction: column;">
                <!-- Estableciendo margen de separación superior con su div-->
                <div style="padding: 10px 30px 0px 30px;">
                    <!-- Estableciendo diseño y color de barra y su progreso -->
                    <div style="background-color: rgba(255, 255, 255);height: 10px;" class="rounded-5">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">50%
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Definiendo posición y estilo del contador en la parte imferior de la barra -->
                <div style="width: 100%;display: flex;justify-content: center;align-self: center;align-items: center;" class="">
                    <!-- Contador del tiempo dentro de barra-->
                    <p style="height: 100%;margin: 0px!important;" class="text-white">15:27</p>
                </div>
            </div>
            <!-- Estableciendo botón de 'Salir' con su posición en la barra de avance de pregunta -->
            <div style="display: flex;flex-grow: 1;justify-content: center;align-items: center;">
                <!-- Estableciendo estilo del botón con su forma y grosor de su borde -->
                <button class="" style="height: 60%;width: 50%;border-radius: 20px;">
                    <a href="landing.html"style="text-decoration: none;"> Salir</a>
                </button>
            </div>
        </div>
        <!-- Estableciendo div del contenido principal de la pregunta  -->
        <div style="display: flex;flex-direction: column;height: 100%;">
            <!-- Estableciendo el color de fondo y tamaño que ocupará la pregunta -->
            <div style="height: 50%;background-color:rgba(205, 205, 227, 0.45);">
                <!-- Estableciendo posición del texto dentro del fondo blanco de forma vertical -->
                <div style="display: flex;padding:50px">
                    <!-- Estableciendo el porcentaje del ancho del div en el que estará posicionado el texto -->
                    <div style="width: 90%; ; display: flex;flex-direction: column;justify-content: center;">
                        <!-- Estilizando referencia a pregunta central -->
                        <div>
                            <p style="font-size: 2vw;" class="text-dark fw-semibold">Según la imagen:</p>
                        </div>
                        <!-- Estilizando pregunta central -->
                        <div>
                            <div style="font-size: 3vw;" class="text-center text-dark h1 fw-bold">¿A qué lenguaje de programación
                                pertenece el logo?</div>
                        </div>
                    </div>
                    <!-- Estableciendo el porcentaje del ancho del div en el que estará posicionado la imagen dentro del fondo blanco -->
                    <div style="width: 40%;display: flex;justify-content: center;">
                        <img src="images/loog_python.png" height="200px" width="200px" alt="" class="">
                    </div>
                </div>
            </div>
            <!-- Estableciendo la sección de las alternativas con su estilizado principal-->
            <div style="background-color:white; display: flex;flex-direction: column;height: 50%;" >
                <!-- Definiendo posición del las opciones -->
                <div style="display: flex; justify-content: center;height: 88%;">
                    <!-- Definiendo tamaño de las opciones de las preguntas -->
                    <div style="display: flex;flex-direction: column;justify-content:space-evenly;width: 70%;">
                        <!-- Definiendo margen de separación entre el texto y su div -->
                        <div style="display: flex;justify-content: space-between;height: 25%;">
                            <!-- Estableciendo ancho del div de la opcion 1 -->
                            <div style="width: 45%;">
                                <!-- Estableciendo botón de opción 1 y su estilo -->
                                <button style="width:100%;height: 100%;background-color:crimson" class="rounded-5">
                                    <div class="text-white fw-semibold fs-3">Python</div>
                                </button>
                            </div>
                            <!-- Estableciendo ancho del div de la opcion 2 -->
                            <div style=" width: 45%;">
                                <!-- Estableciendo botón de opción 2 y su estilo -->
                                <button style="width:100%;height: 100%;background-color:cornflowerblue;" class="rounded-5">
                                    <p class="text-white fw-semibold fs-3">Java</p>
                                </button>
                            </div>
                        </div>
                        <!-- Definiendo margen de separación entre el texto y su div -->
                        <div style="display: flex;justify-content: space-between;height: 25%;">
                            <!-- Estableciendo ancho del div de la opcion 3 -->
                            <div style="width: 45%;">
                                <!-- Estableciendo botón de opción 3 y su estilo -->
                                <button style="width:100%;height: 100%;background-color:mediumseagreen" class="rounded-5">
                                    <p class="text-white fw-semibold fs-3">Linux</p>
                                </button>
                            </div>
                            <!-- Estableciendo ancho del div de la opcion 4 -->
                            <div style="width: 45%;">
                                <!-- Estableciendo botón de opción 3 y su estilo -->
                                <button style="width:100%;height: 100%;background-color:tomato;" class="rounded-5">
                                    <p class="text-white fw-semibold fs-3">Html</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Estableciendo diseño y posición de barra inferior para retoceder o avanzar en una pregunta -->
                <div style="background-color: black;height: 12%;display: flex;justify-content:space-between;padding: 0 10% 0 10%;" class="rounded">
                    <!--Pasar a siguiente pregunta-->
                    <div>
                        <a href="juego_estudiante.html"><i class="fa-solid fa-caret-left" style="color: white;  font-size: 40px;"></i></a>
                    </div>
                    <!--Pasar a la anterior pregunta-->
                    <div>
                        <a href="resultados_estudiante.html"><i class="fa-solid fa-caret-right" style="color: white;font-size: 40px;"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </main>

<script src="https://kit.fontawesome.com/a70db94014.js" crossorigin="anonymous"></script>
</div>    
</body>

</html>