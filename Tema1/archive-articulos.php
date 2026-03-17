<?php get_header(); ?>

<main style="text-align:center; max-width:800px; margin:0 auto;">
    <h1>Artículos</h1>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article style="border:1px solid #ddd; padding:20px; border-radius:10px; margin-bottom:20px; max-width:600px; margin-left:auto; margin-right:auto;">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Leer más</a>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No hay artículos disponibles.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
