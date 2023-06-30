<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>


    <form action="loguin.php" method="get">
        <div class="mb-3">
            <label for="nombreInputUser" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombreInputUser" aria-describedby="nombreHelp" name="nombre_get">
        </div>
        <div class="mb-3">
            <label for="apellidoInputUser" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="exampleInputApellido" aria-describedby="apellidoHelp" name="apellido_get">
        </div>
        <div class="mb-3">
            <label for="DNIInputUser" class="form-label">DNI</label>
            <input type="text" class="form-control" id="exampleInputDNI" aria-describedby="DNIHelp" name="dni_get">
        </div>
        <div class="mb-3">
            <label for="exampleInputUser" class="form-label">User</label>
            <input type="text" class="form-control" id="exampleInputUser" aria-describedby="userHelp" name="user_get">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="pass_get">
        </div>

        <a href="loguin.php?new_user_get=22">Registrarse</a>

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>

</html>