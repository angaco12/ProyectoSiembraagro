<?php

include_once URL_APP . "/views/pages/custom/header.php";
include_once URL_APP . "/views/pages/custom/navbar.php";

    ?>

<div>
    <?php foreach ($datos['usuarios'] as $usuariosRegistrados): ?>

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo URL_PROJECT . '/' . $usuariosRegistrados->fotoPerfil ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $usuariosRegistrados->usuario ?></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary"><?php echo $usuariosRegistrados->nombreCompleto ?></small></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="card mb-3">
                        <img src="<?php echo URL_PROJECT . '/' . $usuariosRegistrados->fotoPerfil ?>" alt=""
                            class="image-border-publicacion">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $usuariosRegistrados->nombreCompleto ?></h5>
                            <p class="card-text">
                            <h6 class="mb-0"><a
                                    href="<?php echo URL_PROJECT ?>/perfil/<?php echo $usuariosRegistrados->usuario ?>">
                                    <?php echo ucwords
                                    ($usuariosRegistrados->usuario) ?>

                                </a></h6>
                            <p class="mb-1">
                                <?php echo $usuariosRegistrados->contenidoPublicacion ?>
                            </p>
                            </p>
                            <p class="card-text"><small class="text-body-secondary">
                                    <?php echo $usuariosRegistrados->fechaPublicacion ?>
                                </small></p>
                        </div>
                    </div> -->
    <?php endforeach ?>

</div>
<?php

include_once URL_APP . "/views/pages/custom/footer.php";

?>