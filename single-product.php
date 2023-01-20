<?php


$l = new Layout();

$product = wc_get_product(get_the_ID());

$prod = [
    "id" => get_the_ID(),
    "name" => $product->get_name(),
    "status" => $product->get_status(),
    "description" => $product->get_description(),
    "short" => $product->get_short_description(),
    "sku" => $product->get_sku(),
    "link" => get_permalink($product->get_id()),
    "price" => number_format($product->get_price(), 2, ',', '.'),
    "regular_price" => number_format($product->get_regular_price(), 2, ',', '.'),
    "unidades" => $product->get_stock_quantity(),
    "stock" => $product->get_stock_status(),
    "l" => $product->get_weight(),
    "p" => $product->get_length(),
    "a" => $product->get_height(),
    "image" => get_the_post_thumbnail_url(get_the_ID(), 'full'),
    "galeria" => array_map(function ($id) {
        return wp_get_attachment_image_src($id, 'full')[0];
    }, $product->get_gallery_image_ids()),
    "add_cart" => "?add-to-cart=" . get_the_ID(),
    "attributes" => explode(', ', $product->get_attribute('pa_cores')),
];

apiJson($prod);

?>

<?php get_header(); ?>



<article class="container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <img class="w-full mb-4" src="<?php echo $prod['image']; ?>" alt="<?php echo $prod['name'] ?>" loading="lazy">
            <?php foreach ($prod['galeria'] as $uri_image) { ?>
                <img class="w-full mb-4" src="<?php echo $uri_image; ?>" alt="<?php echo $prod['name'] ?>" loading="lazy">
            <?php } ?>
        </div>
        <div>
            <h1 class="font-romie block text-cor1 text-[55px] md:text-[66px] mb-[40]"> <?php echo $prod['name']; ?> </h1>
            <div>
                <?php if ($prod["price"] != $prod["regular_price"]) { ?>
                    <span>R$ <?php echo $prod['regular_price']; ?> </span>
                <?php } ?>
                <span>R$ <?php echo $prod['price']; ?></span>
            </div>
            <div class="py-4 flex justify-between">
                <div>
                    <input class="pl-[12px] text-[16px] drop-shadow-xl bg-[#FFF] rounded-[8px] w-[50px] leading-[48px]" type="number" min="1" value="1">
                </div>
                <div>
                    <button class="text-[16px] drop-shadow-xl bg-[#FFF] rounded-[8px] text-center py-4 px-8">Adicionnar</button>
                </div>
                <div>
                    <img src="<?php echo $l->getFile('./assets/images/layout/heart.svg') ?>" loading="lazy" alt="Adicionar aos Favoritos">
                </div>
            </div>
            <span class="flex gap-2 py-4">
                <?php foreach ($prod['attributes'] as $cor) { ?>
                    <span class=" block mr-4 rounded-full w-[20px] h-[20px] bg-[<?php echo $cor; ?>]"></span>
                <?php } ?>
            </span>
            <p>
                Todo o amor e cuidado do mundo, de mim para mim!
            </p>
            <p> Composição </p>
            <p>
                Alguns produtos são exclusividade ”Sac de Jour”. Os outros estão
                disponível a venda no site. Basta clicar no link.
            </p>
            <p>
                - Cesto de fibras naturais <br />
                - After Sun Be Plus Natural Care <br />
                - Açúcar de banho Lavanda e Camomila Olea Saboaria <br />
                - Escova de cabelo de madeira <br />
                - Faixa de cabelo <br />
                - Tag de coração em couro <br />
                - Coffe Scrub Be Plus Natural Care <br />
                - Espátulas de beleza <br />
                - Barra Citrus Cúrcuma Olea Saboaria <br />
            </p>
            <div>
                <span>
                    <span>Altura</span>
                    <span>22,55cm</span>
                </span>
                <span>
                    <span>Largura</span>
                    <span>829,55cm</span>
                </span>
                <span>
                    <span>Profundidade</span>
                    <span>84,00cm</span>
                </span>
            </div>
            <details>
                <summary>Entrega</summary>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus nesciunt error autem.</p>
            </details>
            <details>
                <summary>Condições de retorno</summary>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus nesciunt error autem.</p>
            </details>
            <h2 class="font-romie block text-cor1 text-[20px] md:text-[33px] mb-[40]">Você pode gostar</h2>
            <div>
                <a href="" title="prod">
                    <img src="./assets/images/single/galery-1.png" alt="prod" loading="lazy">
                </a>
            </div>
        </div>
    </div>
</article>

<?php get_footer(); ?>