#!/bin/bash

echo "🚀 Starting Pharmacist Evolve Development Servers..."

# Kill any existing servers on these ports
echo "📋 Cleaning up existing servers..."
lsof -ti:5173 | xargs kill -9 2>/dev/null || true
lsof -ti:5174 | xargs kill -9 2>/dev/null || true
lsof -ti:8002 | xargs kill -9 2>/dev/null || true
lsof -ti:8003 | xargs kill -9 2>/dev/null || true

# Start Vite dev server in background
echo "⚡ Starting Vite dev server..."
npm run dev > vite.log 2>&1 &
VITE_PID=$!

# Wait a moment for Vite to start
sleep 4

# Start Laravel server in background  
echo "🐘 Starting Laravel server..."
php artisan serve --port=8002 > laravel.log 2>&1 &
LARAVEL_PID=$!

# Wait a moment for Laravel to start
sleep 3

echo "✅ Servers started successfully!"
echo ""
echo "🌐 Website URL: http://127.0.0.1:8002"
echo "⚡ Vite Dev Server: http://localhost:5174 (or check vite.log for actual port)"
echo ""
echo "📋 Server PIDs:"
echo "   Vite: $VITE_PID"
echo "   Laravel: $LARAVEL_PID"
echo ""
echo "💡 To stop servers: kill $VITE_PID $LARAVEL_PID"
echo ""
echo "🎉 Your Pharmacist Evolve website is ready!"
echo "   Visit: http://127.0.0.1:8002"

# Open in browser (macOS)
if command -v open > /dev/null; then
    echo "🌍 Opening in browser..."
    open http://127.0.0.1:8002
fi
