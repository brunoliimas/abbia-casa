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
    "whishList" => do_shortcode("[ti_wishlists_addtowishlist product_id=\"" . get_the_ID() . "\" variation_id=\"0\"]"),
    "add_cart" => do_shortcode("[add_to_cart_url id=\"" . get_the_ID() . "\"]"),

];

apiJson($prod);

?>

<?php get_header(); ?>



<article class="container mx-auto px-4 font-agrandir">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <img class="w-full mb-4" src="<?php echo $prod['image']; ?>" alt="<?php echo $prod['name'] ?>" loading="lazy">
            <?php foreach ($prod['galeria'] as $uri_image) { ?>
                <img class="hidden md:block w-full mb-4" src="<?php echo $uri_image; ?>" alt="<?php echo $prod['name'] ?>" loading="lazy">
            <?php } ?>
        </div>
        <div>
            <h1 class="font-romie block text-cor1 text-[30px] mb-[12px] md:text-[66px] ">
                <?php echo $prod['name']; ?>
            </h1>
            <div class="font-face text-[14px] md:text-[18px]">
                <?php if ($prod["price"] != $prod["regular_price"]) { ?>
                    <span class="text-[#C1C1C1] underline mr-4">R$ <?php echo $prod['regular_price']; ?> </span>
                <?php } ?>
                <span>R$ <?php echo $prod['price']; ?></span>
            </div>
            <div class="py-4 flex justify-between items-center">
                <div>
                    <input class="pl-[12px] text-[16px] drop-shadow-xl bg-[#FFF] rounded-[8px] w-[50px] leading-[48px]" type="number" min="1" value="1">
                </div>
                <a class="text-[18px] text-cor1 font-face bg-white drop-shadow-lg rounded-[8px] px-4 py-2 mb-4 inline-block my-[25px] hover:bg-[#EE705A] hover:text-white transition-all" href="<?php echo $prod['add_cart']; ?>" title="Adicionnar">
                    Adicionnar
                </a>
                <?php echo $prod['whishList']; ?>
            </div>
            <span class="flex gap-2 py-4">
                <?php foreach ($prod['attributes'] as $cor) { ?>
                    <span class=" block mr-4 rounded-full w-[20px] h-[20px] bg-[<?php echo $cor; ?>]"></span>
                <?php } ?>
            </span>
            <p class="border-b-2 border-[#434445] block py-4 mb-4 text-[12px] lg:text-[14px]">
                <?php echo $prod['short']; ?>
            </p>
            <p class="text-[#C1C1C1] text-[18px]"> Composição </p>
            <p class="border-b-2 border-[#434445] block py-4 mb-4 text-[12px] lg:text-[14px]">
                <?php echo $prod['description']; ?>
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