<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Ingresar</title>
</head>

<body >
    <div class="container">
        <div class="vh-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5 p-4 formulario">
                <div class="card-body p-4">
                <form action="">
                    <div class="form-group text-center pt-3">
                        <h3 class="text-light">Inicia Sesión para continuar</h3>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Correo" aria-label="Correo" aria-describedby="basic-addon1">
                        <label class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></label>
                     </div>
                     <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1">
                        <button class="input-group-text btn btn-light" id="basic-addon1"><i class="bi bi-eye"></i></button>
                     </div>

                     <button class="btn btn-outline-light btn-lg btn-block" type="submit">Inicia sesión</button>

                    <div class="form d-flex justify-content-center p-4">
                    <button class="btn btn-outline-light" style="border-style: none;">¿Olvidaste tu contraseña?</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

    <style>
body {
    background-image: url(background.jpg);
    padding: 0%;
    margin: 0%;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}


.formulario {
    background:rgba(29, 60, 138, 0.6);
    padding: 18px;
    border-radius: 12px;
    box-shadow: 0 0 30px rgba(12, 39, 107, 0.4);
    color: white;
}

.form-control {
    background: rgba(0, 0, 0, .3);
    border-style: none;
    transition: 0.2s ease-in;
    outline: none;
    box-shadow: none;
    color: rgb(135, 135, 236);
}

.form-control:hover {
    background: none;
    box-shadow: none;
    outline: none;
    transition: 0.2s;
    color: aliceblue;
}


@media (max-width: 767px) {
            body {
                background-color: rgba(22, 27, 60, 0.8);
                background-image: none;
            }
        }
    </style>
</body>

</html>
