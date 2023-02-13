<?php get_header(); ?>

<?php
    $page = new Page();
    $l = new Layout();
?>

<section>
    <div class="container mx-auto">
        <h1 class=" font-romie block text-center text-cor1 text-[55px] md:text-[66px] mb-[40]">
            Art de vivre <br>
            Abbia Casa
        </h1>
        <div class="custom-post">
            <div class="grid grid-cols-1 md:grid-cols-2  content-center gap-4 mt-[40px] pt-[40px]">
                <div>
                    <img class="w-full" src="<?php echo  $l->getFile('/assets/images/curadoria/cura-1.png') ?>" alt="art" loading="lazy">
                </div>
                <div class="lg:px-[120px]">
                    <h2 class="text-[#EE705A]">Abbia Casa e você</h2>
                    <p>
                        A Abbia Casa traz consigo o conceito de como a beleza,
                        harmonia e equilíbrio influenciam no seu bem estar.
                        Assim apresentamos novas maneiras de fazer as coisas
                        antigas, usamos como base o conhecimento e a sabedoria
                        em nossas raízes e fontes ancestrais.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2  content-center gap-4 md:border-t-[1px] border-cor1 mt-[40px] pt-[40px]">
                <div class="lg:px-[120px]">
                    <h2>Mélange</h2>
                    <p>
                        Misturinhas, é como toda pessoa conectada ao lar
                        faz com as peças que mais gosta. Adaptar um estilo
                        a outro e trazer mais humor, charme e toque pessoal
                        aos ambientes é sempre um prazer a ser apreciado.
                    </p>
                </div>
                <div>
                    <img class="w-full" src="<?php echo  $l->getFile('/assets/images/curadoria/cura-2.png') ?>" alt="art" loading="lazy">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2  content-center gap-4 md:border-t-[1px] border-cor1 mt-[40px] pt-[40px]">
                <div>
                    <img class="w-full" src="<?php echo  $l->getFile('/assets/images/curadoria/cura-3.png') ?>" alt="art" loading="lazy">
                </div>
                <div class="lg:px-[120px]">
                    <h2>
                        Memória <br>
                        afetivas
                    </h2>
                    <p>
                        Nada como chegar em casa e se sentir acolhido.
                        Sensações táteis, olfativas, visuais são de fato
                        os que impulsionam nossa paixão pelo design e bem estar.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2  content-center gap-4 md:border-t-[1px] border-cor1 mt-[40px] pt-[40px]">
                <div class="lg:px-[120px]">
                    <h2>
                        Harmonia <br>
                        e fluidez
                    </h2>
                    <p>
                        Todos os produtos recebem um estudo delicado e
                        cuidadoso, esse savoir faire é o alicerce
                        da Curadoria Abbia Casa.
                    </p>
                    <p>
                        Tudo pensado para atrair a fluidez benéfica da Natureza.
                    </p>
                </div>
                <div>
                    <img class="w-full" src="<?php echo  $l->getFile('/assets/images/curadoria/cura-4.png') ?>" alt="art" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>