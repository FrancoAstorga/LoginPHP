<?php
//--Deberán crear un archivo php que dependiendo del nivel de usuario (admin, invitado, user), muestre algún tipo de información diferente,

//inicializamos
$user = "";
$password = "";

if (isset($_GET['user_get']) && isset($_GET['pass_get'])) {

    $user = $_GET['user_get'];
    $password = $_GET['pass_get'];
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body >
   <?php if ($user == 'root' && $password == '1234') { //administrador ?>
  
    <div class="container-fluid ">
        <div class="row  mt-5">
            <div class="col-6 mx-auto admin-view d-flex flex-column align-items-center justify-content-center">
                <h1>Bienvenido <?php echo  $_GET['user_get']?> </h1>
                <div class="card mb-4" style="width: 18rem;">
                    <img src="https://img-9gag-fun.9cache.com/photo/aVQ7Mjy_700bwp.webp" class="card-img-top" alt="img_admin">
                    <div class="card-body">
                        <h5 class="card-title">Administrador</h5>
                        <p class="card-text">Control total, ABM usuarios y modificar página.</p>
                        <a href="#" class="btn btn-primary">Panel de Control</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php } else if ($user == 'frank' && $password == '777') {  //usuario existente?>
        <div class="container-fluid ">
        <div class="row  mt-5">
            <div class="col-6 mx-auto admin-view d-flex flex-column align-items-center justify-content-center">
                <h1>Bienvenido <?php echo  $_GET['user_get']?> </h1>
                <div class="card mb-4" style="width: 18rem;">
                    <img src="https://media.makeameme.org/created/end-users-g8ywwz.jpg" class="card-img-top" alt="img_admin">
                    <div class="card-body">
                        <h5 class="card-title">user</h5>
                        <p class="card-text">Navegar por la página y funcionalidades básicas.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } else if ( isset($_GET['new_user_get']) && $_GET['new_user_get'] == "22") { //nuevo usuario ?>

        <form action="datos.php" method="get">
            <div class="mb-3">
                <label for="nombreInputUser" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombreInputUser" aria-describedby="nombreHelp" name="nombre_get">
                <div id="nombreHelp" class="form-text">We'll never share your name with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="apellidoInputUser" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="exampleInputApellido" aria-describedby="apellidoHelp" name="apellido_get">
                <div id="apellidoHelp" class="form-text">We'll never share your apellido with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="DNIInputUser" class="form-label">DNI</label>
                <input type="text" class="form-control" id="exampleInputDNI" aria-describedby="DNIHelp" name="dni_get">
                <div id="DNIHelp" class="form-text">We'll never share your DNI with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputUser" class="form-label">User</label>
                <input type="text" class="form-control" id="exampleInputUser" aria-describedby="userHelp">
                <div id="userHelp" class="form-text">We'll never share your user with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    <?php } else { //ingresa usuario que no existe?>
        <div class="alert alert-danger" role="alert">
            Error, ha ingresado un usuario que no existe!
        </div>
    <?php } ?>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  
    
</body>

</html>