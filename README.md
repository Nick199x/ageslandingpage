# AGES WordPress Theme - Setup Instructions

## Theme Overview
This is a custom WordPress theme for AGES (Advanced Geotechnical Engineering Services) built with:
- Tailwind CSS for styling
- Lucide Icons for iconography
- Custom Post Types for Services and Projects
- Responsive design with mobile menu

## Installation Steps

### 1. Upload Theme to WordPress
1. Connect to your WordPress site via FTP or File Manager
2. Navigate to: `/wp-content/themes/`
3. Upload the entire `ages-theme` folder

### 2. Activate Theme
1. Go to WordPress Admin Dashboard
2. Navigate to **Appearance > Themes**
3. Find "AGES - Geotechnical Engineering" theme
4. Click **Activate**

### 3. Configure Basic Settings
1. Go to **Settings > General**
2. Set Site Title to "AGES - Advanced Geotechnical Engineering Services" (or your preference)
3. Set Tagline to your company tagline
4. Save changes

### 4. Set Home Page
1. Create a new Page titled "Home"
2. Go to **Settings > Reading**
3. Select "A static page" option
4. Set Front page to "Home"
5. Save changes

### 5. Set Up Navigation Menu
1. Go to **Appearance > Menus**
2. Create a new menu called "Main Navigation"
3. Add these menu items:
   - Home (link to homepage)
   - About (create a page or use "#about")
   - Services (link to Services archive)
   - Projects (link to Projects archive)
   - Contact (create a page or use "#contact")
4. Go to **Appearance > Menus > Display location**
5. Assign menu to "Primary Menu"
6. Save menu

### 6. Create Services
1. Go to **Services > Add New Service**
2. Add service title and description
3. Add featured image (optional)
4. In the sidebar, select a Service Category
5. (Optional) Add a custom field `_service_icon` with a Lucide icon name (default: "drill")
6. Publish

### 7. Create Projects
1. Go to **Projects > Add New Project**
2. Add project title and description
3. Add featured image (recommended for nice display)
4. In the sidebar, select a Project Category
5. Publish

### 8. Customize Logo
1. Go to **Appearance > Customize**
2. Click on **Site Identity**
3. Upload your logo (recommended size: 200px x 100px)
4. Save & Publish

## Features

### Services Post Type
- Custom post type for individual services
- Taxonomy: Service Categories
- Custom meta field for Lucide icons
- Services display on homepage and archive

### Projects Post Type
- Custom post type for featured projects
- Taxonomy: Project Categories
- Featured image support
- Projects display on homepage and archive

### Custom Pages
- **Front Page**: Full homepage with sections (hero, about, services, projects, contact)
- **Service Archive**: Grid of all services
- **Project Archive**: Grid of all projects

## Customization

### Change Colors
Edit `functions.php` and update the Tailwind color config:
```php
colors: {
    primary: '#620d0f',      // Dark red
    secondary: '#A1353A',    // Medium red
    accent: '#D4AF37',       // Gold
    neutral: '#f3f4f6',      // Light gray
},
```

### Update Contact Information
Edit `footer.php` and `front-page.php` to update:
- Phone numbers
- Email address
- Headquarters location

### Change Service Icons
Each service can have a custom Lucide icon. Available icons include:
- drill
- flask-conical
- layers
- radar
- audio-waveform
- monitor-check
- map
- magnet
- vibrate

Add icon via custom field `_service_icon` when creating/editing services.

## File Structure
```
ages-theme/
├── style.css                 # Theme header and basic styles
├── functions.php             # Theme setup and functionality
├── header.php                # Header template
├── footer.php                # Footer template
├── front-page.php            # Homepage template
├── index.php                 # Default page template
├── archive.php               # Services/Projects archive
├── single-service.php        # Single service page
├── single-project.php        # Single project page
└── assets/
    └── js/
        └── custom.js         # Custom JavaScript
```

## Plugins Recommended (Optional)
- **Advanced Custom Fields (ACF)**: For additional custom fields
- **Yoast SEO**: For SEO optimization
- **WP Rocket**: For caching and performance
- **Contact Form 7**: For contact forms

## Support
For issues or questions, contact your theme developer.

## License
GPL-2.0-or-later
