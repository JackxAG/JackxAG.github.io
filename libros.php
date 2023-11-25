<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Libros</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100 bg-light">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container px-5">
                <div class="custom-animation">
                    <a class="navbar-brand" href="index.php"><span class="fw-bolder text-primary">Virtual Bookstore</span></a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="libros.php">Libros</a></li>
                        <li class="nav-item"><a class="nav-link" href="autores.php">Autores</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contactanos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Libros</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <!-- Mas Vendidos Section-->
                    <section>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h2 class="text-primary fw-bolder mb-0">Libros con mejores exitos</h2>

                        </div>

                        <section>
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <!-- Buttons on the left side -->
                                        <div class="col-auto">
                                            <button id="prev-book-button" class="arrow-button">&#8249;</button>
                                        </div>
                                        <!-- Book content in the center -->
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4 custom-animation book-card">
                                                <!-- Agrega la imagen del libro -->
                                                <div class="book-image-container">
                                                    <img src="assets/libroterror.PNG" alt="Nombre del libro" class="book-image">
                                                </div>

                                                <!-- Agrega el nombre del libro -->
                                                <div class="book-name">Camilla</div>

                                                <!-- Agrega el precio del libro -->
                                                <div class="book-price">$200</div>
                                            </div>
                                        </div>
                                        <!-- Buttons on the right side -->
                                        <div class="col-auto">
                                            <button id="next-book-button" class="arrow-button">&#8250;</button>
                                        </div>
                                        <!-- Additional content on the right side -->
                                        <div class="col-lg-8">
                                            <div class="book-description">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <?php
                       

                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "dblibreria";

                        // Creando una conexión
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Verificar la conexión
                        if ($conn->connect_error) {
                            die("Error de conexión: " . $conn->connect_error);
                        }

                        // Consulta SQL para obtener los libros
                        $sql_libros = "SELECT * FROM titulos";
                        $resultado_libros = $conn->query($sql_libros);

                        // Cerrar la conexión a la base de datos
                        $conn->close();
                        ?>

                        <!-- Todos Nuestros Libros Section-->
                        <section>
                            <h2 class="text-secondary fw-bolder mb-4">Algunos de nuestros grandiosos libros</h2>
                            <div class="row gx-5">
                                <?php
                                
                                if ($resultado_libros->num_rows > 0) {
                                    while ($row = $resultado_libros->fetch_assoc()) {
                                ?>
                                        <div class="col-md-6 col-lg-4 col-xl-4 mb-4 custom-animation">
                                            <div class="card shadow border-0 rounded-4">
                                                <div class="card-body p-4 ">
                                                    <div class="text-secondary fw-bolder mb-2"><?php echo $row['fecha_pub']; ?></div>
                                                    <div class="mb-2">
                                                        <div class="small fw-bolder"><?php echo $row['titulo']; ?></div>
                                                        <div class="small text-muted"><?php echo $row['tipo']; ?></div>
                                                    </div>
                                                    <div class="fst-italic">

                                                        <div class="small text-muted">$<?php echo $row['precio']; ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    }
                                } else {
                                    echo "No hay libros disponibles.";
                                }
                                ?>
                            </div>
                        </section>

    </main>
    <!-- Footer-->
    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0">Copyright &copy; Nuestro Sitio 2023</div>
                </div>
                <div class="col-auto">
                    <a class="small" href="#!">Privacidad</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="#!">Terminos y Condiciones</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="#!">Contactanos</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>