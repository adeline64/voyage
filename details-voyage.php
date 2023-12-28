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

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

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
                        <a class="navbar-brand" href="index.html">
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
                                        href="index.html">Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Destinations</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="contact.html">Contact</a>
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

    <section id="page-titre" class="overlay">
        <h1>Nom de la destination</h1>
        <div class="vague"></div>
    </section>

    <main class="container">
        <div class="row">
            <section class="col-lg-7 offset-lg-1" id="page-details">
                <h2>Lorem ipsum Dolor</h2>
                <img src="images/img27.jpg" alt="vom de la destination" class="img-fluid">
                <div class="details">
                    <ul class="d-flex justify-content-center">
                        <li><i class="bi bi-clock"></i> 5J/4N |</li>
                        <li><i class="bi bi-people-fill"></i> Nombre de personnes : 4 |</li>
                        <li><i class="bi bi-geo-alt-fill"></i> Norvege |</li>
                    </ul> 
                </div><!-- Fin de la div details-->    
               
                <div id="tabs" class="my-5">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                                role="tab" aria-controls="home" aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                                role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button"
                                role="tab" aria-controls="messages" aria-selected="false">Messages</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button"
                                role="tab" aria-controls="settings" aria-selected="false">Settings</button>
                        </li>
                    </ul>
                    
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique laudantium illo quam. Cumque eius facere explicabo minima vel placeat doloremque, distinctio modi deserunt accusamus officia consequatur. Blanditiis quisquam eveniet nostrum!</p>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis sapiente voluptate error quae earum aperiam, quis quaerat iusto itaque, alias sit commodi officia sint eaque id fugiat non delectus nobis!</p>
                        </div>
                        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab" tabindex="0">
                            <img src="images/gallery-5.jpg" alt="">
                        </div>
                        <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab" tabindex="0">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11555.870793339232!2d1.3648584312225092!3d43.60721416764662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebaa26015cb43%3A0xacdcee70b0cc51c3!2s15%20Chem.%20de%20la%20Crabe%2C%2031300%20Toulouse!5e0!3m2!1sfr!2sfr!4v1698064305118!5m2!1sfr!2sfr"
                                height="400" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                    </div>


                </div><!-- fin de la div tabs-->
                
                <div id="galerie-details" class="row">
                    <h3>Galerie / Photos</h3>
                    <figure class="col">
                        <img src="images/img30.jpg" alt="" class="img-fluid rounded">
                    </figure>
                    <figure class="col">
                        <img src="images/img31.jpg" alt="" class="img-fluid rounded">
                    </figure>

                </div><!-- fin de galerie-details-->

                
            </section>
            <aside class="col-lg-3">
                <div class="details-cout">
                    <span> 649 € / personne</span>
                    <div>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                    </div><!--FIn des etoiles-->
                </div>

                <form action="" method="POST">
                    <input type="text" placeholder="Votre nom" name="nom">
                    <input type="email" placeholder="Votre email" name="email">
                    <input type="number" placeholder="Votre téléphone" name="telephone">
                    <input type="date">

                    <div class="form-check">
                        <input type="checkbox" id="guide" value="guide" name="guide" class="form-check-input">
                        <label for="guide" class="form-check-label">Guide touristique</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="assurance" value="assurance" name="assurance" checked class="form-check-input">
                        <label for="assurance" class="form-check-label">Assurance</label>
                    </div>



                    <input type="submit" class="btn btn-primary">
                </form>

                
            </aside>
        </div>
    </main>




    <section id="bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3 offset-md-1">
                    <h4>A propos</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui iusto, explicabo accusamus
                        laudantium
                        ipsum quisquam totam omnis odio commodi officia incidunt quibusdam.</p>
                    <img src="images/logo6.png" alt="">
                    <img src="images/logo2.png" alt="">
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
                    <img src="images/favicon.png" alt="" width="60">
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