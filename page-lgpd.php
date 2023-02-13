<?php get_header(); ?>

<?php
$page = new Page();
$l = new Layout();
?>

<article>
    <div class="w-[90vw] mx-auto">
        <h1 class="block text-center font-romie text-cor1 text-[55px] md:text-[66px] mb-[40px] lg:mb-[80px]"> 
            <?php echo $page->title; ?> 
        </h1>
        <div class="custom-post">
            <?php $page->content(); ?>
        </div>
    </div>
</article>

<?php get_footer(); ?>