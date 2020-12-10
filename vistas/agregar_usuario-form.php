<!-- Cuerpo del documento -->
<div class="container">
    <div class="columns is-centered is-mobile mt-5">
    <div class="column is-half"> 

        <h1 class="title has-text-centered"><?php echo ($Mensaje); ?> </h1>
        <form name="frmdatos" action="../checausr.php" method="POST">

            <div class="field">
                <label class="label">Nombre</label>
                <div class="control">
                <input class="input" type="text" id="nombre" name="agregar_nombre" placeholder="Nombre" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Correo</label>
                <div class="control">
                <input class="input" type="email" id="email" name="agregar_email" placeholder="Correo" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Usuario</label>
                <div class="control">
                <input class="input" type="text" id="usuario" name="agregar_usuario" placeholder="Usuario" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Contraseña</label>
                <div class="control">
                <input class="input" type="password" id="pass" name="agregar_pass" placeholder="Contraseña" required>
                </div>
            </div>
            
            <div class="control">
                <button id="enviar" name="enviar" class="button is-info">&nbsp;Enviar datos&nbsp;</button>
                <button onclick="window.location='../index.php';" id="cancelar" name="cancelar" class="button is-danger">&nbsp;Cancelar&nbsp;</button>
            </div>

        </form>

        
    </div>
    </div>
</div>