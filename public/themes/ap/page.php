<?php get_header(); ?>

<main class="page-main">
    <div class="center">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="article">
                <header>
                    <h1 class="title"><?php the_title(); ?></h1>
                </header>

                <?php the_content(); ?>
            </article>
            <?php endwhile; ?>
        <?php else : ?>
            <article>
                <p>Nothing to see.</p>
            </article>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
