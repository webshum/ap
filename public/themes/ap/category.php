<?php

get_header();

$current_category = get_queried_object();
?>

<main class="page-category">
    <div class="center">
        <h1 class="title"><?php echo $current_category->name; ?></h1>

        <div class="description"><?php echo $current_category->description; ?></div>

        <div class="grid">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post-item">
                    <a href="<?php the_permalink(); ?>" class="thumb">
                        <?php the_post_thumbnail('medium'); ?>
                    </a>

                    <h2 class="title"><?php the_title(); ?></h2>

                    <div class="foot">
                        <time><?php the_time('Y-m-d'); ?></time>

                        <a href="<?php the_permalink(); ?>" class="btn">
                            <span><?php echo __('Читати') ?></span>
                            <svg><use xlink:href="#arr"></use></svg>
                        </a>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php else : ?>
                <article>
                    <p>Nothing to see.</p>
                </article>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
