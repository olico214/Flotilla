<!DOCTYPE html>
<html>
<head>
	<title>Gestión de Flotilla</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Carga de estilos de Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    

</head>
<body >
	<!-- Bloque 1 -->
	<!-- Líneas 1-30 -->
	<!-- Barra lateral con el menú -->
	<?php include('head.html') ?>

	<!-- Contenido principal -->
	<div >
    <!-- Líneas 31-60 -->
    <h1 style="padding-left: 12%;">Administracion / Pagos</h1>
    <div class="container">
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
                <!-- Primera fila -->
                <tr>
                    <td>Juan Pérez</td>
                    <td>Chevrolet Aveo</td>
                    <td>$500.00</td>
                    <td class="abonado">$0.00</td>
                    <td class="restante">$500.00</td>
                    <td class="documents">10/10</td>
                    <td><button class="btn btn-primary details-button">Agregar Pago</button></td>
                </tr>

                <!-- Segunda fila -->
                <tr>
                    <td>María Hernández</td>
                    <td>Nissan Versa</td>
                    <td>$800.00</td>
                    <td class="abonado">$400.00</td>
                    <td class="restante">$400.00</td>
                    <td class="documents">8/10</td>
                    <td><button class="btn btn-primary details-button">Agregar Pago</button></td>
                </tr>

                <!-- Tercera fila -->
                <tr>
                    <td>Carlos Gómez</td>
                    <td>Ford Fiesta</td>
                    <td>$1,000.00</td>
                    <td class="abonado">$100.00</td>
                    <td class="restante">$900.00</td>
                    <td class="documents">9/10</td>
                    <td><button class="btn btn-primary details-button">Agregar Pago</button></td>
                </tr>

                <!-- Cuarta fila -->
                <tr>
                    <td>Sofía Ramírez</td>
                    <td>Chevrolet Sonic</td>
                    <td>$700.00</td>
                    <td class="abonado">$700.00</td>
                    <td class="restante">$0.00</td>
                    <td class="documents">10/10</td>
                    <td><button class="btn btn-primary details-button">Agregar Pago</button></td>
                </tr>

                <!-- Quinta fila -->
                <tr>
                    <td>José López</td>
                    <td>Toyota Yaris</td>
                    <td>$400.00</td>
                    <td class="abonado">$200.00</td>
                    <td class="restante">$200.00</td>
                    <td class="documents">6/10</td>
                    <td><button class="btn btn-primary details-button">Agregar Pago</button></td>
                </tr>

                <!-- Sexta fila -->
                <tr>
                    <td>Ana García</td>
                    <td>Hyundai Accent</td>
                    <td>$600.00</td>
                    <td class="abonado">$400.00</td>
                    <td class="restante">$200.00</td>
                    <td class="documents">9/10</td>
                    <td><button class="btn btn-primary details-button">
		<!-- Líneas 61-90 -->
        Ver detalles</button></td>
    </tr>

    <!-- Séptima fila -->
    <tr>
        <td>David Rodríguez</td>
        <td>Jeep Cherokee</td>
        <td>$1,200.00</td>
        <td class="abonado">$800.00</td>
        <td class="restante">$400.00</td>
        <td class="documents">7/10</td>
        <td><button class="btn btn-primary details-button">Agregar Pago</button></td>
    </tr>

    <!-- Octava fila -->
    <tr>
        <td>Isabel Fernández</td>
        <td>Toyota Corolla</td>
        <td>$900.00</td>
        <td class="abonado">$500.00</td>
        <td class="restante">$400.00</td>
        <td class="documents">10/10</td>
        <td><button class="btn btn-primary details-button">Agregar Pago</button></td>
    </tr>

    <!-- Novena fila -->
    <tr>
        <td>Miguel Hernández</td>
        <td>Chevrolet Spark</td>
        <td>$300.00</td>
        <td class="abonado">$0.00</td>
        <td class="restante">$300.00</td>
        <td class="documents">5/10</td>
        <td><button class="btn btn-primary details-button">Agregar Pago</button></td>
    </tr>

    <!-- Décima fila -->
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
</body>
</html>
