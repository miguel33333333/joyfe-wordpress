<?php get_header(); ?>

<main style="text-align:center; max-width:800px; margin:0 auto;">

    <section class="hero">
        <h1>Bienvenido a mi tema de WordPress</h1>
        <p>Este es un tema básico creado para la práctica del colegio Joyfe.</p>
    </section>

    <section class="ultimos-articulos">
        <h2>Últimos artículos</h2>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article style="border:1px solid #ddd; padding:20px; border-radius:10px; margin-bottom:20px;">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>">Leer más</a>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No hay artículos todavía.</p>
        <?php endif; ?>
    </section>

</main>

<?php get_footer(); ?>
