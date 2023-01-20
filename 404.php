<?php get_header(); ?>

<?php
    $l = new Layout();
?>

<section>
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 ">
            <div>
                <img class="block w-[104px] lg:w-[146px] mx-auto" loading="lazy" src="<?php echo $l->getFile('/assets/logo/AbbiaCasa-01.svg')?>" alt="Abbia Casa">
            </div>
            <div class="text-cor1 p-4">
                <h1 class=" block text-cor2 text-[55px] md:text-[66px] mb-[40]">404 Oops!</h1>
                <strong class="text-[24px]">algo deu errado</strong>
                <p>não se preocupe, nossa equipe está aqui para ajudar</p>
                <a href="" title="Entrar em contato">
                    Entrar em contato
                </a>
                <a href="" title="Voltar a página inicial">
                    Voltar a página inicial
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>