<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profesor Menú</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Poppins:ital,wght@1,500;1,600&display=swap" rel="stylesheet">

    <meta name="robots" content="noindex, follow">
</head>

<body style="background-image: url(images/marte3.jpg);">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
          <b class="navbar-brand">
              <i class="ri-survey-fill"></i>
              SPACE QUIZ
          </b>
      </div>

      <div class="col-2" id="navclock2">
          <div class="d-flex align-items-center justify-content-center">
              <i class="ri-home-fill"></i>
              <i class="ri-user-line" id="usuarionav"></i>
          </div>
      </div>
  </nav>

  <div class="container col-md-12" id="cuerpo2">
      <div style="background-color: rgba(128, 128, 128, 0.5);">
          <p></p>
          <div id="encabezado" class="container">
              <div class="row">
                  <img src="images/astro.png" alt="">
                  <div class="col-sm-10 d-flex align-items-center justify-content-center" id="preguntaB">
                      <b>¡BIENVENIDO, CREA TU JUEGO Y EVALÚA!</b>
                  </div>
                  <a href="configuracion.html">
                  <div class="d-flex justify-content-center mt-3">
                      <button class="btn btn-danger" id="botoncrear">
                          <i class="ri-gamepad-line"></i>
                          Crear Juego
                      </button>
                  </div>
                  </a>
              </div>
          </div>
      </div>
      <div id="seccionsalones" class="container mt-5">
          <div id="selecciona">
              <p>
                  <span>
                      <b>ESTADÍSTICA DE LOS JUGADORES</b>
                  </span>
              </p>
          </div>
          <div id="respuestas" class="mt-5" style="padding-left: 5%;">
              <div class="row justify-content-center">
                  <div class="col-sm-4">
                    <div class="card fondogris2" style="width: 18rem;">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <div class="card-title-container fondoverde">
                                <h5 class="card-title">AULA 2C-24A</h5>
                            </div>
                            <a href="#" class="btn btn-primary">Ver</a>
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card fondogris2" style="width: 18rem;">
                      <div class="card-body d-flex flex-column align-items-center justify-content-center">
                          <div class="card-title-container fondoverde">
                              <h5 class="card-title">AULA 2C-24B</h5>
                          </div>
                          <a href="#" class="btn btn-primary">Ver</a>
                      </div>
                  </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card fondogris2" style="width: 18rem;">
                      <div class="card-body d-flex flex-column align-items-center justify-content-center">
                          <div class="card-title-container fondoverde">
                              <h5 class="card-title">AULA 2C-24C</h5>
                          </div>
                          <a href="#" class="btn btn-primary">Ver</a>
                      </div>
                  </div>
                  </div>
              </div>
              <div class="row mt-4">
                  <div class="col-sm-4">
                    <div class="card fondogris2" style="width: 18rem;">
                      <div class="card-body d-flex flex-column align-items-center justify-content-center">
                          <div class="card-title-container fondoverde">
                              <h5 class="card-title">AULA 3C-24A</h5>
                          </div>
                          <a href="#" class="btn btn-primary">Ver</a>
                      </div>
                  </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card fondogris2" style="width: 18rem;">
                      <div class="card-body d-flex flex-column align-items-center justify-content-center">
                          <div class="card-title-container fondoverde">
                              <h5 class="card-title">AULA 3C-24B</h5>
                          </div>
                          <a href="#" class="btn btn-primary">Ver</a>
                      </div>
                  </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card fondogris2" style="width: 18rem;">
                      <div class="card-body d-flex flex-column align-items-center justify-content-center">
                          <div class="card-title-container fondoverde">
                              <h5 class="card-title">AULA 3C-24B</h5>
                          </div>
                          <a href="#" class="btn btn-primary">Ver</a>
                      </div>
                  </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <script src="js/menuprofesores.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
</body>
<script src="https://kit.fontawesome.com/a70db94014.js" crossorigin="anonymous"></script>


</html>
