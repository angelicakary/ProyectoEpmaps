<?php 
    $areas="active";
    include "../Plantilla/Cabecera.php";
    include "../Plantilla/BarraIzquierda.php";
?>
<!-- //Notifficaciones -->
<?php
    

    $Pagina="Clientes";

    @$id_editar = $_POST["bookId"];
    if ($id_editar !=null) { ?>
      <script type="text/javascript">
        $(document).ready(function(){
           $("#Editar").modal();
           Validar1();
        });
      </script>
    <?php }
?>
<!-- <?php 
// $file3 = mysqli_query($con, "SELECT p.nuevo, p.impresion FROM permisos p , menus m WHERE p.menu=m.id AND m.descripccion='USUARIOS' and p.rol=$privilegio");
// if(mysqli_num_rows($file3) > 0)
{
  // while ($rows=mysqli_fetch_array($file3)) 
  {
    // $btnnuevo_=$rows['nuevo'];
    // $btnimpresion_=$rows['impresion'];
  }
}
?> -->
<!-- //solo vista -->
<div class="main">
	<div class="main-content">
    <!-- Page Header -->
	    <div class="page-header row no-gutters py-4">
	      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
	        <!-- <span class="text-uppercase page-subtitle">Overview</span> -->
	        <h3 class="page-title"><?php echo $Pagina; ?></h3>
	      </div>
	    </div>
	    <!-- End Page Header -->
	    <!-- Default Light Table -->
	    <div class="row">
	      <div class="col-md-12" style="float: right;">
	        <!-- <?php // if (@$btnnuevo_==1) : ?> -->
	          <button style="float: right;" type="button" class="mb-2 btn btn-sm btn-primary mr-1" data-toggle="modal" data-target="#Nuevo">
	            <i class="material-icons">add_circle</i> Nuevo
	          </button>
	        <!-- <?php // endif ?>
	        <?php // if (@$btnimpresion_==1) : ?> -->
	          <a style="float: right;" target="_blank" class="btn btn-sm btn-outline-dark" href="../Reportes/Usuarios.php?user=<?php echo $sucursal ?>" role="button">
	            <i class="material-icons">description</i> Reporte
	          </a>
	        <!-- <?php // endif ?> -->
	      </div>         
	    	<!-- BARRA IZQUIERDA -->
	      <div class="col-lg-12">
	      <table id="example" class="table table-striped table-bordered" style="width:100%">
	        <thead>
	            <tr>
	                <th width="5%">#</th>
	                <th width="11%">Nombre</th>
	                <th width="11%">Identificación</th>
	                <th width="11%">Teléfono</th>
	                <th width="11%">Celular</th>
	                <th width="11%">Dirección</th>
	                <th width="11%">Correo</th>
	                <th width="11%">Estado</th>
	                <th width="15%"></th>
	            </tr>
	        </thead>
	        <tbody>          
	          <?php
	            $conta=0;
	            $file1 = mysqli_query($con, "SELECT * FROM Clientes");
	            while ($rows=mysqli_fetch_array($file1)) 
	            {
	                $conta++;
	           $id=$rows['ID_CLIENTE'];
	           $nombres1= $rows['PRIMER_NOMBRE'];
			        $nombres2= $rows['SEGUNDO_NOMBRE'];
			        $apellidos1= $rows['PRIMER_APELLIDO'];
			        $apellidos2= $rows['SEGUNDO_APELLIDO'];
			        $cedula          = $rows['CEDULA'];
              $tcedula         = $rows['TCED'];
              $fnacimi=$rows['FECHA_NACIMIENTO'];
              $estadoc= $rows['ESTADO_CIVIL'];
			        $telefono         = $rows['TELEFONO'];
			        $celular      = $rows['CELULAR'];
			        $direccion          = $rows['DIRECCION'];
			        $correo          = $rows['CORREO'];
			        $discapacidad         = $rows['DISCAPACIDAD'];
			        $carnet          = $rows['CARNET_CONADIS'];
			        $calle1= $rows['CALLE_PRINCIPAL'];
              $calle2= $rows['CALLE_SECUNDARIA'];
              $barrio= $rows['BARRIO'];
              $preferencia= $rows['PUNTO_REFERENCIA'];
              $ccatastral= $rows['CLAVE_CATASTRAL'];


	            ?>
	            <tr>
	              <td><?php echo $conta; ?></td>
	              <td><?php echo $apellidos1 ?> <?php echo $nombres1; ?></td>
	              <td><?php echo $cedula; ?></td>
	              <td><?php echo $telefono; ?></td>
	              <td><?php echo $celular; ?></td>
	              <td><?php echo $direccion; ?></td>
	              <td><?php echo $correo; ?></td> 
	              <td><?php if($estado==1){ echo "Activo";} else{ echo "Inactivo"; } ?></td>
	              <td>

	                <div class="form-row">
	                  <!-- <?php //if (@$btnnuevo_==1) : ?> -->
	                    <div class="form-group col-md-6">
	                      <form action="Clientes.php" method="post">
	                        <input type="hidden" name="bookId" id="bookId" value="<?php echo $id ?>"/>
	                        <button type="submit" class="mb-2 btn btn-sm btn-warning mr-1">
	                          <i class="material-icons">create</i> Editar
	                        </button>
	                      </form>
	                    </div>
	                    <div class="form-group col-md-6">
	                      <form action="../Controlador/Clientes/borrar.php" method="post">
	                        <input type="hidden" name="id" id="id" value="<?php echo $id ?>"/>
	                        <button type="submit" class="mb-2 btn btn-sm btn-danger mr-1">
	                          <i class="material-icons">clear</i> Borrar
	                        </button>
	                      </form>
	                    </div>
	                  <!-- <?php //endif ?> -->
	                </div>
	              </td>
	            </tr>
	        <?php } ?>
	                   
	        </tbody>
	      </table>
	      </div>
	    </div>
	</div>
    <!-- End Default Light Table -->
