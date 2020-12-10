<div id="Form_Agregar" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">Agregar usuario</p>
            <button class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
            <form action="checausr.php" method="post">
                <div class="field">
                    <label class="label">Nombre</label>
                    <div class="control">
                        <input type="text" class="input" placeholder="Nombre" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Usuario</label>
                    <div class="control has-icons-left">
                        <input type="text" class="input" placeholder="Usuario" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Contraseña</label>
                    <div class="control has-icons-left">
                        <input type="password" class="input" placeholder="Contraseña" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Correo</label>
                    <div class="control has-icons-left">
                        <input type="email" class="input" placeholder="Correo" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </div>
                </div>
                <footer class="modal-card-foot">
                    <button id="Agregar_Nuevo_Usuario" class="button is-info">Agregar usuario</button>
                    <button id="Cancelar_Nuevo_Usuario" class="button is-info is-light">Cancelar</button>
                </footer>
            </form>
        </section>
        
    </div>
</div>