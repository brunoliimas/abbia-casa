<?php /* Template Name: Home */ ?>
<?php
$l = new Layout();
$cat = new Product();
$cats = [
    [
        "title" => "Beauté",
        "link" => $l->site . "/product-category/beaute/",
        "img" => $l->getFile('/assets/images/home-category/beaute.png'),
    ],
    [
        "title" => "Casa",
        "link" => $l->site . "/product-category/casa/",
        "img" => $l->getFile('/assets/images/home-category/casa.png'),
    ],
    [
        "title" => "Acessorios",
        "link" => $l->site . "/product-category/acessorios/",
        "img" => $l->getFile('/assets/images/home-category/beaute.png'),
    ],
    [
        "title" => "Colabs",
        "link" => $l->site . "/product-category/colabs/",
        "img" => $l->getFile('/assets/images/home-category/colab.png'),
    ],
];

// show 4
$sacProd =  $cat->productsByCategorySlug('beaute');
$sacProd =  array_splice($sacProd, 0, 4);


// show 3
$decora = $cat->productsByCategorySlug('acessorios-2');
$decora =  array_splice($decora, 0, 3);


// show 4
$novidade = $cat->productsByCategorySlug('novidade');
$novidade =  array_splice($novidade, 0, 4);


?>

<?php get_header(); ?>

<section>
    <h1 class="text-center lg:leading-[80px] font-romie text-[26px] md:text-[50px] lg:text-[66px]  tracking-[3px]">
        Cuidados diáros, <br>
        interior e curiosidades
    </h1>
    <img class="w-[300px] lg:w-[380px] mx-auto mt-[55px] mb-[55px]" loading="lazy" src="<?php echo $l->getFile('/assets/logo/AbbiaCasa-04.svg'); ?>" alt="Abbia Casa">
</section>

<section class="container mx-auto text-cor1">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 px-4">
        <?php foreach ($cats as $cat) { ?>
            <div>
                <a class="text-[18px] lg:text-[24px] text-center block font-romie tracking-[3px]" href="<?php echo $cat["link"] ?>" title="<?php echo $cat["title"] ?>">
                    <?php echo $cat["title"] ?>
                </a>
                <span class="mt-[4px] mb-[16px] block w-[1px] mx-auto bg-cor1 h-[23px] "></span>
                <a href="<?php echo $cat["link"] ?>" title="<?php echo $cat["title"] ?>">
                    <img class="w-full" loading="lazy" src="<?php echo $cat["img"] ?>" alt="<?php echo $cat["title"] ?>">
                </a>
                <a class="hover:underline uppercase text-[12px] lg:text-[14px] hidden md:block md:mt-[16px] font-agrandir text-center tracking-[2px]" href="<?php echo $cat["link"] ?>" title="Descubrir">
                    Descubrir
                </a>
            </div>
        <?php } ?>
    </div>
</section>

<section class="container mx-auto relative my-[60px] ">
    <img class="w-full" loading="lazy" src="<?php echo $l->getFile('/assets/images/hero-section/novidade.png'); ?>" alt="Novidades">
    <a class="tracking-[3px] rounded-[8px] drop-shadow-lg translate-x-[-50%] translate-y-[-50%] text-center w-[114px] py-[7px] lg:w-[285px] lg:py-[15px] text-cor1 font-romie text-[12px] lg:text-[30px] absolute top-[50%] left-[50%] bg-white hover:bg-[#EE705A] hover:text-white transition-all" href="<?php echo $l->site ?>/product-category/novidade/" title="Novidades">
        Novidades
    </a>
</section>

