<?php
    include("acciones/agregar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("meta/head.php") ?>
</head>
<body>
    <?php include("vistas/hero.php") ?>
    <?php include("acciones/validar.php") ?>
    
    <section class="section">
        <div class="colums is-centered mt-5">
            <div class="column">
                <h1 class="title has-text-centered">Control de usuario</h1>  
                <?php
                    if(Validar_Login() == 1){
                ?>
                <div class='level'>
                <div class='level-left'></div>
                <div class='level-right'><p class='level-item'><a id='Agregar' class='button is-success'>Agregar usuario</a></p></div>
            </div>
            
            <table class='table is-fullwidth'>
                <thead>
                    <th><strong><abbr title='Id'>#</abbr></strong></th>
                    <th><strong>Nombre</strong></th>
                    <th><strong>Correo</strong></th>
                    <th><strong>Usuario</strong></th>
                    <th><strong>Acciones</strong></th>
                </thead>
                <tbody>                    
                <?php
                    include("acciones/mostrar-tabla.php");
                ?>
                </tbody>
            </table>
            <?php
                }else{
            ?>
            <h2 class='subtitle'>El usuario no existe</h2>
            <button id='Regresar' class='button is-info'>Regresar</button>
            <?php
                }
            ?>
        </div>
        <?php include("acciones/modal-form.php") ?>
    </section>

    <?php include("vistas/footer.php") ?>
</body>
</html>  