<?php
    
    $lf = new Layout();
    $sTitle = "text-[16px] md:text-[24px] block leading-[16px] md:leading-[24px] mb-[15px] lg:mb-20 text-cor1 font-romie";
    $sT = "text-[12px] lg:text-[14px] text-cor1";    

?>
    <footer class="bg-cor3 px-4 py-[40px] lg:py[50px]">
        <div class="container mx-auto">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                <div>
                    <h4 class="<?php echo $sTitle; ?>">
                        Newsletter
                    </h4>
                    <form action="">
                        <input type="email" require class="bg-transparent border-b border-cor1 mb-4">
                        <button type="submit">Enviar</button>
                    </form>
                    <div class="flex gap-6 mt-4">
                        <a href="" class="<?php echo $sT; ?>" target="_blank" rel="noopener noreferrer" title="instagram">
                            <img loading="lazy" src="<?php echo $lf->getFile('/assets/images/social/instagram.svg') ?>" alt="instagram">
                        </a>
                        <a href="" class="<?php echo $sT; ?>" target="_blank" rel="noopener noreferrer" title="facebook">
                            <img loading="lazy" src="<?php echo $lf->getFile('/assets/images/social/facebook.svg') ?>" alt="facebook">
                        </a>
                        <a href="" class="<?php echo $sT; ?>" target="_blank" rel="noopener noreferrer" title="youtube">
                            <img loading="lazy" src="<?php echo $lf->getFile('/assets/images/social/youtube.svg') ?>" alt="youtube">
                        </a>
                        <a href="" class="<?php echo $sT; ?>" target="_blank" rel="noopener noreferrer" title="tiktok">
                            <img loading="lazy" src="<?php echo $lf->getFile('/assets/images/social/tiktok.svg') ?>" alt="tiktok">
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="<?php echo $sTitle; ?>">
                        Abbia Casa <br>
                        e você
                    </h4>
                    <p class="<?php echo $sT; ?>">
                        Saiba mais sobre nós
                    </p>
                    <p class="<?php echo $sT; ?>">
                        Email:
                        <a href="mailto:info@abbiacasa.com" title="enviar email">
                            info@abbiacasa.com
                        </a>
                    </p>
                </div>
                <div>
                    <h4 class="<?php echo $sTitle; ?>">
                        Conta
                    </h4>
                    <a href="" class="<?php echo $sT; ?> block" title="Login">
                        Login
                    </a>
                    <a href="" class="<?php echo $sT; ?> block" title="Cadastre-se">
                        Cadastre-se
                    </a>
                    <a href="" class="<?php echo $sT; ?> block" title="Minha Conta">
                        Minha Conta
                    </a>
                    <a href="" class="<?php echo $sT; ?> block" title="Meus Pedidos">
                        Meus Pedidos
                    </a>
                </div>
                <div>
                    <h class="<?php echo $sTitle; ?>">
                        Termos legais <br>
                        e LGPD
                    </h>
                    <a href="" class="<?php echo $sT; ?>" title="Termos e condições">
                        Termos e condições
                    </a>
                    <a href="" class="<?php echo $sT; ?>" title="Politica de venda">
                        Politica de venda
                    </a>
                    <span class="grid grid-cols-2 lg:grid-cols-4 mt-4">
                        <img loading="lazy" src="<?php echo $lf->getFile('/assets/images/payment/visa.svg') ?>" alt="visa">
                        <img loading="lazy" src="<?php echo $lf->getFile('/assets/images/payment/paypal.svg') ?>" alt="paypal">
                        <img loading="lazy" src="<?php echo $lf->getFile('/assets/images/payment/stripe.svg') ?>" alt="stripe">
                        <img loading="lazy" src="<?php echo $lf->getFile('/assets/images/payment/boleto.svg') ?>" alt="boleto">
                    </span>
                </div>
            </div>
        </div>
        <div class="border-t border-cor1 mt-8 pt-8 text-center">
            <span class="<?php echo $sT; ?>">
                Copyright <br>
                Abbia Casa 2022
            </span>
        </div>
    </footer>

    <?php wp_footer(); ?>
    
</body>

</html>