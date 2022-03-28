<?php
abstract class Model {

    protected $table;
    protected $pdo;



    public function __construct()
    {
            // 1 Connexion à la BD 
            include __DIR__.'/../../src/Database.php';
            $this->pdo=Database::getPdo();
          
        
    }

    public function findone($id){

    

        // 2 on lance notre requête 
        $sql="select * from $this->table where id=$id";
        $resultat=$this->pdo->query($sql);

        //3 On met les resultats dans un tableau
        $tab=$resultat->fetchAll();
       
     
         
        return $tab;
    }


    public function findAll(){


        // 2 on lance notre requête 
        $sql="select * from $this->table";
        $resultat=$this->pdo->query($sql);

        //3 On met les resultats dans un tableau
        $tab=$resultat->fetchAll();     
         
        return $tab;
    }



    public function insert($data2,$data){

        var_dump($data);

        $data=implode(",", $data);
        $data2=implode(",", $data2);
        
        // array(2) { [0]=> string(4) "dgfd" [1]=> string(5) "dfdsf" }


        // '$titre','$desc'
        // 2 on lance notre requête 
        $sql="insert into $this->table ($data2)  VALUES ($data)";
   
         $this->pdo->query($sql);
   
         
    }
}