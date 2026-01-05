<?php
/**
 * Front Page / Homepage Template
 */
get_header();
?>

    <!-- Hero Section -->
    <section id="home" class="relative h-screen min-h-[600px] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=1920&auto=format&fit=crop" alt="Heavy Geotechnical Foundation Work" class="w-full h-full object-cover"/>
            <div class="absolute inset-0 bg-gradient-to-r from-primary/95 via-primary/80 to-black/30"></div>
        </div>

        <div class="container mx-auto px-4 md:px-8 relative z-10 pt-20">
            <div class="max-w-4xl text-white">
                <div class="flex items-center gap-2 mb-4">
                    <span class="bg-accent text-primary px-3 py-1 text-xs font-bold uppercase tracking-wider rounded-sm">Since 1986</span>
                    <span class="text-gray-200 text-sm font-medium tracking-wide uppercase">The Philippines' Oldest Pile Testing Leader</span>
                </div>

                <h1 class="font-heading font-bold text-4xl md:text-6xl lg:text-7xl leading-tight mb-6">
                    Expertise You Can <span class="text-accent">Trust</span>. <br />
                    Foundations Built to <span class="text-accent">Last</span>.
                </h1>

                <p class="font-sans text-lg md:text-xl text-gray-200 mb-8 max-w-2xl leading-relaxed">
                    As the pioneer in dynamic pile testing and geotechnical engineering, AGES delivers precision that stands the test of time. We bridge tradition and innovation to safeguard your infrastructure.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 mb-12">
                    <a href="#contact" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-yellow-500 text-primary font-heading font-bold text-lg py-4 px-8 rounded shadow-lg transition-transform hover:-translate-y-1">
                        Contact Us for Pile Testing
                        <i data-lucide="chevron-right" width="20" height="20"></i>
                    </a>
                    <a href="#services" class="inline-flex items-center justify-center gap-2 bg-transparent border-2 border-white hover:bg-white hover:text-primary text-white font-heading font-bold text-lg py-4 px-8 rounded transition-colors">
                        Explore Services
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 border-t border-white/20 pt-8">
                    <div class="flex items-start gap-3">
                        <i data-lucide="shield-check" class="text-accent shrink-0 mt-1" width="24" height="24"></i>
                        <div>
                            <h4 class="font-heading font-bold text-white text-lg">Safety First</h4>
                            <p class="text-sm text-gray-300">Prioritizing structural integrity in every test.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <i data-lucide="activity" class="text-accent shrink-0 mt-1" width="24" height="24"></i>
                        <div>
                            <h4 class="font-heading font-bold text-white text-lg">Precise Analysis</h4>
                            <p class="text-sm text-gray-300">Advanced tools for accurate soil investigation.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <i data-lucide="trending-up" class="text-accent shrink-0 mt-1" width="24" height="24"></i>
                        <div>
                            <h4 class="font-heading font-bold text-white text-lg">38+ Years</h4>
                            <p class="text-sm text-gray-300">Unmatched local expertise & tradition.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 md:py-28 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <div class="grid grid-cols-2 gap-4">
                        <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?q=80&w=600&auto=format&fit=crop" alt="Piling Rig" class="rounded-lg shadow-xl w-full h-64 md:h-80 object-cover mt-12"/>
                        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=600&auto=format&fit=crop" alt="Geotechnical Engineer" class="rounded-lg shadow-xl w-full h-64 md:h-80 object-cover"/>
                    </div>
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-primary text-white p-6 rounded-lg shadow-2xl text-center border-4 border-white">
                        <span class="block text-5xl font-heading font-bold text-accent">38+</span>
                        <span class="block text-sm uppercase tracking-widest font-semibold mt-1">Years of<br/>Excellence</span>
                    </div>
                </div>

                <div>
                    <h4 class="text-secondary font-bold uppercase tracking-wider mb-2">Who We Are</h4>
                    <h2 class="font-heading font-bold text-4xl md:text-5xl text-gray-900 mb-6 leading-tight">
                        Foundational Partner for <br />
                        <span class="text-primary">Resilient Infrastructure</span>
                    </h2>
                    
                    <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                        AGES positions itself as the foundational partner for resilient infrastructure in the Philippines. As the pioneer in dynamic pile testing and a leader in geotechnical engineering, we bridge tradition and innovation to deliver precise, safety-focused services that strengthen every construction project.
                    </p>

                    <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                        With over 38 years of local expertise backed by modern technology, AGES ensures projects aren't simply built—but built to last against earthquakes, soil challenges, and environmental demands. We monitor, analyze, and advise every step of the way.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-neutral p-4 rounded border-l-4 border-accent">
                            <h5 class="font-heading font-bold text-primary mb-1">Nationwide Reach</h5>
                            <p class="text-sm text-gray-600">Servicing major infrastructure projects across the entire Philippine archipelago.</p>
                        </div>
                        <div class="bg-neutral p-4 rounded border-l-4 border-accent">
                            <h5 class="font-heading font-bold text-primary mb-1">Global Standards</h5>
                            <p class="text-sm text-gray-600">Equipment and methodologies calibrated to international safety standards.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-neutral">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h4 class="text-secondary font-bold uppercase tracking-wider mb-2">Our Core Expertise</h4>
                <h2 class="font-heading font-bold text-4xl text-primary mb-4">Timely and Reliable Pile Testing Services</h2>
                <p class="text-gray-600 text-lg">
                    PDA (Pile Dynamic Analysis, ASTM D4945), PIT (Pile Integrity test- Low Strain, ASTM D5882), Crosshole Sonic Logging (CSL ASTM, D6760) and other pile testing requirements involving micro-piles, bored piles, precast concrete driven pile, and steel piles among others.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $services = get_posts( array(
                    'post_type' => 'service',
                    'posts_per_page' => -1,
                ) );
                
                if ( $services ) {
                    foreach ( $services as $service ) {
                        // Get custom fields
                        $image = get_post_meta( $service->ID, '_service_image', true );
                        $astm_code = get_post_meta( $service->ID, '_astm_code', true );
                        
                        if ( ! $image ) {
                            $image = has_post_thumbnail( $service->ID ) 
                                ? get_the_post_thumbnail_url( $service->ID, 'large' )
                                : get_template_directory_uri() . '/assets/images/placeholder.jpg';
                        }
                        ?>
                        <div class="group cursor-pointer relative rounded-lg overflow-hidden shadow-lg h-[350px]">
                            <!-- Image Only (Default State) -->
                            <img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $service->post_title ); ?>" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110"/>
                            
                            <!-- Overlay that appears on hover -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-90 group-hover:from-primary/90 group-hover:via-primary/70 group-hover:to-primary/30 transition-all duration-500"></div>
                            
                            <!-- Plus button appears on hover -->
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-75">
                                <div class="w-16 h-16 rounded-full bg-accent text-primary flex items-center justify-center shadow-lg transform scale-50 group-hover:scale-100 transition-transform duration-300">
                                    <i data-lucide="plus" width="32" height="32" stroke-width="3"></i>
                                </div>
                            </div>
                            
                            <!-- Details appear on hover from bottom -->
                            <div class="absolute inset-x-0 bottom-0 p-6 flex flex-col justify-end translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                                <p class="text-accent text-xs font-bold uppercase tracking-wider mb-2">Service</p>
                                <h3 class="font-heading font-bold text-2xl text-white mb-2">
                                    <?php echo esc_html( $service->post_title ); ?>
                                </h3>
                                <?php if ( $astm_code ) { ?>
                                <p class="text-white text-sm font-semibold mb-3">
                                    <?php echo esc_html( $astm_code ); ?>
                                </p>
                                <?php } ?>
                                <p class="text-white text-sm leading-relaxed mb-3">
                                    <?php echo wp_kses_post( wp_trim_words( $service->post_content, 25 ) ); ?>
                                </p>
                                <a href="<?php echo esc_url( get_permalink( $service ) ); ?>" class="inline-flex items-center text-white text-sm font-bold border-b-2 border-accent pb-1 hover:text-accent transition-colors w-fit">
                                    Learn More <i data-lucide="arrow-right" width="16" height="16" class="ml-2"></i>
                                </a>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-20 bg-primary text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-secondary opacity-20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-accent opacity-10 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-4 md:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h4 class="text-accent font-bold uppercase tracking-wider mb-2">Why Choose AGES</h4>
                    <h2 class="font-heading font-bold text-4xl mb-6">Seamless Partnership & Excellence</h2>
                    <p class="text-gray-300 text-lg mb-8 leading-relaxed">
                        We don't just test; we partner. We monitor, analyze, and advise—every step of the way—to ensure your vision rises on solid ground. Our commitment to tailored geotechnical services prioritizes safety, timeliness, and international standards.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4"><i data-lucide="check-circle-2" class="text-accent shrink-0 mt-1"></i><span class="font-medium text-lg">Precision and safety in every reading</span></div>
                        <div class="flex items-start gap-4"><i data-lucide="check-circle-2" class="text-accent shrink-0 mt-1"></i><span class="font-medium text-lg">Cutting-edge testing equipment</span></div>
                        <div class="flex items-start gap-4"><i data-lucide="check-circle-2" class="text-accent shrink-0 mt-1"></i><span class="font-medium text-lg">Local expertise with global-calibrated standards</span></div>
                        <div class="flex items-start gap-4"><i data-lucide="check-circle-2" class="text-accent shrink-0 mt-1"></i><span class="font-medium text-lg">Reliable monitoring, reporting, and advisory</span></div>
                    </div>
                </div>
                
                <div class="relative h-full min-h-[400px] flex items-center justify-center">
                    <div class="relative w-full max-w-md aspect-[4/5] bg-gray-800 rounded-lg overflow-hidden shadow-2xl border border-white/10">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/image13.jpeg" alt="Technical Analysis" class="w-full h-full object-cover opacity-90"/>
                        <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 to-transparent">
                            <p class="font-heading font-bold text-2xl text-white">"Tailored geotechnical services that prioritize safety."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 border-b border-gray-200 pb-6">
                <div class="max-w-2xl">
                    <h4 class="text-secondary font-bold uppercase tracking-wider mb-2">Featured Projects</h4>
                    <h2 class="font-heading font-bold text-3xl md:text-4xl text-primary">Solid Ground for Major Developments</h2>
                </div>
                <a href="<?php echo esc_url( post_type_archive_link( 'project' ) ); ?>" class="hidden md:inline-flex items-center gap-2 bg-neutral hover:bg-gray-200 text-primary font-bold py-3 px-6 rounded transition-colors mt-4 md:mt-0">
                    View All Projects
                    <i data-lucide="arrow-right" width="18" height="18"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $projects = get_posts( array(
                    'post_type' => 'project',
                    'posts_per_page' => 4,
                ) );
                
                if ( $projects ) {
                    foreach ( $projects as $project ) {
                        $image = has_post_thumbnail( $project->ID ) 
                            ? get_the_post_thumbnail_url( $project->ID, 'large' )
                            : 'https://images.unsplash.com/photo-1594732832278-abd644401426?q=80&w=600&auto=format&fit=crop';
                        
                        $category = get_the_terms( $project->ID, 'project_category' );
                        $category_name = ( $category && ! is_wp_error( $category ) ) ? $category[0]->name : 'General';
                        ?>
                        <div class="group cursor-pointer relative rounded-xl overflow-hidden shadow-lg h-[450px]">
                            <img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $project->post_title ); ?>" class="w-full h-full object-cover transform transition-transform duration-700 ease-in-out group-hover:scale-110"/>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-90 group-hover:from-primary/90 group-hover:via-primary/70 group-hover:to-primary/30 transition-all duration-500"></div>
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-75 pointer-events-none">
                                <div class="w-16 h-16 rounded-full bg-accent text-primary flex items-center justify-center shadow-lg transform scale-50 group-hover:scale-100 transition-transform duration-300">
                                    <i data-lucide="plus" width="32" height="32" stroke-width="3"></i>
                                </div>
                            </div>
                            <div class="absolute inset-x-0 bottom-0 p-8 flex flex-col justify-end translate-y-6 group-hover:translate-y-0 transition-transform duration-500 ease-out">
                                <p class="text-accent text-xs font-bold uppercase tracking-wider mb-2 drop-shadow-md"><?php echo esc_html( $category_name ); ?></p>
                                <h3 class="font-heading font-bold text-2xl text-white mb-4 leading-tight drop-shadow-md group-hover:mb-2 transition-all duration-300">
                                    <?php echo esc_html( $project->post_title ); ?>
                                </h3>
                                <div class="h-0 group-hover:h-auto opacity-0 group-hover:opacity-100 overflow-hidden transition-all duration-300 delay-100">
                                    <a href="<?php echo esc_url( get_permalink( $project ) ); ?>" class="inline-flex items-center text-white text-sm font-bold border-b-2 border-accent pb-1">
                                        View Details <i data-lucide="arrow-right" width="16" height="16" class="ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            
             <div class="mt-8 md:hidden text-center">
                 <a href="<?php echo esc_url( post_type_archive_link( 'project' ) ); ?>" class="inline-block bg-neutral hover:bg-gray-200 text-primary font-bold py-3 px-6 rounded transition-colors">
                    View All Projects
                 </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-neutral">
        <div class="container mx-auto px-4 md:px-8">
            <div class="bg-accent rounded-2xl shadow-2xl overflow-hidden flex flex-col lg:flex-row">
                <!-- CTA Side -->
                <div class="lg:w-2/5 p-10 md:p-14 bg-accent flex flex-col justify-center relative">
                    <h2 class="font-heading font-bold text-4xl text-primary mb-6">Contact Us for Pile & Foundations Testing</h2>
                    <p class="text-primary/80 text-lg font-medium mb-8">Ready to secure your project's foundation? Get a quote or book a test with our expert engineers today.</p>
                    <a href="mailto:ages@ages.ph" class="inline-flex items-center justify-center gap-3 bg-primary text-white font-bold text-lg py-4 px-8 rounded hover:bg-primary/90 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Request a Quote <i data-lucide="arrow-right" width="20" height="20"></i>
                    </a>
                    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10 pointer-events-none"></div>
                </div>

                <!-- Details Side -->
                <div class="lg:w-3/5 bg-primary text-white p-10 md:p-14 flex flex-col justify-center">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div class="flex flex-col gap-4">
                            <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-accent"><i data-lucide="phone" width="24" height="24"></i></div>
                            <div>
                                <h5 class="text-accent font-bold uppercase tracking-wider text-sm mb-2">Mobile (Primary)</h5>
                                <a href="tel:+639178518280" class="block text-2xl font-heading font-bold hover:text-accent transition-colors">+63 917 851 8280</a>
                                <a href="tel:+639204124450" class="block text-xl font-heading font-medium text-gray-300 hover:text-accent transition-colors mt-1">+63 920 412 4450</a>
                            </div>
                        </div>

                        <div class="flex flex-col gap-4">
                            <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-accent"><i data-lucide="phone" width="24" height="24"></i></div>
                            <div>
                                <h5 class="text-accent font-bold uppercase tracking-wider text-sm mb-2">Manila Landline</h5>
                                <a href="tel:0279033965" class="block text-2xl font-heading font-bold hover:text-accent transition-colors">(02) 7903 3965</a>
                            </div>
                        </div>

                        <div class="flex flex-col gap-4">
                            <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-accent"><i data-lucide="mail" width="24" height="24"></i></div>
                            <div>
                                <h5 class="text-accent font-bold uppercase tracking-wider text-sm mb-2">Email Us</h5>
                                <a href="mailto:ages@ages.ph" class="block text-2xl font-heading font-bold hover:text-accent transition-colors break-words">ages@ages.ph</a>
                            </div>
                        </div>

                        <div class="flex flex-col gap-4">
                            <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-accent"><i data-lucide="map-pin" width="24" height="24"></i></div>
                            <div>
                                <h5 class="text-accent font-bold uppercase tracking-wider text-sm mb-2">Headquarters</h5>
                                <p class="text-lg text-gray-300">Quezon City, Philippines</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
