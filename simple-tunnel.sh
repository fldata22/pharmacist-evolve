#!/bin/bash

echo "🚀 Starting Pharmacist Evolve with Free ngrok..."
echo "=============================================="

# Clean up any existing processes
echo "🧹 Cleaning up..."
pkill -f "artisan serve" 2>/dev/null || true
pkill -f "npm run dev" 2>/dev/null || true
lsof -ti:8002 | xargs kill -9 2>/dev/null || true
sleep 2

# Start Laravel server
echo "🐘 Starting Laravel server on port 8002..."
php artisan serve --port=8002 > laravel.log 2>&1 &
LARAVEL_PID=$!

# Start Vite in background
echo "⚡ Starting Vite..."
npm run dev > vite.log 2>&1 &
VITE_PID=$!

# Wait for servers to start
sleep 5

# Test Laravel
echo "🔍 Testing server..."
if curl -s -o /dev/null http://127.0.0.1:8002; then
    echo "✅ Server is running!"
else
    echo "⚠️  Server starting... please wait"
fi

echo ""
echo "📋 Next Steps:"
echo "1. Open a NEW terminal window"
echo "2. Run: ngrok http 8002"
echo "3. Look for the 'Forwarding' line in ngrok output"
echo "4. Share that URL with reviewers!"
echo ""
echo "💡 Local URL: http://127.0.0.1:8002"
echo "🛑 To stop: kill $LARAVEL_PID $VITE_PID"
echo ""
echo "✨ Ready for ngrok tunnel!"
