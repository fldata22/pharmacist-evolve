#!/bin/bash

echo "🚀 Starting Website with Alternative Tunnel (No Signup Required)..."
echo "================================================================"

# Install localtunnel if not installed
if ! command -v lt &> /dev/null; then
    echo "📦 Installing localtunnel..."
    npm install -g localtunnel
fi

# Clean up
echo "🧹 Cleaning up..."
pkill -f "artisan serve" 2>/dev/null || true
pkill -f "npm run dev" 2>/dev/null || true
lsof -ti:8002 | xargs kill -9 2>/dev/null || true
sleep 2

# Start servers
echo "🐘 Starting Laravel server..."
php artisan serve --port=8002 > laravel.log 2>&1 &
LARAVEL_PID=$!

echo "⚡ Starting Vite..."
npm run dev > vite.log 2>&1 &
VITE_PID=$!

sleep 5

echo "🌐 Creating public tunnel..."
echo "   This may take a moment..."
echo ""

# Start localtunnel
lt --port 8002 --subdomain pharmacist-evolve-demo &
LT_PID=$!

sleep 3

echo "✅ Your website should now be public!"
echo ""
echo "🔗 Public URL: https://pharmacist-evolve-demo.loca.lt"
echo "💡 Local URL: http://127.0.0.1:8002"
echo ""
echo "📱 Share this URL with reviewers:"
echo "   https://pharmacist-evolve-demo.loca.lt"
echo ""
echo "🛑 To stop everything:"
echo "   kill $LARAVEL_PID $VITE_PID $LT_PID"
echo ""

# Try to open in browser
open "https://pharmacist-evolve-demo.loca.lt" 2>/dev/null || echo "Visit https://pharmacist-evolve-demo.loca.lt in your browser"
