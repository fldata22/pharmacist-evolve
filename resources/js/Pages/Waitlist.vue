<template>
  <AppLayout>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-slate-50 via-purple-50 to-indigo-50 overflow-hidden">
      <!-- Background Elements -->
      <div class="absolute inset-0">
        <div class="absolute top-10 left-10 w-72 h-72 bg-purple-200 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-indigo-200 rounded-full opacity-20 blur-3xl"></div>
      </div>

      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-12">
        <div class="text-center">
          <!-- Main Headline -->
          <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
            Join Our <span class="bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent">Waitlist</span>
          </h1>

          <!-- Subheading -->
          <p class="text-xl lg:text-2xl text-gray-600 mb-8 max-w-4xl mx-auto leading-relaxed">
            Be the first to know about our upcoming programmes and secure your spot in our exclusive coaching and mentoring sessions
          </p>
        </div>
      </div>
    </section>

    <!-- Waitlist Form Section -->
    <section class="py-24 bg-white">
      <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Success Message -->
        <div v-if="$page.props.flash.success" class="mb-8 bg-green-50 border-l-4 border-green-500 p-6 rounded-lg">
          <div class="flex items-start">
            <svg class="w-6 h-6 text-green-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <div>
              <h3 class="text-green-800 font-semibold mb-1">Success!</h3>
              <p class="text-green-700">{{ $page.props.flash.success }}</p>
            </div>
          </div>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-3xl shadow-xl border border-gray-100 overflow-hidden">
          <!-- Form Header -->
          <div class="bg-gradient-to-r from-purple-600 to-indigo-600 px-8 py-6">
            <h2 class="text-2xl font-bold text-white mb-2">Register Your Interest</h2>
            <p class="text-purple-100">Fill in your details below and we'll keep you updated on our programmes</p>
          </div>

          <!-- Form Body -->
          <form @submit.prevent="submitForm" class="p-8 space-y-6">
            
            <!-- Name Field -->
            <div>
              <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                Full Name <span class="text-red-500">*</span>
              </label>
              <input
                id="name"
                v-model="form.name"
                type="text"
                required
                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                placeholder="John Doe"
              />
              <p v-if="errors.name" class="mt-1 text-sm text-red-600">{{ errors.name }}</p>
            </div>

            <!-- Email Field -->
            <div>
              <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                Email Address <span class="text-red-500">*</span>
              </label>
              <input
                id="email"
                v-model="form.email"
                type="email"
                required
                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                placeholder="john@example.com"
              />
              <p v-if="errors.email" class="mt-1 text-sm text-red-600">{{ errors.email }}</p>
            </div>

            <!-- Phone Field -->
            <div>
              <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">
                Phone Number
              </label>
              <input
                id="phone"
                v-model="form.phone"
                type="tel"
                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                placeholder="+44 7700 900000"
              />
              <p v-if="errors.phone" class="mt-1 text-sm text-red-600">{{ errors.phone }}</p>
            </div>

            <!-- Country Field -->
            <div>
              <label for="country" class="block text-sm font-semibold text-gray-700 mb-2">
                Country <span class="text-red-500">*</span>
              </label>
              <input
                id="country"
                v-model="form.country"
                type="text"
                required
                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                placeholder="e.g., Nigeria, India, UK"
              />
              <p v-if="errors.country" class="mt-1 text-sm text-red-600">{{ errors.country }}</p>
            </div>

            <!-- Qualification Field -->
            <div>
              <label for="qualification" class="block text-sm font-semibold text-gray-700 mb-2">
                Qualification
              </label>
              <input
                id="qualification"
                v-model="form.qualification"
                type="text"
                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                placeholder="e.g., BPharm, MPharm, PharmD"
              />
              <p v-if="errors.qualification" class="mt-1 text-sm text-red-600">{{ errors.qualification }}</p>
            </div>

            <!-- Programme Interest Field -->
            <div>
              <label for="program_interest" class="block text-sm font-semibold text-gray-700 mb-2">
                Programme Interest <span class="text-red-500">*</span>
              </label>
              <select
                id="program_interest"
                v-model="form.program_interest"
                required
                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
              >
                <option value="">Select a programme</option>
                <option value="ospap_coaching">OSPAP Coaching</option>
                <option value="group_mentoring">Group Mentoring</option>
                <option value="summit">Annual Summit</option>
              </select>
              <p v-if="errors.program_interest" class="mt-1 text-sm text-red-600">{{ errors.program_interest }}</p>
            </div>

            <!-- Message Field -->
            <div>
              <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">
                Additional Information
              </label>
              <textarea
                id="message"
                v-model="form.message"
                rows="4"
                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all resize-none"
                placeholder="Tell us more about your goals, questions, or anything else you'd like us to know..."
              ></textarea>
              <p v-if="errors.message" class="mt-1 text-sm text-red-600">{{ errors.message }}</p>
            </div>

            <!-- Submit Button -->
            <div class="pt-4">
              <button
                type="submit"
                :disabled="processing"
                class="w-full px-8 py-4 bg-gradient-to-r from-purple-600 to-indigo-600 text-white font-bold rounded-xl hover:from-purple-700 hover:to-indigo-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl disabled:opacity-50 disabled:cursor-not-allowed disabled:transform-none"
              >
                <span v-if="!processing" class="flex items-center justify-center">
                  <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                  </svg>
                  Join Waitlist
                </span>
                <span v-else class="flex items-center justify-center">
                  <svg class="animate-spin h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                  </svg>
                  Submitting...
                </span>
              </button>
            </div>
          </form>
        </div>

        <!-- Benefits Section -->
        <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="bg-purple-50 rounded-2xl p-6 text-center">
            <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">Early Access</h3>
            <p class="text-gray-600 text-sm">Be the first to know about programme launches and exclusive offers</p>
          </div>

          <div class="bg-indigo-50 rounded-2xl p-6 text-center">
            <div class="w-12 h-12 bg-indigo-600 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
              </svg>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">Priority Support</h3>
            <p class="text-gray-600 text-sm">Get personalised guidance from our team before programmes start</p>
          </div>

          <div class="bg-purple-50 rounded-2xl p-6 text-center">
            <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
              </svg>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">Stay Updated</h3>
            <p class="text-gray-600 text-sm">Receive regular updates about programme dates and schedules</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-24 bg-gradient-to-r from-gray-900 to-gray-800">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">
          Questions?
        </h2>
        <p class="text-xl text-gray-300 mb-8 max-w-3xl mx-auto">
          If you have any questions about our programmes or the waitlist, feel free to get in touch with us.
        </p>
        
        <Link 
          href="/contact" 
          class="inline-flex items-center justify-center px-8 py-4 bg-purple-600 text-white font-semibold rounded-xl hover:bg-purple-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl"
        >
          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
          </svg>
          Contact Us
        </Link>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { ref } from 'vue'
import { useForm, usePage, Link } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'

const page = usePage()

const form = ref({
  name: '',
  email: '',
  phone: '',
  country: '',
  qualification: '',
  program_interest: '',
  message: ''
})

const processing = ref(false)
const errors = ref({})

const submitForm = async () => {
  processing.value = true
  errors.value = {}

  try {
    const inertiaForm = useForm(form.value)
    inertiaForm.post('/waitlist', {
      onSuccess: () => {
        // Reset form
        form.value = {
          name: '',
          email: '',
          phone: '',
          country: '',
          qualification: '',
          program_interest: '',
          message: ''
        }
      },
      onError: (formErrors) => {
        errors.value = formErrors
      },
      onFinish: () => {
        processing.value = false
      }
    })
  } catch (error) {
    console.error('Form submission error:', error)
    processing.value = false
  }
}
</script>
