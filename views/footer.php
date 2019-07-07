<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
    <div class="flex-w p-b-90">
        <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                Nuestros Locales
            </h4>

            <!-- Direcciones de Sucursales -->
            <div>
                <?php if ($this->sucursales->oerror->codigo <> 0 ){
                    echo "<span class=''>".$this->sucursales->oerror->error."</span>";
                }else{
                ?>
                    <?php
                        foreach($this->sucursales->osucursal as $row){
                        $suc = new Sucursal();
                        $suc = $row;
                    ?>
                        <p class="s-text7 w-size27">
                            <?php echo $suc->direccion; ?>, <?php echo $suc->comuna; ?>, <?php echo $suc->provincia; ?>
                        </p>
                        <p class="s-text7 w-size27">
                            Telefono <?php echo $suc->telefono; ?>
                        </p>
                        <br>
                    <?php
                        }
                    ?>
                <?php
                }?>

                <!-- Redes Sociales -->
                <div class="flex-m p-t-30">
                    <?php if ($this->redsocial->oerror->codigo <> 0 ){
                        echo "<span class=''>".$this->redsocial->oerror->error."</span>";
                    }else{
                    ?>
                        <?php
                            foreach($this->redsocial->oredsocial as $row){
                                $rs = new RedSocial();
                                $rs = $row;
                        ?>
                            <a href="<?php echo $rs->direccion ?>" target="_blank" class="<?php echo $rs->icono ?>"></a>
                        <?php
                            }
                        ?>
                        <?php
                    }?>
                </div>
            </div>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Categories
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Men
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Women
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Dresses
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Sunglasses
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Links
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Búsqueda
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Sobre Nosotros
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Contáctanos
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Devoluciones
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Help
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Estado de tu compra
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Devoluciones
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Envíos
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Ayuda
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                Newsletter
            </h4>

            <form>
                <div class="effect1 w-size9">
                    <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
                    <span class="effect1-line"></span>
                </div>

                <div class="w-size2 p-t-20">
                    <!-- Button -->
                    <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                        Subscribe
                    </button>
                </div>

            </form>
        </div>
    </div>

    <div class="t-center p-l-15 p-r-15">
        <a href="#">
            <img class="h-size2" src="<?php echo constant('URL') ?>public/images/icons/paypal.png" alt="IMG-PAYPAL">
        </a>

        <a href="#">
            <img class="h-size2" src="<?php echo constant('URL') ?>public/images/icons/visa.png" alt="IMG-VISA">
        </a>

        <a href="#">
            <img class="h-size2" src="<?php echo constant('URL') ?>public/images/icons/mastercard.png" alt="IMG-MASTERCARD">
        </a>

        <a href="#">
            <img class="h-size2" src="<?php echo constant('URL') ?>public/images/icons/express.png" alt="IMG-EXPRESS">
        </a>

        <a href="#">
            <img class="h-size2" src="<?php echo constant('URL') ?>public/images/icons/discover.png" alt="IMG-DISCOVER">
        </a>

        <div class="t-center s-text8 p-t-20">
            Copyright ©Brayan Olguin Bernal 2019. | Template realizado por <a href="https://colorlib.com" target="_blank">Colorlib</a>
        </div>
    </div>
</footer>