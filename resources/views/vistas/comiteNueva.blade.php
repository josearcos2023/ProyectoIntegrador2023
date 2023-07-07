<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comité Menú</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel=StyleSheet href="css/styles.css" type="text/css" media=screen> 
</head>.
<body style="background-image: url('images/FondoEspacio5.jpg');">
    <div class="container py-5">
       <!-- CREACION DE CUADRO GRIS PRINCIPAL EXTERNO -->
       <div class="row ">
          <div class="col-md-12 d-flex justify-content-center">
            <div class="card rounded-4" style="background-color:rgba(205, 205, 227, 0.8);">
                <div class="row">
                    <div class="col-md-3 div-superior px-4">
                        <a href="{{ url('/') }}"><img src="images/Preguntados-Logo.png" class="img-fluid" alt="images"></a>
                    </div>
                </div>
               <div class="card-body">
                    <!-- CREACION DE 2 COLUMNAS EN LA MISMA FILA -->
                    <div class="row">
                        <div class="col-md-3 d-flex">
                            <div class="card flex-fill">
                                <div class="card-body">
                                      <!-- CREACION DE BOTON PANEL -->
                                        <a href="{{ url('/menu') }}">
                                        <div class="row g-0 mt-3">
                                           <div class="col-md-3">
                                               <img src="images/icono_user.jpg" class="img-fluid img-thumbnail custom-image1" alt="imagen">
                                           </div>
                                           <div class="col-md-9">
                                               <div class="fw-bold mt-2" style="color: rgb(118, 22, 170);">Panel</div>
                                           </div>
                                        </div>
                                        </a>
                                        <!-- CREACION DE BOTON NUEVA PREGUNTA -->
                                        <a href="{{ url('/nuevo') }}">
                                        <div class="row g-0 mt-3">
                                           <div class="col-md-3">
                                               <img src="images/icono_pregunta.png" class="img-fluid img-thumbnail custom-image2" alt="imagen">
                                           </div>
                                           <div class="col-md-9">
                                               <div class="fw-bold mt-2" style="color: rgb(118, 22, 170);">Nueva Pregunta</div>
                                           </div>
                                        </div>
                                        </a>
                                        <!-- CREACION DE BOTON LISTADO DE PREGUNTAS -->
                                        <a href="{{ url('/listado') }}">
                                        <div class="row g-0 mt-3">
                                           <div class="col-md-3">
                                               <img src="images/icono_menu.png" class="img-fluid img-thumbnail custom-image3" alt="imagen">
                                           </div>
                                           <div class="col-md-9">
                                               <div class="fw-bold mt-2" style="color: rgb(118, 22, 170);">Listado de Preguntas</div>
                                           </div>
                                        </div>
                                        </a>
                                        <!-- CREACION DE BOTON CONFIGURACION DE PREGUNTAS -->
                                        <a href="{{url('/configuracionComite')}}">
                                        <div class="row g-0 mt-3">
                                           <div class="col-md-3">
                                               <img src="images/icono_config.png" class="img-fluid img-thumbnail custom-image4" alt="imagen">
                                           </div>
                                           <div class="col-md-9">
                                               <div class="fw-bold mt-2" style="color: rgb(118, 22, 170);">Configuración</div>
                                           </div>
                                        </div>
                                        </a>
                                        <!-- CREACION DE BOTON DE QUIZ.COM -->
                                        <a href="{{url('/')}}">
                                        <div class="row g-0 mt-3">
                                           <div class="col-md-3">
                                               <img src="images/icono_net.png" class="img-fluid img-thumbnail custom-image5" alt="imagen">
                                           </div>
                                           <div class="col-md-9">
                                               <div class="fw-bold mt-2" style="color: rgb(118, 22, 170);">Quiz.com</div>
                                           </div>
                                        </div>
                                        </a>
                                        <!-- CREACION DE BOTON SALIR MENU DE COMITE -->
                                        <a href="javascript:history.back()">
                                        <div class="row g-0 mt-3">
                                           <div class="col-md-3">
                                               <img src="images/icono_retroceder.png" class="img-fluid img-thumbnail custom-image6" alt="imagen">
                                           </div>
                                           <div class="col-md-9">
                                               <div class="fw-bold mt-2" style="color: rgb(118, 22, 170);">Salir</div>
                                           </div>
                                        </div>
                                        </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 d-flex">
                            <form action="{{ route('nuevo.store') }}" class="form-control" method="post">
                                @csrf
                            <div class="card flex-fill">
                                <div class="card-body">
                                     <h2 class="card-title mt-2 fw-bold" style="color:#1000c0">Complete la pregunta</h2>
                                </div>
                                <!-- CREANDO TITULOS DE TEMA Y TIPO DE PREGUNTA  -->
                                <div class="row">
                                    <div class="col-md-6 px-5">
                                       <h5 class="card-title mt-3 fw-bold" style="color:#1000c0">Especialidad:</h5>
                                    </div>
                                    <div class="col-md-6 px-5">
                                       <h5 class="card-title mt-3 fw-bold" style="color:#1000c0">Ciclo:</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- CREACION DE SELECT DE TEMAS DE PREGUNTAS -->
                                    <div class="col-md-6 px-5">
                                        <select id="especialidades" name="especialidades" class="form-select" aria-label="Default select example" style="background-color:rgb(219, 219, 219);">
                                            <option>Especialidades</option>
                                            <option value="Redes y comunicaciones">Redes y comunicaciones</option>
                                            <option value="Diseño y Desarrollo de Software">Diseño y Desarrollo de Software</option>
                                            <option value="Diseño y Desarrollo de Videojuegos">Diseño y Desarrollo de Videojuegos</option>
                                            <option value="Big Data">Big Data</option>
                                        </select>
                                    </div>
                                    <!-- CREACION DE SELECT DE TIPOS DE PREGUNTAS -->
                                    <div class="col-md-6 px-5">
                                        <select  id="ciclo" name="ciclo" class="form-select" aria-label="Default select example" style="background-color:rgb(219, 219, 219);">
                                            <option selected>Ciclo</option>
                                            <option value="1"> I </option>
                                            <option value="2"> II</option>
                                            <option value="3"> III </option>
                                            <option value="4"> IV </option>
                                            <option value="5"> V </option>
                                            <option value="6"> VI </option>
                                          </select>
                                    </div>
                                </div>
                                     <!-- CREANDO TITULOS DE TEMA Y TIPO DE PREGUNTA  -->
                                     <div class="row">
                                        <div class="col-md-6 px-5">
                                           <h5 class="card-title mt-3 fw-bold" style="color:#1000c0">Cursos:</h5>
                                        </div>
                                        <div class="col-md-6 px-5">
                                           <h5 class="card-title mt-3 fw-bold" style="color:#1000c0"> Módulo:</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- CREACION DE SELECT DE TEMAS DE PREGUNTAS -->
                                        <div class="col-md-6 px-5">
                                            <select id="curso" name="curso" class="form-select" aria-label="Default select example" style="background-color:rgb(219, 219, 219);">
                                                <option selected>Cursos</option>
                                                <option value="Estructuras de Datos y Algoritmos">Estructuras de Datos y Algoritmos</option>
                                                <option value="Bases de Datos Avanzadas">Bases de Datos Avanzadas</option>
                                                <option value="Sistemas Operativos">Sistemas Operativos</option>
                                                <option value="Ingeniería de Requerimiento de Software">Ingeniería de Requerimiento de Software</option>
                                                <option value="Mejora y Calidad Continua">Mejora y Calidad Continua</option>
                                                <option value="Desarrollo de Aplicaciones en Internet">Desarrollo de Aplicaciones en Internet</option>
                                            </select>
                                        </div>
                                        <!-- CREACION DE SELECT DE TIPOS DE PREGUNTAS -->
                                        <div class="col-md-6 px-5">
                                            <select id="modulo" name="modulo" class="form-select" aria-label="Default select example" style="background-color:rgb(219, 219, 219);">
                                                <option selected>Módulos</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                              </select>
                                        </div>
                                    </div>
                                <!-- CREACION TITULO DE TEXTAREA PREGUNTA -->
                                <div class="row">
                                    <div class="col-md-12 px-5">
                                        <h5 class="card-title mt-4 fw-bold" style="color:#1000c0"> Pregunta:</h5>
                                    </div>
                                </div>
                                <!-- CREACION DE TEXT AREA PARA INSERCION DE LA NUEVA PREGUNTA -->
                                <div class="row">
                                    <div class="col-md-12 px-5" >
                                        <input type="textarea" class="form-control" id="pregunta" name="pregunta" rows="3" style="background-color:rgb(219, 219, 219);" placeholder="Ingrese su pregunta">
                                    </div>
                                </div>
                                <div class="row mx-auto py-3">
                                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
       </div>
    </div>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> 
</body>
</html>