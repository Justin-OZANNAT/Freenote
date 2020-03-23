<!-- Header -->
<header class="masthead">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger"
               href="<?= WEBSITE_URL . WEBROOT ?>admin/views/layout/default_admin.php">Freenote</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <!--Modal: Login / Register Form-->
                        <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog cascading-modal" role="document">
                                <!--Content-->
                                <div class="modal-content">

                                    <!--Modal cascading tabs-->
                                    <div class="modal-c-tabs">

                                        <!-- Nav tabs -->
                                        <ul class="modalnav" role="tablist">
                                            <li class="nav-modal">
                                                <a class="btn btn-primary" data-toggle="tab" href="#panel7"
                                                   role="tab"><i class="fas fa-user mr-1"></i>
                                                    Se connecter</a>
                                            </li>
                                            <li class="nav-modal">
                                                <a class="btn btn-primary" data-toggle="tab" href="#panel8"
                                                   role="tab"><i class="fas fa-user-plus mr-1"></i>
                                                    S'inscrire</a>
                                            </li>
                                        </ul>

                                        <!-- Tab panels -->
                                        <div class="tab-content">
                                            <!--Panel 7-->
                                            <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                                                <!--Body-->
                                                <form method="POST" action="<?= WEBSITE_URL ?>account/login">
                                                    <div class="modal-body mb-1">
                                                        <div class="md-form form-sm mb-5">
                                                            <i class="fas fa-envelope prefix"></i>
                                                            <input name="email" type="email" id="modalLRInput10"
                                                                   class="form-control form-control-sm validate"
                                                                   placeholder="ex : exemple@gmail.com">
                                                            <label data-error="wrong" data-success="right"
                                                                   for="modalLRInput10">Votre adresse Email</label>
                                                        </div>

                                                        <div class="md-form form-sm mb-4">
                                                            <i class="fas fa-lock prefix"></i>
                                                            <input name="password" type="password" id="modalLRInput11"
                                                                   class="form-control form-control-sm validate"
                                                                   placeholder="ex : Jeanreno123*">
                                                            <label data-error="wrong" data-success="right"
                                                                   for="modalLRInput11">Votre mot de passe</label>
                                                        </div>
                                                        <div class="text-center mt-2">
                                                            <button type="submit" class="btn btn-primary">Se connecter
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!--Footer-->
                                                    <div class="modal-footer">
                                                        <div class="options text-center text-md-right mt-1">
                                                            <p>Pas encore inscrit ? <a href="#" class="blue-text">
                                                                    S'inscrire</a></p>
                                                            <p>Mot de Passe <a href="#" class="blue-text">Oublié ?</a>
                                                            </p>
                                                        </div>
                                                        <button type="button"
                                                                class="btn btn-outline-info waves-effect ml-auto"
                                                                data-dismiss="modal">Fermer
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!--/.Panel 7-->

                                            <!--Panel 8-->
                                            <div class="tab-pane fade" id="panel8" role="tabpanel">

                                                <!--Body-->
                                                <form method="POST" action="<?= WEBSITE_URL ?>account/register">
                                                    <div class="modal-body">
                                                        <div class="md-form form-sm mb-5">
                                                            <i class="fas fa-envelope prefix"></i>
                                                            <input name="pseudo" type="text" id="modalLRInput11"
                                                                   class="form-control form-control-sm validate"
                                                                   placeholder="username">
                                                            <label data-error="wrong" data-success="right"
                                                                   for="modalLRInput11">Votre pseudo</label>
                                                        </div>

                                                        <div class="md-form form-sm mb-5">
                                                            <i class="fas fa-envelope prefix"></i>
                                                            <input name="email" type="email" id="modalLRInput12"
                                                                   class="form-control form-control-sm validate"
                                                                   placeholder="ex : exemple@gmail.com">
                                                            <label data-error="wrong" data-success="right"
                                                                   for="modalLRInput12">Votre adresse Email</label>
                                                        </div>

                                                        <div class="md-form form-sm mb-5">
                                                            <i class="fas fa-lock prefix"></i>
                                                            <input name="password" type="password" id="modalLRInput13"
                                                                   class="form-control form-control-sm validate"
                                                                   placeholder="ex : Jeanreno123*">
                                                            <label data-error="wrong" data-success="right"
                                                                   for="modalLRInput13">Votre mot de passe</label>
                                                        </div>

                                                        <div class="md-form form-sm mb-4">
                                                            <i class="fas fa-lock prefix"></i>
                                                            <input name="cpassword" type="password" id="modalLRInput14"
                                                                   class="form-control form-control-sm validate">
                                                            <label data-error="wrong" data-success="right"
                                                                   for="modalLRInput14">Verifier mot de passe</label>
                                                        </div>

                                                        <div class="text-center form-sm mt-2">
                                                            <button type="submit" class="btn btn-primary">
                                                                S'inscrire</i>
                                                            </button>
                                                        </div>

                                                    </div>
                                                    <!--Footer-->
                                                    <div class="modal-footer">
                                                        <div class="options text-right">
                                                            <p class="pt-1">Vous avez un compte ? <a href="#"
                                                                                                     class="blue-text">Se
                                                                    connecter</a></p>
                                                        </div>
                                                        <button type="button"
                                                                class="btn btn-outline-info waves-effect ml-auto"
                                                                data-dismiss="modal">Fermer
                                                        </button>
                                                    </div>
                                            </div>
                                            </form>
                                            <!--/.Panel 8-->
                                        </div>

                                    </div>
                                </div>
                                <!--/.Content-->
                            </div>
                        </div>
                        <!--Modal: Login / Register Form-->

                        <div class="text-center">
                            <a href="" class="nav-link js-scroll-trigger" data-toggle="modal"
                               data-target="#modalLRForm">Se connecter // S'inscrire</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 id="page_top" class="mx-auto my-0 text-uppercase">FREENOTE</h1>
            <h2 class="text-white-50 mx-auto mt-2 mb-5">Un site de discussion mot par mot</h2>
            <a href="#about" class="btn btn-primary js-scroll-trigger">C'est parti</a>
        </div>
    </div>
