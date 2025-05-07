<?php get_header(); ?>

<?php
$page = new Page();
$l = new Layout();
?>

<article>
    <!-- <div class="w-[90vw] mx-auto"> -->
    <div class="container mx-auto mb-[40px]">
        <h1 class="block text-center font-romie text-cor1 text-[55px] md:text-[66px] mb-[40px] lg:mb-[80px]"> 
            <?php echo $page->title; ?> 
        </h1>
        <div class="block md:flex gap-[30px]">
            <div class="custom-post">
                <?php $page->content(); ?>
            </div>
        </div>
    </div>
</article>

<style>
    details summary::-webkit-details-marker {
        display: none;
    }

    details summary {
        color: #EE705A;
        width: 100%;
        padding: 0.5rem 0;
        border-top: 1px solid #EE705A;                
        position: relative;
        cursor: pointer;
        font-size: 2rem;
        font-weight: 300;
        list-style: none;
    }

    details:last-of-type {
        border-bottom: 1px solid #EE705A;   
        margin-bottom: 3em;     
    }

    details summary:after {        
        content: "+";
        color: #EE705A;
        position: absolute;
        font-size: 2rem;
        line-height: 0;
        margin-top: 1.5rem;
        margin-right: 1rem;
        right: 0;
        font-weight: 200;
        transform-origin: center;
        transition: 200ms linear;
    }

    details[open] summary:after {
        transform: rotate(45deg);
        font-size: 2rem;
    }

    details summary {
        outline: 0;
    }

    details p {
        font-size: 0.95rem;
        margin: 0 0 0;
        padding: 0;
    }
</style>

<?php get_footer(); ?>