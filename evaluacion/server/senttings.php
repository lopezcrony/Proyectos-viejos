<?php

class conexBD{

    static public function conextion(){

        $link= new PDO("mysql:host=localhost;dbname=evaluacion", "root", "");
        $link->exec("set names utf8");
        
        return $link;
    }
    
}