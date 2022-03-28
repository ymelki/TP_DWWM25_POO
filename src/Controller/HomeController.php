<?php
class HomeController {
    public function index(){

        //Potentillement il peut appeller un modèle
        // Afficher les articles

         // on recupere l'entité article
         include __DIR__.'/../../src/Entity/Model.php';

        include __DIR__.'/../../src/Entity/Article.php';
        // on l'instancie
        $a=new Article();

        // on lance la méthode findall
        $mesarticles=$a->findAll();
     

        // appel la vue
        include __DIR__.'/../../templates/home.php';
    }
}