<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <meta name="author" content="Enrique Corona Ricaño">
    <meta name="description"
          content="Repositorio para las materias de la Maestría en Dirección e Ingenieria de Sitios Web de UNIR México por el alumno Enrique Corona Ricaño">
    <meta name="keywords"
          content="Enrique Corona Ricaño, Estudiante de Maestria en UNIR México, Maestría en Dirección e Ingenieria de Sitios Web ">

    <link rel="stylesheet" href="../../../assets/bootstrap4-5/css/bootstrap.min.css">

    <link rel="stylesheet" href="../../../assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="../../../assets/fontawesome/css/fontawesome.css">

    <link rel="stylesheet" href="../../../assets/css/comun.css">

    <title>Maestria UNIR - Enrique Corona</title>

    <link rel="icon" href="../../../assets/logo/favicon.PNG">
</head>
<body>

<div class="container-fluid mt-3">
    <div class="row">
        <div class="form-group col-lg-12 col-md-12 text-center font-weight-bold ">
            <div class="alert alert-primary">Lenguajes, estándares y Tecnologías Web</div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-xl-12">
            <div class="accordion" id="entregables_taras">
                <div class="card">
                    <div class="card-header">
                        <h2 class="mb-0">
                            <button class="btn btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#primer_semestre" aria-expanded="true" aria-controls="entregables_taras">
                                Entregables - Tareas
                            </button>
                        </h2>
                    </div>
                    <div id="primer_semestre" class="collapse show" aria-labelledby="headingOne"
                         data-parent="#acordion_semestres">
                        <div class="card-body">
                            <?php include_once('entregables.php') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- end div.containerfluid -->

<script src="../../../assets/js/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="../../../assets/bootstrap4-5/js/bootstrap.min.js"></script>

</body>
</html>