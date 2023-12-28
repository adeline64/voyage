<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de voyages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Raleway&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">

</head>

<body>
    <!-- début  topbar -->
    <section id="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-8 coordonnees  pt-3 col-6">
                    <ul class="d-flex justify-content-around">
                        <li><i class="bi bi-telephone-fill"></i> 01 23 45 67 89</li>
                        <li><i class="bi bi-envelope-fill"></i> contact@voyage.com</li>
                        <li><i class="bi bi-geo-alt-fill"></i> 30 rue de la république
                            <br class="d-none display-mobile"><span class="ville">75000 Paris</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 d-flex  pt-3 col-6">
                    <!-- reseaux sociaux-->
                    <div class="social">
                        <ul class="d-flex">
                            <li><i class="bi bi-facebook"></i></li>
                            <li><i class="bi bi-twitter"></i></li>
                            <li><i class="bi bi-instagram"></i></li>
                            <li><i class="bi bi-linkedin"></i></li>
                        </ul>

                    </div>
                    <!-- bouton recherche-->
                    <div class="search-icon">
                        <button><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin topbar -->
    <!-- header -->
    <header>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg col-md-10 offset-md-1">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="../../index.php">
                            <h3 class="text-white">VOYAGE</h3>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active text-white" aria-current="page"
                                        href="../../index.php">Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Destinations</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="../../contact.php">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Blog</a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary">Je Réserve !</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    </header>

    <section id="page-titre-404" class="overlay">
        <div class="container">

            <!-- Texte -->
            <div class="text-404">
                <span>404</span>
                <h3>Oups !  Cette page n'existe plus !</h3>
                <h4>Catte page n'est plus disponible. Essayez le moteur de recherche pour trouver votre destination</h4>

            </div> <!-- Fin text-404 -->


            <!-- formulaire-->
            <form action="" method="GET">
                <input type="search" placeholder="Recherche..." class="form-control">
                <button type="submit"><i class="bi bi-search"></i></button>
            </form>

        </div><!-- Fin de container-->
    </section>

    <section id="bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3 offset-md-1">
                    <h4>A propos</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui iusto, explicabo accusamus
                        laudantium
                        ipsum quisquam totam omnis odio commodi officia incidunt quibusdam.</p>
                    <img src="../../images/logo6.png" alt="">
                    <img src="../../images/logo2.png" alt="">
                </div>
                <div class="col-md-3">
                    <h4>Informations de contact</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui iusto, explicabo accusamus
                        laudantium
                        ipsum quisquam.</p>
                    <ul>
                        <li><i class="bi bi-telephone-fill"></i>123 456 789</li>
                        <li><i class="bi bi-envelope-fill"></i>test@est.fr</li>
                        <li><i class="bi bi-geo-alt-fill"></i>adresse complete</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4>Derniers articles</h4>
                    <article>
                        <a href="#">
                            <h6>Titre de l'article</h6>
                        </a>
                        <span>Date | aucun commentaire</span>
                    </article>
                    <hr>
                    <article>
                        <a href="#">
                            <h6>Titre de l'article</h6>
                        </a>
                        <span>Date | aucun commentaire</span>
                    </article>
                </div>
                <div class="col-md-2">
                    <h4>Abonnez vous</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <form action="" method="POST">
                        <input type="email" placeholder="Votre email" class="form-control mb-3" required>
                        <input type="submit" value="Rejoignez nous !" class="btn btn-primary form-control">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="up">
        <a href="#topbar"><i class="bi bi-arrow-up-circle-fill"></i></a>
    </div>
    <footer>
        <div class="container">
            <div class="row align-items-center">
                <div class="col offset-md-1">
                    <ul class="d-flex justify-content-center">
                        <li><a href="#top">Mentions légales |</a></li>
                        <li><a href="#galerie">Termes & conditions |</a></li>
                        <li><a href="#action">FAQ |</a></li>
                    </ul>
                </div>
                <div class="col text-center">
                    <img src="../../images/favicon.png" alt="" width="60">
                </div>
                <div class="col">
                    <p>Copyright Voyage 2023. Tous droits réservés</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>