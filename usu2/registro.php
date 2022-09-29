<?php 
  require_once('../inc/db.php');
  $datosUsuario = require_once('../login/checkLogin.php');
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $datos = array();

  $sql = "SELECT * FROM gobierno WHERE id_gobierno = ".$id;
  $run = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_assoc($run)){
    $datos = array_merge($datos, $row);
  }
  
  $sql2 = "SELECT * FROM turismo WHERE id_turismo = ".$id;
  $run = mysqli_query($conn, $sql2);
  while($row = mysqli_fetch_assoc($run)){
    $datos = array_merge($datos, $row);
  }
  
  $sql3 = "SELECT * FROM sena WHERE id_sena = ".$id;
  $run = mysqli_query($conn, $sql3);
  while($row = mysqli_fetch_assoc($run)){
    $datos = array_merge($datos, $row);
  }
  
  
  $sql4 = "SELECT * FROM umata WHERE id_umata = ".$id;
  $run = mysqli_query($conn, $sql4);
  while($row = mysqli_fetch_assoc($run)){
    $datos = array_merge($datos, $row);
  }
   
    
  $sql5 = "SELECT * FROM hacienda WHERE id_hacienda = ".$id;
  $run = mysqli_query($conn, $sql5);
  while($row = mysqli_fetch_assoc($run)){
    $datos = array_merge($datos, $row);
  }
  
  
  $sql6 = "SELECT * FROM planeacion WHERE id_planeacion = ".$id;
  $run = mysqli_query($conn, $sql6);
  while($row = mysqli_fetch_assoc($run)){
    $datos = array_merge($datos, $row);
  }
 
 
  $sql7 = "SELECT * FROM salud WHERE id_salud = ".$id;
  $run = mysqli_query($conn, $sql7);
  while($row = mysqli_fetch_assoc($run)){
    $datos = array_merge($datos, $row);
  }



  $sql8 = "SELECT * FROM desarrollo_social WHERE id_desarrollo_social = ".$id;
  $run = mysqli_query($conn, $sql8);
  while($row = mysqli_fetch_assoc($run)){
    $datos = array_merge($datos, $row);
  }

  
  $sql9 = "SELECT * FROM victimas WHERE id_victimas = ".$id;
  $run = mysqli_query($conn, $sql9);
  while($row = mysqli_fetch_assoc($run)){
    $datos = array_merge($datos, $row);
  }
  
  $sql10 = "SELECT * FROM nucleofamiliar WHERE id_nucleofamiliar = ".$id;
  $run = mysqli_query($conn, $sql10);
  while($row = mysqli_fetch_assoc($run)){
    $datos = array_merge($datos, $row);
  }

  
  $sql11 = "SELECT * FROM datospersonales WHERE id_datospersonales = ".$id;
  $run = mysqli_query($conn, $sql11);
  while($row = mysqli_fetch_assoc($run)){
    $datos = array_merge($datos, $row);
  }
  echo '<script> var datos = '.json_encode($datos).'</script>';
}

