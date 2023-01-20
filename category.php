<?php get_header(); ?>

<?php

$l = new Layout();

while (have_posts()) :
    the_post();
    $post = get_post();
    $slug = $post->post_name;     
endwhile;

$allProduct = wc_get_products( [
    'category' => [$slug],
]);
$data = array_map(function($prod) {
    return  (object) getProd($prod->get_id());
}, $allProduct);



wp_reset_query();

?>

<div>
    <div>
        <h1 class="uppercase font-romie block text-center text-cor1 text-[55px] md:text-[66px] mb-[40]">Acessórios</h1>
        <div class="container mx-auto">
            <a href="" title="Acessórios"> Acessórios /</a>
            <a href="" title="Vaso"> Vaso </a>
        </div>
        <div class="container mx-auto">
            <div></div>
            <div>
                <img src="<?php echo $l->getFile('/assets/logo/AbbiaCasa-01.svg'); ?>" loading="lazy" alt="Abbia Casa">
            </div>
            <div>
                <span>-20%</span>
                <a href="" title="prod">
                    <img loading="lazy" src="<?php echo $l->getFile('/assets/images/category-prod/prod-1.png'); ?>" alt="prod">
                </a>
                <span>Sac Dimanche</span>
                <span>R$ 620,00</span>
                <div>
                    <a href="" title="Adicionnar">
                        Adicionnar
                    </a>
                    <a href="" title="Adicionar a Favoritos">
                        <img loading="lazy" src="<?php echo $l->getFile('/assets/images/layout/heart.svg'); ?>
                        " alt="Adicionar a Favoritos">
                    </a>
                </div>
            </div>
        </div>
        <h2> Você pode também gostar </h2>
        <div class="hidden">
            <div>
                <a href="" title="prod">
                    <img loading="lazy" src="<?php echo $l->getFile('/assets/images/category-prod/prod-1.png'); ?>" alt="prod">
                </a>
                <span>Sac Dimanche</span>
                <span>R$ 620,00</span>
                <div>
                    <a href="" title="Adicionnar">
                        Adicionnar
                    </a>
                    <a href="" title="Adicionar a Favoritos">
                        <img loading="lazy" src="<?php echo $l->getFile('/assets/images/layout/heart.svg'); ?>" alt="Adicionar a Favoritos">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>




<?php get_footer(); ?>