<?php include __DIR__ . "/inc/newsletter.php"; ?>

<?php include __DIR__ . "/inc/shop.php"; ?>

<?php

$lf = new Layout();
$sTitle = "text-[16px] md:text-[24px] block leading-[16px] md:leading-[24px]  lg:mb-[40px] text-cor1 font-romie";
$sT = "text-[12px] lg:text-[14px] text-cor1";

?>

<footer class="bg-cor3 px-4 py-[40px] lg:py[50px]">
    <div class="container mx-auto">
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-12">
            <div class="col-span-2 lg:col-span-1">
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['newsletter_email'])) {
                    $email = sanitize_email($_POST['newsletter_email']);

                    $to = 'hello@abbiacasa.com.br';
                    $subject = 'Lista Newsletter';
                    $message = "Novo cadastro na newsletter:\n\nEmail: {$email}";
                    $headers = ['Content-Type: text/plain; charset=UTF-8'];

                    if (is_email($email)) {
                        wp_mail($to, $subject, $message, $headers);
                        echo '<p class="text-green-600 mt-2">Cadastro enviado com sucesso!</p>';
                    } else {
                        echo '<p class="text-red-600 mt-2">Por favor, insira um e-mail válido.</p>';
                    }
                }
                ?>

                <h4 class="<?php echo $sTitle; ?>">Newsletter</h4>
                <form method="POST" action="" class="flex gap-2">
                    <input type="email" name="newsletter_email" required placeholder="Seu e-mail"
                        class="outline-0 bg-transparent border-b border-cor1 mb-4 w-full" />
                    <button type="submit" class="text-cor1 bg-white drop-shadow-lg rounded-[8px] px-4 py-2 mb-4 inline-block my-[25px] hover:bg-[#EE705A] hover:text-white transition-all">Enviar</button>
                </form>
                <div class="flex gap-6 mt-4">
                    <a href="https://www.instagram.com/abbiacasa/" class="<?php echo $sT; ?>" target="_blank" rel="noopener noreferrer" title="instagram">
                        <img loading="lazy" src="<?php echo $lf->getFile('/assets/images/social/instagram.svg') ?>" alt="instagram">
                    </a>
                    <a href="https://www.facebook.com/share/1Fz65kkUDi/?mibextid=wwXIfr" class="<?php echo $sT; ?>" target="_blank" rel="noopener noreferrer" title="facebook">
                        <img loading="lazy" src="<?php echo $lf->getFile('/assets/images/social/facebook.svg') ?>" alt="facebook">
                    </a>
                    <!--
                        <a href="" class="<?php echo $sT; ?>" target="_blank" rel="noopener noreferrer" title="youtube">
                            <img loading="lazy" src="<?php echo $lf->getFile('/assets/images/social/youtube.svg') ?>" alt="youtube">
                        </a>
                        <a href="" class="<?php echo $sT; ?>" target="_blank" rel="noopener noreferrer" title="tiktok">
                            <img loading="lazy" src="<?php echo $lf->getFile('/assets/images/social/tiktok.svg') ?>" alt="tiktok">
                        </a>
                        -->
                </div>
            </div>
            <div>
                <h4 class="<?php echo $sTitle; ?>">
                    Abbia Casa <br>
                    e você
                </h4>
                <p class="mt-4 <?php echo $sT; ?>">
                    <a href="https://abbiacasa.com.br/quem-somos/" class="<?php echo $sT; ?>" target="_blank" rel="noopener noreferrer" title="Saiba mais sobre nós">
                        Saiba mais sobre nós
                    </a>
                </p>
                <p class="mt-4 <?php echo $sT; ?>">
                    <a href="mailto:hello@abbiacasa.com.br " title="enviar email">
                        Trabalhe conosco
                    </a>
                </p>
                <p class="mt-4 <?php echo $sT; ?>">
                    Email: <br>
                    <a href="mailto:hello@abbiacasa.com.br " title="enviar email">
                        hello@abbiacasa.com.br
                    </a>
                </p>
            </div>
            <!--<div>
                    <h4 class="<?php echo $sTitle; ?>">
                        Conta
                    </h4>
                    <a href="<?php echo site_url() ?>/minha-conta" class="<?php echo $sT; ?> block" title="Login">
                        Login
                    </a>
                    <a href="<?php echo site_url() ?>/minha-conta" class="<?php echo $sT; ?> block" title="Cadastre-se">
                        Cadastre-se
                    </a>
                    <a href="<?php echo site_url() ?>/minha-conta" class="<?php echo $sT; ?> block" title="Minha Conta">
                        Minha Conta
                    </a>
                    <a href="<?php echo site_url() ?>/minha-conta/orders/" class="<?php echo $sT; ?> block" title="Meus Pedidos">
                        Meus Pedidos
                    </a>
                </div>-->
            <div>
                <h class="<?php echo $sTitle; ?>">
                    Termos legais <br>
                    e LGPD
                </h>
                <a href="<?php echo site_url() ?>/lgpd" class="block <?php echo $sT; ?>" title="Termos e condições">
                    Termos e condições
                </a>
                <a href="<?php echo site_url() ?>/lgpd" class="block <?php echo $sT; ?>" title="Politica de venda">
                    Política de Privacidade
                </a>
                <span class="grid grid-cols-1 gap-4 items-center justify-items-start lg:justify-items-center lg:justify-items-center lg:grid-cols-4 mt-4">
                    <img loading="lazy" class="h-10 w-auto" src="<?php echo $lf->getFile('/assets/images/payment/visa.svg') ?>" alt="visa">
                    <img loading="lazy" class="h-10 w-auto" src="<?php echo $lf->getFile('/assets/images/payment/mastercard.svg') ?>" alt="Mastercard">
                    <img loading="lazy" class="h-10 w-auto" src="<?php echo $lf->getFile('/assets/images/payment/pix.svg') ?>" alt="Pix">
                    <!-- <img loading="lazy" src="<?php echo $lf->getFile('/assets/images/payment/paypal.svg') ?>" alt="paypal"> -->
                    <!-- <img loading="lazy" src="<?php echo $lf->getFile('/assets/images/payment/stripe.svg') ?>" alt="stripe"> -->
                    <!-- <img loading="lazy" src="<?php echo $lf->getFile('/assets/images/payment/boleto.svg') ?>" alt="boleto"> -->
                </span>
            </div>
        </div>
    </div>
    <div class="border-t border-cor1 mt-8 pt-8 text-center">
        <span class="<?php echo $sT; ?>">
            Copyright <br>
            Abbia Casa 2023
        </span>
    </div>
</footer>

<?php wp_footer(); ?>

<!-- <div class="animate-ping flex justify-center items-center fixed bottom-0 left-0 bg-[#111] text-[#FFF] z-50 w-full min-h-[25px]">

</div>
<div class="flex justify-center items-center fixed bottom-0 left-0 bg-[#111] text-[#0f5] z-50 w-full min-h-[25px] text-[11px]">
    Loja em desenvolvimento as vendas estão indisponíveis no momento!
</div> -->

</body>

</html>