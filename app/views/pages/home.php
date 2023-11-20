<?php

include_once URL_APP . "/views/pages/custom/header.php";
include_once URL_APP . "/views/pages/custom/navbar.php";

var_dump($datos);

?>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="container-style-main">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo URL_PROJECT . '/' . $datos['perfil']->fotoPerfil ?>" alt=""
                        style="padding-top: 44px;">
                    <div class="card-body">
                        <a href="<?php echo URL_PROJECT ?>/perfil/<?php echo $datos['usuario']->usuario ?>">
                            <div class="text-center nombre-perfil">
                                <?php echo $datos['perfil']->nombreCompleto ?>
                            </div>
                        </a>
                        <div class="tabla-estadisticas">
                            <a href="#">Publicaciones 0 </a><br>
                            <a href="#">Impresiones 0 </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" style="padding-left: 88px; padding-top: 47px;">
            <div class="mb-3">
                <div class="container-usuario-publicar" style="display: flex; flex-direction: row; flex-wrap: wrap; align-content: stretch;
                    justify-content: space-evenly;">
                    <a href="<?php echo URL_PROJECT ?>/perfil"><img
                            src="<?php echo URL_PROJECT . '/' . $datos['perfil']->fotoPerfil ?>" class="image-border"
                            alt="" style="width:70px;"></a>
                    <form
                        action="<?php echo URL_PROJECT ?>/publicaciones/publicar/<?php echo $datos['usuario']->idusuario ?>"
                        method="POST" enctype="multipart/form-data" class="form-publicar ml-2">
                        <textarea name="contenido" id="contenido" class="published mb-0" name="post"
                            placeholder="¿Que producto venderás hoy?" required style="width: 100%;"></textarea>
                        <div class="image-upload-file" style="display: flex;">
                            <div class="upload-photo">
                                <div class="input-file">
                                    <input type="file" name="imagen" id="imagen">
                                </div>
                            </div>
                            <button class="btn-publi">Publicar</button>
                        </div>
                    </form>
                </div>
                <?php foreach ($datos['publicaciones'] as $datosPublicacion): ?>
                    <div class="container-usuarios-publicaciones">
                        <div class="usuarios-publicaciones-top">
                            <img src="<?php echo URL_PROJECT . '/' . $datosPublicacion->fotoPerfil ?>" alt=""
                                class="image-border-publicacion">
                            <div class="informacion-usuario-publico">
                                <h6 class="mb-0"><a
                                        href="<?php echo URL_PROJECT ?>/perfil/<?php echo $datosPublicacion->usuario ?>">
                                        <?php echo ucwords
                                        ($datosPublicacion->usuario) ?>
                                    </a></h6>
                                <span>
                                    <?php echo $datosPublicacion->fechaPublicacion ?>
                                </span>
                            </div>
                        </div>
                        <div class="contenido-publicaciones-usuario">
                            <p class="mb-1">
                                <?php echo $datosPublicacion->contenidoPublicacion ?>
                            </p>
                            <img src="<?php echo URL_PROJECT . '/' . $datosPublicacion->fotoPublicacion ?>" alt=""
                                class="imagen-publicacion-usuario">
                        </div>
                    </div>
                <?php endforeach ?>

            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="container-style-main">
        </div>
    </div>
</div>
</div>


<?php

include_once URL_APP . "/views/pages/custom/footer.php";

?>