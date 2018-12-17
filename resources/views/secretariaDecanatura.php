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
				<h3 style="color: #fff">M&oacute;dulo de Administraci&oacute;n</h3>
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
	<div class="row">
		<div class="col col-lg-4"></div>
		<div class="col col-lg-4">		
	  		<div class="card border-warning" style="width: 23rem;">	
	  			<img class="card-img-top img-responsive" style="width: 100%; height: 300px" src="../img/admin/exp.png" alt="Imagen expediente">
	  			<div class="card-body">
	    			<h4 class="card-title">Expedientes</h4>
	    			<p class="card-text">M&oacute;dulo para gestionar los expedientes de los alumnos.</p>
   					<div class="row">
						<div class="col col-lg-6">
	    					<a href="../vista/registrarExpediente.php" class="btn btn-success">Registrar</a>
	    				</div>
	    				<div class="col col-lg-6">	
	    					<a href="../vista/mostrarExpedientesDecanatura.php" class="btn btn-primary">Gestionar</a>
	  					</div>
	  				</div>
	  			</div>
			</div>
		</div>
		<div class="col col-lg-4"></div>
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

