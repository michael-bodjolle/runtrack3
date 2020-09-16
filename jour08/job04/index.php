<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <nav>
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo">LaPlateforme_</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Inscription</a></li>
                        <li><a href="#">Connexion</a></li>
                        <li><a href="#">Rechercher</a></li>
                    </ul>
                </div>
            </nav>
    </header>

    <main>
    <div class="container">
            <div class="row">
                <div class="input-field col s">
                </div>
                <form class="col s">
                    <p>   
                        <p>Civilité:</p>
                        <label>
                            <input name="group1" type="radio" checked />
                            <span>Homme</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input name="group1" type="radio" />
                            <span>femme</span>
                        </label>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s6">
                                
                                        <input placeholder="First name" id="first_name" type="text" class="validate">
                                        <label for="first_name"></label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input placeholder="Last name" id="last_name" type="text" class="validate">
                                        <label for="last_name"></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                    <label for="email"> <i class="material-icons">contact_mail</i></label>
                                    
                                        <input  id="email" type="email" class="validate">
                                       
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="Password" id="password" type="password" class="validate">
                                        <label for="password"></label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="Repeat password" id="password" type="password" class="validate">
                                        <label for="password"></label>
                                    </div>
                                </div>
                                <p>
                                    <label>
                                        <input type="checkbox" class="filled-in" checked="checked" />
                                        <span>Informatique</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input type="checkbox" class="filled-in" checked="checked" />
                                        <span>Voyages</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input type="checkbox" class="filled-in" checked="checked" />
                                        <span>Sport</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input type="checkbox" class="filled-in" checked="checked" />
                                        <span>Lecture</span>
                                    </label>
                                </p>

                                <button class="btn waves-effect waves-light" type="submit" name="action">Valider
                                    <i class="material-icons right">send</i>
                                </button>


                            </form>
                        </div>
            </div>
    </main>
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">

                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Liens</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Accueil</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Inscription</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Connexion</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Rechercher</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2020 Copyright Text
                
            </div>
        </div>

    </footer>
</body>

</html>