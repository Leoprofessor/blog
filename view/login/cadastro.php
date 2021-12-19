
<?php
session_start();

?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BLOG DO LÉO</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>

<body>

    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.png" class="img-fluid"
                         alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <h3 class="title has-text-grey">Cadastro de usuário</h3>

                    <?php
                    if(isset($_SESSION['status_cadastro'])):
                        ?>
                        <div class="notification is-success">

                            <p>Cadastro efetuado!</p>

                            <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>


                        </div>

                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    //unset($_SESSION['usuario_existe']);
                    ?>


                    <?php
                    if(isset($_SESSION['usuario_existe'])) :
                        ?>
                        <div class="notification is-info">
                            <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['usuario_existe']);
                    ?>
                    <form action="cadastrar.php" method="POST">



                        <!-- usuário input -->
                        <div class="form-outline mb-4">
                            <input name="usuario" type="text" class="form-control form-control-lg" placeholder="Usuário" required>
                            <label class="form-label" for="form3Example3">Usuário</label>
                        </div>

                        <!-- nível input -->
                        <div class="form-outline mb-3">
                            <select name="nivel" id="nivel" class="form-control form-control-lg" required >
                                <option value=""  >Nível</option>
                                <option value="Administrador">Administrador</option>
                                <option value="Visitante">Visitante</option>
                            </select>
                            <label class="form-label" for="form3Example4">Nível</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">

                            <input name="senha" class="form-control form-control-lg" type="password" placeholder="Senha" required>
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>



                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Cadastrar</button>


                    </form>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Copyright © 2021. All rights reserved.
            </div>
            <!-- Copyright -->


        </div>
    </section>
</body>

</html>