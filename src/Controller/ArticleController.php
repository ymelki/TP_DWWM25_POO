<?php
class ArticleController {

    public function inserer(){

        
        // appel la vue
        include __DIR__.'/../../templates/inserer.php';

    }

    public function insererarticle(){

          // on recupere l'entité article
          include __DIR__.'/../../src/Entity/Model.php';

          include __DIR__.'/../../src/Entity/Article.php';
          // on l'instancie
          $a=new Article();
  
          // on lance la méthode inserer
          $data2=array("titre","description");
          $data[]="'".$_POST['titre']."'";
          $data[]="'".$_POST['description']."'";
          $a->insert($data2,$data);
       
        // on lance la méthode findall
        $mesarticles=$a->findAll();
            
        
        // appel la vue
        include __DIR__.'/../../templates/home.php';

    }

    public function findone(){

        //Potentillement il peut appeller un modèle
        // Afficher les articles

         // on recupere l'entité article
         include __DIR__.'/../../src/Entity/Model.php';

        include __DIR__.'/../../src/Entity/Article.php';
        // on l'instancie
        $a=new Article();

        // on lance la méthode findall
        $mesarticles=$a->findone($_GET['id']);
     

        // appel la vue
        include __DIR__.'/../../templates/home.php';
    }
    public function index(){

        //Potentillement il peut appeller un modèle
        // Afficher les articles

         // on recupere l'entité article
        include __DIR__.'/../../src/Entity/Article.php';
        // on l'instancie
        $a=new Article();

        // on lance la méthode findall
        $mesarticles=$a->findAll();
     

        // appel la vue
        include __DIR__.'/../../templates/home.php';
    }
}