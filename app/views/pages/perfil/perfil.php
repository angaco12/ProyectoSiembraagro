<?php

include_once URL_APP . "/views/pages/custom/header.php";
include_once URL_APP . "/views/pages/custom/navbar.php";

?>

    <div class="row">
        <div class="col-md-3">
            <div class="container-style-main">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo URL_PROJECT . '/' . $datos['perfil']->fotoPerfil ?>" alt="" style="padding-top: 44px;">
                    <?php if ( $datos['usuario']->idusuario == $_SESSION['logueado']) : ?>
                        <form action="<?php echo URL_PROJECT ?>/perfil/cambiarImagen" method="POST"  enctype="multipart/form-data">
                        <i class="fas fa-camera"></i>
                        <div class="input-file">
                            <input type="hidden" name="id_user" value="<?php echo $_SESSION['logueado'] ?>">
                            <input type="file" name="imagen" id="imagen">
                        </div>
                        <div class="editar-perfil">
                            <button class="btn-change-image">Editar</button>
                         </div>
                        </form>
                    <?php endif ?>
                    <div class="card-body">
                       <div class="text-center nombre-perfil"> <?php echo $datos['perfil']->nombreCompleto ?></div>
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
            <?php if ( $datos['usuario']->idusuario == $_SESSION['logueado']) : ?>
                <div class="container-usuario-publicar" style="display: flex; flex-direction: row; flex-wrap: wrap; align-content: stretch;
                    justify-content: space-evenly;">
                    <a href="<?php echo URL_PROJECT ?>/perfil"><img
                            src="<?php echo URL_PROJECT . '/' . $datos['perfil']->fotoPerfil ?>" class="image-border"
                            alt="" style="width:70px;"></a>
                    <form action="" class="form-publicar ml-2">
                        <textarea name="" id="" class="published mb-0" name="post"
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
                <?php endif ?>
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