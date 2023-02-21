<?php get_header(); ?>

<?php

while (have_posts()) :
    the_post();
    $post = get_post();
    $slug = $post->post_name;
endwhile;
wp_reset_query();

$l = new Layout();
$prod = new Product();

$list = $prod->productsByCategorySlug($slug);
$category = get_term_by('slug', $slug, 'product_cat');

$novidade = $prod->productsByCategorySlug('novidade');
$novidade =  array_splice($novidade, 0, 4);


?>

<div>
    <div>
        <h1 class="uppercase font-romie block text-center text-cor1 text-[55px] md:text-[66px] mb-[40]">
            <?php echo $category->name ?>
        </h1>
        <div class="container mx-auto hidden">
            <a href="" title="Acessórios"> Acessórios /</a>
            <a href="" title="Vaso"> Vaso </a>
        </div>
        <div class="container mx-auto px-4 border-t-2 border-cor6 pt-[40px] mt-[40px]">
            <div class="list-category">
                <div style="grid-area: AA">
                    <img class="w-[50%] " src="<?php echo $l->getFile('/assets/logo/AbbiaCasa-01.svg'); ?>" loading="lazy" alt="Abbia Casa">
                </div>
                <?php foreach ($list as $i => $p) { ?>
                    <div class="relative" style="grid-area: A<?php echo $i?>">
                        <?php if ($p['sale'] != 0) { ?>
                            <span class="z-10 drop-shadow-lg translate-y-[-50%] md:text-[20px] justify-center items-center w-[40px] h-[40px] md:w-[86px] md:h-[86px] flex rounded-full bg-cor3 absolute right-[24px] top-0 font-face">
                                <?php echo $p['sale'] ?>%
                            </span>
                        <?php } ?>
                        <a href="<?php echo $p['linkSingle'] ?>" title="prod">
                            <img class="h-[350px] block w-full object-cover drop-shadow mb-4" loading="lazy" src="<?php echo $p['image'] ?>" alt="<?php echo $p['title'] ?>">
                        </a>
                        <span class="font-face text-[24px]"><?php echo $p['title'] ?></span>
                        <span class="block text-[18px]"><?php echo $p['price'] ?></span>
                        <div class="flex justify-between items-center pt-4">
                            <a class="text-[18px] text-cor1 font-face bg-white drop-shadow-lg rounded-[8px] px-4 py-2 mb-4 inline-block my-[25px] hover:bg-[#fdfdfd] transition-all" href="<?php echo $p['addToCart'] ?>" title="Adicionnar">
                                Adicionnar
                            </a>
                            <?php echo $p['whishList'] ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <section class="container mx-auto px-4 border-t-2 border-cor6 pt-[40px] mt-[40px]">
            <h2 class="text-[25px] md:text-[45px] lg:text-[40px] text-[#EE705A] font-face mb-4"> Você pode também gostar </h2>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                <?php foreach ($novidade as $index => $prod) { ?>
                    <div class="break-inside-avoid-column text-cor1 relative">
                        <?php if ($prod["new"]) { ?>
                            <span class="drop-shadow-lg translate-y-[-50%] md:text-[20px] justify-center items-center w-[40px] h-[40px] md:w-[86px] md:h-[86px] flex rounded-full bg-cor3 absolute right-[24px] top-0 font-face">Novo</span>
                        <?php } ?>
                        <a href="<?php echo $prod["linkSingle"]; ?>" title="<?php echo $prod["title"]; ?>">
                            <img class="w-full" loading="lazy" src="<?php echo $prod["image"]; ?>" alt="<?php echo $prod["title"]; ?>">
                        </a>
                        <div class="flex justify-between items-center pt-4">
                            <span class="font-face text-[24px]">
                                <?php echo $prod["title"]; ?>
                            </span>
                            <?php echo $prod["whishList"]; ?>
                        </div>
                        <span class="block text-[18px]">
                            <?php echo $prod["price"]; ?>
                        </span>
                        <a class="text-[18px] text-cor1 font-face bg-white drop-shadow-lg rounded-[8px] px-4 py-2 mb-4 inline-block my-[25px] hover:bg-[#fdfdfd] transition-all" href="<?php echo $prod["addToCart"]; ?>" title="Adicionnar">
                            Adicionnar
                        </a>
                    </div>
                <?php } ?>
            </div>
        </section>
    </div>
</div>




<?php get_footer(); ?>