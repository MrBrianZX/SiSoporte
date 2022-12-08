<div class="header">
    <!-- Elementos del contenedor -->
    <div class="navbar-header col-md-12">
        <div class="navbar-header navbar-header-min col-md-2">
            <h1 class="logo">
                <a href="http://www.uabc.mx/" target="_blank" rel="noopener">
                    <img height="125" alt="Escudo univesitario UABC" data-src="../media/images/uabcLogo.png" class=" ls-is-cached lazyloaded" src="../media/images/uabcLogo.png">
                    <noscript>
                        <img width="125" src="../media/images/uabcLogo.png" alt="Escudo univesitario UABC">
                    </noscript>
                </a>
            </h1>
        </div>
        <h1 class="text-center text-white" style="font-weight: 500; font-family: 'Proxima Nova';"> Universidad Autónoma de Baja California</h1>
        <h2 class="text-center text-white" style="font-weight: 500; font-family: 'Proxima Nova';"> Sistema Integral de Soporte Tecnico</h2>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <!--<li class="nav-item"><a class="nav-link active" aria-current="page" href="../main/reportarFalla.php">Reportar Fallo</a></li>-->

                    <?php if(isset($_SESSION['USER'])){ ?>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../Equipos/">Equipos</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../Propietarios/">Propietarios</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../Mantenimientos/">Mantenimientos</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../Soporte/">Soporte</a></li>
                    <!--<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tareas</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="../Tareas/">Tareas</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Añadir tareas</a>
                            </li>
                            <?php if(isset($_SESSION['LVL']))if($_SESSION['LVL'] == 2){ ?>
                            <li>
                                <a class="dropdown-item" href="#">Asignar Tarea a Usuario</a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['NAME']; ?></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <!--<li>
                                <a class="dropdown-item" href="#">Perfil</a>
                            </li>-->
                            <li>
                                <a class="dropdown-item" href="../main/passchange.php">Cambiar Contraseña</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="../php/logout.php">Cerrar Sesión</a>
                            </li>
                        </ul>
                    </li> 
                    <?php } else {?> 
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../main/login.php">Iniciar Sesión</a>
                    </li> 
                    <?php }?>
                </ul>
            </div>
        </div>
    </nav>
</div>
<script src="../js/bootstrap.bundle.min.js"></script>