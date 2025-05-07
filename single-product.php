<?php



/******** NOVO CÓDIGO PEGANDO OS DADOS CERTOS ORIGINAL *********/

/* function get_product_data($product_id) {
    // Obtém o produto usando o ID fornecido
    $product = wc_get_product($product_id);

    // Verifica se o produto existe
    if (!$product) {
        return null;
    }

    // Pega os dados básicos do produto
    $product_data = [
        'id' => $product->get_id(),
        'name' => $product->get_name(),
        'description' => $product->get_description(),
        'short_description' => $product->get_short_description(),
        'price' => $product->get_price(),
        'regular_price' => $product->get_regular_price(),
        'sale_price' => $product->get_sale_price(),
        'sku' => $product->get_sku(),
        'stock_status' => $product->get_stock_status(),
        'stock_quantity' => $product->get_stock_quantity(),
        'weight' => $product->get_weight(),
        'dimensions' => $product->get_dimensions(),
        'categories' => wp_get_post_terms($product_id, 'product_cat', ['fields' => 'names']),
        'tags' => wp_get_post_terms($product_id, 'product_tag', ['fields' => 'names']),
        'image_id' => $product->get_image_id(),
        'image_url' => wp_get_attachment_url($product->get_image_id()),
        'gallery_image_ids' => $product->get_gallery_image_ids(),
        'attributes' => $product->get_attributes(),
        'meta_data' => $product->get_meta_data(),
        'permalink' => $product->get_permalink(),
        'type' => $product->get_type(),
    ];

    // Para produtos variáveis, obtenha as variações
    if ($product->is_type('variable')) {
        $variations = [];
        $available_variations = $product->get_available_variations();

        foreach ($available_variations as $variation) {
            $variation_id = $variation['variation_id'];
            $variation_obj = new WC_Product_Variation($variation_id);
            $variations[] = [
                'id' => $variation_obj->get_id(),
                'attributes' => $variation_obj->get_attributes(),
                'price' => $variation_obj->get_price(),
                'regular_price' => $variation_obj->get_regular_price(),
                'sale_price' => $variation_obj->get_sale_price(),
                'stock_status' => $variation_obj->get_stock_status(),
                'stock_quantity' => $variation_obj->get_stock_quantity(),
                'sku' => $variation_obj->get_sku(),
                'weight' => $variation_obj->get_weight(),
                'dimensions' => $variation_obj->get_dimensions(),
                'image_id' => $variation_obj->get_image_id(),
                'image_url' => wp_get_attachment_url($variation_obj->get_image_id()),
            ];
        }

        $product_data['variations'] = $variations;
    }

    return $product_data;
}

// Exemplo de uso da função
$product_id = 123; // Substitua pelo ID do produto desejado
$product_data = get_product_data($product_id);
print_r($product_data); // Isso exibirá todos os dados do produto no formato de array
 */

/******** NOVO CÓDIGO PEGANDO OS DADOS CERTOS ORIGINAL *********/




