<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!--la feuille de style CSS de Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <div class="cointainer m-auto">

        <!--logo-->

        <div class="row m-0">
            <div class="d-none d-sm-none d-lg-block col-lg-12">

                <img src="img/jarditou_logo.jpg" class="img-fluid rounded float-left" width="20%" height="auto"
                    alt="logo" title="logo">
                <h1 class="text-right p-3">Tout le jardin</h1>

            </div>
        </div>

        <!--menu haut-->

        <div class="row m-0">
            <div class="col-12 col-sm-12">
                <nav class="navbar navbar-expand-lg bg-light navbar-light">
                    <span class="navbar-brand" href="#">Jarditou.com</span>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between justify-content-sm-between"
                        id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tableau.html">Tableau</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="contact.html"><b>Contact</b></a>
                            </li>
                        </ul>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion"
                                aria-label="Votre promotion">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                        </form>
                    </div>
                </nav>

            </div>
        </div>

        <div class="row m-auto">
            <div class="col-12 col-sm-12">
                <div class="text-center">
                    <img src="img/promotion.jpg" class="w-100" alt="promotion" title="promotion">
                </div>
            </div>
        </div>

        <!--formulaire-->

        <div class="row m-3">
            <p>*Ces zones sont obligatoires</p>
        </div>
        <div class="row m-3">
            <h1>Vos Coordonnées</h1>
        </div>


        <form method="POST" action="script.php" id="myForm">
        <div class="col-10 justify-content-center">
            <div class="form-group m-3 ">
                <label for="nom" class="col-form-label">Nom*</label>
                <input type="text" class="form-control" name="nom">
                <span class="p-3 text-danger" id="alert_nom"><?php if (isset($erNom)){
                    echo $erNom;
                    }?></span>
            </div>

            <div class="form-group m-3">
                <label for="prénom">Prénom*</label>
                <input type="text" class="form-control" name="prenom">
                <span class="p-3 text-danger" id="alert_prénom"><?php if (isset($erPrenom)){
                    echo $erPrenom;
                    }?></span>
            </div>

            <div class="form-group m-3">
                <label for="sexe">Sexe*</label>
<!-- pour info, un RADIO doit avoir le même name -->
                <div class="form-row">
                    <div class="custom-control custom-control-inline custom-radio">
                        <input class="custom-control-input" type="radio" id="femme" name="sexe" value="option1" checked>
                        <!-- Rappel : le 'for' du label = 'id' de l'input -->
                        <label class="custom-control-label" for="femme">Féminin</label>
                    </div>

                    <div class="custom-control custom-control-inline custom-radio">
                        <input class="custom-control-input" type="radio" id="homme" name="sexe" value="option2">
                        <label class="custom-control-label" for="homme">Masculin</label>
                    </div>
                </div>
                <span id="alert_sexe"></span>
            </div>

            <div class="form-group m-3">
                <label for="date">Date de naissance* : </label>
                <input type="date" name="ddn" class="form-control" placeholder="jj/mm/aaaa">
                <span class="p-3 text-danger" id="alert_date"><?php if (isset($erDdn)){
                    echo $erDdn;
                    }?></span>
            </div>

            <div class="form-group m-3">
                <label for="code">Code postal*</label>
                <input type="text" class="form-control" name="code">
                <span class="p-3 text-danger" id="alert_cp"><?php if (isset($erCode)){
                    echo $erCode;
                    }?></span>
            </div>

            <div class="form-group m-3">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group m-3">
                <label for="ville">Ville</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group m-3">
                <label for="courriel">Email*</label>
                <input type="email" class="form-control" name="email">
                    <span class="p-3 text-danger" id="alert_mail"><?php if (isset($erMail)){
                    echo $erMail;
                    }?></span>
            </div>

            <div class="row m-3">
                <h1>Votre demande</h1>
            </div>

            <div class="form-group m-3">
                <label for="sujet">Sujet</label>
                <select class="form-control">
                    <option>Veuillez sélectionner un sujet</option>
                    <option>Mes commandes</option>
                    <option>Question sur un produit</option>
                    <option>Réclamation</option>
                    <option>Autres</option>
                </select>
            </div>

            <div class="form-group m-3">
                <label for="question">Votre question*:</label>
                <textarea class="form-control" name="question" rows="3"></textarea>
                <span class="p-3 text-danger" id="alert_question"><?php if (isset($erQuest)){
                    echo $erQuest;
                    }?></span>
            </div>

            <div class="form-group form-check m-3">
                <input type="checkbox" class="form-check-input" name="trait_inf">
                <label class="form-check-label">J'accepte le traitement informatique de ce
                    formulaire.*</label><br>
                    <span class="p-3 text-danger" id="alert_accord"><?php if (isset($erAccord)){
                    echo $erAccord;
                    }?></span>
            </div>


            <input type="submit" id="myForm" class="btn btn-primary ml-3 mb-3" value="Envoyer">
            <input type="reset" class="btn btn-primary mb-3" value="Annuler">
        <div>
        </form>


        <!--menu bas-->

        <div class="row m-0">
            <div class="col-12 col-sm-12">

                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <a class="text-white" href="#">
                        <p class="pr-3">mentions légales</p>
                    </a>
                    <a class="text-white" href="#">
                        <p class="pr-3">horaires</p>
                    </a>
                    <a class="text-white" href="#">
                        <p class="pr-3">plan du site</p>
                    </a>
                </nav>

            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="js/contact_js.js"></script>

</body>

</html>