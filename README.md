# Savi Travel - SEO-Optimized Travel Agency Website

A complete, production-ready travel agency website built with Laravel 12, featuring SEO optimization, admin panel, and modern UI design.

## Features

### Public Website
- **Home Page**: Hero section, featured packages, popular destinations, testimonials
- **Travel Packages**: SEO-friendly listing with filters, pagination
- **Package Details**: Dynamic meta tags, Schema.org markup, WhatsApp inquiry
- **Destinations**: SEO pages with associated packages
- **About Us**: Company information and team
- **Contact**: Form with honeypot spam protection, Google Maps integration

### Admin Panel
- Secure authentication
- Dashboard with statistics
- CRUD for packages with image upload
- CRUD for destinations
- Inquiry management with status tracking
- SEO fields for all content

### SEO Features
- Server-side rendering (Blade templates)
- Dynamic meta titles and descriptions
- Open Graph and Twitter Card tags
- Schema.org JSON-LD markup
- Clean, semantic URLs
- Automatic sitemap.xml generation
- robots.txt
- Image alt tags
- Mobile-first responsive design

### Performance
- Laravel query caching
- Efficient database queries
- Lazy loading images
- Gzip compression ready
- CDN-ready static assets
## Tech Stack

- **Framework**: Laravel 12 (PHP 8.2+)
- **Templating**: Blade (SSR)
- **Styling**: Tailwind CSS
- **Database**: MySQL
- **Server**: Nginx

## Installation

### Requirements
- PHP 8.2+
- Composer
- MySQL 8.0+
- Node.js 18+
- Nginx

### Setup

1. Clone the repository:
```bash
git clone https://github.com/your-repo/savitravel.git
cd savitravel
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install Node dependencies:
```bash
npm install
```

4. Copy environment file:
```bash
cp .env.example .env
```

5. Generate application key:
```bash
php artisan key:generate
```

6. Configure your database in `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=savitravel
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

7. Run migrations:
```bash
php artisan migrate
```

8. (Optional) Seed sample data:
```bash
php artisan db:seed
```

9. Create storage link:
```bash
php artisan storage:link
```

10. Build assets:
```bash
npm run build
```

11. Start the development server:
```bash
php artisan serve
```

Visit `http://localhost:8000` to view the website.

## Default Admin Credentials

After seeding:
- **Email**: admin@savitravel.com
- **Password**: password

**⚠️ Change these credentials immediately in production!**

## Project Structure

```
savitravel/
├── app/
│   ├── Http/Controllers/
│   │   ├── Admin/              # Admin controllers
│   │   ├── HomeController.php
│   │   ├── PackageController.php
│   │   ├── DestinationController.php
│   │   ├── InquiryController.php
│   │   └── SitemapController.php
│   └── Models/
│       ├── Package.php
│       ├── Destination.php
│       ├── Inquiry.php
│       └── SiteSetting.php
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   ├── css/app.css
│   └── views/
│       ├── layouts/
│       ├── components/
│       ├── public/
│       ├── admin/
│       └── auth/
├── routes/
│   └── web.php
├── config/
│   └── seo.php
└── nginx.conf
```

## Deployment

### Production Environment

1. Set environment to production:
```env
APP_ENV=production
APP_DEBUG=false
```

2. Optimize Laravel:
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
```

3. Configure Nginx using the provided `nginx.conf`

4. Set up SSL with Let's Encrypt:
```bash
sudo certbot --nginx -d savitravel.com -d www.savitravel.com
```

5. Set proper permissions:
```bash
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache
```

### Caching

For production, consider using Redis:
```env
CACHE_STORE=redis
SESSION_DRIVER=redis
```

## Customization

### WhatsApp Number
Update the WhatsApp number in:
- `.env`: `WHATSAPP_NUMBER=your_number`
- Admin settings (once implemented)

### Colors & Branding
Modify `tailwind.config.js` for custom colors and `resources/css/app.css` for styling.

### SEO Settings
Update `config/seo.php` for default SEO values.

## API Endpoints

| Method | URL | Description |
|--------|-----|-------------|
| GET | / | Home page |
| GET | /travel-packages | Package listing |
| GET | /travel-packages/{slug} | Package details |
| GET | /destinations | Destination listing |
| GET | /destinations/{slug} | Destination details |
| GET | /about | About page |
| GET | /contact | Contact page |
| POST | /inquiry | Submit inquiry |
| GET | /sitemap.xml | Sitemap |
| GET | /robots.txt | Robots file |

## Admin Routes

| Method | URL | Description |
|--------|-----|-------------|
| GET | /admin | Dashboard |
| GET/POST | /admin/packages | Package management |
| GET/POST | /admin/destinations | Destination management |
| GET | /admin/inquiries | Inquiry management |

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Submit a pull request

## License

This project is open-sourced software licensed under the MIT license.

## Support

For support, email info@savitravel.com or open an issue on GitHub.