if( isset($_POST['Submit_form'])){
    
      if(isset($_GET['id'])){
        $_POST['id'] = $_GET['id'];
        $r = require_once('eliminarRegistro.php');
      }

     
      //print_r($_POST);
        try{
          //datos 1
          $nombre = strip_tags($_POST['nombre']);
          $apellido1 = strip_tags($_POST['apellido1']);
          $apellido2 = strip_tags($_POST['apellido2']);
          $sexo = !isset($_POST['sexo']) ? '':  implode(',', $_POST['sexo']);
          $fecha_nacimiento = strip_tags($_POST['fecha_nacimiento']);
          $tipo_documento = !isset($_POST['tipo_documento']) ? '':  implode(',', $_POST['tipo_documento']);
          $numero_documento1 =  strip_tags($_POST['numero_documento1']);
          $telefono = strip_tags($_POST['telefono']);
          $estado_civil = $_POST['estado_civil'];
          $edad= strip_tags($_POST['edad']);
          $correo_electronico = !isset($_POST['correo_electronico']) ? '':  implode(',', $_POST['correo_electronico']);
          $correo_electronico_name = strip_tags($_POST['correo_electronico_name']);

          //datos 2
          $nombre_conyugue = strip_tags($_POST['nombre_conyugue']);
          $primer_apellido = strip_tags($_POST['primer_apellido']);
          $segundo_apellido = strip_tags($_POST['segundo_apellido']);
          $numero_documento = strip_tags($_POST['numero_documento']);
          $hijos = strip_tags($_POST['hijos']);
          $hijos_menores = $_POST['hijos_menores'];
          $hijos_mayores = $_POST['hijos_mayores'];
          $personas_acargo = $_POST['personas_acargo'];
          //datos 3

          $beneficiario_victimas = $_POST['beneficiario_victimas'];
           
          //datos 4
          $pension_adulto_mayor = !isset($_POST['pension_adulto_mayor']) ? '':  implode(',', $_POST['pension_adulto_mayor']);
          $pension_discapacitados = !isset($_POST['pension_discapacitados']) ? '':  implode(',', $_POST['pension_discapacitados']);

          //datos 5
          $eps = !isset($_POST['eps']) ? '':  implode(',', $_POST['eps']);
          $eps_name = strip_tags($_POST['eps_name']);
          $sisben = !isset($_POST['sisben']) ? '':  implode(',', $_POST['sisben']);
          $cl_sisben = $_POST['cl_sisben'];


          //datos 6  

          $mejoramiento_vivienda = $_POST['mejoramiento_vivienda'];
          $banco_materiales = $_POST['banco_materiales'];
          $placa_huella = !isset($_POST['placa_huella']) ? '':  implode(',', $_POST['placa_huella']);
          $vivienda_nueva = !isset($_POST['vivienda_nueva']) ? '':  implode(',', $_POST['vivienda_nueva']);
          $polideportivo = !isset($_POST['polideportivo']) ? '':  implode(',', $_POST['polideportivo']);
          $mejoramiento_escuela = !isset($_POST['mejoramiento_escuela']) ? '':  implode(',', $_POST['mejoramiento_escuela']);
          
          //datos 7

          $beneficio_descuento = !isset($_POST['beneficio_descuento']) ? '':  implode(',', $_POST['beneficio_descuento']);

          //datos 8

          
          $subsidio_cafe = !isset($_POST['subsidio_cafe']) ? '':  implode(',', $_POST['subsidio_cafe']);
          $cantidad_plantas = strip_tags($_POST['cantidad_plantas']);
          $veterinaria = strip_tags($_POST['veterinaria']);
          $tipo_animal = strip_tags($_POST['tipo_animal']);
          $tipo_remedio = strip_tags($_POST['tipo_remedio']);
          $feria_ganadera = !isset($_POST['feria_ganadera']) ? '':  implode(',', $_POST['feria_ganadera']);
          $nombre_finca = strip_tags($_POST['nombre_finca']);
          $cantidad_reses = strip_tags($_POST['cantidad_reses']);
          $insumos_comagu = strip_tags($_POST['insumos_comagu']);
          $credito_agropecuario = !isset($_POST['credito_agropecuario']) ? '':  implode(',', $_POST['credito_agropecuario']);
          $vivero = !isset($_POST['vivero']) ? '':  implode(',', $_POST['vivero']);
          $mejoramiento_genetico = !isset($_POST['mejoramiento_genetico']) ? '':  implode(',', $_POST['mejoramiento_genetico']);
          $asistencia_tecnica = !isset($_POST['asistencia_tecnica']) ? '':  implode(',', $_POST['asistencia_tecnica']);
          $perdida_agropecuaria = strip_tags($_POST['perdida_agropecuaria']);
          $huerta_casera = strip_tags($_POST['huerta_casera']);
          $apoyo_proyectos = strip_tags($_POST['apoyo_proyectos']);
          $mercado_campesino = !isset($_POST['mercado_campesino']) ? '':  implode(',', $_POST['mercado_campesino']);

          // datos 9

          $cursos_tecnicos = strip_tags($_POST['cursos_tecnicos']);

          // datos 10

          $nombre_turistico = strip_tags($_POST['nombre_turistico']);
          $telefono_turistico = strip_tags($_POST['telefono_turistico']);
          $direccion_turistico = strip_tags($_POST['direccion_turistico']);

          // datos 11

                  $comite_gdr = strip_tags($_POST['comite_gdr']);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
          
                $sql = "INSERT INTO  gobierno (_0_ comite_gdr) VALUES (_00_ '".$_POST["comite_gdr"]."')";
                if($r){
                  $sql = str_replace('_0_', 'id_gobierno,',$sql);
                  $sql = str_replace('_00_', $_POST['id'].',',$sql);
                }else{
                  $sql = str_replace('_0_', '',$sql);
                  $sql = str_replace('_00_', '',$sql);
                }
                $query = mysqli_query($conn, $sql) or die ('No se pudo buscar la información del usuario' . mysqli_error($conn));
                $ultimoid = mysqli_insert_id($conn);                

                $sql2 = "INSERT INTO  turismo (_2_ nombre_turistico, telefono_turistico, direccion_turistico, id_gobierno) VALUES (_22_ '".$_POST["nombre_turistico"]."', '".$_POST["telefono_turistico"]."', '".$_POST["direccion_turistico"]."', '".$ultimoid."')";
                if($r){
                  $sql2 = str_replace('_2_', 'id_turismo,',$sql2);
                  $sql2 = str_replace('_22_', $_POST['id'].',',$sql2);
                }else{
                  $sql2 = str_replace('_2_', '',$sql2);
                  $sql2 = str_replace('_22_', '',$sql2);
                }
                $query = mysqli_query($conn, $sql2) or die ('No se pudo buscar la información del usuario' . mysqli_error($conn));
                $ultimoid2 = mysqli_insert_id($conn);


              $sql3 = "INSERT INTO  sena (_3_ cursos_tecnicos, id_turismo) VALUES (_33_ '".$_POST["cursos_tecnicos"]."', '".$ultimoid2."')";
              if($r){
                $sql3 = str_replace('_3_', 'id_sena,',$sql3);
                $sql3 = str_replace('_33_', $_POST['id'].',',$sql3);
              }else{
                $sql3 = str_replace('_3_', '',$sql3);
                $sql3 = str_replace('_33_', '',$sql3);
              }
              $query = mysqli_query($conn, $sql3) or die ('No se pudo buscar la información del usuario' . mysqli_error($conn));
              $ultimoid3 = mysqli_insert_id($conn);

             
            $sql4 = "INSERT INTO  umata (_4_ subsidio_cafe, cantidad_plantas, veterinaria, tipo_animal, tipo_remedio, feria_ganadera, nombre_finca, cantidad_reses, insumos_comagu, credito_agropecuario, vivero,  mejoramiento_genetico, asistencia_tecnica, perdida_agropecuaria, huerta_casera, apoyo_proyectos, mercado_campesino, id_sena ) VALUES (_44_  '".$subsidio_cafe."', '".$_POST["cantidad_plantas"]."', '".$_POST["veterinaria"]."', '".$_POST["tipo_animal"]."', '".$_POST["tipo_remedio"]."', '".$feria_ganadera."', '".$_POST["nombre_finca"]."', '".$_POST["cantidad_reses"]."', '".$_POST["insumos_comagu"]."', '".$credito_agropecuario."', '".$vivero."', '".$mejoramiento_genetico."', '".$asistencia_tecnica."', '".$_POST["perdida_agropecuaria"]."', '".$_POST["huerta_casera"]."', '".$_POST["apoyo_proyectos"]."', '".$mercado_campesino."', '".$ultimoid3."')";
            if($r){
              $sql4 = str_replace('_4_', 'id_umata,',$sql4);
              $sql4 = str_replace('_44_', $_POST['id'].',',$sql4);
            }else{
              $sql4 = str_replace('_4_', '',$sql4);
              $sql4 = str_replace('_44_', '',$sql4);
            }
            $query = mysqli_query($conn, $sql4) or die ('No se pudo buscar la información del usuario' . mysqli_error($conn));
            $ultimoid4 = mysqli_insert_id($conn);

            
          $sql5 = "INSERT INTO  hacienda (_5_ beneficio_descuento, id_umata) VALUES (_55_ '".$beneficio_descuento."', '".$ultimoid4."')";
          if($r){
            $sql5 = str_replace('_5_', 'id_hacienda,',$sql5);
            $sql5 = str_replace('_55_', $_POST['id'].',',$sql5);
          }else{
            $sql5 = str_replace('_5_', '',$sql5);
            $sql5 = str_replace('_55_', '',$sql5);
          }
          $query = mysqli_query($conn, $sql5) or die ('No se pudo buscar la información del usuario' . mysqli_error($conn));
          $ultimoid5 = mysqli_insert_id($conn);





          $sql6 = "INSERT INTO  planeacion (_6_ mejoramiento_vivienda, banco_materiales, placa_huella, vivienda_nueva, polideportivo, mejoramiento_escuela, id_hacienda) VALUES (_66_ '".$_POST["mejoramiento_vivienda"]."', '".$_POST["banco_materiales"]."', '".$placa_huella."', '".$vivienda_nueva."' , '".$polideportivo."' , '".$mejoramiento_escuela."', '".$ultimoid5."')";
          if($r){
            $sql6 = str_replace('_6_', 'id_planeacion,',$sql6);
            $sql6 = str_replace('_66_', $_POST['id'].',',$sql6);
          }else{
            $sql6 = str_replace('_6_', '',$sql6);
            $sql6 = str_replace('_66_', '',$sql6);
          }
          $query = mysqli_query($conn, $sql6) or die ('No se pudo buscar la información del usuario' . mysqli_error($conn));
          $ultimoid6 = mysqli_insert_id($conn);
        



        $sql7 = "INSERT INTO  salud (_7_ eps, eps_name, sisben, cl_sisben, id_planeacion) VALUES (_77_ '".$eps."', '".$_POST["eps_name"]."', '".$sisben."', '".$cl_sisben."', '".$ultimoid6."')";
        if($r){
          $sql7 = str_replace('_7_', 'id_salud,',$sql7);
          $sql7 = str_replace('_77_', $_POST['id'].',',$sql7);
        }else{
          $sql7 = str_replace('_7_', '',$sql7);
          $sql7 = str_replace('_77_', '',$sql7);
        }
        $query = mysqli_query($conn, $sql7) or die ('No se pudo buscar la información del usuario' . mysqli_error($conn));
        $ultimoid7 = mysqli_insert_id($conn);


      $sql8 = "INSERT INTO desarrollo_social (_8_ pension_adulto_mayor, pension_discapacitados, id_salud) VALUES (_88_ '".$pension_adulto_mayor."', '".$pension_discapacitados."', '".$ultimoid7."')";
      if($r){
        $sql8 = str_replace('_8_', 'id_desarrollo_social,',$sql8);
        $sql8 = str_replace('_88_', $_POST['id'].',',$sql8);
      }else{
        $sql8 = str_replace('_8_', '',$sql8);
        $sql8 = str_replace('_88_', '',$sql8);
      }
      $query = mysqli_query($conn, $sql8) or die ('No se pudo buscar la información del usuario' . mysqli_error($conn));
      $ultimoid8 = mysqli_insert_id($conn);


      $sql9 = "INSERT INTO victimas (_9_ beneficiario_victimas, id_desarrollo_social) VALUES (_99_ '".$beneficiario_victimas."', '".$ultimoid8."')";
      if($r){
        $sql9 = str_replace('_9_', 'id_victimas,',$sql9);
        $sql9 = str_replace('_99_', $_POST['id'].',',$sql9);
      }else{
        $sql9 = str_replace('_9_', '',$sql9);
        $sql9 = str_replace('_99_', '',$sql9);
      }
      $query = mysqli_query($conn, $sql9) or die ('No se pudo buscar la información del usuario' . mysqli_error($conn));
      $ultimoid9 = mysqli_insert_id($conn); 

      $sql10 = "INSERT INTO nucleofamiliar (_10_ nombre_conyugue, primer_apellido, segundo_apellido, numero_documento, hijos, hijos_menores, hijos_mayores, personas_acargo, id_victimas) VALUES (_1010_ '".$_POST["nombre_conyugue"]."', '".$_POST["primer_apellido"]."', '".$_POST["segundo_apellido"]."', '".$_POST["numero_documento"]."', '".$_POST["hijos"]."', '".$_POST["hijos_menores"]."','".$_POST["hijos_mayores"]."','".$_POST["personas_acargo"]."', '".$ultimoid9."')";
        if($r){
          $sql10 = str_replace('_10_', 'id_nucleofamiliar,',$sql10);
          $sql10= str_replace('_1010_', $_POST['id'].',',$sql10);
        }else{
          $sql10 = str_replace('_10_', '',$sql10);
          $sql10 = str_replace('_1010_', '',$sql10);
        }
      $query = mysqli_query($conn, $sql10) or die ('No se pudo buscar la información del usuario' . mysqli_error($conn));
      $ultimoid10 = mysqli_insert_id($conn); 

      $sql11 = "INSERT INTO datospersonales (_11_ nombre, apellido1, apellido2, sexo, fecha_nacimiento, tipo_documento, numero_documento1, telefono, estado_civil, edad, correo_electronico, correo_electronico_name, id_nucleofamiliar) VALUES (_1111_ '".$_POST["nombre"]."', '".$_POST["apellido1"]."','".$_POST["apellido2"]."', '".$sexo."', '".$_POST["fecha_nacimiento"]."', '".$tipo_documento."','".$_POST["numero_documento1"]."', '".$_POST["telefono"]."', '".$estado_civil."', '".$_POST["edad"]."', '".$correo_electronico."', '".$_POST["correo_electronico_name"]."', '".$ultimoid10."')";
      if($r){
        $sql11 = str_replace('_11_', 'id_datospersonales,',$sql11);
        $sql11 = str_replace('_1111_', $_POST['id'].',',$sql11);
      }else{
        $sql11 = str_replace('_11_', '',$sql11);
        $sql11 = str_replace('_1111_', '',$sql11);
      }
      $query = mysqli_query($conn, $sql11) or die ('No se pudo buscar la información del usuario' . mysqli_error($conn));
      header('Location: registro.php');
    }catch (Exception $e) {
        echo "<script type='text/javascript'>alert('Faltaron campos por diligenciar');</script>";
        exit;
      }
  }
  
