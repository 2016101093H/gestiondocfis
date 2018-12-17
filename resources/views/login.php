<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Grados y T&iacute;tulos</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body style="background-color: ; font-weight: lighter;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 text-center" style="background-color: #171a21;">
				<h3 style="color: #fff">Tr&aacute;mite Documentario Grado Bachiller</h3>
			</div>
		</div>
		<br><br><br>
		<div class="row">
			<div class="col col-lg-6">
				<form  class="container form-control-sm was-validated col-lg-6 breadcrumb" id="needs-validation" method="POST" action="../controlador/autenticacionAlumno.php">
					<div><h4>Alumno</h4></div><br>
				    <div class="form-group">
				        <label for="exampleInputEmail1">Nombre de Usuario</label>
				    	<input type="text" class="form-control" name="nombre_usuario_alum" placeholder="ejemplo: 2017217503Z" required>
				    </div>
				    <div class="form-group">
				    	<label for="exampleInputPassword1">Contraseña</label>
				    	<input type="password" class="form-control " name="password_alum" placeholder="contraseña" required>
				    </div>
				  	<br>
				    <button type="submit" class="btn btn-primary">Iniciar Sesi&oacute;n</button>
				</form>
			</div>
			<div class="col col-lg-6">
				<form  class="container form-control-sm was-validated col-lg-6 breadcrumb" id="needs-validation" method="POST" action="../controlador/autenticacionAdministrativos.php">
					<div><h4>Administrativo</h4></div><br>
				    <div class="form-group">
				        <label for="validationDefault01">Nombre de Usuario</label>
				    	<input type="text" class="form-control" id="validationDefault01" name="nombre_usuario_admin" placeholder="ejemplo: 2017217503Z" required>
				    </div>
				    <div class="form-group">
				    	<label for="exampleInputPassword1">Contraseña</label>
				    	<input type="password" class="form-control" name="password_admin" placeholder="contraseña" required>
				    </div>
				    <div class="form-group">
					    <label for="exampleFormControlSelect1">Categor&iacute;a</label>
					    <select class="custom-select d-block" name="categoria_admin" required>
					    	<option value="">Categoría</option>
					        <option>Administrador</option>
					        <option>Secretaria de Decanatura</option>
					        <option>Comisión de Asuntos Académicos</option>
					        <option>Decano</option>
					        <option>Consejo de Facultad</option>
					    </select>
					</div>
				  	<br>
				    <button type="submit" class="btn btn-primary">Iniciar Sesi&oacute;n</button>
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