<?php get_header(); ?>

<main style="text-align:center; max-width:800px; margin:0 auto;">
    <article style="max-width:600px; margin:0 auto; border:1px solid #ddd; padding:20px; border-radius:10px;">
        <h1><?php the_title(); ?></h1>
        <div>
            <?php the_content(); ?>
        </div>
    </article>
</main>

<?php get_footer(); ?>
