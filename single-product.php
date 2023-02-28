<?php



$l = new Layout();

$product = wc_get_product(get_the_ID());



$cat = new Product();

$novidade = $cat->productsByCategorySlug('novidade');
$novidade =  array_splice($novidade, 0, 6);

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

// apiJson($prod);

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
            <p class="border-b-[1px] border-[#434445] block py-4 mb-4 text-[12px] lg:text-[14px]">
                <?php echo $prod['short']; ?>
            </p>

            <p class="text-[#C1C1C1] text-[18px]"> Composição </p>
            <p class="border-b-[1px] border-[#434445] block py-4 mb-4 text-[12px] lg:text-[14px]">
                <?php echo $prod['description']; ?>
            </p>

            <div class="flex gap-8 mb-4">
                <span>
                    <span class="text-[#C1C1C1] text-[18px] block">Altura</span>
                    <span><?php echo $prod['a']; ?>cm</span>
                </span>
                <span>
                    <span class="text-[#C1C1C1] text-[18px] block">Largura</span>
                    <span><?php echo $prod['l']; ?>cm</span>
                </span>
                <span>
                    <span class="text-[#C1C1C1] text-[18px] block">Profundidade</span>
                    <span><?php echo $prod['p']; ?>cm</span>
                </span>
            </div>

            <?php echo execShort('Entrega', 'A entrega dos produtos em uma loja virtual é um processo importante e influencia diretamente a satisfação dos clientes. Utilizar os serviços dos Correios pode ser uma opção confiável para a entrega dos produtos, devido à ampla rede de agências e vasta experiência em entregas. É importante que a loja virtual informe aos clientes sobre os prazos de entrega e modalidades de envio disponíveis, mantendo um controle sobre os prazos de entrega dos Correios e buscando soluções eficientes em caso de imprevistos. Dessa forma, é possível garantir a satisfação dos clientes e uma experiência de compra positiva em sua loja virtual.'); ?>
            <?php echo execShort('Condições de retorno', '
                <ol class="list-decimal ">
                <li class=" mb-2"><strong>Troca por defeito:</strong> nesse modelo, a loja virtual garante a troca do 
                produto caso o mesmo apresente algum defeito ou problema de fabricação. 
                É importante que a política especifique o prazo máximo para a solicitação 
                e as condições para a troca. </li>

                <li class=" mb-2"><strong>Troca por insatisfação:</strong> nesse modelo, a loja virtual permite a troca do produto 
                caso o cliente não fique satisfeito com a compra. É importante que a política 
                especifique as condições para a troca, como prazo máximo para solicitação e 
                condições do produto para a troca. </li>

                <li class=" mb-2"><strong>Devolução do dinheiro:</strong> nesse modelo, a loja virtual se compromete a devolver 
                o valor pago pelo cliente caso o produto não atenda às suas expectativas. 
                É importante que a política especifique as condições para a devolução do 
                dinheiro, como prazo máximo para solicitação e condições 
                do produto para a devolução. </li>
                </ol>
            '); ?>

            <h2 class="font-romie block text-cor1 text-[18px] md:text-[33px] mb-[40px]">
                Você pode gostar
            </h2>

            <div class="overflow-x-hidden overflow-x-scroll lg:overflow-x-hidden  w-[100vw] lg:w-full  gap-4">
                <div class="flex w-[200vw] gap-4">
                    <?php foreach ($novidade as $index => $prod) { ?>
                        <div class="w-[40vw] lg:w-[15vw] break-inside-avoid-column text-cor1 relative">
                            <a href="<?php echo $prod["linkSingle"]; ?>" title="<?php echo $prod["title"]; ?>">
                                <img class="drop-shadow-lg h-[40vw] lg:h-[15vw] object-cover w-full" loading="lazy" src="<?php echo $prod["image"]; ?>" alt="<?php echo $prod["title"]; ?>">
                            </a>                        
                        </div>
                    <?php } ?>
                </div>
            </div>            
        </div>            
    </div>
</article>

<?php get_footer(); ?>