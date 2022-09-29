<?php
require_once '../inc/db.php';
$datosUsuario = require_once('../login/checkLogin.php');
if(isset($_POST['UserEmail'])){
    var_export($_POST['UserEmail']);
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eliminar Usuario</title>
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
                <div class="main">                          
                  <form role="form" method="post">
                    <div class="form-group">
                      <label for="UserEmail">Usuario:</label>
                      <input type="text" class="form-control"  id="UserEmail" placeholder="Correo Usuario" name="UserEmail" required>
                    </div>
                    <button type="submit" class="btn btn btn-warning enviar btn-block" name="submit_login">
                      Eliminar
                    </button>
                  </form>
                  <a href="javascript:window.history.back();">&laquo; Regresar &laquo;</a>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
