
<!DOCTYPE html>
<html>
<head>
	<title>Gestión de Flotilla | Chofer</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="main/style.css">
	
</head>
<body>

 <?php include('head.html') ?>
  <!-- Contenedor principal -->


       
  <div class="row mb-1">
    <div class="col-4">
        <h1>Administracion / Vehiculos</h1>
    </div>    
    <div class="col-1 text-end">
        <button type="button" class="btn btn-primary mx-2">Registrar Chofer</button>
    </div>    
    <div class="col-7">
        
    </div>    
</div>
	<main>
		<div class="container-fluid">
			<div class="table-responsive">
				<table class="table table-striped table-light">
						<thead>
							<tr>
								<th>Nombre completo</th>
								<th>Fecha de nacimiento</th>
								<th>Género</th>
								<th>Dirección</th>
								<th>Numero de Telefono</th>
								<th>Numero de Telefono alterno</th>
								<th>Email</th>
								<th>Identificación</th>
								<th></th>
								
							</tr>
						</thead>
						
				
				</table>
			</div>
		</div>
	</main>




	<!-- Scripts de Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>