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
				<h3 style="color: #fff">Mostrar Administrativos</h3>
			</div>
	</div>
	<br>
	<?php
		session_start();
		if (isset($_SESSION['s_administrador'])):
			echo "<div class='row'>";
				echo "<div class='col col-lg-10'>";
					echo "<h5>Bienvenido aministrador</h5>";
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
            <a href="../vista/registrarAdministrativo.php"><input type="button" class="btn btn-success" value='Registrar'></a>
        </div>
        <div class="col col-sm-1">    
            <a href="../vista/administrador.php"><input type="button" class="btn btn-primary" value='Volver'></a>
        </div>
    </div>
    <br>
	<div class="row  table-responsive">
		<div class="col col-lg-12">
		    <table class="table table-bordered table-inverse table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Categor&iacute;a</th>
                    <th>Nombre de Usuario</th>
                    <th>Eliminar</th>
                    <th>Modificar</th>
                </tr>
                    <?php 
                        include("../modelo/conexionBD.php");
                        $page = (isset($_GET['page']))?(int)$_GET['page']:1; 
                        $db->pageLimit = 5; 
                        $Administrativos = $db->arraybuilder()->paginate("administrativo", $page);
                        $prev = $page-1;
                        $next = $page+1;
                        if ($db->count == 0) {
                            echo "<td align=center colspan=4>No hay administrativos registrados</td>";
                            return;
                        }
                    ?>
                    <?php foreach ($Administrativos as $data) { ?>  
                        <tr>
                            <td><?php echo $data['idadmin'];?></td>
                            <td><?php echo $data['nombres'];?></td> 
                            <td><?php echo $data['apellidos'];?></td>
                            <td><?php echo $data['categoria'];?></td> 
                            <td><?php echo $data['nombre_usuario'];?></td> 
                            <td>
                                <a class='btn btn-danger' href="../controlador/eliminarAdministrativo.php?id=<?php echo $data['idadmin'];?>">Eliminar</a><br>
                            </td>
                            <td> 
                                <a class='btn btn-warning' style='color: #fff' href="../vista/modificarAdministrativo.php?id=<?php echo $data['idadmin'];?>">Modificar</a>
                            </td>
                        </tr>
                    <?php } ?>
            </table>
        </div>
    </div>        
    <div class="row text-center">
        <div class="col-lg-12">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <?php if(!($page<=1)): ?>
                        <li class="page-item">
                            <a class="page-link" href='<?php echo "?page=$prev"?>'>
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                    <?php endif;?>
                    <?php if($db->totalPages>=1){
                            for($x=1;$x<=$db->totalPages;$x++){
                                echo($x==$page)?
                                        "<li class='active page-item'><a class='page-link' href='?page=$x'>$x</a></li>":
                                        "<li class='page-item'><a class='page-link' href='?page=$x'>$x</a></li>";
                                }
                            }
                    ?>
                    <?php if(!($page>=$db->totalPages)):?>
                            <li class="page-item">
                                <a class="page-link" href='<?php echo "?page=$next"?>'>
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                    <?php endif;?>
                </ul>
            </nav>
        </div>
    </div>
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