?>
<?php include'inc/header.php';?>
<?php include'inc/menu.php';?>
<section class="info">
    <div class="container">
    <div class="container">
        <div class="stepwizard" >
            <div class="stepwizard-row setup-panel" >
                <div class="stepwizard-step" >
                    <a href="#step-1" type="button" class="btn btn-warning btn-circle">
                      <i class="fa fa-user" ></i>
                    </a>
                    <p>Datos personales</p>
    
                </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle" >
                      <i class="fa fa-users"></i>
                    </a>
                    <p>Nucleo Familiar</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button" class="btn btn-default btn-circle" >
                      <i class="fa fa-building"></i>
                    </a>
                    <p> Areas Social Y Salud</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-4" type="button" class="btn btn-default btn-circle" >
                      <i class="fa fa-map-signs"></i>
                    </a>
                    <p>Areas Planeación Y Hacienda</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-5" type="button" class="btn btn-default btn-circle" >
                      <i class="fa fa-map-signs"></i>
                    </a>
                    <p>Areas Umata Y SENA</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-6" type="button" class="btn btn-default btn-circle" >
                      <i class="fa fa-map-signs"></i>
                    </a>
                    <p>Areas Turismo Y Gobierno</p>
                </div>
            </div>
            </div>
        </div>
        <form role="form" method="post" action="">
            <div class="row setup-content" id="step-1">
              <div class="col-xs-12 col-sm-12"> 
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="nombre">Nombre:</label>
                      <input type="text"  name="nombre" class="form-control" placeholder="Digite su nombre" >
                    </div>
                     <div class="form-group col-md-6">
                      <label for="apellido1">Primer apellido:</label>
                      <input type="text"  name="apellido1" class="form-control" placeholder="digite su apellido" >
                    </div>
                    <div class="form-group col-md-6">
                      <label for="apellido2">Segundo apellido:</label>
                      <input type="text"  name="apellido2" class="form-control" placeholder="digite su apellido">
                    </div>
                    <div class="form-check col-md-6">
                      <label for="sexo" >Sexo:</label><br>
                      <input type="radio" name="sexo[]" value="Hombre"/>Hombre
                      <input type="radio" name="sexo[]" value="Mujer"/>Mujer
                    </div>
                    <div class="form-group col-md-6">
                      <label for="fecha_nacimiento" >Fecha de nacimiento:</label>
                      <div class="input-group date">
                          <input type="text" class="form-control" name="fecha_nacimiento" id="datepicker" placeholder="Seleccione su fecha" >
                          <div class="input-group-addon">
                              <span class="fa fa-th"></span>
                          </div>
                      </div>
                    </div>
                    <div class="form-check col-md-6">
                      <label for="tipo_documento" class="form-check-label" >Tipo de documento:</label><br>
                      <input type="radio"  name="tipo_documento[]" value="TI"/>TI
                      <input type="radio"  name="tipo_documento[]" value="CC"/>CC
                      <input type="radio"  name="tipo_documento[]" value="CE"/>CE
                      <input type="radio"  name="tipo_documento[]" value="RC"/>RC
                     </div>
                    <div class="form-group col-md-6">
                      <label for="numero_documento1">Numero de documento:</label>
                      <input type="text"  name="numero_documento1" class="form-control" placeholder="Digite su documento" >
                    </div>
                    <div class="form-group col-md-6">
                      <label for="telefono">Telefono:</label>
                      <input type="text"  name="telefono" class="form-control" placeholder="Digite su telefono" >
                    </div>
                    <div class="form-group col-md-6" >
                      <label for="estado_civil">Estado civil:</label>
                      <select name="estado_civil" class="form-control">
                        <option value="">Selecione su estado civil</option>
                        <option value="Soltero/a">Soltero/a</option>
                        <option value="Casado/a">Casado/a</option>
                        <option value="Divorciado/a">Divorciado/a</option>
                      </select>
                    </div>
           <!--         <div class="form-group col-md-12">
                      <label for="vereda">Vereda donde se radica:</label>
                      <select name="vereda" class="form-control">
                        <option value="">Selecione una vereda</option>
                        <option value="Chipaque">Chipaque</option>
                        <option value="Limoncitos">Limoncitos</option>
                        <option value="Tengavita">Tengavita</option>	
                        <option value="Monterredondo">Monterredondo</option>
                        <option value="la Meseta">la Meseta</option>
                        <option value="Mesagrande">Mesagrande</option>
                        <option value="Vanguardia">Vanguardia</option>
                        <option value="San Miguel">San Miguel</option>
                        <option value="La Primavera">La Primavera</option>
                        <option value="Chirajara Baja">Chirajara Baja</option>
                        <option value="Chirajara Alta">Chirajara Alta</option>
                        <option value="Casa de Teja">Casa de Teja</option>
                        <option value="Susumuco">Susumuco</option>
                        <option value="San Roque">San Roque</option>
                        <option value="Funcdiciones">Funcdiciones</option>
                        <option value="Jabonera">Jabonera</option>
                        <option value="San Marcos">San Marcos</option>
                        <option value="Los Gaquez">Los Gaquez</option>
                        <option value="Tunque">Tunque</option>
                        <option value="Naranjal">Naranjal</option>
                        <option value="La palma">La palma</option>
                        <option value="Espinal">Espinal</option>
                        <option value="El Laurel">El Laurel</option>
                        <option value="Las Mesas">Las Mesas</option>
                        <option value="Encenillos">Encenillos</option>
                        <option value=Conucos"">Conucos</option>
                        <option value="San Antonio">San Antonio</option>
                      </select>
                    </div>
