<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Modern Business - Start Bootstrap Template</title>
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
                    <div class ="custom-animation">
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
            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dblibreria";

// Crea una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
?>
            <!-- Projects Section-->
           <?php
// Consulta SQL para obtener todos los datos de los autores desde la tabla 'autores'
$sql = "SELECT * FROM autores";
$result = $conn->query($sql);
?>

<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Nuestros autores</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <?php
                // Verifica si hay autores en la base de datos
                if ($result->num_rows > 0) {
                    // Muestra los datos de cada autor
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="card overflow-hidden shadow rounded-4 border-0 mb-5">';
                        echo '<div class="card-body p-0">';
                        echo '<div class="d-flex align-items-center">';
                        echo '<div class="p-5">';
                        echo '<h2 class="fw-bolder">' . $row["nombre"] . ' ' . $row["apellido"] . '</h2>';
                        echo '<p>' . $row["direccion"] . ', ' . $row["ciudad"] . ', ' . $row["estado"] . ', ' . $row["pais"] . ', ' . $row["cod_postal"] . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No se encontraron autores.</p>';
                }

                // Cierra la conexión
                $conn->close();
                ?>
            </div>
        </div>
    </div>
</section>


            <!-- Call to action section-->
            <section class="py-5 bg-gradient-primary-to-secondary text-white">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="display-4 fw-bolder mb-4">Unete a nosotros</h2>
                        <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="contact.html">Contactanos</a>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
                    <div class="col-auto">
                        <a class="small" href="#!">Privaciddad</a>
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
