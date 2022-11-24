<?php get_header(); ?>

<?php
    $page = new Page();
?>

<section>
    <article class="container mx-auto">
        <?php echo $page->content(); ?>
    </article>
</section>

<?php include __DIR__ . "/inc/newsletter.php"; ?>

<?php include __DIR__ . "/inc/shop.php"; ?>

<?php get_footer(); ?>