/**
 * AGES Theme Custom JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize Lucide Icons
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // Navbar Scroll Effect
    const navbar = document.getElementById('navbar');
    const navBrandText = document.getElementById('nav-brand-text');
    const navBrandSpan = document.getElementById('nav-brand-span');
    const navLinks = document.querySelectorAll('.nav-link');
    const menuBtn = document.getElementById('menu-btn');
    const menuIcon = document.getElementById('menu-icon');
    const mobileMenu = document.getElementById('mobile-menu');

    function updateNavbar() {
        if (window.scrollY > 50) {
            navbar.classList.add('bg-white', 'shadow-md', 'py-2');
            navbar.classList.remove('bg-transparent', 'py-4');
            
            if (navBrandText) {
                navBrandText.classList.remove('border-white');
                navBrandText.classList.add('border-primary');
            }
            
            if (navBrandSpan) {
                navBrandSpan.classList.remove('text-white', 'shadow-sm');
                navBrandSpan.classList.add('text-primary');
            }

            navLinks.forEach(link => {
               link.classList.remove('text-white', 'drop-shadow-md');
               link.classList.add('text-gray-800');
            });
            
            if (menuBtn) {
                menuBtn.classList.remove('text-accent');
                menuBtn.classList.add('text-primary');
            }

        } else {
            if (!mobileMenu || !mobileMenu.classList.contains('max-h-[500px]')) {
                navbar.classList.remove('bg-white', 'shadow-md', 'py-2');
                navbar.classList.add('bg-transparent', 'py-4');

                if (navBrandText) {
                    navBrandText.classList.add('border-white');
                    navBrandText.classList.remove('border-primary');
                }
                
                if (navBrandSpan) {
                    navBrandSpan.classList.add('text-white', 'shadow-sm');
                    navBrandSpan.classList.remove('text-primary');
                }

                navLinks.forEach(link => {
                    link.classList.add('text-white', 'drop-shadow-md');
                    link.classList.remove('text-gray-800');
                });
                 
                if (menuBtn) {
                    menuBtn.classList.add('text-accent');
                    menuBtn.classList.remove('text-primary');
                }
            }
        }
    }

    window.addEventListener('scroll', updateNavbar);

    // Mobile Menu Toggle
    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.contains('max-h-[500px]');
            
            if (isOpen) {
                // Close menu
                mobileMenu.classList.remove('max-h-[500px]', 'opacity-100');
                mobileMenu.classList.add('max-h-0', 'opacity-0');
                updateNavbar(); // Reset nav style based on scroll
            } else {
                // Open menu
                mobileMenu.classList.add('max-h-[500px]', 'opacity-100');
                mobileMenu.classList.remove('max-h-0', 'opacity-0');
                
                // Force navbar white when menu opens
                navbar.classList.add('bg-white', 'shadow-md', 'py-2');
                navbar.classList.remove('bg-transparent', 'py-4');
                if (navBrandText) {
                    navBrandText.classList.remove('border-white');
                    navBrandText.classList.add('border-primary');
                }
                if (navBrandSpan) {
                    navBrandSpan.classList.remove('text-white', 'shadow-sm');
                    navBrandSpan.classList.add('text-primary');
                }
                if (menuBtn) {
                    menuBtn.classList.remove('text-accent');
                    menuBtn.classList.add('text-primary');
                }
            }
        });

        // Close menu when clicking a link
        document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => {
                 mobileMenu.classList.remove('max-h-[500px]', 'opacity-100');
                 mobileMenu.classList.add('max-h-0', 'opacity-0');
                 updateNavbar();
            });
        });
    }
});
