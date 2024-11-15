<?php get_header(); ?>

<main class="post-single">
    <div class="center">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="article">
                <header>
                    <h1 class="title"><?php the_title(); ?></h1>
                </header>

                <div class="metadata">
                    <time><?php the_time('Y-m-d'); ?></time>

                    <div>
                        <strong><?php echo __('Категорії'); ?>:</strong>
                        <?php the_category(); ?>
                    </div>

                    <div>
                        <strong><?php echo __('Автор'); ?>:</strong>
                        <?php the_author(); ?>
                    </div>
                </div>

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
