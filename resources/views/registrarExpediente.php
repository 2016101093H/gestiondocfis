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
				<h3 style="color: #fff">Registrar Expediente de Alumno</h3>
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
	<div class="row">
		<div class="col col-lg-12">
		    <form  class="container form-control-sm was-validated col-lg-6 breadcrumb" id="needs-validation" method="POST" action="../controlador/registrarExpediente.php">
                <div><h4>Datos del Expediente</h4></div><br>
                     <div class="form-group">
                        <label for="exampleInputEmail1">DNI</label>
                        <input type="text" class="form-control" name="DNI_alum" placeholder="12345678" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre(s)</label>
                        <input type="text" class="form-control" name="nombres_alum" placeholder="Nombres" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos_alum" placeholder="Apellidos" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tipo de Documento</label>
                        <input type="text" class="form-control" name="tipo_docu" placeholder="Título Bachiller" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fecha de llegada</label>
                        <input type="date" class="form-control" name="fecha_inicial" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fecha de salida</label>
                        <input type="date" class="form-control" name="fecha_final" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Estado</label>
                        <input type="text" class="form-control" name="estado" placeholder="Aceptado" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Siguiente Administrativo</label>
                        <input type="text" class="form-control" name="siguiente_proceso" placeholder="Asuntos" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Adjuntar documentos</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div><br>
                <a href="../vista/registrarExpediente.php"><input class="btn btn-primary" type=submit value='Registrar'></a>
                <!--<button type="submit" class="btn btn-primary">Registrar</button>-->
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