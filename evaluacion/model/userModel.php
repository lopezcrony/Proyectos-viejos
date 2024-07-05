<?php

class Users{


    static public function listUser($table){

        $statm=conexBD::conextion()->prepare("SELECT *FROM $table");
        $statm->execute();

        $user=$statm->fetchAll(PDO::FETCH_ASSOC);
        return $user;

    }
}