<section class="container mx-auto px-4">

    <div class="md:hidden">
        <h2 class="font-romie lg:leading-[66px] text-[25px] md:text-[45px] lg:text-[60px] text-[#EE705A]">
            Sac du jour
        </h2>
        <p class="text-[14px] lg:leading-[18px] font-agrandir md:text-[18px] lg:text-[14px] text-cor1 py-[40px]">
            Um conjunto de produtos exclusivos que
            atende aos ambientes da casa, do trabalho,
            da beleza e do lifestyle. <br>
            Mas com alguns elementos surpresa!
        </p>
        <p class="md:hidden border-t-2 border-cor6 text-[14px] md:text-[18px] lg:text-[24px] text-cor1 py-[40px]">
            Sac du jour é um artigo com o DNA absoluto da Abbia
            Casa, que chegou de maneira despretensiosa mas com o
            charme que procurávamos para dar o toque final.
        </p>
        <a class="hidden md:inline-block text-cor1 bg-white drop-shadow-lg rounded-[8px] px-8 py-2 mb-4  transition-all hover:bg-[#EE705A] hover:text-white" href="<?php echo site_url() ?>/quem-somos/" title="Conhece">
            Conhece
        </a>
    </div>

    <div class=" grid grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="hidden md:block">
            <h2 class="font-romie lg:leading-[66px] text-[25px] md:text-[45px] lg:text-[60px] text-[#EE705A]">
                Sac du jour
            </h2>
            <p class="text-[14px]  font-agrandir md:text-[18px] lg:text-[24px] text-cor1 py-[40px]">
                Um conjunto de produtos edxclusivo que
                atende aos ambientes da casa, do trabalho,
                da beleza e do lifestyle. <br>
                Mas com alguns elementos surpresa! 
            </p>
            <p class="md:hidden border-t-2 border-cor6 text-[14px] md:text-[18px] lg:text-[24px] text-cor1 py-[40px]">
                Sac du jour é um artigo com o DNA absoluto da Abbia
                Casa, que chegou de maneira despretensiosa mas com o
                charme que procurávamos para dar o toque final.
            </p>
            <a class="hidden md:inline-block text-cor1 bg-white drop-shadow-lg rounded-[8px] px-8 py-2 mb-4 hover:bg-[#EE705A] hover:text-white transition-all" href="<?php echo site_url() ?>/quem-somos/" title="Conhece">
                Conhece
            </a>
        </div>

        <?php foreach ($sacProd as $index => $prod) { ?>
            <div class="break-inside-avoid-column text-cor1 relative <?php echo $index == 1 || $index == 3 ? 'lg:mt-[-300px]' : '' ?>">
                <?php if ($prod["new"]) { ?>
                    <span class="drop-shadow-lg translate-y-[-50%] md:text-[20px] justify-center items-center w-[40px] h-[40px] md:w-[86px] md:h-[86px] flex rounded-full bg-cor3 absolute right-[24px] top-0 font-face">Novo</span>
                <?php } ?>
                <a href="<?php echo $prod["linkSingle"] ?>" title="<?php echo $prod["title"]; ?>">
                    <img class="w-full h-[180px] md:h-[380px] lg:h-[464px] object-cover drop-shadow-lg" loading="lazy" src="<?php echo $prod["image"]; ?>" alt="<?php echo $prod["title"]; ?>">
                </a>
                <div class="flex justify-between items-center pt-4">
                    <span class="font-romie text-[16px] md:text-[24px]">
                        <?php echo $prod["title"]  ?> 
                    </span>
                    <?php echo $prod["whishList"]; ?>
                </div>
                <span class="block text-[12px] md:text-[18px]">
                    R$ <?php echo $prod["price"]; ?>
                </span>
                <a class="text-[18px] font-face text-cor1 bg-white drop-shadow-lg rounded-[8px] px-4 py-2 mb-4 inline-block my-[25px] hover:bg-[#EE705A] hover:text-white transition-all" href="<?php echo $prod["addToCart"]; ?>" title="Adicionnar">
                    Adicionnar
                </a>
            </div>
            <?php if ($index == 0) { ?>
                <div class="hidden md:block">
                    <p class="border-t-2 border-cor6 text-[14px] md:text-[18px] lg:text-[24px] text-cor1 py-[40px]">
                        Sac du jour é um artigo com o DNA absoluto da Abbia
                        Casa, que chegou de maneira despretensiosa mas com o
                        charme que procurávamos para dar o toque final.
                    </p>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</section>

<section>
    <div class="container mx-auto px-4 border-t-2 border-cor6 pt-[40px] mt-[40px]">
        <h3 class="text-[25px] md:text-[45px] lg:text-[40px] text-[#EE705A] font-romie mb-4">
            Decora a sua casa
        </h3>
        <div class="overflow-x-hidden overflow-x-scroll lg:overflow-x-hidden  w-[100vw] lg:w-full gap-4">
            <div class="flex w-[200vw] lg:w-full gap-4">

                <?php foreach ($decora as $index => $prod) { ?>
                    <div class="w-[40vw] lg:w-[30.3vw] break-inside-avoid-column text-cor1 relative">
                        <?php if ($prod["new"]) { ?>
                            <span class="drop-shadow-lg translate-y-[-50%] md:text-[20px] justify-center items-center w-[40px] h-[40px] md:w-[86px] md:h-[86px] flex rounded-full bg-cor3 absolute right-[24px] top-0 font-face">Novo</span>
                        <?php } ?>
                        <a href="<?php echo $prod["linkSingle"]; ?>" title="<?php echo $prod["title"]; ?>">
                            <img class="drop-shadow-lg h-[160px] md:h-[336px] lg:h-[296px] object-cover w-full" loading="lazy" src="<?php echo $prod["image"]; ?>" alt="<?php echo $prod["title"]; ?>">
                        </a>
                        <div class="flex justify-between items-center pt-4">
                            <span class="font-romie text-[16px] md:text-[24px]">
                                <?php echo $prod["title"]; ?>
                            </span>
                            <?php echo $prod["whishList"]; ?>
                        </div>
                        <span class="block text-[12px] md:text-[18px]">
                            R$ <?php echo $prod["price"]; ?>
                        </span>
                        <a class="text-[18px] font-face text-cor1 bg-white drop-shadow-lg rounded-[8px] px-4 py-2 mb-8 inline-block my-[25px] hover:bg-[#EE705A] hover:text-white transition-all" href="<?php echo $prod["addToCart"]; ?>" title="Adicionnar">
                            Adicionnar
                        </a>
                        <p class="hidden lg:block font-face">
                            <?php echo $prod["description"]; ?>
                        </p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container mx-auto px-4 border-t-2 border-cor6 pt-[40px] mt-[40px]">
        <h2 class="text-[25px] md:text-[45px] lg:text-[40px] text-[#EE705A] font-romie mb-4">
            Novidades 
        </h2>
        <div class="overflow-x-hidden overflow-x-scroll lg:overflow-x-hidden  w-[100vw] lg:w-full  gap-4">
            <div class="flex w-[200vw] lg:w-full gap-4">

                <?php foreach ($novidade as $index => $prod) { ?>

                    <div class="w-[40vw] lg:w-[22.5vw] break-inside-avoid-column text-cor1 relative">
                        <?php if ($prod["new"]) { ?>
                            <span class="hidden drop-shadow-lg translate-y-[-50%] md:text-[20px] justify-center items-center w-[40px] h-[40px] md:w-[86px] md:h-[86px] flex rounded-full bg-cor3 absolute right-[24px] top-0 font-face">Novo</span>
                        <?php } ?>
                        <a href="<?php echo $prod["linkSingle"]; ?>" title="<?php echo $prod["title"]; ?>">
                            <img class="drop-shadow-lg h-[160px] md:h-[336px] lg:h-[296px] object-cover w-full" loading="lazy" src="<?php echo $prod["image"]; ?>" alt="<?php echo $prod["title"]; ?>">
                        </a>
                        <div class="flex justify-between items-center pt-4">
                            <span class="font-romie text-[16px]  md:text-[24px]">
                                <?php echo $prod["title"]; ?>
                            </span>
                            <?php echo $prod["whishList"]; ?>
                        </div>
                        <span class="block text-[18px]">
                            R$ <?php echo $prod["price"]; ?>
                        </span>
                        <a class="text-[18px] text-cor1 font-face bg-white drop-shadow-lg rounded-[8px] px-4 py-2 mb-4 inline-block my-[25px] hover:bg-[#EE705A] hover:text-white transition-all" href="<?php echo $prod["addToCart"]; ?>" title="Adicionnar">
                            Adicionnar
                        </a>
                        
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<section class="container mx-auto px-4 mt-[40px] pt-[40px] border-t-2 border-cor1">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div>
                <h3 class="text-[#EE705A] font-romie text-[60px] mb-4 lg:leading-[60px] tracking-[3px]">
                    Art <br>
                    de vivre
                </h3>
                <h2 class="text-[#EE705A] lg:leading-[29px] font-romie text-[24px] mb-4 border-t-2 border-cor6 pt-4 tracking-[2px]">
                    Abbia Casa e você
                </h2>
                <p class="text-cor1 font-face">
                    A Abbia Casa traz consigo o conceito de como a beleza,
                    harmonia e equilíbrio influenciam no seu bem estar.
                    Assim apresentamos novas maneiras de fazer as coisas
                    antigas, usamos como base o conhecimento e a sabedoria
                    em nossas raízes e fontes ancestrais.
                </p>
            </div>
            <img class="w-full mb-8" loading="lazy" src="<?php echo $l->getFile('/assets/images/home-article/art-3.png'); ?>" alt="img">
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div>
                <h2 class="text-[#EE705A] font-romie text-[24px] mb-4 border-t-2 border-cor6 pt-4 tracking-[2px]">
                    Harmonia e fluidez
                </h2>
                <p class="text-cor1 font-face">
                    Todos os produtos recebem um estudo delicado e cuidadoso,
                    esse savoir faire é o alicerce da Curadoria Abbia Casa.
                </p>
                <p class="text-cor1 font-face">
                    Tudo pensado para atrair a fluidez benéfica da Natureza.
                </p>
                <img class="w-[120px] mx-auto mt-4" loading="lazy" src="<?php echo $l->getFile('/assets/logo/AbbiaCasa-01.svg'); ?>" alt="Abbia Casa">
            </div>
            <img class="w-full mb-8" loading="lazy" src="<?php echo $l->getFile('/assets/images/home-article/art-1.png'); ?>" alt="img">
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <img class="w-full mb-8" loading="lazy" src="<?php echo $l->getFile('/assets/images/home-article/art-2.png'); ?>" alt="img">
            <div>
                <h2 class="text-[#EE705A] font-romie text-[24px] mb-4 border-t-2 border-cor6 pt-4 tracking-[2px]">
                    Mélange
                </h2>
                <p class="text-cor1 font-face">
                    Misturinhas, é como toda pessoa conectada ao lar faz
                    com as peças que mais gosta. Adaptar um estilo a outro e
                    trazer mais humor, charme e toque pessoal aos ambientes é
                    sempre um prazer a ser apreciado.
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <img class="w-full mb-8" loading="lazy" src="<?php echo $l->getFile('/assets/images/home-article/art-4.png'); ?>" alt="img">
            <div class="relative">
                <h2 class="text-[#EE705A] font-romie text-[24px] mb-4 border-t-2 border-cor6 pt-4 tracking-[2px]">
                    Memória afetivas
                </h2>
                <p class="text-cor1 font-face">
                    Nada como chegar em casa e se sentir acolhido.
                    Sensações táteis, olfativas, visuais são de fato os
                    que impulsionam nossa paixão pelo design e bem estar.
                </p>
                <a class="absolute bottom-4 left-0 text-[18px] text-cor1 bg-white drop-shadow-lg rounded-[8px] px-4 py-2 mb-4 inline-block my-[25px] hover:bg-[#EE705A] hover:text-white transition-all" href="" title="Conheça">
                    Conheça
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>