<!-- Cuerpo del documento -->
<div class="container">
    <div class="columns is-centered is-mobile mt-5">
    <div class="column is-half"> 

        <h1 class="title has-text-centered">Ingresar al sistema</h1>
        <form name="frmdatos" action="checausr.php" method="POST">

            <div class="field">
                <label class="label">Usuario</label>
                <div class="control">
                <input class="input" type="text" id="nombre" name="nombre" placeholder="Admin" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Correo</label>
                <div class="control">
                <input class="input" type="email" id="email" name="email" placeholder="admin@mail.com" required>
                </div>
            </div>
            
            <div class="control">
                <button id="enviar" name="enviar" class="button is-success">&nbsp;Enviar datos&nbsp;</button>
            </div>

        </form>
        
    </div>
    </div>
</div>