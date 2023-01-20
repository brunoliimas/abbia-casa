<?php get_header(); ?>

<?php
$page = new Page();
$l = new Layout();
?>

<article>
    <div class="container mx-auto mb-[40px]">
        <h1 class="uppercase font-romie block text-center text-cor1 text-[55px] md:text-[66px] mb-[40]">
            <?php echo $page->title; ?>
        </h1>
        <?php if ($page->image) { ?>
            <img class="w-full mb-[16px] md:mb-[40px] lg:mb-[80px]" loading="lazy" src="<?php echo $page->image; ?>" alt="quem somos">
        <?php } ?>
        <div class="custom-post">
            <?php $page->content(); ?>
        </div>
    </div>
</article>

<?php get_footer(); ?>