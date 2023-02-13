<?php get_header(); ?>

<?php
$page = new Page();
?>

<article>
    <div class="w-[90%] lg:w-[700px] px-4  mx-auto">
        <h1 class="uppercase font-romie block text-center text-cor1 text-[55px] md:text-[66px] mb-[40px]">
            <?php echo $page->title; ?>
        </h1>
        <div class="custom-post">
            <?php $page->content(); ?>
        </div>
    </div>
</article>

<?php get_footer(); ?>