<?php
/**
 * Archive/Index Template for Services & Projects
 */
get_header();
?>

<div class="pt-32 pb-20 bg-white">
    <div class="container mx-auto px-4 md:px-8">
        <h1 class="font-heading font-bold text-5xl text-primary mb-12">
            <?php
            if ( is_post_type_archive( 'service' ) ) {
                echo 'Our Services';
            } elseif ( is_post_type_archive( 'project' ) ) {
                echo 'Featured Projects';
            } else {
                the_archive_title();
            }
            ?>
        </h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    $icon = get_post_meta( get_the_ID(), '_service_icon', true ) ?: 'drill';
                    ?>
                    <div class="group bg-white rounded-lg p-8 shadow-sm hover:shadow-2xl hover:scale-[1.02] transition-all duration-300 border-t-4 border-transparent hover:border-primary">
                        <div class="w-14 h-14 bg-neutral rounded-full flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                            <i data-lucide="<?php echo esc_attr( is_post_type_archive( 'service' ) ? $icon : 'image-alt' ); ?>" width="28" height="28" class="text-primary group-hover:text-white transition-colors"></i>
                        </div>
                        <h3 class="font-heading font-bold text-xl text-gray-900 mb-3 group-hover:text-primary transition-colors">
                            <?php the_title(); ?>
                        </h3>
                        <p class="text-gray-600 leading-relaxed mb-8">
                            <?php echo wp_kses_post( wp_trim_words( get_the_content(), 30 ) ); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-white bg-secondary hover:bg-primary font-bold text-sm uppercase tracking-wide py-3 px-6 rounded transition-colors shadow-md group">
                            Read More
                            <i data-lucide="arrow-right" width="16" height="16" class="ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                    <?php
                }
                
                the_posts_pagination();
            }
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
