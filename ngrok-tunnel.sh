#!/bin/bash

echo "🚀 Starting Laravel + Vite with ngrok tunnel..."
echo "=============================================="

# Clean up
pkill -f 'artisan serve' 2>/dev/null || true
pkill -f 'npm run dev' 2>/dev/null || true
pkill -f 'vite' 2>/dev/null || true
lsof -ti:8002,5173 | xargs kill -9 2>/dev/null || true

# Start Vite dev server
echo "⚡ Starting Vite dev server..."
npm run dev > vite.log 2>&1 &
VITE_PID=$!

# Wait for Vite to start
sleep 5

# Start Laravel server with host binding
echo "🐘 Starting Laravel server..."
php artisan serve --host=0.0.0.0 --port=8002 > laravel.log 2>&1 &
LARAVEL_PID=$!

# Wait for Laravel to start
sleep 3

echo "✅ Servers started!"
echo "💡 Local URL: http://127.0.0.1:8002"
echo "📋 PIDs: Vite=$VITE_PID, Laravel=$LARAVEL_PID"
echo ""
echo "🌐 Now start ngrok in another terminal:"
echo "   ngrok http 8002"
echo ""
echo "🛑 To stop: kill $VITE_PID $LARAVEL_PID"
