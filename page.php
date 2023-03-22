<?php
if (is_product_category()) {
    include __DIR__ . "/category.php";
    die;
}
?>
<?php get_header(); ?>

<?php
$page = new Page();
?>

<section>
    <article class="container mx-auto">
        <?php echo $page->content(); ?>
    </article>
</section>


<?php get_footer(); ?>