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

$stateIndex = 0;
function getWidthByIndex(&$stateIndex)
{
    $stateIndex++;
    $loopClass = [
        "w-[50%] md:w-[20%]",
        "w-[50%] md:w-[40%]",
        "w-[50%] md:w-[40%]",
        "w-[50%] md:w-[70%]",
        "w-[50%] md:w-[30%]",
        "w-[50%] md:w-[50%]",
        "w-[50%] md:w-[50%]",
        "w-[50%] md:w-[100%]",
        "w-[50%] md:w-[50%]",
        "w-[50%] md:w-[50%]",
        "w-[50%] md:w-[33%]",
        "w-[50%] md:w-[33%]",
        "w-[50%] md:w-[33%]",
        "w-[50%] md:w-[50%]",
        "w-[50%] md:w-[50%]",
    ];
    $total = count($loopClass);
    if ($stateIndex > $total) {
        $stateIndex = 3;
    }
    return $loopClass[$stateIndex];
}

?>

<div>
    <div>

        <h1 class="hidden lg:block uppercase font-romie block text-center text-cor1 text-[55px] md:text-[66px] mb-[40]">
            <?php echo $category->name ?>
        </h1>

        <div class="container mx-auto hidden">
            <a href="" title="Acessórios"> Acessórios /</a>
            <a href="" title="Vaso"> Vaso </a>
        </div>


        <div class="container mx-auto px-4 lg:border-t-2 border-cor6 pt-[40px] mt-[40px]">
            <!-- <div class="flex flex-wrap items-center"> -->
            <div class="flex flex-wrap items-top">
                <div class="w-[50%] md:w-[20%]">
                    <img class="w-[50%] " src="<?php echo $l->getFile('/assets/logo/AbbiaCasa-01.svg'); ?>" loading="lazy" alt="Abbia Casa">
                </div>

                <?php foreach ($list as $i => $p) { ?>

                    <div class="relative p-2 <?php echo getWidthByIndex($stateIndex) ?> flex flex-col h-100 mb-16">                    
                        <?php if ($p['sale'] != 0) { ?>
                            <span class="z-10 drop-shadow-lg translate-y-[-50%] md:text-[20px] justify-center items-center w-[40px] h-[40px] md:w-[86px] md:h-[86px] flex rounded-full bg-cor3 absolute right-[24px] top-0 font-face mb-auto">
                                <?php echo $p['sale'] ?>%
                            </span>
                        <?php } ?>
                        <!-- verificar se esta na categoria novo ou tem descounto -->
                        <a href="<?php echo $p['linkSingle'] ?>" title="prod" class="mb-auto">
                            <img class="img-redimenciona drop-shadow-lg mb-2 h-[160px] md:h-[336px] lg:h-[360px] object-cover w-full" loading="lazy" src="<?php echo $p['image'] ?>" alt="<?php echo $p['title'] ?>">
                            <!-- <img class="img-redimenciona drop-shadow-lg mb-2 h-[160px] md:h-[336px] lg:h-[405px] object-cover w-full" loading="lazy" src="<?php echo $p['image'] ?>" alt="<?php echo $p['title'] ?>"> -->
                        </a>
                        <span class="font-romie text-[16px]  md:text-[24px] tracking-[2px] text-[#434445] mb-auto">
                            <?php echo $p['title'] ?>
                        </span>
                        <span class="block text-[18px] text-[#434445] font-light mb-auto">
                            R$ <?php echo $p['price'] ?>
                        </span>
                        <div class="flex justify-between items-center pt-4 text-[#434445] mt-auto">
                            <!-- <a class="text-[18px] text-cor1 font-face bg-white drop-shadow-lg rounded-[8px] px-4 py-2 mb-4 inline-block my-[25px] hover:bg-[#EE705A] hover:text-white transition-all" href="<?php echo $p['addToCart'] ?>" title="Adicionar">
                                Adicionar
                            </a> -->

                            <?php if ($p['inStock'] == 'instock') { ?>
                                <a class="text-[18px] text-cor1 font-face bg-white drop-shadow-lg rounded-[8px] px-4 py-2 mb-4 inline-block my-[25px] hover:bg-[#EE705A] hover:text-white transition-all" href="<?php echo $p['linkSingle'] ?>" title="Adicionar">
                                    Saiba mais
                                </a>
                            <?php } else { ?>
                                <div class="text-[18px] text-cor1 font-face bg-white drop-shadow-lg rounded-[8px] px-4 py-2 mb-4 inline-block my-[25px] transition-all" title="Volto em Breve">
                                    Volto em breve!
                                </div>
                            <?php } ?>


                            <?php /* echo $p['whishList'] */ ?>
                        </div>
                    </div>

                <?php } ?>


            </div>
        </div>


        <section class="container mx-auto px-4 border-t-2 border-cor6 pt-[40px] mt-[40px]">
            <h2 class="text-[25px] md:text-[45px] lg:text-[40px] text-[#434445]  font-romie mb-4">
                Você pode também gostar
            </h2>
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
                            R$ <?php echo $prod["price"]; ?>
                        </span>
                        <a class="text-[18px] text-cor1 font-face bg-white drop-shadow-lg rounded-[8px] px-4 py-2 mb-4 inline-block my-[25px] hover:bg-[#fdfdfd] transition-all" href="<?php echo $prod["addToCart"]; ?>" title="Adicionar">
                            Adicionar
                        </a>
                    </div>
                <?php } ?>
            </div>
        </section>


    </div>
</div>



<!--

<div class="flex flex-col h-100 mb-16">
  <div class="mb-auto">Item 1</div>
  <div class="mb-auto">Item 2</div>
  <div class="mt-auto">Último Item</div>
</div>


flex flex-col: Define que o contêiner é um flexbox com direção de coluna.
h-100: Faz com que o contêiner ocupe a altura total disponível.
mb-auto: Define a margem inferior automática para os elementos acima do último item, empurrando o último para o fundo.
mt-auto: No último item, define margem superior automática para empurrá-lo para o final da coluna.
mb-16: margem inferior


-->






<script>
    document.addEventListener('DOMContentLoaded', function() {
        verificarClasseEAdicionar();
    });

    function verificarClasseEAdicionar() {
        // Seleciona todos os elementos com a classe "img-redimenciona"
        const elementos = document.querySelectorAll('.img-redimenciona');
        
        // Itera sobre cada elemento e verifica a condição
        elementos.forEach(elemento => {
            // Obtém o elemento pai com as classes "relative p-2"
            const elementoPai = elemento.closest('.relative.p-2');            
            
            // Verifica se o pai contém a classe "md:w-[100%]"
            if (elementoPai && elementoPai.classList.contains('md:w-[100%]')) {
                // Adiciona a classe "h-[600px]" ao elemento atual
                elemento.classList.remove('h-[160px]');
                elemento.classList.remove('md:h-[336px]');
                elemento.classList.remove('lg:h-[405px]');
                elemento.classList.add('h-[260px]');
                elemento.classList.add('md:h-[436px]');
                elemento.classList.add('lg:h-[660px]');
            }

            // Verifica se o pai contém a classe "md:w-[100%]"
            if (elementoPai && elementoPai.classList.contains('md:w-[33%]')) {
                // Adiciona a classe "h-[600px]" ao elemento atual
                elemento.classList.remove('h-[160px]');
                elemento.classList.remove('md:h-[336px]');
                elemento.classList.remove('lg:h-[360px]');
                elemento.classList.add('h-[160px]');
                elemento.classList.add('md:h-[336px]');
                elemento.classList.add('lg:h-[405px]');
            }
        });
    }
</script>


<?php get_footer(); ?>