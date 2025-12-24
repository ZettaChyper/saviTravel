#!/bin/bash

# Savi Travel Deployment Script
# Run this script to deploy updates to production

set -e

echo "🚀 Starting deployment..."

# Pull latest code
echo "📥 Pulling latest changes..."
git pull origin main

# Install/update PHP dependencies
echo "📦 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader

# Install/update Node dependencies and build assets
echo "🔨 Building assets..."
npm ci
npm run build

# Run database migrations
echo "🗄️ Running migrations..."
php artisan migrate --force

# Clear and rebuild caches
echo "🧹 Clearing caches..."
php artisan config:clear
php artisan route:clear
php artisan view:clear

echo "💾 Building caches..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Clear application cache
php artisan cache:clear

# Optimize
php artisan optimize

# Restart queue workers if using queues
# php artisan queue:restart

# Set permissions
echo "🔐 Setting permissions..."
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Restart PHP-FPM
echo "🔄 Restarting PHP-FPM..."
sudo systemctl reload php8.2-fpm

echo "✅ Deployment complete!"
echo "🌐 Visit your website to verify the deployment."


