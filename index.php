<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body id=index-fondo>
    
    <div class="container-fluid pb-0" >
        
        <div class="row" >
            <div class="col-6 mx-auto pt-4 formulario mt-5">
                <h2>Iniciar Sesión</h2>
                <form action="loguin.php" method="get">
                    <div class="mb-3">
                        <label for="exampleInputUser" class="form-label">User (<span class="red-asterisk">*</span>)</label>
                        <input type="text" class="form-control" id="exampleInputUser" aria-describedby="userHelp" name="user_get">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password (<span class="red-asterisk">*</span>)</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pass_get">
                    </div>

                    <a href="loguin.php?new_user_get=22">Registrarse</a>
                    
                    <div class="index-button">
                        <button type="submit" class="btn btn-lg btn-primary">Ingresar</button>
                        <button type="reset" class="btn btn-lg btn-primary">Resetear</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>