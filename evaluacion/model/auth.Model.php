<?php

class ModelsfromUser{



    static public function mdlRegister($table, $data){


        $statm=conexBD::conextion()->prepare("INSERT INTO $table(name, lastname, email, password, document) VALUE(:name, :lastname, :email, :password, :document)");
        
        $passwordEncrip=password_hash($data['password'], PASSWORD_DEFAULT);

        $statm->bindParam(":name", $data['name'], PDO::PARAM_STR);
        $statm->bindParam(":lastname", $data['lastname'], PDO::PARAM_STR);
        $statm->bindParam(":email", $data['email'], PDO::PARAM_STR);
        $statm->bindParam(":document", $data['document'], PDO::PARAM_STR);
        $statm->bindParam(":password", $passwordEncrip, PDO::PARAM_STR);

        if ($statm->execute()) {
            return true;
        }else{
            return conexBD::conextion()->errorInfo();
        }
        
        $statm=null;

    }


    static public function mdlLogin($table, $data){
        $statm=conexBD::conextion()->prepare("SELECT * FROM $table WHERE email = :email");
        $statm->bindParam(":email", $data['email'], PDO::PARAM_STR);
        $statm->execute();

        $user=$statm->fetch(PDO::FETCH_ASSOC);

        if ($user==false) {
            return "Usuario no encontrado";
        }else{
        $passwordValidate=password_hash($data['password'], PASSWORD_DEFAULT);
            if ($passwordValidate) {
                session_start();

                $_SESSION['fullname']=$user['name']." ".$user['lastname'];
                $_SESSION['email']=$user['email'];

                return true;
            }else{
                echo "credenciales incorrectas";
            }

        }

        return $user;
        $statm=null;
    }

}