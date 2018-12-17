<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administrador</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body style="font-weight: lighter;">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 text-center" style="background-color: #171a21;">
            <h3 style="color: #fff">Mostrar Expedientes</h3>
        </div>
    </div>
    <br>
    <?php
        session_start();
        if (isset($_SESSION['s_administrador'])):
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
        <div class="col col-sm-1">    
            <a href="../vista/alumno.php"><input type="button" class="btn btn-primary" value='Volver'></a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <h5>Historia de expediente</h5>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col col-lg-12 table-responsive">
            <table class="table table-bordered table-inverse table-striped">
                <tr>
                    <th>DNI</th>
                    <th>Interesado</th>
                    <th>Tipo Documento</th>
                    <th>Fecha llegada</th>
                    <th>Fecha salida</th>
                    <th>Observaciones</th>
                    <th>Estado</th>
                    <th>Siguiente Administrativo</th>
                </tr>
                    <?php 
                        include("../modelo/conexionBD.php");
                        $page = (isset($_GET['page']))?(int)$_GET['page']:1; 
                        $expedientes = $db->arraybuilder()->paginate("expediente", $page);
                        $decanatura = $db->arraybuilder()->paginate("decanatura", $page);
                        $asuntos = $db->arraybuilder()->paginate("asuntos", $page);
                        $decano = $db->arraybuilder()->paginate("decano", $page);
                        $consejo = $db->arraybuilder()->paginate("consejo", $page);
                        if ($db->count == 0) {
                            echo "<td align=center colspan=5>No hay expedientes registrados</td>";
                            return;
                        }
                    ?>
                    <?php foreach ($expedientes as $data ) { ?>  
                        <tr>
                            <td><?php echo $data['DNI'];?></td>
                            <td><?php echo $data['nombres']; echo " "; echo $data['apellidos'];?></td> 
                            <td><?php echo $data['tipo_documento'];?></td>
                            <td><?php echo $data['fecha_inicial'];?></td> 
                            <td><?php echo $data['fecha_final'];?></td> 
                            <td><?php echo $data['observaciones'];?></td> 
                            <td><?php echo $data['estado'];?></td>
                            <td><?php echo $data['siguiente_proceso'];?></td>  
                        </tr>
                    <?php } ?>
                    <?php foreach ($decanatura as $data ) { ?>  
                        <tr>
                            <td><?php echo $data['DNI'];?></td>
                            <td><?php echo $data['nombres']; echo " "; echo $data['apellidos'];?></td> 
                            <td><?php echo $data['tipo_documento'];?></td>
                            <td><?php echo $data['fecha_inicial'];?></td> 
                            <td><?php echo $data['fecha_final'];?></td> 
                            <td><?php echo $data['observaciones'];?></td> 
                            <td><?php echo $data['estado'];?></td>
                            <td><?php echo $data['siguiente_proceso'];?></td>  
                        </tr>
                    <?php } ?>
                    <?php foreach ($asuntos as $data ) { ?>  
                        <tr>
                            <td><?php echo $data['DNI'];?></td>
                            <td><?php echo $data['nombres']; echo " "; echo $data['apellidos'];?></td> 
                            <td><?php echo $data['tipo_documento'];?></td>
                            <td><?php echo $data['fecha_inicial'];?></td> 
                            <td><?php echo $data['fecha_final'];?></td> 
                            <td><?php echo $data['observaciones'];?></td> 
                            <td><?php echo $data['estado'];?></td>
                            <td><?php echo $data['siguiente_proceso'];?></td>  
                        </tr>
                    <?php } ?>
                    <?php foreach ($decano as $data ) { ?>  
                        <tr>
                            <td><?php echo $data['DNI'];?></td>
                            <td><?php echo $data['nombres']; echo " "; echo $data['apellidos'];?></td> 
                            <td><?php echo $data['tipo_documento'];?></td>
                            <td><?php echo $data['fecha_inicial'];?></td> 
                            <td><?php echo $data['fecha_final'];?></td> 
                            <td><?php echo $data['observaciones'];?></td> 
                            <td><?php echo $data['estado'];?></td>
                            <td><?php echo $data['siguiente_proceso'];?></td>  
                        </tr>
                    <?php } ?>
                    <?php foreach ($consejo as $data ) { ?>  
                        <tr>
                            <td><?php echo $data['DNI'];?></td>
                            <td><?php echo $data['nombres']; echo " "; echo $data['apellidos'];?></td> 
                            <td><?php echo $data['tipo_documento'];?></td>
                            <td><?php echo $data['fecha_inicial'];?></td> 
                            <td><?php echo $data['fecha_final'];?></td> 
                            <td><?php echo $data['observaciones'];?></td> 
                            <td><?php echo $data['estado'];?></td>
                            <td><?php echo $data['siguiente_proceso'];?></td>  
                        </tr>
                    <?php } ?>
            </table>
        </div>
    </div><br>
    <br><br><br><br><br><br><br><br>
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