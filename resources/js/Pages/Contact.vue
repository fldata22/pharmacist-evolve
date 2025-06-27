<template>
  <AppLayout>
    <!-- Contact Hero Section -->
    <section class="relative py-20 bg-gradient-to-br from-slate-50 via-orange-50 to-amber-50">
      <div class="absolute inset-0">
        <div class="absolute top-10 left-10 w-48 h-48 bg-orange-200 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-64 h-64 bg-amber-200 rounded-full opacity-20 blur-3xl"></div>
      </div>
      
      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
          <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6">
            Get in Touch
          </h1>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Ready to advance your pharmacy career in the UK? We're here to help you every step of the way.
          </p>
        </div>
      </div>
    </section>

    <!-- Contact Content Section -->
    <section class="py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
          <!-- Contact Form -->
          <div>
            <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
              <h2 class="text-3xl font-bold text-gray-900 mb-6">Send us a Message</h2>
              <form @submit.prevent="submitForm" class="space-y-6">
                <!-- Name Fields -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                  <div>
                    <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">
                      First Name *
                    </label>
                    <input
                      type="text"
                      id="first_name"
                      v-model="form.first_name"
                      required
                      class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors"
                      :class="form.errors.first_name ? 'border-red-500' : 'border-gray-300'"
                      placeholder="Enter your first name"
                    />
                  </div>
                  <div>
                    <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">
                      Last Name *
                    </label>
                    <input
                      type="text"
                      id="last_name"
                      v-model="form.last_name"
                      required
                      class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors"
                      :class="form.errors.last_name ? 'border-red-500' : 'border-gray-300'"
                      placeholder="Enter your last name"
                    />
                  </div>
                </div>

                <!-- Email -->
                <div>
                  <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                    Email Address *
                  </label>
                  <input
                    type="email"
                    id="email"
                    v-model="form.email"
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors"
                    placeholder="Enter your email address"
                  />
                </div>

                <!-- Phone -->
                <div>
                  <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                    Phone Number
                  </label>
                  <input
                    type="tel"
                    id="phone"
                    v-model="form.phone"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors"
                    placeholder="Enter your phone number"
                  />
                </div>

                <!-- Subject -->
                <div>
                  <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">
                    Subject *
                  </label>
                  <select
                    id="subject"
                    v-model="form.subject"
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors"
                  >
                    <option value="">Select a topic</option>
                    <option value="consultation">Free Consultation</option>
                    <option value="group-mentoring">Group Mentoring School</option>
                    <option value="professional-development">Professional Development Coaching</option>
                    <option value="workforce-integration">Workforce Integration & Excellence</option>
                    <option value="general">General Inquiry</option>
                  </select>
                </div>

                <!-- Message -->
                <div>
                  <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                    Message *
                  </label>
                  <textarea
                    id="message"
                    v-model="form.message"
                    required
                    rows="5"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors resize-none"
                    placeholder="Tell us about your background and how we can help..."
                  ></textarea>
                </div>

                <!-- Consent -->
                <div class="flex items-start">
                  <input
                    type="checkbox"
                    id="consent"
                    v-model="form.consent"
                    required
                    class="mt-1 w-4 h-4 text-orange-600 border-gray-300 rounded focus:ring-orange-500"
                  />
                  <label for="consent" class="ml-3 text-sm text-gray-600">
                    I agree to be contacted regarding my inquiry and consent to the processing of my personal data for this purpose. *
                  </label>
                </div>

                <!-- Submit Button -->
                <button
                  type="submit"
                  :disabled="isSubmitting"
                  class="w-full px-6 py-4 bg-orange-600 text-white font-semibold rounded-lg hover:bg-orange-700 focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl"
                >
                  <span v-if="!isSubmitting" class="flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                    </svg>
                    Send Message
                  </span>
                  <span v-else class="flex items-center justify-center">
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                      <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Sending...
                  </span>
                </button>
              </form>

              <!-- Success Message -->
              <div v-if="showSuccess || $page.props.flash?.success" class="mt-6 p-4 bg-green-50 border border-green-200 rounded-lg">
                <div class="flex">
                  <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                  </svg>
                  <p class="ml-3 text-sm text-green-700">
                    {{ $page.props.flash?.success || "Thank you for your message! We'll get back to you within 24 hours." }}
                  </p>
                </div>
              </div>

              <!-- Error Message -->
              <div v-if="showError || $page.props.flash?.error" class="mt-6 p-4 bg-red-50 border border-red-200 rounded-lg">
                <div class="flex">
                  <svg class="w-5 h-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                  </svg>
                  <p class="ml-3 text-sm text-red-700">
                    {{ $page.props.flash?.error || "There was an issue sending your message. Please try again." }}
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Contact Information -->
          <div class="space-y-8">
            <!-- Contact Details -->
            <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-8 border border-orange-100">
              <h3 class="text-2xl font-bold text-gray-900 mb-6">Contact Information</h3>
              
              <div class="space-y-6">
                <!-- Email -->
                <div class="flex items-start">
                  <div class="w-12 h-12 bg-orange-600 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                  </div>
                  <div class="ml-4">
                    <p class="text-sm font-medium text-gray-900">Email</p>
                    <p class="text-sm text-gray-600">info@pharmacistevolve.com</p>
                  </div>
                </div>

                <!-- Phone -->
                <div class="flex items-start">
                  <div class="w-12 h-12 bg-orange-600 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                  </div>
                  <div class="ml-4">
                    <p class="text-sm font-medium text-gray-900">Phone</p>
                    <p class="text-sm text-gray-600">+44 (0) 20 7123 4567</p>
                  </div>
                </div>

                <!-- Address -->
                <div class="flex items-start">
                  <div class="w-12 h-12 bg-orange-600 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                  </div>
                  <div class="ml-4">
                    <p class="text-sm font-medium text-gray-900">Office</p>
                    <p class="text-sm text-gray-600">London, United Kingdom</p>
                  </div>
                </div>

                <!-- Hours -->
                <div class="flex items-start">
                  <div class="w-12 h-12 bg-orange-600 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                  </div>
                  <div class="ml-4">
                    <p class="text-sm font-medium text-gray-900">Business Hours</p>
                    <p class="text-sm text-gray-600">Monday - Friday: 9:00 AM - 6:00 PM GMT</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Quick Links -->
            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 border border-blue-100">
              <h3 class="text-2xl font-bold text-gray-900 mb-6">Quick Actions</h3>
              
              <div class="space-y-4">
                <a 
                  href="https://book.heygoldie.com/FaithThePharmacist"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="flex items-center p-4 bg-white rounded-lg border border-blue-200 hover:border-blue-300 hover:shadow-md transition-all group"
                >
                  <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                  </div>
                  <div class="ml-4 flex-1">
                    <p class="text-sm font-medium text-gray-900">Book Free Consultation</p>
                    <p class="text-xs text-gray-600">Schedule a call with our team</p>
                  </div>
                  <svg class="w-5 h-5 text-blue-600 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                  </svg>
                </a>

                <Link 
                  href="/services" 
                  class="flex items-center p-4 bg-white rounded-lg border border-blue-200 hover:border-blue-300 hover:shadow-md transition-all group"
                >
                  <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                  </div>
                  <div class="ml-4 flex-1">
                    <p class="text-sm font-medium text-gray-900">Explore Services</p>
                    <p class="text-xs text-gray-600">Learn about our programs</p>
                  </div>
                  <svg class="w-5 h-5 text-blue-600 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                  </svg>
                </Link>

                <Link 
                  href="/testimonials" 
                  class="flex items-center p-4 bg-white rounded-lg border border-blue-200 hover:border-blue-300 hover:shadow-md transition-all group"
                >
                  <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                  </div>
                  <div class="ml-4 flex-1">
                    <p class="text-sm font-medium text-gray-900">Read Testimonials</p>
                    <p class="text-xs text-gray-600">See success stories</p>
                  </div>
                  <svg class="w-5 h-5 text-blue-600 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                  </svg>
                </Link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
            Frequently Asked Questions
          </h2>
          <p class="text-xl text-gray-600">
            Quick answers to common questions about our services
          </p>
        </div>

        <div class="space-y-6">
          <div 
            v-for="(faq, index) in faqs" 
            :key="index"
            class="bg-white rounded-lg shadow-sm border border-gray-200"
          >
            <button
              @click="toggleFaq(index)"
              class="w-full px-6 py-4 text-left focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-inset"
            >
              <div class="flex justify-between items-center">
                <h3 class="text-lg font-medium text-gray-900">{{ faq.question }}</h3>
                <svg 
                  class="w-5 h-5 text-gray-500 transform transition-transform duration-200"
                  :class="{ 'rotate-180': openFaq === index }"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24"
                >
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </div>
            </button>
            <div 
              v-show="openFaq === index"
              class="px-6 pb-4"
            >
              <p class="text-gray-600">{{ faq.answer }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { ref, reactive } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link, useForm, usePage } from '@inertiajs/vue3'