/* function get_product_data($product_id)
{
    // Obtém o produto usando o ID fornecido
    $product = wc_get_product($product_id);

    // Verifica se o produto existe
    if (!$product) {
        return null;
    }

    // Pega os dados básicos do produto
    $product_data = [
        'id' => $product->get_id(),
        'name' => $product->get_name(),
        "status" => $product->get_status(),
        'description' => $product->get_description(),
        'short' => $product->get_short_description(),
        'price' => $product->get_price(),
        'regular_price' => $product->get_regular_price(),
        'sale_price' => $product->get_sale_price(),
        'sku' => $product->get_sku(),
        'stock' => $product->get_stock_status(),
        'unidades' => $product->get_stock_quantity(),
        'weight' => $product->get_weight(),
        "l" => $product->get_weight(),
        "p" => $product->get_length(),
        "a" => $product->get_height(),
        'dimensions' => $product->get_dimensions(),
        "image" => get_the_post_thumbnail_url(get_the_ID(), 'full'),
        "galeria" => array_map(function ($id) {
            return wp_get_attachment_image_src($id, 'full')[0];
        }, $product->get_gallery_image_ids()),
        "add_cart" => "?add-to-cart=" . get_the_ID(),
        'categories' => wp_get_post_terms($product_id, 'product_cat', ['fields' => 'names']),
        'tags' => wp_get_post_terms($product_id, 'product_tag', ['fields' => 'names']),
        'image_id' => $product->get_image_id(),
        'image_url' => wp_get_attachment_url($product->get_image_id()),
        'gallery_image_ids' => $product->get_gallery_image_ids(),
        'attributes' => $product->get_attributes(),
        "whishList" => do_shortcode("[ti_wishlists_addtowishlist product_id=\"" . get_the_ID() . "\" variation_id=\"0\"]"),
        "add_cart" => do_shortcode("[add_to_cart_url id=\"" . get_the_ID() . "\"]"),
        'meta_data' => $product->get_meta_data(),
        'link' => $product->get_permalink(),
        'type' => $product->get_type(),
        "cats" => $product->get_category_ids(),
    ];

    // Para produtos variáveis, obtenha as variações
    if ($product->is_type('variable')) {
        $variations = [];
        $available_variations = $product->get_available_variations();

        foreach ($available_variations as $variation) {
            $variation_id = $variation['variation_id'];
            $variation_obj = new WC_Product_Variation($variation_id);
            $variations[] = [
                'id' => $variation_obj->get_id(),
                'attributes' => $variation_obj->get_attributes(),
                'price' => $variation_obj->get_price(),
                'regular_price' => $variation_obj->get_regular_price(),
                'sale_price' => $variation_obj->get_sale_price(),
                'stock_status' => $variation_obj->get_stock_status(),
                'stock_quantity' => $variation_obj->get_stock_quantity(),
                'sku' => $variation_obj->get_sku(),
                'weight' => $variation_obj->get_weight(),
                'dimensions' => $variation_obj->get_dimensions(),
                'image_id' => $variation_obj->get_image_id(),
                'image_url' => wp_get_attachment_url($variation_obj->get_image_id()),
            ];
        }

        $product_data['variations'] = $variations;
    }

    return $product_data;
}

// Exemplo de uso da função
$product_id = 123; // Substitua pelo ID do produto desejado
$product_data = get_product_data(get_the_ID());
var_dump($product_data); // Isso exibirá todos os dados do produto no formato de array */


/************ ACIMA MODIFICADO ************/



$l = new Layout();
$product = wc_get_product(get_the_ID());

$cat = new Product();

$like = $cat->get_all_prod_bay_id_cats($product->get_category_ids());

shuffle($like);

$novidade =  $like;
$novidade =  array_chunk($like, 3)[0] ?? [];

/* $prod = [
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
    "cats" => $product->get_category_ids(),
]; */



/***************** ACIMA ANTIGO ****************/




function get_product_data($product_id)
{
    // Obtém o produto usando o ID fornecido
    $product = wc_get_product($product_id);

    // Verifica se o produto existe
    if (!$product) {
        return null;
    }

    // Pega os dados básicos do produto
    $prod = [
        'id' => $product->get_id(),
        'name' => $product->get_name(),
        "status" => $product->get_status(),
        'description' => $product->get_description(),
        'short' => $product->get_short_description(),
        'price' => number_format($product->get_price(), 2, '.', ''),
        'regular_price' => number_format($product->get_regular_price(), 2, '.', ''),
        'sale_price' => $product->get_sale_price(),
        'sku' => $product->get_sku(),
        'stock' => $product->get_stock_status(),
        'unidades' => $product->get_stock_quantity(),
        'weight' => $product->get_weight(),
        "l" => $product->get_width(),
        "p" => $product->get_length(),
        "a" => $product->get_height(),
        'dimensions' => $product->get_dimensions(),
        "image" => get_the_post_thumbnail_url(get_the_ID(), 'full'),
        "galeria" => array_map(function ($id) {
            return wp_get_attachment_image_src($id, 'full')[0];
        }, $product->get_gallery_image_ids()),
        "add_cart" => "?add-to-cart=" . get_the_ID(),
        'categories' => wp_get_post_terms($product_id, 'product_cat', ['fields' => 'names']),
        'tags' => wp_get_post_terms($product_id, 'product_tag', ['fields' => 'names']),
        'image_id' => $product->get_image_id(),
        'image_url' => wp_get_attachment_url($product->get_image_id()),
        'gallery_image_ids' => $product->get_gallery_image_ids(),
        'attributes' => $product->get_attributes(),
        "whishList" => do_shortcode("[ti_wishlists_addtowishlist product_id=\"" . get_the_ID() . "\" variation_id=\"0\"]"),
        "add_cart" => do_shortcode("[add_to_cart_url id=\"" . get_the_ID() . "\"]"),
        'meta_data' => $product->get_meta_data(),
        'link' => $product->get_permalink(),
        'type' => $product->get_type(),
        "cats" => $product->get_category_ids(),
    ];

    // Para produtos variáveis, obtenha as variações
    if ($product->is_type('variable')) {
        $variations = [];
        $available_variations = $product->get_available_variations();

        foreach ($available_variations as $variation) {
            $variation_id = $variation['variation_id'];
            $variation_obj = new WC_Product_Variation($variation_id);
            $variations[] = [
                'id' => $variation_obj->get_id(),
                'attributes' => $variation_obj->get_attributes(),
                'price' => number_format($variation_obj->get_price(), 2, '.', ''),
                'regular_price' => number_format($variation_obj->get_regular_price(), 2, '.', ''),
                'sale_price' => $product->get_sale_price(),
                'stock_status' => $variation_obj->get_stock_status(),
                'stock_quantity' => $variation_obj->get_stock_quantity(),
                'sku' => $variation_obj->get_sku(),
                'weight' => $variation_obj->get_weight(),
                'dimensions' => $variation_obj->get_dimensions(),
                'image_id' => $variation_obj->get_image_id(),
                'image_url' => wp_get_attachment_url($variation_obj->get_image_id()),
            ];
        }

        $prod['variations'] = $variations;
    }

    return $prod;
}

