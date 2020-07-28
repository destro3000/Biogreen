<?php	
	session_start();
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['nombre'])) {
           $errors[] = "Titulo vacío";
        } else if (empty($_POST['nit'])){
			$errors[] = "Nit Vacio";
		} else if (
			!empty($_POST['nombre']) &&
			!empty($_POST['nit'])
		){


		include "../config/config.php";//Contiene funcion que conecta a la base de datos

		$nombre = $_POST["nombre"];
		$nit = $_POST["nit"];
		$direccion = $_POST["dir"];
		$telefono = $_POST["tel"];
		#$priority_id = $_POST["priority_id"];
		#$user_id = $_SESSION["user_id"];
		#$status_id = $_POST["status_id"];
		#$kind_id = $_POST["kind_id"];
		#$created_at="NOW()";

		// $user_id=$_SESSION['user_id'];

		$sql="insert into operadores (nombre, nit, direccion, telefono) value (\"$nombre\",\"$nit\",\"$direccion\",\"$telefono\")";

		$query_new_insert = mysqli_query($con,$sql);
			if ($query_new_insert){
				$messages[] = "El operador se Creo Correctamente";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>