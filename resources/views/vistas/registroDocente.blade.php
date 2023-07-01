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
     
    <div class="base">

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
                    
                        <a href="login.html" class="nav_link">
                            <p class="nav_text"> Iniciar sesión </p>
                        </a>

                        <p class="nav_text">/</p>
                        
                        <a href="registro_tipo.html" class="nav_link">
                            <p class="nav_text">Registrarse<p>
                        </a>
                    
                </div>
                <!--Div de registrarse-->

            </div>

        </div>
        <!--sección principal-->
        <div style="height: 100vh;" class="d-flex justify-content-center align-items-center">
            <div class="d-flex" style=" background-color: rgb(255, 255, 255);">
                <div class="col-lg-6  col-12 "><!--sección registro-->
                    <div style="padding: 50px;">
                        <div>
                            <p style="font-size: 40px;padding: 0px 0px 0px 20px;">Registro</p>
                        </div>
                        <form action="">
                            <div class="double_col box_input"><!--Caja de nombres -->
                                <label for="">Nombres</label>
                                <input type="text"  class="registro_input">
                                <span></span>
                            </div>

                            <div class="double_col box_input"><!--Caja de apellidos -->
                                <label for="" >Apellidos</label>
                                <input type="text" class="registro_input">
                            </div>

                            <div class="double_col box_input"><!--Caja de usuario -->
                                <label for="" >Nombre de usuario</label>
                                <input type="text" class="registro_input">
                            </div>

                            <div class="double_col box_input"><!--Caja de email -->
                                <label for="">Correo</label>
                                <input type="text" class="registro_input">
                            </div>

                            <div class="single_col box_input" ><!--Caja de contraseña -->
                                <label for="">Contraseña</label>
                                <input type="text" class="registro_input">
                            </div>

                            <div class="single_col box_input" ><!--Caja de confirmar contraseña -->
                                <label for="">Confirmar contraseña</label>
                                <input type="text" class="registro_input">
                            </div>

                            <div>
                                <div class="d-flex justify-content-center" style="padding-top: 30px;"><!--Caja de boton de registrarme-->
                                    <a href="login.html"><input type="button" value="Registrarme"  class="btn btn-warning btn-outline-secondary btn-lg"  style="color: rgb(0, 0, 0)" ></a>    
                                </div>
                                <div class="d-flex justify-content-center" style="padding-top: 50px;"><!--Iniciar sesion-->
                                    <p class="d-flex " style="display: flex;">¿Tienes una cuenta? 
                                    <a href="{{ url('/login') }}">Inicia sesión</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="col-lg-6 card box_main_img  d-flex justify-content-center align-items-center box_main_form" style="background-color: aqua;"> <!--seccion imagen-->
        
                        <img src="images/RegistroDocente.jpg" alt="" width="100%" height="100%">
                        <div class="card-img-overlay d-flex align-items-start flex-column bd-highlight mb-3 ">
                            <div class="p-2  d-flex flex-column justify-content-center" style="width: 100%; height: 50%;">
                                <!--Texto superiore-->
                                <div class="d-flex align-items-center justify-content-center" style="height: 50%;">
                                    <p class="text-white " style="font-size: 35px;text-align: center;"></p>
                                </div>

                            </div>
    

    
                        </div>

                </div>
            </div>

        </div>
    </div>



    <script src="https://kit.fontawesome.com/a70db94014.js" crossorigin="anonymous"></script> 
</body>

</html>