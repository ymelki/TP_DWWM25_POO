<?php

class Article {
    public function findAll(){

        // 1 Connexion à la BD 
        include __DIR__.'/../../src/Database.php';
        $pdo=Database::getPdo();
      

        // 2 on lance notre requête 
        $sql="select * from articles";
        $resultat=$pdo->query($sql);

        //3 On met les resultats dans un tableau
        $tab=$resultat->fetchAll();
       
     
         
        return $tab;
    }
}