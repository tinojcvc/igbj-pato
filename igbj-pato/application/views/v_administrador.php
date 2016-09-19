<div class="container">

      <div class="page-header" id="banner">
         <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-6">
               <h1>Bienvenido <?php echo $nombre." ".$apellido;?></h1>
               <?php
                  foreach($info AS $data)
                  {
                     $nombres = $data->nombre;
                     $apellidos = $data->apellido;
                     $ci = $data->ci;
                     $extension_ci = $data->procedencia;
                     $ocupacion = $data->ocupacion;
                     $telefono = $data->telefono;
                  }
               ?>
            </div>
         </div>
            <h3 align="right">Datos personales</h3>
               <div class="col-lg-6">
                  <img src="../../imagenes/admin.png" />
               </div>
               <div class="col-lg-6">
                  <blockquote class="pull-right">
                     <p>Nombre(s): <?php echo $nombres;?></p>
                     <p>Apellidos: <?php echo $apellidos;?></p>
                     <p>Cedula de identidad: <?php echo $ci . " " . $extension_ci;?></p>
                     <p>Ocupacion: <?php echo $ocupacion;?></p>
                     <p>Telefono: <?php echo $telefono;?></p>
                     <!--<small>Email: <cite title="Source Title"><?php echo $email;?></cite></small>-->
                  </blockquote>
			      </div>
	</div>
