<?php

class systemVerify{



    static public function verifyLogin(){
        if (isset($_POST['email'])) {
            $table="usuario";
            $data=array(
                "email"=>$_POST['email'],
                "password"=>$_POST['password'],
            );
            $answer=ModelsfromUser::mdlLogin($table, $data);
            return $answer;
        }

       
    }


    static public function verifyRegister(){
        if (isset($_POST['document'])) {
            $table="usuario";
            $data=array(
                "document"=>$_POST['document'],
                "name"=>$_POST['name'],
                "lastname"=>$_POST['lastname'],
                "password"=>$_POST['password'],
                "email"=>$_POST['email'],
            );
            $answer=ModelsfromUser::mdlRegister($table, $data);
            return $answer;
        }

       
    }


}