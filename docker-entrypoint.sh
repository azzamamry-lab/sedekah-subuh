#!/bin/bash
set -e

# Generate APP_KEY kalau belum ada
if [ -z "$APP_KEY" ]; then
    php artisan key:generate --force
fi

# Cache konfigurasi & route
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Jalankan migrasi database (SQLite)
php artisan migrate --force --graceful || true

# Pastikan permission
chown -R www-data:www-data storage bootstrap/cache database 2>/dev/null || true

echo "✅ Laravel siap dijalankan di port ${PORT:-8080}"
exec apache2-foreground
