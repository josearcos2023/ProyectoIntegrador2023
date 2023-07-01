<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</head>

<body class="fondo">
    <div style="display: flex;flex-direction: column; height: 100vh;">

        <div class=" nav_homesite">

            <div class=""> <!--Icono del logo de la aplicación-->
                <p style="color: aliceblue;">Preguntados</p>
            </div>
            <!--Div de la lista de opciones de navegador-->
            <!--Mas info/Como jugar/iniciar sesion/registrarse-->
            <div class="nav_list">
                <!--Div más info-->
                <div class="box_link">
                    <a href="info.html" class="nav_link">
                        <p class="nav_text">Mas info</p>
                    </a>
                </div>
                <!--Div de ¿cómo jugar?-->
                <div class="box_link">
                    <a href="jugar.html" class="nav_link">
                        <p class="nav_text">Cómo jugar?</p>
                    </a>
                </div>
                <!--Div de iniciar sesión-->
                <div class="box_link">
                    
                        <a href={{ url('/login') }} class="nav_link">
                            <p class="nav_text"> Iniciar sesión </p>
                        </a>

                        <p class="nav_text">/</p>
                        
                        <a href={{ url('/registro_tipo') }} class="nav_link">
                            <p class="nav_text">Registrarse<p>
                        </a>
                    
                </div>
                <!--Div de registrarse-->

            </div>

        </div>
        
        <div style="align-items: stretch;"><!--sección principal-->

            <div class="d-flex justify-content-center"><!--titulo de registro Tipo cuenta-->
                <p class="main_login_text">Elige el tipo de cuenta:</p>
            </div>

            <div class="">

                <div class="row d-flex justify-content-center " style="height: 50%;width: 100%; "><!--Tipos de cuenta-->

                    <div class="col-8 row control"><!--Espacio para tipos de cuenta-->
                        <div class=" box_tipo col-xl-4  d-flex justify-content-center align-items-center">
                            <!--Espacio para tipos de estudiante-->
                            <a href="{{ url('/registroEstudiante') }}" style="text-decoration: none;">
                                <div class="control_tipo" style="border: solid 3px blue;  margin-top: 20px">
                                    <!--tipo de cuenta comite-->
                                    <div style="height: 80%" class="d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-graduation-cap icon_cuenta "
                                            style="color: blue;align-self: center;"></i>
                                    </div>

                                    <div class="" style="height: 20%;">
                                        <p style="color: blue;">Estudiante</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="box_tipo col-xl-4 d-flex justify-content-center align-items-center">
                            <!--Espacio para tipos de docente-->
                            <a href="{{ url('/registroDocente') }}" style="text-decoration: none;">
                                <div class="control_tipo" style="border: solid 3px blueviolet;margin-top: 20px;">
                                    <!--tipo de cuenta comite-->
                                    <div style="height: 80%" class="d-flex justify-content-center align-items-center">
                                        <i class="fa-sharp fa-solid fa-suitcase icon_cuenta"
                                            style="color: blueviolet;"></i>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <p style="color: blueviolet;">Docente</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="box_tipo col-xl-4 d-flex justify-content-center align-items-center">
                            <!--Espacio para tipos de comite-->
                            <a href="{{ url('/registroComite') }}" style="text-decoration: none;">
                                <div class="control_tipo" style="border: solid 3px orange;margin-top: 20px">
                                    <div style="height: 80%" class="d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-user icon_cuenta" style="color: orange;"></i>
                                    </div>
                                    <div>
                                        <p style="color: orange;">Comité</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center" style="padding-top: 50px;"><!--opcion de iniciar sesion-->
                <div>
                    <p style="display: inline;">¿Tienes una cuenta? </p> <a href="{{ url('/login') }}">Inicia sesión</a>
                </div>
            </div>
        </div>
    </div>



    <script src="https://kit.fontawesome.com/a70db94014.js" crossorigin="anonymous"></script>

</body>

</html>