</header>

<!-- About Section -->
<section id="about" class="about-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-white mb-4">Bienvenue</h2>
                <p class="text-white-50">Freenote est un site de conversations sous formes de plusieurs discussions qui
                    ou l'on peut mettre des messages qui se remplissent mot par mot. Chaque utilisateur a le droit de
                    rentrer un mot par message.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="projects-section bg-light">
    <div class="container">

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-8 col-lg-7">
                <img class="test" src="<?= WEBSITE_URL . WEBROOT ?>assets/images/wallpaper.jpg" alt="">
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4><a href="#page-top">Discusion 1</a></h4>
                    <p class="text-white-50 mb-0">La meilleure des discussions</p>
                </div>
            </div>
        </div>

        <!-- Project One Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <div class="col-lg-6">
                <img class="test" src="<?= WEBSITE_URL . WEBROOT ?>assets/images/wallpaper.jpg" alt="">
            </div>
            <div class="col-lg-6">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4><a href="#page-top">Discusion 2</a></h4>
                            <p class="mb-0 text-white-50">La MEILLEEEEEEEEEEUUUUURE des discussions </p>
                            <hr class="d-none d-lg-block mb-0 ml-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6">
                <img class="test" src="<?= WEBSITE_URL . WEBROOT ?>assets/images/wallpaper.jpg" alt="">
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">Objectifs</h4>
                            <p class="mb-0 text-white-50">Notre objectif principal est de devenir la meilleure équipe
                                dresseuse de POKéMON, grâce à cela nous pourront vaincre Olive et Tom et trouver les 7
                                boules de cristal pour liberer lacrim.</p>
                            <hr class="d-none d-lg-block mb-0 mr-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Signup Section -->
<!--    <section id="signup" class="signup-section">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-md-10 col-lg-8 mx-auto text-center">-->
<!---->
<!--                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>-->
<!--                    <h2 class="text-white mb-5">Inscrivez vous dès maintenant ! </h2>-->
<!---->
<!--                    <form class="form-inline d-flex">-->
<!--                        <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Entrez votre adresse email..">-->
<!--                        <button type="submit" class="btn btn-primary mx-auto">S'inscrire</button>-->
<!--                    </form>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

<!-- Contact Section -->
<section class="contact-section bg-black">
    <div class="container">

        <div class="row">

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Adresse</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">15 Avenue Gaston Berger, Aix-En-Provence France</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Email</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">
                            <a href="#">contact@freenote.fr</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Téléphone</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">+33 679226351</div>
                    </div>
                </div>
            </div>
        </div>

        <!--            <div class="social d-flex justify-content-center">-->
        <!--                <a href="#" class="mx-2">-->
        <!--                    <i class="fab fa-twitter"></i>-->
        <!--                </a>-->
        <!--                <a href="#" class="mx-2">-->
        <!--                    <i class="fab fa-facebook-f"></i>-->
        <!--                </a>-->
        <!--                <a href="#" class="mx-2">-->
        <!--                    <i class="fab fa-github"></i>-->
        <!--                </a>-->
        <!--            </div>-->

    </div>
    <div class="container">
        <nav class="nav-pagination" aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</section>