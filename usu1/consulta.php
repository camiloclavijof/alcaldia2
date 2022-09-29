<?php
    session_start();
    require_once('../inc/db.php');
    $datosUsuario = require_once('../login/checkLogin.php');
    $login_err = '';
	if(isset($_GET['login_error'])){
		if($_GET['login_error'] == 'empty'){
			$login_err = '<div class="alert alert-danger">User name or Password was empty!</div>';
		}elseif($_GET['login_error'] == 'wrong'){
			$login_err = '<div class="alert alert-danger">User name or Password was Wrong!</div>';
		}elseif($_GET['login_error'] == 'query_error'){
			$login_err = '<div class="alert alert-danger">There is somekind of Database Issue!</div>';
		}
    }
?>
<?php include'../admin/inc/header.php';?>
<?php include'../usu1/inc/menu.php';?> 
  <section class="info">
        <div class="container">
           <div class="row">
               <div class="container filas">
                  <div class="col-md-12 btn btn-md">
                        
                        
                        <input class="searchTerm  col-md-6 pull-right" id="searchTerm" type="text" onkeyup="doSearch()" placeholder="Ingresa tu busqueda">
                    </div>
                    <p> LISTA DE USUARIOS REGISTRADOS</p>
                    </div>
                       <table id="tabla" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="col-xs-1 hidden-xs">№</th>
                                <th class="col-xs-1">Nombre</th>
                                <th class="col-xs-1">Primer Apellido</th>
                                <th class="col-xs-1">Segundo Apellido</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                            $sql = "SELECT * FROM datospersonales" ;
                            $run = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($run)){
                              echo '
                                 <tr>
                                    <td class="col-xs-1 hidden-xs">'.$row['id_datospersonales'].'</td>
                                    <td class="col-xs-1">'.$row['nombre'].'</td>
                                    <td class="col-xs-1">'.$row['apellido1'].'</td>
                                    <td class="col-xs-1">'.$row['apellido2'].'</td>
                                    
                                </tr>
                                ';
                              }
                            ?>
                        </tbody>
                    </table>
               </div>
           </div>
        </div>
    </section>
    
<?php include'../admin/inc/footer.php';?>
