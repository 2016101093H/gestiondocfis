<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Decanatura</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body style="font-weight: lighter;">
<div class="container-fluid">
    <div class="row">
            <div class="col-lg-12 text-center" style="background-color: #171a21;">
                <h3 style="color: #fff">Modificar Expediente</h3>
            </div>
    </div>
    <br>
    <?php
        session_start();
        if (isset($_SESSION['s_decanatura'])):
            echo "<div class='row'>";
                echo "<div class='col col-lg-10'>";
                    echo "<h5>Bienvenido</h5>";
                echo "</div>";
                echo "<div class='col col-lg-2'>";
                    echo "<a href='../controlador/cerrarSesion.php' class='btn btn-danger'>Cerrar Sesión</a>";
                echo "</div>";
            echo "</div>";      
        else: header("location: ../index.php"); 
        endif;
    ?>
    <br>
     <div class="row text-center">
        <div class="col col-lg-1">
            <a href="../vista/mostrarExpedientesDecanatura.php"><input type="button" class="btn btn-success" value='Gestionar'></a>
        </div>
        <div class="col col-sm-1">    
            <a href="../vista/secretariaDecanatura.php"><input type="button" class="btn btn-primary" value='Volver'></a>
        </div>
    </div>
    <br>
    <?php
        include("../modelo/conexionBD.php");
        $id = (int)$_GET['id'];
        $db->where ("iddecanatura", $id);
        $expediente = $db->getOne ("decanatura");
    ?>  
    <div class="row">
        <div class="col col-lg-12">
            <form class="container form-control-sm col-lg-6 breadcrumb" enctype="multipart/form-data" method="POST" action="../controlador/modificarExpedienteDecanatura.php?id=<?php echo $expediente['iddecanatura'];?>">
                <div><h4>Datos del Expediente</h4></div><br>
                    <div class="form-group">
                        <label for="exampleInputEmail1">DNI</label>
                        <input type="text" class="form-control" name="DNI_alum" value="<?php echo $expediente['DNI'];?>" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre(s)</label>
                        <input type="text" class="form-control" name="nombres_alum" value="<?php echo $expediente['nombres'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos_alum" value="<?php echo $expediente['apellidos'];?>" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tipo de Documento</label>
                        <input type="text" class="form-control" name="tipo_docu" value="<?php echo $expediente['tipo_documento'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fecha de llegada</label>
                        <input type="date" class="form-control" name="fecha_inicial" value="<?php echo $expediente['fecha_inicial'];?>" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fecha de salida</label>
                        <input type="date" class="form-control" name="fecha_final" value="<?php echo $expediente['fecha_final'];?>" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Estado</label>
                        <input type="text" class="form-control" name="estado" value="<?php echo $expediente['estado'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Siguiente Administrativo</label>
                        <input type="text" class="form-control" name="siguiente_proceso" value="<?php echo $expediente['siguiente_proceso'];?>" >
                    </div>
                    <br>
                <a href="../vista/mostrarExpedientesDecanatura.php"><input class="btn btn-primary" type=submit value='Actualizar'></a>
            </form>

        </div>
    </div>    
    <br><br>
    <div class="row">
        <div class="col-lg-12">
            <footer class="breadcrumb" style="background-color: #171a21; color: #fff">
                <p style="text-align: center">Aplicaciones Móviles y Web</p>
            </footer>
        </div>
    </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>