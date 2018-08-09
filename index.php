<?php get_header(); ?>

<div class="grid-x grid-padding-x mb18-padding-y">
    <div class="cell small-12 large-9">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('post-list box-style'); ?> itemscope itemtype="http://schema.org/Article">
                <div class="mb18-listicle__heading">
                    <a href="<?php the_permalink() ?>">
                        <?php the_title(); ?>
                    </a>
                </div>
                <div class="mb18-listicle__snippet" itemprop="articleBody" data-type-cleanup="true">
                    <?php the_content('Continue reading &rarr;'); ?>
                </div>
                <div class="mb18-listicle__date">
                    <time class="post-date" datetime="<?php the_time('Y-m-d'); ?>" itemprop="datePublished">
                        <?php the_time(__('F j, Y')); ?>
                    </time>
                </div>
            </article>
        <?php endwhile; endif; ?>
    </div>
    <!-- <div class="cell small-4" style="background: #ddd;">
        ...
    </div> -->
</div>

<?php get_footer(); ?>
