<!-- Header -->
<header class="header1">
    <!-- Header desktop -->
        <div class="topbar visible-false">
            <?php if ($this->redsocial->oerror->codigo <> 0 ){
                echo "<span class='topbar-social text-left'>".$this->redsocial->oerror->error."</span>";
            }else{
            ?>
                <div class="topbar-social">
                    <?php 
                        foreach($this->redsocial->oredsocial as $row){
                            $rs = new RedSocial();
                            $rs = $row;
                    ?>
                            <a href="<?php echo $rs->direccion ?>" target="_blank" class="<?php echo $rs->icono ?>"></a>
                    <?php
                        }
                    ?>
                </div>
            <?php
            }?>
            
            
            <span class="topbar-child1">Envios gratis desde $35.000
            </span>

            <div class="topbar-child2">
                <span class="topbar-email">
                    animetro.tienda@gmail.com
                </span>

                <!-- Header Icon -->
                <div style="margin-left:10px" class="topbar-child3">
                    <a href="#" class="header-wrapicon1 dis-block">
                        <img src="<?php echo constant('URL') ?>public/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                    </a>
                </div>

                <!--<div class="topbar-language rs1-select2">
                    <select class="selection-1" name="time">
                        <option>USD</option>
                        <option>EUR</option>
                    </select>
                </div>-->
            </div>
        </div>

        <div class="wrap_header">
            <a href="main" class="logo">
                <img src="<?php echo constant('URL') ?>public/images/icons/logo.jpg" alt="IMG-LOGO">
            </a>

            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <li>
                            <a href="/tumanga/main">Inicio</a>
                        </li>
                        <li>
                            <a href="/tumanga/productos">Productos</a>
                        </li>
                        <li>
                            <a href="/tumanga/contacto">Contacto</a>
                        </li>
                        <li>
                            <a href="/tumanga/admin">Administracion</a>
                        </li>
                        <li>
                            <a>Nuevo</a>
                            <ul class="sub_menu">
                                <li><a href="/tumanga/nuevo">Nuevo 2</a></li>
                                <li><a href="/tumanga/nuevo">Nuevo 3</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>            
        </div>
    </div>
                            
    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
        <!-- Logo moblie -->
        <a href="index.html" class="logo-mobile">
            <img src="<?php echo constant('URL') ?>public/images/icons/logo.jpg" alt="IMG-LOGO">
        </a>

        <!-- Button show menu -->
        <div class="btn-show-menu">
            

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu" >
        <nav class="side-menu">
            <ul class="main-menu">
                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                    <span class="topbar-child1">
                        Free shipping for standard order over $100
                    </span>
                </li>

                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                    <div class="topbar-child2-mobile">
                        <span class="topbar-email">
                            animetro.tienda@gmail.com
                        </span>

                        <!-- Header Icon mobile -->
                        <div style="margin-left:10px" class="header-icons-mobile">
                            <a href="#" class="header-wrapicon1 dis-block">
                                <img src="<?php echo constant('URL') ?>public/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                            </a>
                        </div>
                    </div>
                </li>

                <li class="item-topbar-mobile p-l-10">
                    <div class="topbar-social-mobile">
                        <?php
                            foreach($this->redsocial as $row){
                                $rs = new RedSocial();
                                $rs = $row;
                        ?>
                                <a href="<?php echo $rs->direccion ?>" target="_blank" class="<?php echo $rs->icono ?>"></a>
                        <?php
                            }
                        ?>
                    </div>
                </li>

                <li class="item-menu-mobile">
                    <a href="/tumanga/main">Inicio</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="/tumanga/contacto">Contacto</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="/tumanga/admin">Administracion</a>
                </li>
                <li class="item-menu-mobile">
                    <a>Nuevo</a>
                    <ul class="sub-menu">
                        <li><a href="/tumanga/nuevo">Nuevo 2</a></li>
                        <li><a href="/tumanga/nuevo">Nuevo 3</a></li>
                    </ul>
                    <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                </li>
            </ul>
        </nav>
    </div>
</header>

<script>
    if(document.documentElement.clientWidth <= 766){
        $(".topbar").addClass("visible-false");
    }else{
        $(".topbar").removeClass("visible-false");
    };

    window.addEventListener('resize', function(event){
        if(document.documentElement.clientWidth <= 766){
            $(".topbar").addClass("visible-false");
        }else{
            $(".topbar").removeClass("visible-false");
        };
    });
</script>

