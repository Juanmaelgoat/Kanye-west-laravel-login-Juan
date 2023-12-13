<!DOCTYPE html>
<html lang="en">

<head>
    <title>LOGIN KANYE WEST BY JUAN SANCHEZ</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .gradient-form {
            background: url('https://external-preview.redd.it/UXd8QaWHLtfM36Png2M0Apkftj7h6PQtlq1N2kkbR58.jpg?auto=webp&s=020707a256137b24231acdd3be942ebd33221abd') no-repeat center center fixed;
            background-size: cover;
            height: 100vh !important;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #fccb90;
            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
        }

        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }

        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }

        .section-bg {
            background-color: #eee;
        }
    </style>
</head>

<body>
    <section class="gradient-form">
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <img src="https://www.pngkey.com/png/full/14-149986_kanye-west-bear-png-graphic-royalty-free-download.png"
                                            style="width: 185px;" alt="SENA Colombia Logo">
                                        <h4 class="mt-1 mb-5 pb-1">LOGIN</h4>
                                    </div>

                                    <form action="{{route('login')}}" method="post">
                                        @csrf
                                        <p>Por favor, inicie sesión en su cuenta</p>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Correo</label>
                                            <input type="email" name="email" id="form2Example11" class="form-control"
                                                placeholder="ingresar dirección de correo electrónico" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Contraseña</label>
                                            <input type="password" name="password" id="form2Example22"
                                                class="form-control" placeholder="Ingrese contraseña" />
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="submit">Ingresar</button>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">¿No tiene una cuenta?</p>
                                            <a href="{{route('register')}}" class="btn btn-outline-danger">Crear
                                                cuenta</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">LOGIN KANYE WEST BY JUAN SANCHEZ</h4>
                                    <p class="small mb-0">Login personalizado para entregable final de laravel, con tematica a mi artista
                                        favorito kanye west, todos los derechos de este login y la pagina a Juan Sanchez , el diseño del login se realizo siguiendo el video que se nos dio como indicacion.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>
