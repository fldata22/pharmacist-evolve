<template>
  <AppLayout>
    <!-- Hero Section -->
    <div class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h1 class="text-4xl font-bold text-gray-900 mb-6">What Our Clients Say</h1>
          <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
            Discover the inspiring success stories from overseas pharmacists who have transformed their careers and successfully integrated into the UK workforce with the guidance and support of Pharmacist Evolve.
          </p>
        </div>


        <!-- Written Testimonials Section -->
        <div class="mb-20">
          <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">Client Success Stories</h2>
          
          <div v-if="testimonials && testimonials.length > 0" class="space-y-8">
            
            <!-- Dynamic Testimonials from Database -->
            <div 
              v-for="(testimonial, index) in testimonials" 
              :key="testimonial.id"
              class="bg-white rounded-2xl shadow-xl p-8 lg:p-12"
            >
              <div class="lg:grid lg:grid-cols-4 lg:gap-8">
                <div class="lg:col-span-1 mb-6 lg:mb-0">
                  <div 
                    v-if="testimonial.photo"
                    class="w-24 h-24 rounded-full mx-auto lg:mx-0 overflow-hidden"
                  >
                    <img 
                      :src="`/storage/${testimonial.photo}`" 
                      :alt="testimonial.name"
                      class="w-full h-full object-cover"
                    >
                  </div>
                  <div 
                    v-else
                    class="w-24 h-24 rounded-full mx-auto lg:mx-0 flex items-center justify-center text-white text-2xl font-bold"
                    :class="getGradientClass(index)"
                  >
                    {{ getInitials(testimonial.name) }}
                  </div>
                  <div class="text-center lg:text-left mt-4">
                    <h3 class="text-lg font-semibold text-gray-900">{{ testimonial.name }}</h3>
                    <p v-if="testimonial.title" class="text-gray-600 text-sm">{{ testimonial.title }}</p>
                    <p v-if="testimonial.program" class="text-gray-600 text-sm">{{ testimonial.program }}</p>
                    <p class="text-gray-500 text-sm">{{ formatDate(testimonial.created_at) }}</p>
                    <div class="flex justify-center lg:justify-start mt-2">
                      <div class="flex text-yellow-400">
                        <svg 
                          v-for="star in testimonial.rating" 
                          :key="`star-${star}`"
                          class="w-4 h-4 fill-current" 
                          viewBox="0 0 20 20"
                        >
                          <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="lg:col-span-3">
                  <div class="mb-4">
                    <svg 
                      class="w-8 h-8 mb-4" 
                      :class="getQuoteColorClass(index)"
                      fill="currentColor" 
                      viewBox="0 0 24 24"
                    >
                      <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                    </svg>
                  </div>
                  <blockquote class="text-lg text-gray-700 leading-relaxed mb-6">
                    "{{ testimonial.feedback }}"
                  </blockquote>
                  <div class="flex items-center justify-between">
                    <div v-if="testimonial.program" class="text-sm text-gray-500">
                      <span class="font-medium">Programme:</span> {{ testimonial.program }}
                    </div>
                    <div class="text-sm text-gray-500">
                      <span class="font-medium">Rating:</span> {{ '⭐'.repeat(testimonial.rating) }}
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- Empty State -->
          <div v-else class="text-center py-12">
            <p class="text-gray-500 text-lg">No testimonials available at the moment. Check back soon!</p>
          </div>

        </div>

        <!-- Call to Action Section -->
        <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl p-12 text-center text-white">
          <h2 class="text-3xl font-bold mb-6">Join Our Success Stories</h2>
          <p class="text-xl mb-8 max-w-3xl mx-auto leading-relaxed">
            Ready to transform your career and become the next success story? Our proven programmes have helped hundreds of overseas pharmacists achieve their dreams of practising in the UK. Your journey to success starts with a single step.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <Link href="/contact" class="inline-flex items-center px-8 py-4 bg-white text-blue-600 font-semibold rounded-lg hover:bg-gray-100 transition-colors duration-200 shadow-lg">
              Start Your Success Story Today
              <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
              </svg>
            </Link>
          </div>
          <div class="mt-8 pt-8 border-t border-white border-opacity-20">
            <p class="text-sm opacity-75 max-w-2xl mx-auto">
              Free initial consultation • Personalised guidance • Proven track record • Join 200+ successful pharmacists
            </p>
          </div>
        </div>

      </div>
    </div>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from '@inertiajs/vue3'

// Define props
const props = defineProps({
  testimonials: {
    type: Array,
    default: () => []
  }
})

// Helper function to get initials from name
const getInitials = (name) => {
  return name
    .split(' ')
    .map(word => word[0])
    .join('')
    .toUpperCase()
    .substring(0, 2)
}

// Helper function to format date
const formatDate = (dateString) => {
  const date = new Date(dateString)
  const options = { day: 'numeric', month: 'short', year: 'numeric' }
  return date.toLocaleDateString('en-GB', options)
}

// Helper function to get gradient class based on index
const getGradientClass = (index) => {
  const gradients = [
    'bg-gradient-to-br from-orange-400 to-orange-600',
    'bg-gradient-to-br from-green-400 to-green-600',
    'bg-gradient-to-br from-blue-400 to-blue-600',
    'bg-gradient-to-br from-purple-400 to-purple-600',
    'bg-gradient-to-br from-teal-400 to-teal-600',
    'bg-gradient-to-br from-pink-400 to-pink-600',
    'bg-gradient-to-br from-indigo-400 to-indigo-600',
    'bg-gradient-to-br from-red-400 to-red-600',
  ]
  return gradients[index % gradients.length]
}

// Helper function to get quote colour class based on index
const getQuoteColorClass = (index) => {
  const colours = [
    'text-orange-500',
    'text-green-500',
    'text-blue-500',
    'text-purple-500',
    'text-teal-500',
    'text-pink-500',
    'text-indigo-500',
    'text-red-500',
  ]
  return colours[index % colours.length]
}
</script>
