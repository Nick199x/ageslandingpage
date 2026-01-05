<?php
/**
 * Main Index Template
 */
get_header();
?>

<div class="pt-32 pb-20 bg-white">
    <div class="container mx-auto px-4 md:px-8">
        <h1 class="font-heading font-bold text-5xl text-primary mb-12">
            <?php
            if ( is_search() ) {
                printf( esc_html__( 'Search Results for: %s', 'ages-theme' ), '<span class="text-secondary">' . get_search_query() . '</span>' );
            } else {
                bloginfo( 'name' );
            }
            ?>
        </h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    ?>
                    <article class="bg-neutral rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <h2 class="font-heading font-bold text-2xl text-primary mb-3">
                            <a href="<?php the_permalink(); ?>" class="hover:text-secondary transition-colors">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div class="text-sm text-gray-600 mb-4">
                            <?php the_time( 'F j, Y' ); ?>
                        </div>
                        <div class="text-gray-700 mb-4">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-secondary hover:text-primary font-bold">
                            Read More
                            <i data-lucide="arrow-right" width="16" height="16" class="ml-2"></i>
                        </a>
                    </article>
                    <?php
                }
                
                the_posts_pagination();
            } else {
                echo '<p class="text-gray-600">No posts found.</p>';
            }
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