// Get page props for success/error messages
const page = usePage()

// Form data using Inertia's useForm for better handling
const form = useForm({
  first_name: '',
  last_name: '',
  email: '',
  phone: '',
  subject: '',
  message: '',
  consent: false
})

// Form state
const isSubmitting = ref(false)
const showSuccess = ref(!!page.props.flash?.success)
const showError = ref(!!page.props.flash?.error)

// FAQ state
const openFaq = ref(null)

// FAQ data
const faqs = ref([
  {
    question: "How long does the coaching process typically take?",
    answer: "The duration varies depending on your individual needs and goals. Our Group Mentoring School runs for 12 weeks, while individual coaching can range from 3-6 months for specific objectives."
  },
  {
    question: "Do you provide support for OSPAP exam preparation?",
    answer: "Yes, our Professional Development Coaching includes comprehensive OSPAP exam preparation with personalized study plans, practice exams, and ongoing mentorship support."
  },
  {
    question: "What makes your workforce integration program different?",
    answer: "Our program combines practical UK pharmacy experience with personalized career coaching, CV optimization, interview preparation, and ongoing support even after you secure your position."
  },
  {
    question: "Can I join if I'm already working in the UK?",
    answer: "Absolutely! Our services support pharmacists at all career stages, from recent arrivals to those looking to advance to senior positions in the UK pharmacy sector."
  },
  {
    question: "Do you offer payment plans for your services?",
    answer: "Yes, we offer flexible payment options to make our services accessible. Contact us to discuss payment plans that work for your situation."
  }
])

// Methods
const submitForm = () => {
  form.post('/contact', {
    preserveScroll: true,
    onStart: () => {
      isSubmitting.value = true
      showSuccess.value = false
      showError.value = false
    },
    onSuccess: () => {
      showSuccess.value = true
      showError.value = false
      // Reset form after successful submission
      form.reset()
      // Auto-hide success message after 8 seconds
      setTimeout(() => {
        showSuccess.value = false
      }, 8000)
    },
    onError: () => {
      showError.value = true
      showSuccess.value = false
    },
    onFinish: () => {
      isSubmitting.value = false
    }
  })
}

const toggleFaq = (index) => {
  openFaq.value = openFaq.value === index ? null : index
}
</script>
