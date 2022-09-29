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
<?php include'inc/header.php';?>
<?php include'inc/menu.php';?>
<section class="info">
        <div class="container">
           <div class="row">
               <div class="container filas">
                  <div class="col-md-12 btn btn-md">
                      <center><h4>Administración de Usuarios</h4></center>
                </div>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zona Administrativa</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
  </head>
  <body>
    <section>

    <div class="container">
           <div class="row">
               <div class="container filas">
                  <div class="col-md-12 btn btn-md">
                        
                        <form action="/pruebasu/admin/exportExcel1.php" method="post">
                            <button type="submit" name="export_data" value="excel" class="btn btn-info btn-sm pull-left">
                                <i class="fa fa-file-excel-o" aria-hidden="true"></i> >Exportar a Excel
                            </button>
                        </form>
                        <input class="searchTerm  col-md-6 pull-right" id="searchTerm" type="text" onkeyup="doSearch()" placeholder="Ingresa tu busqueda">
                    </div>
                    <p> LISTA DE USUARIOS REGISTRADOS</p>
                    </div>
                       <table id="tabla" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                
                                <th class="col-xs-1">Rol</th>
                                <th class="col-xs-1">Nombre</th>
                                <th class="col-xs-1">correo</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                            $sql = "SELECT * FROM users" ;
                            $run = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($run)){
                              echo '
                                 <tr>
                                    
                                    <td class="col-xs-1">'.$row['role'].'</td>
                                    <td class="col-xs-1">'.$row['UserName'].'</td>
                                    <td class="col-xs-1">'.$row['UserEmail'].'</td>
                                    
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
    <script>
        $('#tabla .delete').on('click', function(){
            var id = $(this).attr('key');
            $.ajax({
                url: 'eliminarRegistro.php',
                type:"POST",
                data: {id: id},
                success: function(response){
                    alert('Datos Eliminados Correctamente.');
                    $('#tabla .delete[key="'+id+'"]').parent('tr').remove();
                },
                error: function(){
                    alert('Error al eliminar los datos.');
                }
            });
        });
    </script>

        <div class="container">
            <div class="row">
                <div class="main">                          
                  <form role="form" method="post">
                      <p><a href="../admin/registrousers.php" button type="submit" class="btn btn btn-warning enviar btn-block" name="submit_login">
                      Agregar Usuario
                          </a></p>
                      <p><a href="../admin/deleteUser.php" button type="submit" class="btn btn btn-warning enviar btn-block" name="submit_login">
                      Eliminar Usuario
                          </a></p>
                      
                  </form>
                  <a href="index.php">&laquo; Regresar &laquo;</a>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
                   <?php include'inc/footer.php';?>