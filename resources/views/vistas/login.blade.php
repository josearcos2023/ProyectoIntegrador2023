<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Comité</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</head>

<body class="fondo">
    <div class="base">
        <!--Sección superior de navegación y logo-->
        <div class=" nav_homesite">

            <div class=""> <!--Icono del logo de la aplicación-->
                <p style="color: aliceblue;">Preguntados</p>
            </div>
            <!--Div de la lista de opciones de navegador-->
            <!--Mas info/Como jugar/iniciar sesion/registrarse-->
            <div class="nav_list">
                <!--Div más info-->
                <div class="box_link">
                    <a href="" class="nav_link">
                        <p class="nav_text">Mas info</p>
                    </a>
                </div>
                <!--Div de ¿cómo jugar?-->
                <div class="box_link">
                    <a href="" class="nav_link">
                        <p class="nav_text">Cómo jugar?</p>
                    </a>
                </div>
                <!--Div de iniciar sesión-->
                <div class="box_link">
                    
                        <a href="{{ url('/login') }}" class="nav_link">
                            <p class="nav_text"> Iniciar sesión </p>
                        </a>

                        <p class="nav_text">/</p>
                        
                        <a href="{{ url('/registro_tipo') }}" class="nav_link">
                            <p class="nav_text">Registrarse<p>
                        </a>
                    
                </div>
                <!--Div de registrarse-->

            </div>

        </div>

        <!--sección principal-->
        <div class="h-100 d-flex justify-content-center align-items-center">
            <!--div de cuadro que contiene la imagen y el formulario de login-->
            <div class="main_login">
                <!--sección imagen-->
                <div class="col-6 card box_main_img rounded-4">
                    <img src="images/perfilAstronauta.jpg" class="rounded-4" alt="" width="100%" height="100%">
                    <!--Texto contenido en la imagen-->
                    <div class="card-img-overlay d-flex align-items-start flex-column bd-highlight mb-3  ">
                        <div class="p-2  d-flex flex-column justify-content-center w-100 h-50">
                            <!--Texto superior-->
                            <div class="d-flex align-items-center justify-content-center h-50">
                                <p class=" login_img_text Limg_text_sup"></p>
                            </div>
                            <div class="d-flex align-items-start justify-content-center h-50">
                                <p class=" login_img_text Limg_text_mid"></p>
                            </div>
                        </div>

                        <div class="p-2   d-flex justify-content-center w-100 h-50 ">
                            <!--Texto inferior-->
                            <p class=" login_img_text Limg_text_bot d-flex align-items-end ">
                               
                            </p>
                        </div>

                    </div>
                </div>
                <!--Segundo div, es el espacio donde estará el login-->
                <div class="col-lg-6  col-12 d-flex justify-content-center align-items-center box_main_form ">
                    <!--Div de todo el login -->
                    <div class="div_login d-flex justify-content-center flex-column ">
                        <!--Div del titulo de iniciar sesion-->
                        <div class="d-flex align-items-end justify-content-center h-25 ">
                            <p class="login_title">Iniciar sesión</p>
                        </div>
                        <!--Div del formulario de login-->
                        <div class="h-75">
                            <!--Formulario de login-->
                            <form action="">
                                <div class="login_div_input">
                                    <input type="text" placeholder="Usuario" class="input_login form-control">
                                </div>
                                <div class="login_div_input">
                                    <input type="text" placeholder="Contraseña" class="input_login form-control">
                                </div>
                                <div class="text-center login_div_input">
                                    <a href="comiteMenu.html"><input type="button" value="Ingresar" class="login_btn"></a>
                                </div>
                            </form>
                        </div>
                        <!--Div para el texto de registrarse si no tienes cuenta-->
                        <div class="d-flex align-items-end justify-content-center">
                            <a  class="d-flex texto_enlace" href="{{ url('/registro_tipo') }}">
                                <p>Si no tienes cuenta,Registrate </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <script src="https://kit.fontawesome.com/a70db94014.js" crossorigin="anonymous"></script>

</body>

</html>