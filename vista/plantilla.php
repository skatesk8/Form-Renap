<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Registrate</title>
	<link rel="stylesheet" type="text/css" href="vista/css/bootstrap.css">
	<link rel="stylesheet" href="vista/css/bootstrap.min.css">
	<link rel="stylesheet" href="vista/css/style.css">
</head>
<body style="background: #fff">
	<div class="container"> <br><br>
	<div class="card shadow-lg p-3 mb-5 bg-white">
		<div class="card-header" style="background: #fff;">
			<div class="row">
				<div class="col-md-7">
					<img src="vista/img/logo.PNG" alt="">
				</div>
				<div class="col-md-5"> <br>
				  <div class="form-group row">
				   <label for="date" class="col-md-5 col-form-label text-md-right">NO. DE INSCRIPCIÓN:</label>
                      <div class="col-md-5">
                        <input type="date" id="date" class="form-control" >
                      </div>
                   </div> 
 				</div>
			</div>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-7 text-center">
					<h3>SOLICITUD DE INSCRIPCION DE NACIMIENTO</h3>
					<h4>Registro nacional de las personas -RENAP-</h4>
					<h4>David Jeremias Vasquez Hernandez 22-C</h4>
				</div>
				<div class="col-md-3"></div>
			</div>
			<div class="fecha">
				<div class="row">
					<div class="col-md-7"></div>
					<div class="col-md-5">
				<div class="form-group row">
                    <label for="date" class="col-md-5 col-form-label text-md-right">Fecha:</label>
                       <div class="col-md-5">
                         <input type="date" id="date" class="form-control" >
                       </div>
                   </div>						
					</div>
				</div>
			</div>
		</div>
		<div class="card-body">
			
	  <?php 
	  include "paginas/form.php";
	   ?>

      </div>
	</div>	
	</div>
	<footer style="height: 70px; background: #333; color: #fff;">
		<h6 class="text-center">Dev. David Vasquez <br> 22 - C</h6>
	</footer>

	<script src="vista/js/main.js"></script>
	<script src="vista/js/validar.js"></script>
</body>
</html>
