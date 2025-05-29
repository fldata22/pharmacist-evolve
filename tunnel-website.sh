#!/bin/bash

echo "🚀 Starting Pharmacist Evolve with Public Access..."
echo "=================================================="

# Clean up any existing processes
echo "🧹 Cleaning up existing servers..."
pkill -f "artisan serve" 2>/dev/null || true
pkill -f "npm run dev" 2>/dev/null || true
pkill -f "ngrok" 2>/dev/null || true
lsof -ti:5173,5174,8002,8003 | xargs kill -9 2>/dev/null || true
sleep 2

# Start Vite dev server in background
echo "⚡ Starting Vite dev server..."
npm run dev > vite.log 2>&1 &
VITE_PID=$!
echo "   Vite PID: $VITE_PID"

# Wait for Vite to start
sleep 5

# Start Laravel server
echo "🐘 Starting Laravel server on port 8002..."
php artisan serve --port=8002 > laravel.log 2>&1 &
LARAVEL_PID=$!
echo "   Laravel PID: $LARAVEL_PID"

# Wait for Laravel to start
sleep 3

# Test if Laravel is responding
echo "🔍 Testing Laravel server..."
if curl -s -o /dev/null -w "%{http_code}" http://127.0.0.1:8002 | grep -q "200"; then
    echo "✅ Laravel server is running successfully!"
else
    echo "⚠️  Laravel server may still be starting... continuing anyway"
fi

echo ""
echo "🌐 Starting ngrok tunnel..."
echo "   This will create a public URL for your website"
echo ""

# Start ngrok tunnel
ngrok http 8002 &
NGROK_PID=$!

echo "📋 Server Information:"
echo "   Local URL: http://127.0.0.1:8002"
echo "   Vite PID: $VITE_PID"
echo "   Laravel PID: $LARAVEL_PID" 
echo "   ngrok PID: $NGROK_PID"
echo ""
echo "🔗 Your public tunnel URL will appear in the ngrok terminal above"
echo "   Look for the 'Forwarding' line with https://xxxx-xx-xx-xxx-xxx.ngrok-free.app"
echo ""
echo "📱 Share this URL with reviewers for external access!"
echo ""
echo "🛑 To stop everything:"
echo "   kill $VITE_PID $LARAVEL_PID $NGROK_PID"
echo "   or press Ctrl+C and run: pkill -f ngrok"
echo ""
echo "📁 Log files:"
echo "   Vite: ./vite.log"
echo "   Laravel: ./laravel.log"
echo ""
echo "🎉 Your website is now publicly accessible!"

# Wait for ngrok to start and get URL
sleep 3
echo ""
echo "🌍 Getting your public URL..."
NGROK_URL=$(curl -s http://localhost:4040/api/tunnels | python3 -c "import sys, json; print(json.load(sys.stdin)['tunnels'][0]['public_url'])" 2>/dev/null)

if [ ! -z "$NGROK_URL" ]; then
    echo "✨ PUBLIC URL: $NGROK_URL"
    echo ""
    echo "📋 Share this URL with your reviewers:"
    echo "   $NGROK_URL"
    echo ""
    # Try to open in browser
    open "$NGROK_URL" 2>/dev/null || echo "   Visit this URL in your browser to test"
else
    echo "⚠️  Could not automatically get ngrok URL"
    echo "   Check the ngrok output above for the public URL"
    echo "   It should look like: https://xxxx-xx-xx-xxx-xxx.ngrok-free.app"
fi
