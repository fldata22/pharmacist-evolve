<template>
  <AppLayout>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-slate-50 via-orange-50 to-amber-50 overflow-hidden">
      <!-- Background Elements -->
      <div class="absolute inset-0">
        <div class="absolute top-10 left-10 w-72 h-72 bg-orange-200 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-amber-200 rounded-full opacity-20 blur-3xl"></div>
      </div>

      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-12">
        <div class="text-center">
          <!-- Main Headline -->
          <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
            Upcoming <span class="bg-gradient-to-r from-orange-600 to-amber-600 bg-clip-text text-transparent">Events</span>
          </h1>

          <!-- Subheading -->
          <p class="text-xl lg:text-2xl text-gray-600 mb-8 max-w-4xl mx-auto leading-relaxed">
            Join our webinars and events designed to accelerate your pharmacy career in the UK
          </p>
        </div>
      </div>
    </section>

    <!-- Upcoming Webinars Section -->
    <section class="py-24 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
            Upcoming Webinars
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Expert-led online sessions covering essential topics for overseas pharmacists
          </p>
        </div>

        <!-- Webinars Grid -->
        <div class="grid grid-cols-1 gap-8 mb-16 max-w-2xl mx-auto">
          <!-- Coming Soon Webinar Card -->
          <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-3xl p-8 text-center border-2 border-orange-200">
            <div class="w-24 h-24 bg-orange-600 rounded-full flex items-center justify-center mx-auto mb-8">
              <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
              </svg>
            </div>
            
            <h3 class="text-2xl font-bold text-gray-900 mb-4">
              Webinars Coming Soon
            </h3>
            
            <p class="text-lg text-gray-700 mb-6 leading-relaxed">
              We're preparing expert-led webinars on key topics including CV writing, interview preparation, UK pharmacy practice, and career development strategies.
            </p>

            <!-- Topics Preview -->
            <div class="space-y-3 mb-6">
              <div class="bg-white rounded-xl p-4 text-left">
                <div class="flex items-center">
                  <div class="w-3 h-3 bg-orange-500 rounded-full mr-3"></div>
                  <span class="text-gray-700 font-medium">CV Writing for UK Pharmacy Roles</span>
                </div>
              </div>
              
              <div class="bg-white rounded-xl p-4 text-left">
                <div class="flex items-center">
                  <div class="w-3 h-3 bg-amber-500 rounded-full mr-3"></div>
                  <span class="text-gray-700 font-medium">Interview Success Strategies</span>
                </div>
              </div>
              
              <div class="bg-white rounded-xl p-4 text-left">
                <div class="flex items-center">
                  <div class="w-3 h-3 bg-orange-500 rounded-full mr-3"></div>
                  <span class="text-gray-700 font-medium">Understanding UK Pharmacy Practice</span>
                </div>
              </div>
            </div>

            <!-- Notification Signup -->
            <div class="bg-white rounded-2xl p-6 border-l-4 border-orange-500">
              <h4 class="text-lg font-bold text-gray-900 mb-3">Get Notified</h4>
              <p class="text-gray-600 mb-4">
                Be the first to know when our webinars are scheduled.
              </p>
              
              <a 
                href="https://www.instagram.com/pharmacist_evolve/" 
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-pink-500 to-purple-600 text-white font-semibold rounded-xl hover:from-pink-600 hover:to-purple-700 transform hover:scale-105 transition-all duration-200"
              >
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
                Follow for Updates
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Upcoming Events Section -->
    <section class="py-24 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
            Upcoming Events
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            In-person and virtual events to connect, learn, and grow your pharmacy career
          </p>
        </div>

        <!-- Events Grid -->
        <div class="grid grid-cols-1 gap-8 max-w-2xl mx-auto">
          <!-- Coming Soon Event Card -->
          <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-3xl p-8 text-center border-2 border-blue-200">
            <div class="w-24 h-24 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-8">
              <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2z"/>
              </svg>
            </div>
            
            <h3 class="text-2xl font-bold text-gray-900 mb-4">
              Events Coming Soon
            </h3>
            
            <p class="text-lg text-gray-700 mb-6 leading-relaxed">
              We're planning networking events, career fairs, and professional development workshops to support your journey in UK pharmacy.
            </p>

            <!-- Event Types Preview -->
            <div class="space-y-3 mb-6">
              <div class="bg-white rounded-xl p-4 text-left">
                <div class="flex items-center">
                  <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>
                  <span class="text-gray-700 font-medium">Networking Events</span>
                </div>
              </div>
              
              <div class="bg-white rounded-xl p-4 text-left">
                <div class="flex items-center">
                  <div class="w-3 h-3 bg-indigo-500 rounded-full mr-3"></div>
                  <span class="text-gray-700 font-medium">Career Development Workshops</span>
                </div>
              </div>
              
              <div class="bg-white rounded-xl p-4 text-left">
                <div class="flex items-center">
                  <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>
                  <span class="text-gray-700 font-medium">Professional Meet-ups</span>
                </div>
              </div>
            </div>

            <!-- Contact for Updates -->
            <div class="bg-white rounded-2xl p-6 border-l-4 border-blue-500">
              <h4 class="text-lg font-bold text-gray-900 mb-3">Stay Informed</h4>
              <p class="text-gray-600 mb-4">
                Follow us for event announcements and updates.
              </p>
              
              <Link 
                href="/contact" 
                class="inline-flex items-center justify-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-xl hover:bg-blue-700 transform hover:scale-105 transition-all duration-200"
              >
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
                Get in Touch
              </Link>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-24 bg-gradient-to-r from-gray-900 to-gray-800">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">
          Don't Miss Out
        </h2>
        <p class="text-xl text-gray-300 mb-8 max-w-3xl mx-auto">
          Stay connected to be the first to know about upcoming webinars and events that can accelerate your pharmacy career.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a 
            href="https://www.instagram.com/pharmacist_evolve/" 
            target="_blank"
            rel="noopener noreferrer"
            class="group inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-pink-500 to-purple-600 text-white font-semibold rounded-xl hover:from-pink-600 hover:to-purple-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl"
          >
            <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.40s-.644-1.44-1.439-1.44z"/>
            </svg>
            Follow @pharmacist_evolve
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
            </svg>
          </a>
          
          <Link 
            href="/contact" 
            class="inline-flex items-center justify-center px-8 py-4 border-2 border-gray-300 text-gray-300 font-semibold rounded-xl hover:border-orange-600 hover:text-orange-600 transition-colors"
          >
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
            </svg>
            Contact Us
          </Link>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
</script>