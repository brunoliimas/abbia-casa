<?php

$layout = new Layout();

$menu = get_menus_array('header');

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/fonts.css">
    <?php if (file_exists(__DIR__ . "/.dev")) { ?>
        <meta http-equiv="refresh" content="10">
    <?php } ?>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    backgroundImage: {
                        'plus': "url('<?php echo get_template_directory_uri(); ?>/assets/images/icons/plus.svg')",
                    },
                    colors: {
                        cor1: '#434445',
                        cor2: '#CEAF94',
                        cor3: '#FEF5ED',
                        cor4: '#FCCD7E',
                        cor5: '#F8FFDE',
                        cor6: '#EE705A',
                    },
                    fontSize: {
                        s1: "66px",
                        s2: "55px",
                        s3: "33px",
                        s4: "30px",
                        s5: "20px",
                        s6: "18px",
                        s7: "14px",
                        s8: "12px",
                    },
                    fontFamily: {
                        agrandir: ['agrandir'],
                        romie: ['romie'],
                    }
                }
            }
        }
    </script>
    <?php wp_head(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js" defer></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css?id=<?php echo uniqid(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/woocommerce.css?id=<?php echo uniqid(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/gutenberg.css?id=<?php echo uniqid(); ?>">
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>">
</head>

<body class="font-agrandir <?php echo getSlug(); ?> <?php echo is_user_logged_in() ? 'is_logged' : 'not_logged' ?> bg-[#fefdfb] !overflow-x-hidden" style="overflow-x: hidden !important;">

    <?php wp_body_open(); ?>

    <nav id="js-nav-pop" class="fixed top-0 left-[-80vw] min-w-[320px] max-w-[75vw] lg:left-[-40vw] h-[100vh] lg:h-full bg-cor3 ppt-16 pb-8 px-12 z-10 transition-all duration-300 ease-in-out overflow-scroll flex flex-col" style="z-index: 9999;">
        <div class="flex justify-between items-center">
            <a href="<?php echo site_url() ?>" title="Abbia Casa">
                <img class="w-[70px] my-4 pointer-events-none   " src="<?php echo  $layout->getFile('/assets/logo/AbbiaCasa-03.svg') ?>" alt="Abbia Casa" loading="lazy">
            </a>
            <span>
                <img onclick="offMenu()" class="w-[40px] cursor-pointer" src="<?php echo  $layout->getFile('/assets/images/layout/close.svg') ?>" alt="close" loading="lazy">
            </span>
        </div>
        <ul class="flex flex-col gap-4">
            <?php foreach ($menu as $index => $a) { ?>
                <li>
                    <div class="flex --justify-between items-center w-full">
                        <div>
                            <a class="hover:opacity-75 font-romie text-[33px]" href="<?php echo $a['url'] ?>" title="<?php echo $a['title'] ?>">
                                <?php echo $a['title'] ?>
                            </a>
                        </div>
                        <div>
                            <img src="<?php echo  $layout->getFile('/assets/images/icons/plus.png') ?>" class=" cursor-pointer transition-all ml-2 p-2" width="32" data-active="0" data-link="<?php echo $index ?>">
                        </div>
                    </div>
                    <ul class="hidden pl-4" data-linkActive="<?php echo $index ?>">
                        <?php foreach ($a['sub'] as $l) { ?>
                            <li>
                                <a class="hover:opacity-75" href="<?php echo $l['url'] ?>" title="<?php echo $l['title'] ?>">
                                    <?php echo $l['title'] ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>

                </li>
            <?php } ?>

            <li>
                <a class=" text-[18px] font-agrandir pl-4 hover:opacity-75" href="#" title="+ Infos" onclick="toggleInfo()">+ Infos </a>
                <ul class="js-info hidden pl-4 flex flex-col gap-2">
                    <li>
                        <a class="hover:opacity-75" href="<?php echo site_url() ?>/quem-somos" title="Quem somos">Quem somos</a>
                    </li>
                    <li>
                        <a class="hover:opacity-75" href="<?php echo site_url() ?>/lgpd" title="Politica de privacidade">Politica de privacidade</a>
                    </li>
                    <li>
                        <a class="hover:opacity-75" href="<?php echo site_url() ?>/faq" title="FAQ">FAQ</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="flex justify-start items-center gap-4 mt-8">
            <a href="https://www.instagram.com/abbiacasa" target="_blank" rel="noopener noreferrer" title="instagram">
                <img src="<?php echo  $layout->getFile('/assets/images/social/instagram.svg') ?>" alt="instagram" loading="lazy">
            </a>
            <a href="https://www.facebook.com/share/1Fz65kkUDi/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" title="Facebook">
                <img src="<?php echo  $layout->getFile('/assets/images/social/facebook.svg') ?>" alt="Facebook" loading="lazy">
            </a>
        </div>
        <div class="hidden justify-between items-center mt-auto w-full p-4 bg-color-3 md:hidden">
            <a href="<?php echo site_url() ?>/minha-conta" title="Entrar">
                <?php echo is_user_logged_in() ? 'Perfil' : 'Entrar' ?>
            </a>
            <a href="<?php echo site_url() ?>/lista-de-desejos" title="lista de desejos">
                <img class="w-[27px]" src="<?php echo  $layout->getFile('/assets/images/layout/heart.svg') ?>" alt="favoritos" loading="lazy">
            </a>
            <a href="<?php echo site_url() ?>/carrinho" title="Carrinho" class="relative">
                <?php if (WC()->cart->get_cart_contents_count()) { ?>
                    <div class="js-count-cart block w-[18px] h-[18px] rounded-full text-white text-[9px] leading-[22px] bg-[#C00] text-center absolute right-4 top-0">
                        <?php echo WC()->cart->get_cart_contents_count() ?>
                    </div>
                <?php } ?>
                <img class="w-[27px]" src="<?php echo  $layout->getFile('/assets/images/layout/bag.svg') ?>" alt="carrinho" loading="lazy">
            </a>
        </div>
    </nav>

    <header style="position: fixed; top: 0; left: 0; width: 100%; background-color: rgb(254 253 251 / var(--tw-bg-opacity)); z-index: 9998;">
        <div class="block px-4">
            <div class="flex flex-row justify-between items-center h-[70px]">
                <a id="js-nav-ico" href="javascript:void(0)" title="menu site" class="flex-none w-[50px] ml-5 lg:ml-0">
                    <img src="<?php echo $layout->getFile('/assets/images/layout/menu.svg') ?>" alt="menu" loading="lazy">
                </a>
                <!-- <form action="<?php echo site_url() ?>" class="flex-none w-full ml-5 lg:ml-0 lg:w-[70%]"> -->
                <form action="<?php echo site_url() ?>" class="flex-none w-full ml-5 lg:ml-0 lg:w-[20%]">
                    <label for="">
                        Pesquisar
                        <input name="s" type="search" class="border-b border-cor1 outline-0 bg-transparent" title="O que você procura?">
                    </label>
                </form>
                <!--<a href="<?php echo site_url() ?>/minha-conta" title="Entrar" class="hover:underline flex-none w-[50px] hidden lg:block">
                    <?php echo is_user_logged_in() ? 'Perfil' : 'Entrar' ?>
                </a>
                <a href="<?php echo site_url() ?>/lista-de-desejos" title="lista de desejos" class="flex-none w-[50px] hidden lg:block">
                    <img class="transition-all hover:scale-[0.8]" src="<?php echo  $layout->getFile('/assets/images/layout/heart.svg') ?>" alt="favoritos" loading="lazy">
                </a>
                <a href="<?php echo site_url() ?>/carrinho" title="carrinho" class="relative flex-none w-[50px] hidden lg:block">
                    <?php if (WC()->cart->get_cart_contents_count()) { ?>
                        <div class="z-10 js-count-cart block w-[18px] h-[18px] rounded-full text-white text-[9px] leading-[22px] bg-[#C00] text-center absolute right-4 top-0">
                            <?php echo WC()->cart->get_cart_contents_count() ?>
                        </div>
                    <?php } ?>
                    <img class="transition-all hover:scale-[0.8]" src="<?php echo  $layout->getFile('/assets/images/layout/bag.svg') ?>" alt="carrinho" loading="lazy">
                </a>-->
            </div>
        </div>
    </header>

    <div style="margin-top: 70px;">
        <!-- O restante do conteúdo da página -->