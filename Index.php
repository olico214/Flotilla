<!DOCTYPE html>
<html>
<head>
	<title>Gestión de Flotilla</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="main/style.css">
	
</head>
<body>

 <?php include('head.html') ?>
  <!-- Contenedor principal -->


       
      <div style="container-fluid">
					<h1 >Administracion / Pagos</h1>
					<main>
						<div class="container-fluid">
							<div class="table-responsive">
								<table class="table table-hover table-light">
										<thead>
											<tr>
												<th>Chofer</th>
												<th>Vehículo</th>
												<th>Adeudo</th>
												<th>Abonado</th>
												<th>Restante de pago</th>
												<th>Documentos</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
                    <td>Juan Pérez</td>
                    <td>Chevrolet Aveo</td>
                    <td>$500.00</td>
                    <td class="abonado">$0.00</td>
                    <td class="restante">$500.00</td>
                    <td class="documents">10/10</td>
                    <td><button class="btn btn-primary details-button">Agregar Pago</button></td>
                </tr>
                <tr>
                    <td>María Hernández</td>
                    <td>Nissan Versa</td>
                    <td>$800.00</td>
                    <td class="abonado">$400.00</td>
                    <td class="restante">$400.00</td>
                    <td class="documents">8/10</td>
                    <td><button class="btn btn-primary details-button">Agregar Pago</button></td>
                </tr>
                <tr>
                    <td>Carlos Gómez</td>
                    <td>Ford Fiesta</td>
                    <td>$1,000.00</td>
                    <td class="abonado">$100.00</td>
                    <td class="restante">$900.00</td>
                    <td class="documents">9/10</td>
                    <td><button class="btn btn-primary details-button">Agregar Pago</button></td>
                </tr>
                <tr>
                    <td>Sofía Ramírez</td>
                    <td>Chevrolet Sonic</td>
                    <td>$700.00</td>
                    <td class="abonado">$700.00</td>
                    <td class="restante">$0.00</td>
                    <td class="documents">10/10</td>
                    <td><button class="btn btn-primary details-button">Agregar Pago</button></td>
                </tr>
                <tr>
                    <td>José López</td>
                    <td>Toyota Yaris</td>
                    <td>$400.00</td>
                    <td class="abonado">$200.00</td>
                    <td class="restante">$200.00</td>
                    <td class="documents">6/10</td>
                    <td><button class="btn btn-primary details-button">Agregar Pago</button></td>
                </tr>
                <tr>
                    <td>Ana García</td>
                    <td>Hyundai Accent</td>
                    <td>$600.00</td>
                    <td class="abonado">$400.00</td>
                    <td class="restante">$200.00</td>
                    <td class="documents">9/10</td>
                    <td><button class="btn btn-primary details-button">Agregar Pago</button></td>
                </tr>
                <tr>
                    <td>David Rodríguez</td>
                    <td>Jeep Cherokee</td>
                    <td>$1,200.00</td>
                    <td class="abonado">$800.00</td>
                    <td class="restante">$400.00</td>
                    <td class="documents">7/10</td>
                    <td><button class="btn btn-primary details-button">Agregar Pago</button></td>
                </tr>
                <tr>
                    <td>Isabel Fernández</td>
                    <td>Toyota Corolla</td>
                    <td>$900.00</td>
                    <td class="abonado">$500.00</td>
                    <td class="restante">$400.00</td>
                    <td class="documents">10/10</td>
                    <td><button class="btn btn-primary details-button">Agregar Pago</button></td>
                </tr>
                <tr>
                    <td>Miguel Hernández</td>
                    <td>Chevrolet Spark</td>
                    <td>$300.00</td>
                    <td class="abonado">$0.00</td>
                    <td class="restante">$300.00</td>
                    <td class="documents">5/10</td>
                    <td><button class="btn btn-primary details-button">Agregar Pago</button></td>
                </tr>
                <tr>
                    <td>Lucía Sánchez</td>
                     <td>Nissan Sentra</td>
                    <td>$1,500.00</td>
                    <td class="abonado">$1,000.00</td>
                    <td class="restante">$500.00</td>
                    <td class="documents">10/10</td>
                    <td><button class="btn btn-primary details-button">Agregar Pago</button></td>
                </tr>
										</tbody>
								</table>
							</div>
						</div>
					</main>
				</div>



	<!-- Scripts de Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>