<?php

include_once URL_APP . "/views/pages/custom/header.php";
include_once URL_APP . "/views/pages/custom/navbar.php";

?>

<div style="    display: flex;
    align-items: center;
    justify-content: center;
    height: 70vh;
    margin: 0;">
        <!-- <div class="card" style="width: 18rem;">
                    <img src="<?php echo URL_PROJECT ?>/<?php echo $datos['usuario']->fotoPerfil ?>" alt="" style="padding-top: 44px;">
                    <?php if ($datos['usuario']->idusuario == $_SESSION['logueado']): ?>
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
                        <h3><?php echo ucwords($datos['usuario']->usuario) ?></h3>
                       <div class="text-center nombre-perfil"> <?php echo $datos['usuario']->nombreCompleto ?></div>
                    </div>
                </div> -->
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo URL_PROJECT ?>/<?php echo $datos['usuario']->fotoPerfil ?>" class="img-fluid rounded-start" alt="...">
                    <?php if ($datos['usuario']->idusuario == $_SESSION['logueado']): ?>
                        <form action="<?php echo URL_PROJECT ?>/perfil/cambiarImagen" method="POST"  enctype="multipart/form-data">
                        <i class="fas fa-camera"></i>
                        <h7>Cambiar imagen</h7>
                        <div class="input-file">
                            <input type="hidden" name="id_user" value="<?php echo $_SESSION['logueado'] ?>">
                            <input type="file" name="imagen" id="imagen" style="max-width: 98%;" placeholder="Cambiar imagen">
                        </div>
                        <div class="editar-perfil">
                            <button class="btn-change-image btn btn-success">Editar</button>
                         </div>
                        </form>
                    <?php endif ?>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $datos['usuario']->nombreCompleto ?></h5>
                        <h9 class="card-title">Dirección</h9>
                        <p class="card-text"><?php echo $datos['usuario']->direccion ?></p>
                        <h9 class="card-title">Teléfono</h9>
                        <p class="card-text"><?php echo $datos['usuario']->telefono ?></p>
                        <p class="card-text"><small class="text-body-secondary"><?php echo ucwords($datos['usuario']->usuario) ?></small></p>
                    </div>
                </div>
            </div>
        </div>
    <!-- <div class="col-md-6" style="padding-left: 88px; padding-top: 47px;">
            <div class="mb-3">
            <?php if ($datos['usuario']->idusuario == $_SESSION['logueado']): ?>
                <div class="container-usuario-publicar" style="display: flex; flex-direction: row; flex-wrap: wrap; align-content: stretch;
                    justify-content: space-evenly;">
                    <a href="<?php echo URL_PROJECT ?>/perfil/<?php echo $datos['usuario']->usuario ?>"><img
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
        </div> -->
</div>

<?php

include_once URL_APP . "/views/pages/custom/footer.php";

?>