</div>

<!-- //Modal Nuevo-->
<div class="modal fade" id="Nuevo" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall" aria-hidden="true">
  <div class="modal-dialog modal-large">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modalLabelSmall">Agregar Nuevos <?php echo $Pagina; ?></h4>
          <button style="text-align: right" type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>                  
      </div>
      <form action="../Controlador/Usuarios/nuevo.php" method="post" enctype="multipart/form-data" name="inscripcion">
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="feFirstName">Primer Nombre</label>
              <input required type="text" class="form-control" name="nombre1" placeholder="Primer Nombre">
            </div>
            <div class="form-group col-md-6">
              <label for="feFirstName">Segundo Nombre</label>
              <input required type="text" class="form-control" name="nombre2" placeholder="Segundo Nombre">
            </div>
            <div class="form-group col-md-6">
              <label for="feFirstName">Primer Apellido</label>
              <input required type="text" class="form-control" name="apellido1" placeholder="Primer Apellido">
            </div>
            <div class="form-group col-md-6">
              <label for="feFirstName">Segundo Apellido</label>
              <input required type="text" class="form-control" name="apellido2" placeholder="Segundo Apellido">
            </div>
            <!-- <div class="form-group col-md-6">
              <label for="feFirstName">Cédula</label>
              <input required type="text" class="form-control" name="cedula" placeholder="Cédula">
            </div> -->
            <div class="form-group col-md-6">
              <label for="feFirstName">Tipo Identificación</label>
              <select class="form-control" name="tipocedula">
                <option >Seleccione una Opcción</option>
                <option value="1">Ciudadania</option>
                <option value="2">Identidad</option>
                <option value="3">Pasaporte</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="feFirstName">Cédula</label>
              <input required onkeyup="Validar()" id="cedula" type="text" class="form-control is-valid numeros" name="cedula" placeholder="Cédula">
              <div class="valid-feedback" id="correcto" style="display:none">The first name looks good!</div>
              <div class="invalid-feedback" id="incorrecto" style="display:none">This username is taken.</div>
            </div>
            <div class="form-group col-md-6">
              <label for="feFirstName">Teléfono</label>
              <input required type="text" class="form-control numeros" name="telefono" placeholder="Teléfono">
            </div>
            <div class="form-group col-md-6">
              <label for="feFirstName">Celular</label>
              <input required type="text" class="form-control numeros" name="celular" placeholder="Celular">
            </div>
            <div class="form-group col-md-6">
              <label for="feFirstName">Dirección</label>
              <input required type="text" class="form-control" name="direccion" placeholder="Dirección">
            </div>
            <div class="form-group col-md-6">
              <label for="feFirstName">Correo</label>
              <input required type="text" class="form-control" name="correo" placeholder="Correo">
            </div>
            <?php $folders_ = mysqli_query($con, "SELECT * from roles WHERE estado=1;"); ?>
            <div class="form-group col-md-6">
                <label>Roles</label>
                <select class="form-control select2"   name="rol">
                    <option value="" selected="selected">---Seleciona una Rol---</option>
                    <?php foreach($folders_ as $fld ):?>
                    <option value="<?php echo $fld['id'];?>"><?php echo $fld['descripccion'];?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group col-md-6">
              <label for="feFirstName">Contraseña</label>
              <input required type="password" class="form-control" name="contrasena1" placeholder="Contraseña">
            </div>
            <div class="form-group col-md-6">
              <label for="feFirstName">Repita Contraseña</label>
              <input required type="password" class="form-control" name="contrasena2" placeholder="Repita Contraseña">
            </div>
          </div>
          <div class="form-group col-md-12">
            <label for="feInputState" class="col-md-12">Género</label>
              <div class="form-group col-md-6">
                <input type="radio" name="genero" id="male" class="with-gap" value="1">
                <label for="male">Masculino</label>
                <input type="radio" name="genero" id="female" class="with-gap" value="2">
                <label for="female" class="m-l-20">Femenino</label>
              </div>
          </div>
          <div class="form-group col-md-6">
              <label for="feFirstName">Discapacidad</label>
              <input id="discapacidad1" required type="radio" class="form-control" name="discapacidad" value="1">
              <input id="discapacidad2" required type="radio" class="form-control" name="discapacidad" value="2">
            </div>
          <?php $folders_ = mysqli_query($con, "SELECT * from roles WHERE estado=1;"); ?>
            <div class="form-group col-md-6">
                <label>Roles</label>
                <select class="form-control select2"   name="rol">
                    <option value="" selected="selected">---Seleciona una Rol---</option>
                    <?php foreach($folders_ as $fld ):?>
                    <option value="<?php echo $fld['id'];?>"><?php echo $fld['descripccion'];?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" id="btnnuevo" class="btn btn-sm btn-outline-accent">
            <i class="material-icons">save</i> Guardar
          </button>
          <button ty class="btn btn-sm btn-outline-danger" data-dismiss="modal">
            <i class="material-icons">highlight_off</i> Cerrar
          </button>
        </div>
      </form>
        
    </div>
  </div>
