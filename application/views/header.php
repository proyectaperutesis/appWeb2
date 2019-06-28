<header class="masthead mb-auto">
            <div class="inner">
                <!-- <h3 class="masthead-brand">Proyecta Perú</h3> -->
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="<?php echo base_url(); ?>">Home</a>
                    <a class="nav-link" href="proyectos">Proyectos de Ley</a>
                    <a class="nav-link" href="quienesomos">¿Quienes somos?</a>
                    <?php if($this->session->userdata('id_usuario') != null): ?>
                    <a class="nav-link" href="dashboard"><?php echo $this->session->userdata('nombre_persona'); ?></a>
                    <a class="nav-link" href="<?=site_url('C_utils/logout')?>">Cerrar sesión</a>

                    <?php else: ?>
                    <a class="nav-link" href="login">Iniciar sesión</a>
                    <?php endif; ?>
                </nav>
            </div>
        </header>