<?php

class Database {


    public static function getPdo(){
        return  new PDO('mysql:host=localhost;dbname=blog_poo_25', 'root','');
    }
    
}