# Portfolio Website

A modern, Instagram-inspired portfolio website built with HTML, CSS, JavaScript, Bootstrap, and PHP.

## Features

- **Home Page**: Welcome section with profile image and social links
- **About Me Page**: Personal information, work experience, education, and skills showcase
- **Photos Page**: Instagram-style photo gallery with hover effects
- **Contact Page**: PHP-powered contact form with server-side validation and message storage
- **Separate Pages**: Each section is now a dedicated page for better organization

## Technologies Used

- HTML5
- CSS3
- JavaScript (ES6+)
- Bootstrap 5.3.0
- PHP (Server-side form processing)
- Font Awesome 6.4.0

## PHP Features

- Server-side form validation
- Contact form message storage (saved to `messages/` directory)
- Session-based message display
- Secure form handling

## Setup Instructions

### Local Development

1. **Install a local PHP server** (choose one):
   - XAMPP (Windows/Mac/Linux)
   - WAMP (Windows)
   - MAMP (Mac)
   - PHP Built-in server

2. **Using PHP Built-in Server**:
   ```bash
   php -S localhost:8000
   ```
   Then open `http://localhost:8000` in your browser.

3. **Using XAMPP/WAMP/MAMP**:
   - Copy the project folder to `htdocs` (XAMPP) or `www` (WAMP/MAMP)
   - Start Apache server
   - Open `http://localhost/Vincentportfolio` in your browser

### File Structure

```
Vincentportfolio/
├── index.php              # Home page
├── about.php              # About Me page
├── photos.php             # Photos page
├── contact.php            # Contact page
├── process_contact.php    # Contact form handler
├── includes/
│   ├── header.php        # Common header/navigation
│   └── footer.php         # Common footer
├── styles.css             # Custom styles
├── script.js              # JavaScript functionality
├── profile-image.png      # Profile image
├── .htaccess              # Apache configuration
├── messages/              # Contact form messages (created automatically)
└── README.md              # This file
```

## Customization

### Changing Images
Replace the placeholder image URLs in `index.php`:
- Profile image: Line 62
- About section image: Line 82
- Photo gallery images: Lines 196-273

### Updating Content
- Edit text directly in `index.php`
- Modify colors in `styles.css` (search for color codes like `#0095f6`)
- Adjust animations and interactions in `script.js`

### Contact Form
- Messages are saved to the `messages/` directory
- To enable email sending, uncomment and configure the email section in `contact.php`
- Update the recipient email address in `contact.php`

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## Notes

- The contact form requires PHP to function properly
- Make sure PHP is enabled on your server
- The `messages/` directory will be created automatically when the first message is submitted
- For production, configure proper email settings in `contact.php`

Enjoy your new portfolio website!
