<?php get_header(); ?>

<?php
$summaries = [
    "Entrega",
    "Condições de retorno",
    "Entrega",
    "Condições de retorno",
    "Entrega",
    "Condições de retorno",
    "Entrega",
    "Condições de retorno",
];
?>
<article>
    <div>
        <h1>FAQ</h1>
        <h2>Como funciona</h2>
        <?php foreach($summaries as $title) { ?>
            <details>
                <summary><?php echo $title; ?></summary>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A voluptatum earum animi!
                </p>
            </details>
        <?php } ?>
        <h2>Retorno</h2>
        <?php foreach($summaries as $title) { ?>
            <details>
                <summary><?php echo $title; ?></summary>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A voluptatum earum animi!
                </p>
            </details>
        <?php } ?>
        <h2>Privacidade</h2>
        <?php foreach($summaries as $title) { ?>
            <details>
                <summary><?php echo $title; ?></summary>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A voluptatum earum animi!
                </p>
            </details>
        <?php } ?>
    </div>
</article>

<?php get_footer(); ?>