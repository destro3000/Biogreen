<?php 

include "../config/config.php";

 
$title = $_POST["check"];

		$description = "Se realiza la tarea diaria con exito";
		$category_id = "9";
		$project_id = "6";
		$priority_id = "2";
		$user_id= $_POST['usuario'];
		//$status_id = "3";
		$kind_id =$_POST['usuario'];
		$opcion  = $_POST['option'];

		// $user_id=$_SESSION['user_id'];
		foreach ($title as $key => $value) {
			$titulo = $value;
			if($opcion == 'Finalizado' && $titulo == 'Checklist diarios')
			{
				$sql="insert into ticket (title,description,category_id,project_id,priority_id,user_id,status_id,kind_id,created_at) values ('$titulo','$description',$category_id,$project_id,$priority_id,$user_id,'3',$kind_id,NOW())";
				$query_new_insert = mysqli_query($con,$sql);
						
				if ($query_new_insert)
				{
					?>
						<script type="text/javascript">
						alert('la tarea se registro en estado finalizado.');
						window.location = 'http://192.168.1.219/cmr_ikono/checkbox.php';
					</script>
			        <?php 

				}	
				else
				{
					?>
					<script type="text/javascript">
						alert('El registro de la tarea ha fallado.');
						window.location = 'http://192.168.1.219/cmr_ikono/checkbox.php';
					</script>
					<?php
				}
			}
			else if($opcion == 'Finalizado' && $titulo == 'saldos y registros mahindra')
			{
				$sql="insert into ticket (title,description,category_id,project_id,priority_id,user_id,status_id,kind_id,created_at) values ('$titulo','$description',$category_id,$project_id,$priority_id,$user_id,'3',$kind_id,NOW())";
				$query_new_insert = mysqli_query($con,$sql);
						
				if ($query_new_insert)
				{
					?>
						<script type="text/javascript">
						alert('la tarea se registro en estado finalizado.');
						window.location = 'http://192.168.1.219/cmr_ikono/checkbox.php';
					</script>
			        <?php 

				}	
				else
				{
					?>
					<script type="text/javascript">
						alert('El registro de la tarea ha fallado.');
						window.location = 'http://192.168.1.219/cmr_ikono/checkbox.php';
					</script>
					<?php
				}
			}
			else if($opcion == 'Finalizado' && $titulo == 'Espacios cloud')
			{
				
				$sql="insert into ticket (title,description,category_id,project_id,priority_id,user_id,status_id,kind_id,created_at) values ('$titulo','$description',$category_id,$project_id,$priority_id,$user_id,'3',$kind_id,NOW())";
				$query_new_insert = mysqli_query($con,$sql);
						
				if ($query_new_insert)
				{
					?>
						<script type="text/javascript">
						alert('la tarea se registro en estado finalizado.');
						window.location = 'http://192.168.1.219/cmr_ikono/checkbox.php';
					</script>
			        <?php 

				}	
				else
				{
					?>
					<script type="text/javascript">
						alert('El registro de la tarea ha fallado.');
						window.location = 'http://192.168.1.219/cmr_ikono/checkbox.php';
					</script>
					<?php
				}
			}
				else if($opcion == 'Finalizado' && $titulo == 'validacion Nulas')
			{
				
				$sql="insert into ticket (title,description,category_id,project_id,priority_id,user_id,status_id,kind_id,created_at) values ('$titulo','$description',$category_id,$project_id,$priority_id,$user_id,'3',$kind_id,NOW())";
				$query_new_insert = mysqli_query($con,$sql);
						
				if ($query_new_insert)
				{
					?>
						<script type="text/javascript">
						alert('la tarea se registro en estado finalizado.');
						window.location = 'http://192.168.1.219/cmr_ikono/checkbox.php';
					</script>
			        <?php 

				}	
				else
				{
					?>
					<script type="text/javascript">
						alert('El registro de la tarea ha fallado.');
						window.location = 'http://192.168.1.219/cmr_ikono/checkbox.php';
					</script>
					<?php
				}
			}

				else if($opcion == 'Finalizado' && $titulo == 'Saldo Tigo')
			{
				
				$sql="insert into ticket (title,description,category_id,project_id,priority_id,user_id,status_id,kind_id,created_at) values ('$titulo','$description',$category_id,$project_id,$priority_id,$user_id,'3',$kind_id,NOW())";
				$query_new_insert = mysqli_query($con,$sql);
						
				if ($query_new_insert)
				{
					?>
						<script type="text/javascript">
						alert('la tarea se registro en estado finalizado.');
						window.location = 'http://192.168.1.219/cmr_ikono/checkbox.php';
					</script>
			        <?php 

				}	
				else
				{
					?>
					<script type="text/javascript">
						alert('El registro de la tarea ha fallado.');
						window.location = 'http://192.168.1.219/cmr_ikono/checkbox.php';
					</script>
					<?php
				}
			}

			else if($opcion == 'Finalizado' && $titulo == 'Saldo Claro')
			{
				
				$sql="insert into ticket (title,description,category_id,project_id,priority_id,user_id,status_id,kind_id,created_at) values ('$titulo','$description',$category_id,$project_id,$priority_id,$user_id,'3',$kind_id,NOW())";
				$query_new_insert = mysqli_query($con,$sql);
						
				if ($query_new_insert)
				{
					?>
						<script type="text/javascript">
						alert('la tarea se registro en estado finalizado.');
						window.location = 'http://192.168.1.219/cmr_ikono/checkbox.php';
					</script>
			        <?php 

				}	
				else
				{
					?>
					<script type="text/javascript">
						alert('El registro de la tarea ha fallado.');
						window.location = 'http://192.168.1.219/cmr_ikono/checkbox.php';
					</script>
					<?php
				}
			}


			else if($opcion == 'Finalizado' && $titulo == 'Archivo BBVA')
			{
				
				$sql="insert into ticket (title,description,category_id,project_id,priority_id,user_id,status_id,kind_id,created_at) values ('$titulo','$description',$category_id,$project_id,$priority_id,$user_id,'3',$kind_id,NOW())";
				$query_new_insert = mysqli_query($con,$sql);
						
				if ($query_new_insert)
				{
					?>
						<script type="text/javascript">
						alert('la tarea se registro en estado finalizado.');
						window.location = 'http://192.168.1.219/cmr_ikono/checkbox.php';
					</script>
			        <?php 

				}	
				else
				{
					?>
					<script type="text/javascript">
						alert('El registro de la tarea ha fallado.');
						window.location = 'http://192.168.1.219/cmr_ikono/checkbox.php';
					</script>
					<?php
				}
			}
      
      
      else if($opcion == 'Finalizado' && $titulo == 'Cargue De Comisiones')
			{
				
				$sql="insert into ticket (title,description,category_id,project_id,priority_id,user_id,status_id,kind_id,created_at) values ('$titulo','$description',$category_id,$project_id,$priority_id,$user_id,'3',$kind_id,NOW())";
				$query_new_insert = mysqli_query($con,$sql);
						
				if ($query_new_insert)
				{
					?>
						<script type="text/javascript">
						alert('la tarea se registro en estado finalizado.');
						window.location = 'http://192.168.1.219/cmr_ikono/checkbox.php';
					</script>
			        <?php 

				}	
				else
				{
					?>
					<script type="text/javascript">
						alert('El registro de la tarea ha fallado.');
						window.location = 'http://192.168.1.219/cmr_ikono/checkbox.php';
					</script>
					<?php
				}
			}

			else
			{
				$sql="insert into ticket (title,description,category_id,project_id,priority_id,user_id,status_id,kind_id,created_at) values ('$titulo','$description',$category_id,$project_id,$priority_id,$user_id,'1',$kind_id,NOW())";
				$query_new_insert = mysqli_query($con,$sql);
						
				if ($query_new_insert)
				{
					?>
						<script type="text/javascript">
						alert('la tarea se registro en estado pendiente .');
						window.location = 'http://192.168.1.219/cmr_ikono/checkbox.php';
					</script>
			        <?php 

				}	
				else
				{
					?>
					<script type="text/javascript">
						alert('El registro de la tarea ha fallado.');
						window.location = 'http://192.168.1.219/cmr_ikono/checkbox.php';
					</script>
					<?php
				}
			}
		}
		?>

	
    ?>

