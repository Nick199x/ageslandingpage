<?php
/**
 * Footer Template
 */
?>
    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8 border-t border-gray-800">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                        <?php
                        if ( has_custom_logo() ) {
                            the_custom_logo();
                        } else {
                            echo '<img src="https://ages.ph/wp-content/uploads/2019/07/AGES-LOGO-FINAL-1.png" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" class="h-10 w-auto object-contain"/>';
                        }
                        ?>
                        <div class="h-8 w-px bg-gray-700 mx-1"></div>
                        <span class="font-heading font-bold text-lg leading-tight max-w-[250px]"><?php bloginfo( 'name' ); ?></span>
                    </div>
                    <p class="text-gray-400 mb-6 max-w-md leading-relaxed">
                        <?php echo wp_kses_post( get_option( 'blogdescription' ) ); ?>
                    </p>
                    <div class="flex gap-4">
                        <div class="h-12 w-12 bg-gray-800 rounded flex items-center justify-center text-xs text-center text-gray-500 border border-gray-700">ISO<br/>9001</div>
                        <div class="h-12 w-12 bg-gray-800 rounded flex items-center justify-center text-xs text-center text-gray-500 border border-gray-700">DPWH<br/>Acc.</div>
                    </div>
                </div>
                <div>
                    <h4 class="font-heading font-bold text-lg mb-6 text-accent">Services</h4>
                    <ul class="space-y-3">
                        <?php
                        $services = get_posts( array(
                            'post_type' => 'service',
                            'posts_per_page' => 5,
                        ) );
                        foreach ( $services as $service ) {
                            echo '<li><a href="' . esc_url( get_permalink( $service ) ) . '" class="text-gray-400 hover:text-white transition-colors">' . esc_html( $service->post_title ) . '</a></li>';
                        }
                        ?>
                    </ul>
                </div>
                <div>
                    <h4 class="font-heading font-bold text-lg mb-6 text-accent">Contact</h4>
                    <ul class="space-y-3">
                        <li class="text-gray-400">+63 917 851 8280</li>
                        <li class="text-gray-400">(02) 7903 3965</li>
                        <li><a href="mailto:ages@ages.ph" class="text-gray-400 hover:text-white transition-colors">ages@ages.ph</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-500 text-sm">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
                <button onclick="window.scrollTo({ top: 0, behavior: 'smooth' })" class="flex items-center gap-2 text-sm font-bold text-accent hover:text-white transition-colors">
                    Back to Top <i data-lucide="arrow-up" width="16" height="16"></i>
                </button>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    </body>
</html>
