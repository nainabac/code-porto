#!/bin/bash

# Create SQLite database if it doesn't exist
if [ ! -f /app/database/database.sqlite ]; then
    touch /app/database/database.sqlite
    echo "Created SQLite database"
fi

# Run migrations
php artisan migrate --force

# Seed database if users table is empty
php artisan db:seed --force 2>/dev/null || true

# Create storage link
php artisan storage:link 2>/dev/null || true

# Cache config
php artisan config:clear
php artisan route:clear

# Start the server
php artisan serve --host=0.0.0.0 --port=8080
