<?php
/**
 * Header Template
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'font-sans text-gray-900 bg-white' ); ?>>
    <?php wp_body_open(); ?>
    
    <!-- Navigation -->
    <nav id="navbar" class="fixed w-full z-50 transition-all duration-300 bg-transparent py-4">
        <div class="container mx-auto px-4 md:px-8 flex justify-between items-center">
            <!-- Logo Area -->
            <div class="flex items-center">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-3 md:gap-4 group">
                    <?php
                    if ( has_custom_logo() ) {
                        the_custom_logo();
                    } else {
                        echo '<img src="https://ages.ph/wp-content/uploads/2019/07/AGES-LOGO-FINAL-1.png" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" class="h-12 md:h-14 w-auto object-contain"/>';
                    }
                    ?>
                    <div id="nav-brand-text" class="hidden md:flex flex-col border-l-2 pl-3 md:pl-4 border-white">
                        <span id="nav-brand-span" class="font-heading font-bold text-xs md:text-sm leading-tight max-w-[280px] text-white shadow-sm">
                            <?php bloginfo( 'name' ); ?>
                        </span>
                    </div>
                </a>
            </div>

            <!-- Desktop Nav -->
            <div class="hidden lg:flex items-center gap-8">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container' => 'ul',
                    'container_class' => 'flex space-x-6 lg:space-x-8',
                    'menu_class' => 'flex space-x-6 lg:space-x-8',
                    'link_before' => '<span class="nav-link text-sm font-semibold uppercase tracking-wide transition-colors hover:text-accent text-white drop-shadow-md">',
                    'link_after' => '</span>',
                    'fallback_cb' => function() {
                        echo '<ul class="flex space-x-6 lg:space-x-8">
                            <li><a href="#home" class="nav-link text-sm font-semibold uppercase tracking-wide transition-colors hover:text-accent text-white drop-shadow-md">Home</a></li>
                            <li><a href="#about" class="nav-link text-sm font-semibold uppercase tracking-wide transition-colors hover:text-accent text-white drop-shadow-md">About</a></li>
                            <li><a href="#services" class="nav-link text-sm font-semibold uppercase tracking-wide transition-colors hover:text-accent text-white drop-shadow-md">Services</a></li>
                            <li><a href="#projects" class="nav-link text-sm font-semibold uppercase tracking-wide transition-colors hover:text-accent text-white drop-shadow-md">Projects</a></li>
                            <li><a href="#contact" class="nav-link text-sm font-semibold uppercase tracking-wide transition-colors hover:text-accent text-white drop-shadow-md">Contact</a></li>
                        </ul>';
                    }
                ) );
                ?>
                <a href="#contact" class="flex items-center gap-2 bg-accent hover:bg-yellow-500 text-primary font-bold py-2 px-5 rounded transition-all transform hover:scale-105 shadow-lg">
                    <i data-lucide="phone" width="18" height="18"></i>
                    <span>Book a Test</span>
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <button id="menu-btn" class="lg:hidden transition-colors text-accent" aria-label="Toggle menu">
                <i data-lucide="menu" width="32" height="32" id="menu-icon"></i>
            </button>
        </div>

        <!-- Mobile Nav Overlay -->
        <div id="mobile-menu" class="lg:hidden absolute top-full left-0 w-full bg-white shadow-xl border-t border-gray-100 overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
            <div class="flex flex-col gap-4 py-6 px-4">
                <a href="#home" class="mobile-link text-primary font-heading font-bold text-lg border-b border-gray-100 pb-2 hover:text-accent transition-colors">Home</a>
                <a href="#about" class="mobile-link text-primary font-heading font-bold text-lg border-b border-gray-100 pb-2 hover:text-accent transition-colors">About</a>
                <a href="#services" class="mobile-link text-primary font-heading font-bold text-lg border-b border-gray-100 pb-2 hover:text-accent transition-colors">Services</a>
                <a href="#projects" class="mobile-link text-primary font-heading font-bold text-lg border-b border-gray-100 pb-2 hover:text-accent transition-colors">Projects</a>
                <a href="#contact" class="mobile-link text-primary font-heading font-bold text-lg border-b border-gray-100 pb-2 hover:text-accent transition-colors">Contact</a>
                <a href="#contact" class="bg-accent hover:bg-yellow-500 text-primary font-bold py-3 px-4 rounded text-center mt-2 shadow-md transition-all hover:scale-[1.02]">Contact Us Now</a>
            </div>
        </div>
    </nav>
