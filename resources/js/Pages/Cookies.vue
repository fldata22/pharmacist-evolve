<template>
  <AppLayout>
    <div class="min-h-screen bg-white">
      <!-- Header Section -->
      <section class="bg-gradient-to-r from-orange-600 to-amber-600 py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h1 class="text-4xl lg:text-5xl font-bold text-white mb-4">
            Cookies Policy
          </h1>
          <p class="text-xl text-orange-100">
            How we use cookies to improve your experience
          </p>
        </div>
      </section>

      <!-- Content Section -->
      <section class="py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
          
          <!-- Introduction -->
          <div class="mb-12">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
              Please read this cookie policy carefully as it contains important information on who we are and how we use cookies on our Website. 
              This policy should be read together with our 
              <Link href="/privacy" class="text-orange-600 hover:text-orange-700 underline">Privacy Policy</Link> 
              which sets out how and why we collect, store, use and share personal information generally, as well as your rights in relation to your 
              personal information and details of how to contact us and supervisory authorities if you have a complaint.
            </p>
          </div>

          <!-- Who we are -->
          <div class="mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Who we are</h2>
            <p class="text-gray-700 leading-relaxed mb-4">
              This website is operated by Pharmacist Evolve, we can be contacted at 
              <a href="mailto:faithadebimpe@pharmacistevolve.com" class="text-orange-600 hover:text-orange-700">
                faithadebimpe@pharmacistevolve.com
              </a>
            </p>
            <p class="text-gray-700 leading-relaxed mb-4">
              This cookie policy only relates to your use of 
              <a href="https://pharmacistevolve.com/" class="text-orange-600 hover:text-orange-700 underline">
                https://pharmacistevolve.com/
              </a> (<strong>"our website"</strong>)
            </p>
            <p class="text-gray-700 leading-relaxed">
              Throughout our website we may link to other websites owned and operated by certain trusted third parties to make our 
              products and service available to you. These other third-party websites may also use cookies or similar technologies 
              in accordance with their own separate policies. For privacy information relating to these other third-party websites, 
              please consult their policies as appropriate.
            </p>
          </div>

          <!-- Consent to use cookies -->
          <div class="mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Consent to use cookies</h2>
            <p class="text-gray-700 leading-relaxed mb-4">
              We will ask for your consent to place cookies or other similar technologies on your device, except where they are 
              essential for us to provide you with a service that you have requested (e.g., to enable you to use our checkout process).
            </p>
            <p class="text-gray-700 leading-relaxed mb-6">
              The first time you visit our website, you will be informed about our use of cookies. Consenting to our use of cookies 
              in accordance with the terms of this policy when you first visit our website permits us to use cookies every time you 
              visit our website. However, you may adjust or withdraw your consent by using our cookies settings, which are accessible 
              at the bottom right of your screen. It may be necessary to refresh the page for the updated settings to take effect.
            </p>
            
            <!-- Cookie Settings Button -->
            <div class="p-6 bg-orange-50 border border-orange-200 rounded-xl">
              <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                <div>
                  <h3 class="text-lg font-semibold text-gray-900 mb-2">Manage Your Cookie Preferences</h3>
                  <p class="text-gray-600">
                    You can update your cookie preferences at any time using the button below.
                  </p>
                </div>
                <button
                  @click="showCookiePreferences"
                  class="px-6 py-3 bg-orange-600 text-white font-medium rounded-lg hover:bg-orange-700 transition-colors duration-200 whitespace-nowrap"
                >
                  Cookie Settings
                </button>
              </div>
            </div>
          </div>

          <!-- What is a Cookie -->
          <div class="mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">What is a Cookie</h2>
            <p class="text-gray-700 leading-relaxed mb-6">
              A cookie is a small text file which is placed onto your device (e.g. computer, smartphone or another electronic device) 
              when you use our website.
            </p>
            <p class="text-gray-700 leading-relaxed mb-6">We use the following cookies.</p>

            <!-- Cookie Types -->
            <div class="space-y-6">
              <!-- Strictly Necessary Cookies -->
              <div class="border border-gray-200 rounded-xl p-6 bg-gray-50">
                <div class="flex items-center mb-4">
                  <div class="w-3 h-3 bg-green-500 rounded-full mr-3"></div>
                  <h3 class="text-xl font-semibold text-gray-900">Strictly Necessary Cookies</h3>
                  <span class="ml-auto bg-gray-600 px-3 py-1 rounded-full text-sm font-medium text-white">
                    Always Active
                  </span>
                </div>
                <p class="text-gray-700 leading-relaxed">
                  Necessary cookies are essential for the operation of our website. These cookies ensure that basic functions, 
                  such as page navigation and access to secure areas of the site, are functioning correctly. Without these cookies, 
                  certain parts of our website may not operate as intended, and we cannot guarantee that the site will be accessible at all times.
                </p>
              </div>

              <!-- Analytical or performance cookies -->
              <div class="border border-gray-200 rounded-xl p-6">
                <div class="flex items-center mb-4">
                  <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>
                  <h3 class="text-xl font-semibold text-gray-900">Analytical or performance cookies</h3>
                  <span class="ml-auto bg-orange-100 px-3 py-1 rounded-full text-sm font-medium text-orange-700">
                    Optional
                  </span>
                </div>
                <p class="text-gray-700 leading-relaxed">
                  These allow us to recognise and count the number of visitors and to see how visitors move around our website when 
                  they are using it. This helps us to improve the way our website works, for example, by ensuring that users are 
                  finding what they are looking for easily.
                </p>
              </div>

              <!-- Functionality cookies -->
              <div class="border border-gray-200 rounded-xl p-6">
                <div class="flex items-center mb-4">
                  <div class="w-3 h-3 bg-amber-500 rounded-full mr-3"></div>
                  <h3 class="text-xl font-semibold text-gray-900">Functionality cookies</h3>
                  <span class="ml-auto bg-orange-100 px-3 py-1 rounded-full text-sm font-medium text-orange-700">
                    Optional
                  </span>
                </div>
                <p class="text-gray-700 leading-relaxed">
                  these cookies enable our website to provide enhanced features and personalization for a better user experience. 
                  These cookies may be set by us or by third-party service providers whose services we have added to our site. 
                  They allow the website to remember choices you make, such as your language preferences, region, or other customizable features.
                </p>
              </div>

              <!-- Advertisement cookies -->
              <div class="border border-gray-200 rounded-xl p-6">
                <div class="flex items-center mb-4">
                  <div class="w-3 h-3 bg-purple-500 rounded-full mr-3"></div>
                  <h3 class="text-xl font-semibold text-gray-900">Advertisement cookies</h3>
                  <span class="ml-auto bg-orange-100 px-3 py-1 rounded-full text-sm font-medium text-orange-700">
                    Optional
                  </span>
                </div>
                <p class="text-gray-700 leading-relaxed">
                  These cookies allow us to deliver relevant advertisements to you based on your interests. These cookies track your 
                  browsing habits across different websites and gather information about the pages you visit, the links you click, 
                  and your overall online behaviour.
                </p>
              </div>
            </div>
          </div>

          <!-- How to turn off all cookies -->
          <div class="mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">How to turn off all cookies and the consequences of doing so</h2>
            <p class="text-gray-700 leading-relaxed mb-4">
              If you do not want to accept any cookies, you may be able to change your browser settings so that cookies (including those 
              which are essential to the services requested) are not accepted. If you do this, please be aware that you may lose some 
              of the functionality of our website.
            </p>
            <p class="text-gray-700 leading-relaxed">
              For further information about cookies and how to disable them, please contact your browser help line or settings.
            </p>
          </div>

          <!-- How to contact us -->
          <div class="mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">How to contact us</h2>
            <p class="text-gray-700 leading-relaxed mb-4">
              Please contact us if you have any questions about this cookie policy or the information, we hold about you.
            </p>
            <p class="text-gray-700 leading-relaxed">
              If you wish to contact us, please send an email to 
              <a href="mailto:faithadebimpe@pharmacistevolve.com" class="text-orange-600 hover:text-orange-700">
                faithadebimpe@pharmacistevolve.com
              </a>
            </p>
          </div>

          <!-- Changes to this policy -->
          <div class="mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Changes to this policy</h2>
            <p class="text-gray-700 leading-relaxed">
              We may change this policy from time to time, when we do, we will inform you via the email address to which you are 
              provided on our website.
            </p>
          </div>

          <!-- Contact Section -->
          <div class="bg-gray-50 rounded-xl p-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Questions about cookies?</h2>
            <p class="text-gray-700 leading-relaxed mb-6">
              If you have any questions about our use of cookies or this Cookie Policy, please don't hesitate to contact us.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4">
              <Link 
                href="/contact" 
                class="inline-flex items-center px-6 py-3 bg-orange-600 text-white font-medium rounded-lg hover:bg-orange-700 transition-colors duration-200"
              >
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Contact Us
              </Link>
              <a 
                href="mailto:faithadebimpe@pharmacistevolve.com" 
                class="inline-flex items-center px-6 py-3 border border-gray-300 text-gray-700 font-medium rounded-lg hover:bg-gray-50 transition-colors duration-200"
              >
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                </svg>
                Email Us
              </a>
            </div>
            
            <div class="mt-6 text-sm text-gray-600">
              <p><strong>Last updated:</strong> {{ new Date().toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' }) }}</p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from '@inertiajs/vue3'

// Function to show cookie preferences (will trigger the modal)
const showCookiePreferences = () => {
  // Dispatch custom event to trigger cookie preferences modal
  if (typeof window !== 'undefined') {
    window.dispatchEvent(new CustomEvent('show-cookie-preferences'))
  }
}
</script>