<?php

// Routeur a developper ici ...
class Application {
    public static function run(){

        // Routeur lecture du chemin de l'URL
        

    if (!isset($_SERVER['PATH_INFO'])) {
        $path="";
    }

    if (isset($_SERVER['PATH_INFO'])) {
        $path=$_SERVER['PATH_INFO'];
    }


    if ($path==''){
        // si l'URL est vide



        // on recupere le code du controlleur de la page d accueil
        include __DIR__.'/../src/Controller/HomeController.php';
        // on l'instancie
        $controller=new HomeController();
        // on lance la méthode index du controlleur
        $controller->index(); //Renvoyer la vue du formulaire de connexion
    }
 
    else  if ($path=='/article'){

        // on recupere le code du controlleur de la page d accueil
        include __DIR__.'/../src/Controller/ArticleController.php';
        // on l'instancie
        $Acontroller=new ArticleController();
        // on lance la méthode index du controlleur
        $Acontroller->findone(); //Renvoyer la vue du formulaire de connexion
    }

    else  if ($path=='/inserer'){

        // on recupere le code du controlleur de la page d accueil
        include __DIR__.'/../src/Controller/ArticleController.php';
        // on l'instancie
        $Acontroller=new ArticleController();
        // on lance la méthode index du controlleur
        $Acontroller->inserer(); //Renvoyer la vue du formulaire de connexion
    }

    else  if ($path=='/insererarticle'){

        // on recupere le code du controlleur de la page d accueil
        include __DIR__.'/../src/Controller/ArticleController.php';
        // on l'instancie
        $Acontroller=new ArticleController();
        // on lance la méthode index du controlleur
        $Acontroller->insererarticle(); //Renvoyer la vue du formulaire de connexion
    }
 
        
    }
}