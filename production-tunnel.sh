#!/bin/bash

echo "🚀 Setting up Production Build for ngrok..."
echo "==========================================="

NGROK_URL="$1"

if [ -z "$NGROK_URL" ]; then
    echo "❌ Please provide your ngrok URL as an argument"
    echo "Usage: ./production-tunnel.sh https://your-ngrok-url.ngrok-free.app"
    exit 1
fi

# Stop all existing processes
echo "🧹 Cleaning up existing processes..."
pkill -f 'artisan serve' 2>/dev/null || true
pkill -f 'npm run dev' 2>/dev/null || true
pkill -f 'vite' 2>/dev/null || true
lsof -ti:8002,5173,5174 | xargs kill -9 2>/dev/null || true

# Backup original .env
cp .env .env.tunnel-backup 2>/dev/null || true

# Set production environment with ngrok URL
echo "⚙️  Configuring environment..."
sed -e 's/APP_ENV=local/APP_ENV=production/' \
    -e 's/APP_DEBUG=true/APP_DEBUG=false/' \
    -e "s|APP_URL=.*|APP_URL=${NGROK_URL}|" \
    .env.tunnel-backup > .env

# Clear caches
echo "🧹 Clearing caches..."
php artisan config:clear
php artisan view:clear
php artisan route:clear

# Build production assets
echo "🏗️  Building production assets..."
npm run build

# Start Laravel server
echo "🐘 Starting Laravel server..."
php artisan serve --port=8002 > laravel.log 2>&1 &
LARAVEL_PID=$!

sleep 3

# Test the server
if curl -s -o /dev/null http://127.0.0.1:8002; then
    echo "✅ Server is running successfully!"
    echo ""
    echo "🌐 Your website is ready at: $NGROK_URL"
    echo "💡 Local URL: http://127.0.0.1:8002"
    echo "🛑 To stop: kill $LARAVEL_PID"
    echo ""
    echo "📋 Production build complete!"
    echo "   - Environment: Production"
    echo "   - Debug: Disabled"
    echo "   - Assets: Built and optimized"
    echo "   - URL: Configured for ngrok"
else
    echo "❌ Server failed to start. Check laravel.log for errors."
fi
