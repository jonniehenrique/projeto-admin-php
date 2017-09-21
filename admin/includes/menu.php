<nav class="menu-nav">
    <ul class="menu-nav-list">
        <li class="menu-nav-item">
            <a href="#" class="menu-nav-link nav-submenu"> Portfólio </a>
            <ul class="submenu-nav" hidden>
                <li class="submenu-nav-item">  
                    <a href="<?php echo urlPagina('portfolio'); ?>" class="submenu-nav-link">
                        Listar
                    </a>
                </li>
                <li class="submenu-nav-item">  
                    <a href="<?php echo urlPagina('portfolio-cadastrar'); ?>" class="submenu-nav-link">
                        Cadastrar
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-nav-item">
            <a href="#" class="menu-nav-link nav-submenu"> Posts </a>
            <ul class="submenu-nav" hidden>
                <li class="submenu-nav-item">  
                    <a href="<?php echo urlPagina('posts'); ?>" class="submenu-nav-link">
                        Listar
                    </a>
                </li>
                <li class="submenu-nav-item">  
                    <a href="<?php echo urlPagina('post-cadastrar'); ?>" class="submenu-nav-link">
                        Cadastrar
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-nav-item">
            <a href="#" class="menu-nav-link nav-submenu"> Usuários </a>
            <ul class="submenu-nav" hidden>
                <li class="submenu-nav-item">  
                    <a href="<?php echo urlPagina('usuarios'); ?>" class="submenu-nav-link">
                        Listar
                    </a>
                </li>
                <li class="submenu-nav-item">  
                    <a href="<?php echo urlPagina('usuario-cadastrar'); ?>" class="submenu-nav-link">
                        Cadastrar
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-nav-item">
            <a href="<?php echo urlPagina('configuracoes'); ?>" class="menu-nav-link"> 
                Configurações 
            </a>
        </li>
        <li class="menu-nav-item menu-nav-logout">
            <a href="<?php echo '?logout'; ?> " class="menu-nav-link nav-logout"> 
                Sair 
            </a>
        </li>
    </ul>
</nav>