<?php
session_start();
include('../Controller/verifica_login.php');


?>
<div class="container">
    <div class="pos-f-t fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="../../../index.php">BLOG</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">


                    <li class="nav-item">
                        <a class="nav-link" href="./../index.php">Inicial<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./../post.php">Página de post</a>
                    </li>
                    <?php
                    if($_SESSION['nivel'] == 'Administrador'){
                     ?>
                        <li class="nav-item">
                            <a class="nav-link" href="./../App/montador.php">Administração</a>
                        </li>

                        <?php
                    }

                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../view/login/logout.php">Sair</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>

