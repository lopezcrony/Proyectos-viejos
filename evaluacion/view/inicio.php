<?php

require_once('../controller/user.controller.php');
require_once('../model/userModel.php');
require_once('../server/senttings.php');

    $users = controlesUsers::getList();
?>


<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>


    <div class="container  vh-100 pt-5 ">
            <div class="wrapper d-flex justify-content-center align-content-center p-5">
            <div class="card col-12">
            <div class="card-title">USUARIOS</div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Identificación</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Email</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                                    foreach ($users as $value) {
                                       echo '
                                       <tr>
                                       <td>'.$value['id'].'</td>
                                       <td>'.$value['document'].'</td>
                                       <td>'.$value['name'].'</td>
                                       <td>'.$value['lastname'].'</td>
                                       <td>'.$value['email'].'</td>
                                       <td>
                                       <div class="btn-group" role="group" aria-label="Basic example">
                                       <button type="button" class="btn btn-success">Editar</button>
                                       <button type="button" class="btn btn-danger">Remover</button>
                                       <button type="button" class="btn btn-info">Ver</button>
                                     </div
                                       </td>
                                   </tr>
                                       ';
                                    }
    
                                ?>
                           

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>
</body>

</html>