<!DOCTYPE html>
<html>
<head>
	<title>Gestión de Flotilla | Vehiculos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="main/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	
	
</head>
<body>
<?php include('modales.html') ?>
 <?php include('head.html') ?>

  <!-- Contenedor principal -->


       
  <div class="row mb-1">
    <div class="col-4">
        <h1>Administracion / Vehiculos</h1>
    </div>    
    <div class="col-1 text-end">
        <button type="button" class="btn btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#confirmpres">Nuevo Vehiculo</button>
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
								<th>Marca</th>
								<th>Modelo</th>
								<th>Año</th>
								<th>Numero de Placas</th>
								<th>Número de identificación del vehículo (VIN)</th>
								<th>Póliza de seguro del vehículo</th>
								<th>Aseguradora</th>
								<th>Fecha de vencimiento del seguro</th>
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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>