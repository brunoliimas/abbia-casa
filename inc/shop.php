<?php
    
    $lf = new Layout();
    $sBox = "text-center text-cor1 ";
    $sImg = "block mx-auto my-[26px]";
    $sTitle = "text-[14px] md:text-[18px] lg:text-[24px] font-romie";
    $sText = "text-[12px] md:text-[14px] lg:px-[15%]";

?>
<section class="container mx-auto py-[36px]  md:pb-[94px] border-t border-cor1 mt-[30px]">
    <div  class="grid grid-cols-2 md:grid-cols-3 gap-8 px-4">
        <div class="<?php echo $sBox; ?>">
            <span class="<?php echo $sTitle; ?>">
                Voce é nossa <br>
                Prioridade
            </span>
            <img class="<?php echo $sImg;?>" src="<?php echo $lf->getFile('/assets/images/shop/travel.svg'); ?>" loading="lazy" alt="travel">
            <p class="<?php echo $sText; ?>">
                Suas escolhas assim como sua satisfação são o que chamamos
                de sucesso, por isso nossa entrega é rápida e pontual.
            </p>
        </div>
        <div class="<?php echo $sBox; ?>">
            <span class="<?php echo $sTitle; ?>">
                Pagamento <br>
                seguro
            </span>
            <img class="<?php echo $sImg;?>" src="<?php echo $lf->getFile('/assets/images/shop/security.svg'); ?>" loading="lazy" alt="security">
            <p class="<?php echo $sText; ?>">
                Nosso site é blindado, isso faz com que seu pagamento
                assim como seus dados sejam totalmente protegidos.
            </p>
        </div>
        <div class="<?php echo $sBox; ?>">
            <span class="<?php echo $sTitle; ?>">
                Devoluções e Trocas <br>
                descomplicadas
            </span>
            <img class="<?php echo $sImg;?>" src="<?php echo $lf->getFile('/assets/images/shop/loop.svg'); ?>" loading="lazy" alt="loop">
            <p class="<?php echo $sText; ?>">
                Opa… algo não sai como você desejava?Não se preocupe,
                estamos aqui para resolver tudo de maneira bem rápida e eficaz!
            </p>
        </div>
    </div>
</section>