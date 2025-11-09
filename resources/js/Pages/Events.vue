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

        <!-- Dynamic Webinars Grid -->
        <div v-if="webinars && webinars.length > 0" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
          <div 
            v-for="webinar in webinars" 
            :key="webinar.id"
            class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-shadow duration-300 overflow-hidden border border-gray-100"
          >
            <div v-if="webinar.image" class="h-48 overflow-hidden">
              <img 
                :src="`/storage/${webinar.image}`" 
                :alt="webinar.title"
                class="w-full h-full object-cover"
              >
            </div>
            <div v-else class="h-48 bg-gradient-to-br from-orange-400 to-amber-500 flex items-center justify-center">
              <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
              </svg>
            </div>
            
            <div class="p-6">
              <div class="flex items-center mb-3">
                <span class="bg-orange-100 text-orange-800 text-xs font-semibold px-3 py-1 rounded-full">
                  Webinar
                </span>
                <span v-if="webinar.is_featured" class="ml-2 bg-purple-100 text-purple-800 text-xs font-semibold px-3 py-1 rounded-full">
                  Featured
                </span>
              </div>
              
              <h3 class="text-xl font-bold text-gray-900 mb-3">
                {{ webinar.title }}
              </h3>
              
              <p class="text-gray-600 mb-4 line-clamp-3">
                {{ webinar.description }}
              </p>
              
              <div class="space-y-2 mb-4">
                <div class="flex items-center text-gray-700">
                  <svg class="w-5 h-5 mr-2 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                  </svg>
                  <span class="text-sm font-medium">{{ formatDate(webinar.event_date) }}</span>
                </div>
                
                <div v-if="webinar.platform" class="flex items-center text-gray-700">
                  <svg class="w-5 h-5 mr-2 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                  </svg>
                  <span class="text-sm">{{ webinar.platform }}</span>
                </div>
              </div>
              
              <a 
                v-if="webinar.registration_link"
                :href="webinar.registration_link" 
                target="_blank"
                rel="noopener noreferrer"
                class="block w-full text-center px-6 py-3 bg-gradient-to-r from-orange-600 to-amber-600 text-white font-semibold rounded-xl hover:from-orange-700 hover:to-amber-700 transform hover:scale-105 transition-all duration-200"
              >
                Register Now
              </a>
            </div>
          </div>
        </div>

        <!-- No Webinars - Coming Soon Card -->
        <div v-else class="max-w-2xl mx-auto">
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

            <!-- Notification Signup -->
            <div class="bg-white rounded-2xl p-6 border-l-4 border-orange-500">
              <h4 class="text-lg font-bold text-gray-900 mb-3">Get Notified</h4>
              <p class="text-gray-600 mb-4">
                Be the first to know when our webinars are scheduled.
              </p>
              
              <Link 
                href="/waitlist"
                class="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-orange-600 to-amber-600 text-white font-semibold rounded-xl hover:from-orange-700 hover:to-amber-700 transform hover:scale-105 transition-all duration-200"
              >
                Join Waitlist
              </Link>
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

        <!-- Dynamic Events Grid -->
        <div v-if="events && events.length > 0" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div 
            v-for="event in events" 
            :key="event.id"
            class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-shadow duration-300 overflow-hidden border border-gray-100"
          >
            <div v-if="event.image" class="h-48 overflow-hidden">
              <img 
                :src="`/storage/${event.image}`" 
                :alt="event.title"
                class="w-full h-full object-cover"
              >
            </div>
            <div v-else class="h-48 bg-gradient-to-br from-blue-400 to-indigo-500 flex items-center justify-center">
              <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
            </div>
            
            <div class="p-6">
              <div class="flex items-center mb-3">
                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full capitalize">
                  {{ event.type }}
                </span>
                <span v-if="event.is_featured" class="ml-2 bg-purple-100 text-purple-800 text-xs font-semibold px-3 py-1 rounded-full">
                  Featured
                </span>
              </div>
              
              <h3 class="text-xl font-bold text-gray-900 mb-3">
                {{ event.title }}
              </h3>
              
              <p class="text-gray-600 mb-4 line-clamp-3">
                {{ event.description }}
              </p>
              
              <div class="space-y-2 mb-4">
                <div class="flex items-center text-gray-700">
                  <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                  </svg>
                  <span class="text-sm font-medium">{{ formatDate(event.event_date) }}</span>
                </div>
                
                <div v-if="event.location" class="flex items-center text-gray-700">
                  <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                  </svg>
                  <span class="text-sm">{{ event.location }}</span>
                </div>
              </div>
              
              <a 
                v-if="event.registration_link"
                :href="event.registration_link" 
                target="_blank"
                rel="noopener noreferrer"
                class="block w-full text-center px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-indigo-700 transform hover:scale-105 transition-all duration-200"
              >
                Register Now
              </a>
            </div>
          </div>
        </div>

        <!-- No Events - Coming Soon Card -->
        <div v-else class="max-w-2xl mx-auto">
          <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-3xl p-8 text-center border-2 border-blue-200">
            <div class="w-24 h-24 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-8">
              <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
            </div>
            
            <h3 class="text-2xl font-bold text-gray-900 mb-4">
              Events Coming Soon
            </h3>
            
            <p class="text-lg text-gray-700 mb-6 leading-relaxed">
              We're planning networking events, career fairs, and professional development workshops to support your journey in UK pharmacy.
            </p>

            <!-- Contact for Updates -->
            <div class="bg-white rounded-2xl p-6 border-l-4 border-blue-500">
              <h4 class="text-lg font-bold text-gray-900 mb-3">Stay Informed</h4>
              <p class="text-gray-600 mb-4">
                Join our waitlist to be notified about upcoming events.
              </p>
              
              <Link 
                href="/waitlist" 
                class="inline-flex items-center justify-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-xl hover:bg-blue-700 transform hover:scale-105 transition-all duration-200"
              >
                Join Waitlist
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
          <Link 
            href="/waitlist"
            class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-purple-600 to-indigo-600 text-white font-semibold rounded-xl hover:from-purple-700 hover:to-indigo-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl"
          >
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            Join Our Waitlist
          </Link>
          
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

// Define props
const props = defineProps({
  webinars: {
    type: Array,
    default: () => []
  },
  events: {
    type: Array,
    default: () => []
  }
})

// Helper function to format date
const formatDate = (dateString) => {
  const date = new Date(dateString)
  const options = { 
    weekday: 'long',
    day: 'numeric', 
    month: 'long', 
    year: 'numeric',
    hour: '2-digit',
    minute: '2-digit'
  }
  return date.toLocaleDateString('en-GB', options)
}
</script>