</div>
<!-- //Modal Editar-->
<div class="modal fade" id="Editar" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall" aria-hidden="true">
  <div class="modal-dialog modal-large">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modalLabelSmall">Editar <?php echo $Pagina; ?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>                  
      </div>
      <?php
        $file1 = mysqli_query($con, "SELECT * FROM usuarios where ID_USER=$id_editar");
        while ($rows=mysqli_fetch_array($file1)) 
        {
          $conta++;
          $id_=$rows['ID_USER'];
          //$estado_=$rows['estado'];
          $nombre1_= $rows["PRIMER_NOMBRE"];
          $nombre2_= $rows["SEGUNDO_NOMBRE"];
          $apellido1_= $rows["PRIMER_APELLIDO"];
          $apellido2_= $rows["SEGUNDO_APELLIDO"];
          $cedula_= $rows["DUI"];
          $telefono_= $rows["TELEFONO"];
          $celular_= $rows["CELULAR"];
          $direccion_= $rows["DIRECCION"];
          $correo_= $rows["CORREO"];
          $clave  = $rows['CLAVE'];
          $rol_= $rows["ROL"];
          $estado_= $rows['ESTADO'];
		  $foto_= $rows['FOTO'];
          $genero_= $rows["SEXO"];

          
        }
      ?>
      <form action="../Controlador/Usuarios/editar.php" method="post" enctype="multipart/form-data" name="inscripcion">
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="feFirstName">Primer Nombre</label>
              <input required type="text" class="form-control" name="nombre1" placeholder="Primer Nombre" value="<?php echo $nombre1_ ?>">
            </div>
            <div class="form-group col-md-6">
              <label for="feFirstName">Segundo Nombre</label>
              <input required type="text" class="form-control" name="nombre2" placeholder="Segundo Nombre" value="<?php echo $nombre2_ ?>">
            </div>
            <div class="form-group col-md-6">
              <label for="feFirstName">Primer Apellido</label>
              <input required type="text" class="form-control" name="apellido1" placeholder="Primer Apellido" value="<?php echo $apellido1_ ?>">
            </div>
            <div class="form-group col-md-6">
              <label for="feFirstName">Segundo Apellido</label>
              <input required type="text" class="form-control" name="apellido2" placeholder="Segundo Apellido" value="<?php echo $apellido2_ ?>">
            </div>
            <!-- <div class="form-group col-md-6">
              <label for="feFirstName">Cédula</label>
              <input required type="text" class="form-control" name="cedula" placeholder="Cédula" value="<?php echo $cedula_ ?>">
            </div> -->
            <div class="form-group col-md-6">
              <label for="feFirstName">Cédula</label>
              <input required onkeyup="Validar1()" id="cedula1" type="text" class="form-control is-valid numeros" name="cedula" placeholder="Cédula" value="<?php echo $cedula_ ?>">
              <div class="valid-feedback" id="correcto1" style="display:none">The first name looks good!</div>
              <div class="invalid-feedback" id="incorrecto1" style="display:none">This username is taken.</div>
            </div>
            <div class="form-group col-md-6">
              <label for="feFirstName">Teléfono</label>
              <input required type="text" class="form-control numeros" name="telefono" placeholder="Teléfono" value="<?php echo $telefono_ ?>">
            </div>
            <div class="form-group col-md-6">
              <label for="feFirstName">Celular</label>
              <input required type="text" class="form-control numeros" name="celular" placeholder="Celular" value="<?php echo $celular_ ?>">
            </div>
            <div class="form-group col-md-6">
              <label for="feFirstName">Dirección</label>
              <input required type="text" class="form-control" name="direccion" placeholder="Dirección" value="<?php echo $direccion_ ?>">
            </div>
            <div class="form-group col-md-6">
              <label for="feFirstName">Correo</label>
              <input required type="text" class="form-control" name="correo" placeholder="Correo" value="<?php echo $correo_ ?>">
            </div>
            <?php $folders_ = mysqli_query($con, "SELECT * from roles WHERE estado=1;"); ?>
            <div class="form-group col-md-6">
                <label>Roles</label>
                <select class="form-control select2"  name="rol">
                    <option value="" selected="selected">---Seleciona una Rol---</option>
                    <?php foreach($folders_ as $fld ):?>
                    <option value="<?php echo $fld['id'];?>" <?php if($rol_==$fld['id']){ echo "selected";} ?>><?php echo $fld['descripccion'];?></option>
                    <?php endforeach; ?>
                </select>
            </div>
          </div>
          <div class="form-group col-md-12">
            <div class="form-group col-md-12">
              <label for="feInputState">Género</label><br>
              <input type="radio" name="genero" id="male" class="with-gap" value="1" <?php if($genero_=='1') echo "checked" ?>>
              <label for="male">Masculino</label>
              <input type="radio" name="genero" id="female" class="with-gap" value="2" <?php if($genero_=='2') echo "checked" ?>>
              <label for="female" class="m-l-20">Femenino</label>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label for="feLastName">Estado</label>
            <select class="form-control" required="" name="estado">
              <option value="" selected="selected">---Seleciona un Estado---</option>
              <option value="1" <?php if ($estado_==1) { echo "Selected";} ?>>Activo</option>
              <option value="2" <?php if ($estado_==2) { echo "Selected";} ?>>Inactivo</option>
            </select>
          </div>
        </div>
        <input type="hidden" name="id" value="<?php echo $id_ ?>" class="form-control">
        <div class="modal-footer">
          <button type="submit" id="btneditar" class="btn btn-sm btn-outline-accent">
            <i class="material-icons">save</i> Guardar
          </button>
          <button ty class="btn btn-sm btn-outline-danger" data-dismiss="modal">
            <i class="material-icons">highlight_off</i> Cerrar
          </button>
        </div>
      </form>
    </div>
  </div>