-->      
                    <div class="form-group col-md-6">
                      <label for="apellido2">Edad:</label>
                      <input type="text"  name="edad" class="form-control" placeholder="digite su edad">
                    </div>

                    <div class="form-check col-md-6">
                      <label for="correo_electronico" class="form-check-label">Posee correo electronico:</label><br>
                      <input type="radio"  name="correo_electronico[]" value="SI"/>SI
                      <input type="radio"  name="correo_electronico[]" value="NO"/>NO
                    </div>
                    <div class="form-group col-md-12">
                      <label for="correo_electronico_name">Cual:</label>
                      <input type="text"  name="correo_electronico_name" class="form-control" placeholder="Digite su correo ">
                    </div>
                  </div>
                <a href="index.php" class="btn btn-danger btn-lg push-left" >cancelar</a><button class="btn btn-warning nextBtn btn-lg pull-right" type="button" >Siguiente</button>
              </div>
            </div>
            <div class="row setup-content" id="step-2">
                <div class="col-xs-12 col-sm-12">
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="nombre_conyugue">Cual:</label>
                      <input type="text"  name="nombre_conyugue" class="form-control" placeholder="Digite nombre del conyugue">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="primer_apellido">Primer apellido:</label>
                      <input type="text"  name="primer_apellido" class="form-control" placeholder="Digite el primer apellido ">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="segundo_apellido">Segundo apellido:</label>
                      <input type="text"  name="segundo_apellido" class="form-control" placeholder="Digite el segundo apellido ">
                    </div> 
                    <div class="form-group col-md-12">
                      <label for="numero_documento">Numero de documento:</label>
                      <input type="text"  name="numero_documento" class="form-control" placeholder="Digite el numero del documento">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="hijos">Hijos:</label>
                      <select name="hijos" class="form-control">
                        <option value="">Selecione el numero de hijos</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="hijos_menores">Hijos menores de edad:</label>
                      <select name="hijos_menores" class="form-control">
                        <option value="">Selecione el numero de hijos</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="hijos_mayores">Hijos mayores de edad:</label>
                      <select name="hijos_mayores" class="form-control">
                        <option value="">Selecione el numero de hijos</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="personas_acargo">Personas a cargo:</label>
                      <select name="personas_acargo" class="form-control">
                        <option value="">Selecione el numero</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="beneficiario_victimas">Beneficiario victimas:</label>
                      <select name="beneficiario_victimas" class="form-control">
                        <option value="Seleccione">Seleccione</option>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                      </select>
                    </div>
                  </div>
                    <button class="btn btn-warning nextBtn btn-lg pull-right" type="button" >Siguiente</button> 
                </div>
            </div>
            <div class="row setup-content" id="step-3">
              <div class="col-xs-12 col-sm-12">
                <div class="row">
                  <div class="form-group col-md-12">
                    <label>Desarrollo Social</label>
                    </div>
                    <br>
                    <br>
                 
                    <div class="form-check col-md-6">
                    <label for="pension_adulto_mayor">Pensión Para Discapacitados:</label><br>
                    <input type="radio"  name="pension_adulto_mayor[]" value="SI"/>SI
                    <input type="radio"  name="pension_adulto_mayor[]" value="NO"/>NO
                  </div>


                   <div class="form-check col-md-6">
                    <label for="pension_discapacitados">Pensión Para Discapacitados:</label><br>
                    <input type="radio"  name="pension_discapacitados[]" value="SI"/>SI
                    <input type="radio"  name="pension_discapacitados[]" value="NO"/>NO
                  </div>

                  





                                    
                  <div class="form-group col-md-6 ">
                    <br>
                    <br>
                    <label>Salud</label>
                  </div>
                  
                  <div class="form-check col-md-6">
                  <br>
                  <label for="eps" class="form-check-label">Posee EPS:</label><br>
                      <input type="radio"  name="eps[]" value="SI"/>SI
                      <input type="radio"  name="eps[]" value="NO"/>NO
                    </div>
                    <div class="form-group col-md-12">
                      <label for="eps_name">Cual:</label>
                      <input type="text"  name="eps_name" class="form-control" placeholder="Digite la EPS ">
                    </div>

                    <div class="form-check col-md-6">
                  <br>
                  <br>
                  <label for="sisben" class="form-check-label">Posee SISBEN :</label><br>
                      <input type="radio"  name="sisben[]" value="SI"/>SI
                      <input type="radio"  name="sisben[]" value="NO"/>NO
                    </div>
                    <div class="form-group col-md-6">
                      <label for="cl_sisben"> Clasificación del Sisben:</label>
                      <select name="cl_sisben" class="form-control">
                        <option value="">Selecione el grupo</option>
                        <option value="NOTIENE">NO TIENE</option>
                        <option value="A1">A1</option>
                        <option value="A2">A2</option>
                        <option value="A3">A3</option>
                        <option value="A4">A4</option>
                        <option value="A5">A5</option>
                        <option value="B1">B1</option>
                        <option value="B2">B2</option>
                        <option value="B3">B3</option>
                        <option value="B4">B4</option>
                        <option value="B5">B5</option>
                        <option value="B6">B6</option>
                        <option value="B7">B7</option>
                        <option value="C1">C1</option>
                        <option value="C2">C2</option>
                        <option value="C3">C3</option>
                        <option value="C4">C4</option>
                        <option value="C5">C5</option>
                        <option value="C6">C6</option>
                        <option value="C7">C7</option>
                        <option value="C8">C8</option>
                        <option value="C9">C9</option>
                        <option value="C10">C10</option>
                        <option value="C11">C11</option>
                        <option value="C12">C12</option>
                        <option value="C13">C13</option>
                        <option value="C14">C14</option>
                        <option value="C15">C15</option>
                        <option value="C16">C16</option>
                        <option value="C17">C17</option>
                        <option value="C18">C18</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="D4">D4</option>
                        <option value="D5">D5</option>
                        <option value="D6">D6</option>
                        <option value="D7">D7</option>
                        <option value="D8">D8</option>
                        <option value="D9">D9</option>
                        <option value="D10">D10</option>
                        <option value="D11">D11</option>
                        <option value="D12">D12</option>
                        <option value="D13">D13</option>
                        <option value="D14">D14</option>
                        <option value="D15">D15</option>
                        <option value="D16">D16</option>
                        <option value="D17">D17</option>
                        <option value="D18">D18</option>
                        <option value="D19">D19</option>
                        <option value="D20">D20</option>
                        <option value="D21">D21</option>
                    </select>
                    </div>

                </div>
                <button class="btn btn-warning nextBtn btn-lg pull-right" type="button" >Siguiente</button> 
              </div>
            </div>
            <div class="row setup-content" id="step-4">
            <div class="col-xs-12 col-sm-12">
                <div class="row">
                  <div class="form-group col-md-12">
                    <label>Planeación</label>
                    </div>
                    <br>
                    <br>
                  <div class="form-check col-md-6">
                    <label for="mejoramiento_vivienda">Beneficio Mejoramiento de vivienda:</label><br>
                    <input type="text"  name="mejoramiento_vivienda" class="form-control" placeholder="Digite">
                  </div>
                  <div class="form-check col-md-6">
                    <label for="banco_materiales">Beneficio Banco de Materiales:</label><br>
                    <input type="text"  name="banco_materiales" class="form-control" placeholder="Digite">
                  </div>
                  <div class="form-check col-md-6">
                  <br>
                  <br>
                  <label for="placa_huella" class="form-check-label">Placa Huella:</label><br>
                      <input type="radio"  name="placa_huella[]" value="SI"/>SI
                      <input type="radio"  name="placa_huella[]" value="NO"/>NO
                    </div><div class="form-check col-md-6">
                  <br>
                  <br>
                  <label for="vivienda_nueva" class="form-check-label">Vivienda Nueva:</label><br>
                      <input type="radio"  name="vivienda_nueva[]" value="SI"/>SI
                      <input type="radio"  name="vivienda_nueva[]" value="NO"/>NO
                    </div>
                  <br>
                  <br>
                  <label for="polideportivo" class="form-check-label">Polideportivo:</label><br>
                      <input type="radio"  name="polidepotivo[]" value="SI"/>SI
                      <input type="radio"  name="polideportivo[]" value="NO"/>NO
                    </div>  
                    <div class="form-check col-md-6">
                  <br>
                  <br>
                  <label for="mejoramiento_escuela" class="form-check-label">Mejoramiento de escuela:</label><br>
                      <input type="radio"  name="mejoramiento_escuela[]" value="SI"/>SI
                      <input type="radio"  name="mejoramiento_escuela[]" value="NO"/>NO
                    </div>                                  
                  <div class="form-group col-md-6 ">
                    <br>
                    <br>
                    <label>Hacienda</label>
                  </div>
                  
                  <div class="form-check col-md-6">
                  <br>
                  <br>
                  <label for="beneficio_descuento" class="form-check-label">Beneficio descuento impuesto:</label><br>
                      <input type="radio"  name="beneficio_descuento[]" value="ICA"/>ICA
                      <input type="radio"  name="beneficio_descuento[]" value="PREDIAL"/>PREDIAL
                    </div>
                                                                    
                
                  </div>
                    <button class="btn btn-warning nextBtn btn-lg pull-right" type="button" >Siguiente</button> 
                </div>
            </div> 
            
            
            <div class="row setup-content" id="step-5">
            <div class="col-xs-12 col-sm-12">
                <div class="row">
                  <div class="form-group col-md-12">
                    <label>UMATA</label>
                    </div>
                    <br>
                    <br>
                  <div class="form-check col-md-6">
                  <label for="subsidio_cafe" class="form-check-label">Beneficio subsidio de café:</label><br>
                      <input type="radio"  name="subsidio_cafe[]" value="SI"/>SI
                      <input type="radio"  name="subsidio_cafe[]" value="NO"/>NO
                  </div>

                  <div class="form-check col-md-6">
                    <label for="veterinaria">Veterinaria:</label><br>
                    <input type="text"  name="veterinaria" class="form-control" placeholder="Digite">
                  </div>

                  <div class="form-check col-md-6">
                    <label for="cantidad_plantas">Cantidad de plantas:</label><br>
                    <input type="text"  name="cantidad_plantas" class="form-control" placeholder="Digite la cantidad">
                  </div>

                  <div class="form-check col-md-6">
                    <label for="tipo_animal">Tipo animal:</label><br>
                    <input type="text"  name="tipo_animal" class="form-control" placeholder="Digite que tipo de animales ha recibido atención">
                  </div>

                  <div class="form-check col-md-6">
                    <label for="tipo_remedio">Tipo remedio adquirido:</label><br>
                    <input type="text"  name="tipo_remedio" class="form-control" placeholder="Digite que tipo de remedio ha sido recibido">
                  </div>

                  <div class="form-check col-md-6">
                  <label for="feria_ganadera" class="form-check-label">Beneficio Feria ganadera:</label><br>
                      <input type="radio"  name="feria_ganadera[]" value="SI"/>SI
                      <input type="radio"  name="feria_ganadera[]" value="NO"/>NO
                  </div>

                  <div class="form-check col-md-6">
                    <label for="nombre_finca">Nombre de la Finca:</label><br>
                    <input type="text"  name="nombre_finca" class="form-control" placeholder="Digite el nombre de la finca">
                  </div>

                  <div class="form-check col-md-6">
                    <label for="cantidad_reses">Cantidad de reses:</label><br>
                    <input type="text"  name="cantidad_reses" class="form-control" placeholder="Digite la cantidad de reses">
                  </div>

                  <div class="form-check col-md-6">
                    <label for="insumos_comagu">Insumos comagu:</label><br>
                    <input type="text"  name="insumos_comagu" class="form-control" placeholder="Digite insumos adquiridos">
                  </div>
                  <div class="form-check col-md-6">
                  <label for="creito_agropecuario" class="form-check-label">Beneficio credito agropecuario:</label><br>
                      <input type="radio"  name="credito_agropecuario[]" value="SI"/>SI
                      <input type="radio"  name="credito_agropecuario[]" value="NO"/>NO
                  </div>
                  <div class="form-check col-md-6">
                  <label for="vivero" class="form-check-label">Vivero:</label><br>
                      <input type="radio"  name="vivero[]" value="SI"/>SI
                      <input type="radio"  name="vivero[]" value="NO"/>NO
                  </div>
                  <div class="form-check col-md-6">
                  <label for="mejoramiento_genetico" class="form-check-label">Beneficio Mejoramiento genetico:</label><br>
                      <input type="radio"  name="mejoramiento_genetico[]" value="SI"/>SI
                      <input type="radio"  name="mejoramiento_genetico[]" value="NO"/>NO
                  </div>
                  <div class="form-check col-md-6">
                  <label for="asistencia_tecnica" class="form-check-label">Beneficio Asistencia Técnica:</label><br>
                      <input type="radio"  name="asistencia_tecnica[]" value="SI"/>SI
                      <input type="radio"  name="asistencia_tecnica[]" value="NO"/>NO
                  </div>
                  <div class="form-check col-md-6">
                    <label for="perdida_agropecuaria">Perdida agropecuaria:</label><br>
                    <input type="text"  name="perdida_agropecuaria" class="form-control" placeholder="Digite">
                  </div>
                  <div class="form-check col-md-6">
                    <label for="huerta_casera">Beneficio Huerta casera:</label><br>
                    <input type="text"  name="huerta_casera" class="form-control" placeholder="Digite">
                  </div>
                  <div class="form-check col-md-6">
                    <label for="apoyo_proyectos">Beneficio Apoyo a proyectos:</label><br>
                    <input type="text"  name="apoyo_proyectos" class="form-control" placeholder="Digite">
                  </div>
                  <div class="form-check col-md-6">
                  <label for="mercado_campesino" class="form-check-label">Beneficio Mercado campesino:</label><br>
                      <input type="radio"  name="mercado_campesino[]" value="SI"/>SI
                      <input type="radio"  name="mercado_campesino[]" value="NO"/>NO
                  </div>

                  <div class="form-group col-md-6 ">
                    <br>
                    <br>
                    <label>SENA</label>
                  </div>
                  
                  <div class="form-check col-md-6">
                  <br>
                  <br>
                  <label for="cursos_tecnicos">Beneficio Cursos técnicos:</label><br>
                    <input type="text"  name="cursos_tecnicos" class="form-control" placeholder="Digite">
                    </div>
                                                                  
                
                  </div>
                    <button class="btn btn-warning nextBtn btn-lg pull-right" type="button" >Siguiente</button> 
                </div>

                </div>


                  <div class="row setup-content" id="step-6">
            <div class="col-xs-12 col-sm-12">
                <div class="row">
                  <div class="form-group col-md-12">
                    <label>Turismo</label>
                    </div>
                    <br>
                    <br>
                  <div class="form-check col-md-6">
                    <label for="nombre_turistico">Nombre turistico:</label><br>
                    <input type="text"  name="nombre_turistico" class="form-control" placeholder="Digite nombre">
                  </div>
                  <div class="form-check col-md-6">
                    <label for="telefono_turistico">Telefono turistico:</label><br>
                    <input type="text"  name="telefono_turistico" class="form-control" placeholder="Digite telefono">
                  </div>
                  <div class="form-check col-md-6">
                    <label for="direccion_turistico">Dirección turistica:</label><br>
                    <input type="text"  name="direccion_turistico" class="form-control" placeholder="Digite dirección">
                  </div>

                  <div class="form-group col-md-6 ">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <label>GOBIERNO</label>
                  </div>
                  
                  <div class="form-check col-md-6">
                  <br>
                  <br>
                  <label for="comite_gdr">Comite Gestión de Riesgos:</label><br>
                    <input type="text"  name="comite_gdr" class="form-control" placeholder="Digite">
                    </div>
                <br>
                <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                <button class="btn btn-success btn-lg pull-right" type="submit" name="Submit_form">Guardar</button>                
              </div>
            </div>

        </form>
        </div>
    </div>
    
</section>
<script>
  if(typeof datos != "undefined"){
    $.each(datos, function(index, value) {
      var a = $('form [name="'+index+'"]').val(value);
      if(!a['length']){

        if($('form [name="'+index+'[]"]') && $('form [value="'+value+'"]').attr('type')  == "radio"){
            $('form [name="'+index+'[]"][value="'+value+'"]').prop('checked', true);
        }
      }
    });
  }
  $('form [name]') //cc
</script>