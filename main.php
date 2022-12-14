<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CSV loader app</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">CSV loader app</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="data.php">View results</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header>
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Subheading-->
                <p class="row">please add your ssm file. For a successful upload, the file must be no larger than 1 MB.</p>
            </div>
        </header>
        <!-- Import Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- Import Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Upload Desk</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fa-solid fa-floppy-disk"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <form>                       
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label form-control-label">Please add your CSV file. For a successful upload, the file must be no larger than 1 MB.</label>
                        <div class="col-lg-4">
                            <input class="form-control" type="file">
                        </div>
                    </div>
                    <!-- Upload Section Button-->
                    <div class="text-center mt-4">
                        <a class="btn btn-xl btn-outline-light" href="#">
                            <i class="fas fa-download me-2"></i>
                            Import
                        </a>
                    </div>   
                </form>
            </div>
        </section>
        <!-- Clear all records Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Clear all records Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-xl-2">
                        <form action="#">       
                            <div class="row">
                                <!-- Submit Button-->
                                <button class="btn btn-danger btn-xl" id="submitButton" type="submit">Clear all records</button>
                                <div class="ms-auto"><p class="lead">Warning! By clicking on this button you delete all records of your CSV files from the database!</p></div>
                            </div>
                        </form>   
                    </div>
                </div>
            </div>
        </section>
    </body>
    <!-- Footer-->
    <footer class="footer text-center">
        <!-- Copyright Section-->
            <div class="container"><small>Copyright &copy; CSV loader 2022</small></div>
    </footer>
    
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</html>