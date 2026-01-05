<?php
/**
 * Single Project Template
 */
get_header();
?>

<div class="pt-32 pb-20 bg-white">
    <div class="container mx-auto px-4 md:px-8">
        <div class="max-w-4xl">
            <a href="<?php echo esc_url( post_type_archive_link( 'project' ) ); ?>" class="text-secondary hover:text-primary font-bold mb-6 inline-flex items-center gap-2">
                <i data-lucide="arrow-left" width="18" height="18"></i>
                Back to Projects
            </a>
            
            <h1 class="font-heading font-bold text-5xl text-primary mb-6">
                <?php the_title(); ?>
            </h1>
            
            <?php
            $categories = get_the_terms( get_the_ID(), 'project_category' );
            if ( $categories && ! is_wp_error( $categories ) ) {
                echo '<div class="mb-6 flex gap-2">';
                foreach ( $categories as $category ) {
                    echo '<span class="bg-accent text-primary px-3 py-1 text-sm font-bold rounded">' . esc_html( $category->name ) . '</span>';
                }
                echo '</div>';
            }
            ?>
            
            <?php if ( has_post_thumbnail() ) { ?>
                <div class="mb-10 rounded-lg overflow-hidden shadow-lg">
                    <?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-auto' ) ); ?>
                </div>
            <?php } ?>
            
            <div class="prose prose-lg max-w-none text-gray-700">
                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post();
                        the_content();
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
