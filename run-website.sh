#!/bin/bash

echo "🚀 Starting Pharmacist Evolve Website..."

# Clean up any existing processes
echo "🧹 Cleaning up ports..."
lsof -ti:5173,5174,8002,8003 | xargs kill -9 2>/dev/null || true
sleep 2

# Start Vite dev server in background
echo "⚡ Starting CSS/JS server..."
npm run dev > vite.log 2>&1 &
VITE_PID=$!
echo "Vite PID: $VITE_PID"

# Wait for Vite to start
sleep 5

# Start Laravel server
echo "🐘 Starting Laravel server..."
php artisan serve --port=8002 > laravel.log 2>&1 &
LARAVEL_PID=$!
echo "Laravel PID: $LARAVEL_PID"

# Wait for Laravel to start
sleep 3

echo ""
echo "✅ SUCCESS! Your website is now running!"
echo ""
echo "🌐 Visit your website: http://127.0.0.1:8002"
echo ""
echo "📋 Server Info:"
echo "   Vite (CSS/JS): PID $VITE_PID (check vite.log for port)"
echo "   Laravel: PID $LARAVEL_PID on http://127.0.0.1:8002"
echo ""
echo "🛑 To stop servers: kill $VITE_PID $LARAVEL_PID"
echo ""

# Test if Laravel is responding
if curl -s -o /dev/null -w "%{http_code}" http://127.0.0.1:8002 | grep -q "200"; then
    echo "🎉 Website is LIVE and working!"
    echo "   Opening in browser..."
    open http://127.0.0.1:8002 2>/dev/null || echo "   Manually visit: http://127.0.0.1:8002"
else
    echo "⚠️  Laravel server may still be starting..."
    echo "   Try visiting http://127.0.0.1:8002 in a few seconds"
    echo "   Or check laravel.log for errors"
fi

echo ""
echo "📁 Log files:"
echo "   Vite: ./vite.log"
echo "   Laravel: ./laravel.log"