// Exemplo de uso da função
$product_id = 123; // Substitua pelo ID do produto desejado
$prod = get_product_data(get_the_ID());
//var_dump($prod); // Isso exibirá todos os dados do produto no formato de array




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
                <span class="font-light">R$ <?php echo $prod['price'];
                                            /* var_dump($prod); */ ?></span>
            </div>
            <div class="py-4 flex justify-between items-center">
                <div>
                    <input class="pl-[12px] text-[16px] drop-shadow-xl bg-[#FFF] rounded-[8px] w-[50px] leading-[48px]" type="number" min="1" value="1">
                </div>


                <?php

                if ($prod['stock'] == 'instock') {

                    echo '
                    <a class="text-[18px] text-cor1 font-face bg-white drop-shadow-lg rounded-[8px] px-4 py-2 mb-4 inline-block my-[25px] hover:bg-[#EE705A] hover:text-white transition-all" href="https://wa.me/5511997034949?text=Olá, gostaria de saber mais informações sobre ' . $prod['link'] . '" title="Entrar em Contato">
Entrar em Contato
</a>
    ';
                } else {

                    echo '
                        <a class="text-[18px] text-cor1 font-face bg-white drop-shadow-lg rounded-[8px] px-4 py-2 mb-4 inline-block my-[25px] transition-all" title="Volto em breve!">
    Volto em breve!
</a>
        ';
                };

                ?>

                <!-- echo '<a class="text-[18px] text-cor1 font-face bg-white drop-shadow-lg rounded-[8px] px-4 py-2 mb-4 inline-block my-[25px] hover:bg-[#EE705A] hover:text-white transition-all" href="' . $prod['add_cart'] . '" title="Adicionar">
                    Adicionar
                </a>'; -->

                <!--                 <a class="text-[18px] text-cor1 font-face bg-white drop-shadow-lg rounded-[8px] px-4 py-2 mb-4 inline-block my-[25px] hover:bg-[#EE705A] hover:text-white transition-all" href="<?php echo $prod['add_cart']; ?>" title="Adicionar">
                    Adicionar
                </a> -->
                <!-- <a class="text-[18px] text-cor1 font-face bg-white drop-shadow-lg rounded-[8px] px-4 py-2 mb-4 inline-block my-[25px] hover:bg-[#EE705A] hover:text-white transition-all" href="https://wa.me/5511997034949?text=Olá, gostaria de saber mais informações." title="Entrar em Contato">
                    Entrar em Contato
                </a> -->

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
            <?php if (count($novidade) > 0) { ?>
                <h2 class="font-romie block text-cor1 text-[18px] md:text-[33px] mb-[40px]">
                    Você pode gostar
                </h2>

                <div class="overflow-x-hidden overflow-x-scroll lg:overflow-x-hidden  w-[100vw] lg:w-full  gap-4">
                    <div class="grid grid-cols-3 w-full gap-4">
                        <?php foreach ($novidade as $index => $prod) { ?>
                            <div class=" break-inside-avoid-column text-cor1 relative">
                                <a href="<?php echo $prod["linkSingle"]; ?>" title="<?php echo $prod["title"]; ?>">
                                    <img class="drop-shadow-lg h-[40vw] lg:h-[15vw] object-cover w-full" loading="lazy" src="<?php echo $prod["image"]; ?>" alt="<?php echo $prod["title"]; ?>">
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</article>

<?php get_footer(); ?>