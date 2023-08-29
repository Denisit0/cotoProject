<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Expediente</title>

</head>
<body class="antialiased bg-light">
    <div class="container">
        <h3 class="mt-4 pb-2 border-bottom border-dark">Mi expediente</h3>

        <h5 class="mt-4 mb-3">Datos personales</h5>

        <form class="bg-white p-4 border p-4 rounded-3 p-4">

                <ul class="nav nav-underline mb-4">
                    <li class="nav-item">
                        <a class="nav-link active text-primary " href="#">Datos personales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Documentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Estudios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Minsal</a>
                    </li>
                </ul>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="primer-apellido">Primer Apellido:</label>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="primer-apellido" name="primer-apellido">
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="segundo-apellido">Segundo Apellido:</label>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="segundo-apellido" name="segundo-apellido">
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="tercer-apellido">Apellido Casado:</label>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="tercer-apellido" name="tercer-apellido">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="primer-apellido">Primer nombre:</label>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="primer-nombre" name="primer-apellido">
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="segundo-apellido">Segundo nombre:</label>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="segundo-nombre" name="segundo-apellido">
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="tercer-apellido">Tercer nombre:</label>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="tercer-nombre" name="tercer-apellido">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="pais">País:</label>
                            <select class="form-control" id="pais" name="pais">
                                <option value="" disabled selected>Seleccione un país</option>
                                <!-- Aquí irían las opciones de países -->
                            </select>
                        </div>
                    </div>


                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="departamento">Departamento:</label>
                            <select class="form-control" id="departamento" name="departamento">
                                <option value="" disabled selected>Seleccione un departamento</option>
                                <!-- Aquí irían las opciones de departamentos -->
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="municipio">Municipio:</label>
                            <select class="form-control" id="municipio" name="municipio">
                                <option value="" disabled selected>Seleccione un municipio</option>
                                <!-- Aquí irían las opciones de municipios -->
                            </select>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cuarto-apellido">Dirección de residencia:</label>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="cuarto-apellido" name="cuarto-apellido">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="quinto-apellido">Email personal:</label>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="quinto-apellido" name="quinto-apellido">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="estado-civil">Estado Civil:</label>
                        <div class="form-group">
                            <select class="form-control" id="estado-civil" name="estado-civil">
                                <option value="" disabled selected>Seleccione un estado civil</option>
                                <option value="soltero">Soltero</option>
                                <option value="casado">Casado</option>
                                <option value="divorciado">Divorciado</option>
                                <option value="viudo">Viudo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="sexo">Sexo:</label>
                            <select class="form-control" id="sexo" name="sexo">
                                <option value="" disabled selected>Seleccione un sexo</option>
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="tipo-sangre">Tipo de Sangre:</label>
                        <div class="form-group">
                            <select class="form-control" id="tipo-sangre" name="tipo-sangre">
                                <option value="" disabled selected>Seleccione un tipo de sangre</option>
                                <option value="a">Tipo A</option>
                                <option value="b">Tipo B</option>
                                <option value="ab">Tipo AB</option>
                                <option value="o">Tipo O</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="fecha-nacimiento">Fecha de Nacimiento:</label>
                        <div class="form-group">
                            <input type="date" class="form-control" id="fecha-nacimiento" name="fecha-nacimiento">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="pais-nacimiento">País de Nacimiento:</label>
                        <div class="form-group">
                            <select class="form-control" id="pais-nacimiento" name="pais-nacimiento">
                                <option value="" disabled selected>Seleccione un país de nacimiento</option>
                                <!-- Aquí irían las opciones de países -->
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="municipio-nacimiento">Municipio de Nacimiento:</label>
                        <div class="form-group">
                            <select class="form-control" id="municipio-nacimiento" name="municipio-nacimiento">
                                <option value="" disabled selected>Seleccione un municipio de nacimiento</option>
                                <!-- Aquí irían las opciones de municipios -->
                            </select>
                        </div>
                    </div>
                </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save p-1"></i>Guardar
                    </button>
            </form>

         </div>
        </div>
    </div>

    <style>
        @media (max-width: 576px) {
    /* Ajustar margen inferior en títulos */
    .mt-4 {
        margin-top: 2rem !important;
    }

    /* Ajustar margen inferior en el botón de guardar */
    .d-grid {
        margin-top: 1rem;
    }

    /* Ajustar el tamaño de las etiquetas de los campos */
    label {
        font-size: 0.875rem;
    }

    /* Ajustar el tamaño de los campos de entrada */
    .form-control {
        font-size: 0.875rem;
        padding: 0.5rem 0.75rem;
    }
}

    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