</div>



<?php 
    include "../Plantilla/Piedepagina.php";
?>

<style type="text/css">
  .dataTables_wrapper { font-size: 11px }
</style>

<script>
  /*validaciones*/
  /*validacion nuevo*/
  function Validar(){
       var cedula = $("#cedula").val();

       //Preguntamos si la cedula consta de 10 digitos
       if(cedula.length == 10){
          
          //Obtenemos el digito de la region que sonlos dos primeros digitos
          var digito_region = cedula.substring(0,2);
          
          //Pregunto si la region existe ecuador se divide en 24 regiones
          if( digito_region >= 1 && digito_region <=24 ){
            
            // Extraigo el ultimo digito
            var ultimo_digito   = cedula.substring(9,10);

            //Agrupo todos los pares y los sumo
            var pares = parseInt(cedula.substring(1,2)) + parseInt(cedula.substring(3,4)) + parseInt(cedula.substring(5,6)) + parseInt(cedula.substring(7,8));

            //Agrupo los impares, los multiplico por un factor de 2, si la resultante es > que 9 le restamos el 9 a la resultante
            var numero1 = cedula.substring(0,1);
            var numero1 = (numero1 * 2);
            if( numero1 > 9 ){ var numero1 = (numero1 - 9); }

            var numero3 = cedula.substring(2,3);
            var numero3 = (numero3 * 2);
            if( numero3 > 9 ){ var numero3 = (numero3 - 9); }

            var numero5 = cedula.substring(4,5);
            var numero5 = (numero5 * 2);
            if( numero5 > 9 ){ var numero5 = (numero5 - 9); }

            var numero7 = cedula.substring(6,7);
            var numero7 = (numero7 * 2);
            if( numero7 > 9 ){ var numero7 = (numero7 - 9); }

            var numero9 = cedula.substring(8,9);
            var numero9 = (numero9 * 2);
            if( numero9 > 9 ){ var numero9 = (numero9 - 9); }

            var impares = numero1 + numero3 + numero5 + numero7 + numero9;

            //Suma total
            var suma_total = (pares + impares);

            //extraemos el primero digito
            var primer_digito_suma = String(suma_total).substring(0,1);

            //Obtenemos la decena inmediata
            var decena = (parseInt(primer_digito_suma) + 1)  * 10;

            //Obtenemos la resta de la decena inmediata - la suma_total esto nos da el digito validador
            var digito_validador = decena - suma_total;

            //Si el digito validador es = a 10 toma el valor de 0
            if(digito_validador == 10)
              var digito_validador = 0;

            //Validamos que el digito validador sea igual al de la cedula
            if(digito_validador == ultimo_digito){
              //document.getElementById("incorrecto").style.display = "hidden";
              //document.getElementById("correcto").style.display = "none";
              $("#correcto").show(); 
              $("#incorrecto").hide();
              $("#correcto").text('la cedula:' + cedula + ' es correcta');
              $("#btnnuevo").removeAttr("disabled");
              //alert('la cedula:' + cedula + ' es correcta');
            }else{
              //alert('la cedula:' + cedula + ' es incorrecta');
              /*document.getElementById("incorrecto").style.display = "none";
              document.getElementById("correcto").style.display = "hide";*/
              $("#correcto").hide(); 
              $("#incorrecto").show(); 
              $("#incorrecto").text('la cedula:' + cedula + ' no es correcta');
              $("#btnnuevo").attr("disabled", "disabled");
            }
            
          }else{
            //alert('Esta cedula no pertenece a ninguna region');
            /*document.getElementById("incorrecto").style.display = "none";
            document.getElementById("correcto").style.display = "hide";*/
            $("#correcto").hide(); 
            $("#incorrecto").show(); 
            $("#incorrecto").text('Esta cedula no pertenece a ninguna region');
            $("#btnnuevo").attr("disabled", "disabled");
          }
       }else if(cedula.length > 10){
          //imprimimos en consola si la cedula tiene mas o menos de 10 digitos
          //alert('Esta cedula tiene más de 10 Digitos');
          /*document.getElementById("incorrecto").style.display = "none";
          document.getElementById("correcto").style.display = "hide";*/
          $("#correcto").hide(); 
          $("#incorrecto").show(); 
          $("#incorrecto").text('Esta cedula tiene más de 10 Digitos');
          $("#btnnuevo").attr("disabled", "disabled");
       }else if(cedula.length < 10){
          //imprimimos en consola si la cedula tiene mas o menos de 10 digitos
          //alert('Esta cedula tiene menos de 10 Digitos');
          /*document.getElementById("incorrecto").style.display = "none";
          document.getElementById("correcto").style.display = "hide";*/
          $("#correcto").hide(); 
          $("#incorrecto").show(); 
          $("#incorrecto").text('Esta cedula tiene menos de 10 Digitos');
          $("#btnnuevo").attr("disabled", "disabled");
       }    
  }
  /*validacion cedula editar*/
  function Validar1(){
       var cedula = $("#cedula1").val();

       //Preguntamos si la cedula consta de 10 digitos
       if(cedula.length == 10){
          
          //Obtenemos el digito de la region que sonlos dos primeros digitos
          var digito_region = cedula.substring(0,2);
          
          //Pregunto si la region existe ecuador se divide en 24 regiones
          if( digito_region >= 1 && digito_region <=24 ){
            
            // Extraigo el ultimo digito
            var ultimo_digito   = cedula.substring(9,10);

            //Agrupo todos los pares y los sumo
            var pares = parseInt(cedula.substring(1,2)) + parseInt(cedula.substring(3,4)) + parseInt(cedula.substring(5,6)) + parseInt(cedula.substring(7,8));

            //Agrupo los impares, los multiplico por un factor de 2, si la resultante es > que 9 le restamos el 9 a la resultante
            var numero1 = cedula.substring(0,1);
            var numero1 = (numero1 * 2);
            if( numero1 > 9 ){ var numero1 = (numero1 - 9); }

            var numero3 = cedula.substring(2,3);
            var numero3 = (numero3 * 2);
            if( numero3 > 9 ){ var numero3 = (numero3 - 9); }

            var numero5 = cedula.substring(4,5);
            var numero5 = (numero5 * 2);
            if( numero5 > 9 ){ var numero5 = (numero5 - 9); }

            var numero7 = cedula.substring(6,7);
            var numero7 = (numero7 * 2);
            if( numero7 > 9 ){ var numero7 = (numero7 - 9); }

            var numero9 = cedula.substring(8,9);
            var numero9 = (numero9 * 2);
            if( numero9 > 9 ){ var numero9 = (numero9 - 9); }

            var impares = numero1 + numero3 + numero5 + numero7 + numero9;

            //Suma total
            var suma_total = (pares + impares);

            //extraemos el primero digito
            var primer_digito_suma = String(suma_total).substring(0,1);

            //Obtenemos la decena inmediata
            var decena = (parseInt(primer_digito_suma) + 1)  * 10;

            //Obtenemos la resta de la decena inmediata - la suma_total esto nos da el digito validador
            var digito_validador = decena - suma_total;

            //Si el digito validador es = a 10 toma el valor de 0
            if(digito_validador == 10)
              var digito_validador = 0;

            //Validamos que el digito validador sea igual al de la cedula
            if(digito_validador == ultimo_digito){
              //document.getElementById("incorrecto").style.display = "hidden";
              //document.getElementById("correcto").style.display = "none";
              $("#correcto1").show(); 
              $("#incorrecto1").hide();
              $("#correcto1").text('la cedula:' + cedula + ' es correcta');
              $("#btneditar").removeAttr("disabled");
              //alert('la cedula:' + cedula + ' es correcta');
            }else{
              //alert('la cedula:' + cedula + ' es incorrecta');
              /*document.getElementById("incorrecto").style.display = "none";
              document.getElementById("correcto").style.display = "hide";*/
              $("#correcto1").hide(); 
              $("#incorrecto1").show(); 
              $("#incorrecto1").text('la cedula:' + cedula + ' no es correcta');
              $("#btneditar").attr("disabled", "disabled");
            }
            
          }else{
            //alert('Esta cedula no pertenece a ninguna region');
            /*document.getElementById("incorrecto").style.display = "none";
            document.getElementById("correcto").style.display = "hide";*/
            $("#correcto1").hide(); 
            $("#incorrecto1").show(); 
            $("#incorrecto1").text('Esta cedula no pertenece a ninguna region');
            $("#btneditar").attr("disabled", "disabled");
          }
       }else if(cedula.length > 10){
          //imprimimos en consola si la cedula tiene mas o menos de 10 digitos
          //alert('Esta cedula tiene más de 10 Digitos');
          /*document.getElementById("incorrecto").style.display = "none";
          document.getElementById("correcto").style.display = "hide";*/
          $("#correcto1").hide(); 
          $("#incorrecto1").show(); 
          $("#incorrecto1").text('Esta cedula tiene más de 10 Digitos');
          $("#btneditar").attr("disabled", "disabled");
       }else if(cedula.length < 10){
          //imprimimos en consola si la cedula tiene mas o menos de 10 digitos
          //alert('Esta cedula tiene menos de 10 Digitos');
          /*document.getElementById("incorrecto").style.display = "none";
          document.getElementById("correcto").style.display = "hide";*/
          $("#correcto1").hide(); 
          $("#incorrecto1").show(); 
          $("#incorrecto1").text('Esta cedula tiene menos de 10 Digitos');
          $("#btneditar").attr("disabled", "disabled");
       }    
  }
  /*validacion solo numerosç*/
  $('.numeros').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');

    if($("#discapacidad1").is(":checked")){
      //Code to append goes here
    }
});
</script>
