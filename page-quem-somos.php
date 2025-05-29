<?php get_header(); ?>

<?php
$page = new Page();
$l = new Layout();
?>

<article>
    <div class="container mx-auto mb-[40px]">
        <img class="w-full mb-[16px] md:mb-[40px] lg:mb-[80px]" loading="lazy" src="<?php echo $page->image; ?>" alt="quem somos">
        <div class="block md:flex gap-[30px]">
            <div class="w-full md:w-[30%]">
                <img class="block w-[64px] md:w-[104px] lg:w-[146px] mx-auto" loading="lazy" src="<?php echo $l->getFile('/assets/logo/AbbiaCasa-01.svg') ?>" alt="Abbia Casa">
            </div>
            <div class="custom-post">
                <div class="px-4 md:px-8">
                    <?php $page->content(); ?>
                </div>
            </div>
        </div>
    </div>
</article>

<?php get_footer(); ?>