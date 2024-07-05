<?php

class controlesUsers{


    static public function getList(){
        return Users::listUser("usuario");

    }
}