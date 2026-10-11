<template>
  <AppLayout>
    <!-- Hero -->
    <section class="relative py-20 bg-gradient-to-br from-slate-50 via-orange-50 to-amber-50">
      <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-10 left-10 w-48 h-48 bg-orange-200 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-64 h-64 bg-amber-200 rounded-full opacity-20 blur-3xl"></div>
      </div>

      <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6">Find the Right Support</h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
          Interested in the transition programme? Explore the programme and apply when enrolment opens. Looking for support for your workforce? Send an employer pilot enquiry. For other questions, use the form below.
        </p>
      </div>
    </section>

    <!-- Self-routing cards -->
    <section class="py-16 bg-white">
      <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <Link href="/for-pharmacists" class="group rounded-2xl p-8 bg-gradient-to-br from-orange-50 to-amber-50 border border-orange-100 hover:shadow-lg hover:-translate-y-0.5 transition-all">
            <span class="inline-flex items-center px-3 py-1 rounded-full bg-orange-100 text-orange-800 text-xs font-bold uppercase tracking-wide mb-4">For pharmacists</span>
            <h2 class="text-2xl font-bold text-gray-900 mb-2">Interested in the programme?</h2>
            <p class="text-gray-600 mb-4">Explore the Transition Programme and register your interest. We will email you when enrolment opens.</p>
            <span class="inline-flex items-center font-semibold text-orange-600 group-hover:text-orange-700">
              Explore the programme
              <svg class="w-4 h-4 ml-1.5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
            </span>
          </Link>

          <Link href="/for-employers" class="group rounded-2xl p-8 bg-gradient-to-br from-gray-900 to-slate-800 text-white hover:shadow-lg hover:-translate-y-0.5 transition-all">
            <span class="inline-flex items-center px-3 py-1 rounded-full bg-white/10 border border-white/20 text-orange-200 text-xs font-bold uppercase tracking-wide mb-4">For employers</span>
            <h2 class="text-2xl font-bold mb-2">Supporting your workforce?</h2>
            <p class="text-gray-300 mb-4">Read the Integration Partnership and send a pilot enquiry. We will contact you within five working days.</p>
            <span class="inline-flex items-center font-semibold text-orange-300 group-hover:text-white transition-colors">
              Send a pilot enquiry
              <svg class="w-4 h-4 ml-1.5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
            </span>
          </Link>
        </div>
      </div>
    </section>

    <!-- General enquiry form + contact info -->
    <section class="pb-24 bg-white">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12">
          <!-- Form -->
          <div class="lg:col-span-3">
            <h2 class="text-2xl font-bold text-gray-900 mb-2">Any other question?</h2>
            <p class="text-gray-600 mb-6">Send us a message and we will point you to the right support.</p>

            <div v-if="$page.props.flash?.success" class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg flex items-start">
              <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
              <p class="text-sm text-green-700">{{ $page.props.flash.success }}</p>
            </div>
            <div v-if="$page.props.flash?.error" class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg flex items-start">
              <svg class="w-5 h-5 text-red-500 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" /></svg>
              <p class="text-sm text-red-700">{{ $page.props.flash.error }}</p>
            </div>

            <form @submit.prevent="submitForm" class="space-y-6">
              <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name <span class="text-red-500">*</span></label>
                <input id="name" v-model="form.name" type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors" placeholder="Your name" />
                <p v-if="form.errors.name" class="mt-1 text-sm text-red-600">{{ form.errors.name }}</p>
              </div>

              <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email <span class="text-red-500">*</span></label>
                <input id="email" v-model="form.email" type="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors" placeholder="you@example.com" />
                <p v-if="form.errors.email" class="mt-1 text-sm text-red-600">{{ form.errors.email }}</p>
              </div>

              <div>
                <label for="enquiry_type" class="block text-sm font-medium text-gray-700 mb-2">Enquiry type <span class="text-red-500">*</span></label>
                <select id="enquiry_type" v-model="form.enquiry_type" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors">
                  <option value="">Select a type</option>
                  <option value="programme">Programme questions</option>
                  <option value="employer">Employer support</option>
                  <option value="events_sponsorship">Events or sponsorship</option>
                  <option value="partnerships">Partnerships</option>
                  <option value="other">Other enquiry</option>
                </select>
                <p v-if="form.errors.enquiry_type" class="mt-1 text-sm text-red-600">{{ form.errors.enquiry_type }}</p>
              </div>

              <div>
                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message <span class="text-red-500">*</span></label>
                <textarea id="message" v-model="form.message" required rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors resize-none" placeholder="How can we help?"></textarea>
                <p v-if="form.errors.message" class="mt-1 text-sm text-red-600">{{ form.errors.message }}</p>
              </div>

              <div class="flex items-start">
                <input id="consent" v-model="form.consent" type="checkbox" required class="mt-1 w-4 h-4 text-orange-600 border-gray-300 rounded focus:ring-orange-500" />
                <label for="consent" class="ml-3 text-sm text-gray-600">I agree to be contacted about my enquiry and consent to my details being processed for that purpose. <span class="text-red-500">*</span></label>
              </div>

              <button type="submit" :disabled="form.processing" class="inline-flex items-center justify-center px-7 py-3.5 bg-orange-600 text-white font-semibold rounded-lg hover:bg-orange-700 disabled:opacity-50 disabled:cursor-not-allowed transition-colors">
                <span v-if="!form.processing">Send message</span>
                <span v-else class="flex items-center">
                  <svg class="animate-spin h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                  Sending...
                </span>
              </button>
            </form>
          </div>

          <!-- Contact info -->
          <div class="lg:col-span-2">
            <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-8 border border-orange-100">
              <h3 class="text-xl font-bold text-gray-900 mb-6">Contact details</h3>
              <div class="space-y-6">
                <div class="flex items-start">
                  <div class="w-10 h-10 bg-orange-600 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                  </div>
                  <div class="ml-4">
                    <p class="text-sm font-medium text-gray-900">Email</p>
                    <a href="mailto:support@pharmacistevolve.com" class="text-sm text-gray-600 hover:text-orange-600">support@pharmacistevolve.com</a>
                  </div>
                </div>

                <div class="flex items-start">
                  <div class="w-10 h-10 bg-orange-600 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                  </div>
                  <div class="ml-4">
                    <p class="text-sm font-medium text-gray-900">Location</p>
                    <p class="text-sm text-gray-600">London, United Kingdom</p>
                  </div>
                </div>

                <div class="flex items-start">
                  <div class="w-10 h-10 bg-orange-600 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                  </div>
                  <div class="ml-4">
                    <p class="text-sm font-medium text-gray-900">Response time</p>
                    <p class="text-sm text-gray-600">We reply to enquiries within 5 working days.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link, useForm } from '@inertiajs/vue3'

const form = useForm({
  name: '',
  email: '',
  enquiry_type: '',
  message: '',
  consent: false,
})

const submitForm = () => {
  form.post('/contact', {
    preserveScroll: true,
    onSuccess: () => form.reset(),
  })
}
</script>
