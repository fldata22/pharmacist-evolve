<template>
  <div 
    v-if="showBanner" 
    class="fixed bottom-0 left-0 right-0 z-50 bg-white border-t border-gray-200 shadow-lg"
  >
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
      <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-4">
        <!-- Cookie Message -->
        <div class="flex-1">
          <div class="flex items-start">
            <div class="flex-shrink-0 mr-3">
              <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </div>
            <div>
              <h3 class="text-sm font-semibold text-gray-900 mb-1">We use cookies</h3>
              <p class="text-sm text-gray-600 leading-relaxed">
                Pharmacist Evolve uses cookies to gather and analyse data about visitors to this website. This information helps us improve your experience on our site. By selecting 'Accept all,' you agree to Pharmacist Evolve's use of this technology. If you wish to modify your preferences, you can do so at any time by clicking the cookies button, which is always accessible in the footer.
                <Link href="/cookies" class="text-orange-600 hover:text-orange-700 underline ml-1">
                  Learn more about our cookie policy
                </Link>
              </p>
            </div>
          </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-3 w-full lg:w-auto">
          <button
            @click="acceptAll"
            class="w-full sm:w-auto px-6 py-3 text-sm font-medium text-white bg-orange-600 hover:bg-orange-700 rounded-lg transition-colors duration-200 shadow-md hover:shadow-lg"
          >
            Accept All
          </button>
          <button
            @click="manageCookies"
            class="w-full sm:w-auto px-6 py-3 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 rounded-lg transition-colors duration-200 border border-gray-300"
          >
            Cookie Settings
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Cookie Preferences Modal -->
  <div 
    v-if="showPreferencesModal" 
    class="fixed inset-0 z-50 overflow-y-auto"
    @click.self="closePreferences"
  >
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      <!-- Background overlay -->
      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

      <!-- Modal panel -->
      <div class="relative inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full sm:p-6">
        <div class="sm:flex sm:items-start">
          <div class="mt-3 text-center sm:mt-0 sm:text-left w-full">
            <!-- Header -->
            <div class="flex items-center justify-between mb-6">
              <h3 class="text-lg font-semibold text-gray-900">Cookie Preferences</h3>
              <button
                @click="closePreferences"
                class="text-gray-400 hover:text-gray-600 transition-colors"
              >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
              </button>
            </div>

            <!-- Your Privacy is Important to Us -->
            <div class="mb-6">
              <h4 class="text-md font-bold text-gray-900 mb-3">Your Privacy is Important to Us</h4>
              <p class="text-sm text-gray-600 leading-relaxed">
                When you visit a website, it might store or access information on your browser, often through cookies. This data could relate to you, your preferences, or your device, and is primarily used to ensure the site functions as you expect. While this information usually doesn't directly identify you, it can help create a more tailored browsing experience. Since we value your privacy, you have the option to disable certain types of cookies. To learn more or modify the default settings, explore the different categories. Keep in mind, though, that restricting some cookies may affect your site experience and the services we provide. For more information on our use of cookies, please see our cookies policy.
              </p>
            </div>

            <!-- Managing your Cookies -->
            <div class="mb-6">
              <h4 class="text-md font-bold text-gray-900 mb-4">Managing your Cookies</h4>

              <!-- Cookie Categories -->
              <div class="space-y-4">
                <!-- a. Necessary Cookies -->
                <div class="border border-gray-200 rounded-lg p-4">
                  <div class="flex items-center justify-between mb-2">
                    <h5 class="text-sm font-bold text-gray-900">a. Necessary Cookies</h5>
                    <div class="bg-gray-100 rounded-full px-3 py-1">
                      <span class="text-xs font-medium text-gray-600">Always Active</span>
                    </div>
                  </div>
                  <p class="text-sm text-gray-600">
                    Necessary cookies are essential for our website's operation and cannot be turned off. While your browser can be configured to notify you about or block these cookies, doing so may impact the website's functionality and overall effectiveness for you.
                  </p>
                </div>

                <!-- b. Functionality Cookies -->
                <div class="border border-gray-200 rounded-lg p-4">
                  <div class="flex items-center justify-between mb-2">
                    <h5 class="text-sm font-bold text-gray-900">b. Functionality Cookies</h5>
                    <label class="relative inline-flex items-center cursor-pointer">
                      <input 
                        type="checkbox" 
                        v-model="localPreferences.functional" 
                        class="sr-only peer"
                      >
                      <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-orange-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-orange-600"></div>
                    </label>
                  </div>
                  <p class="text-sm text-gray-600">
                    Functionality cookies help us remember your preferences, allowing us to customize the website to suit your needs. Without these cookies, certain features of our website may not be accessible.
                  </p>
                </div>

                <!-- c. Advertisement Cookies -->
                <div class="border border-gray-200 rounded-lg p-4">
                  <div class="flex items-center justify-between mb-2">
                    <h5 class="text-sm font-bold text-gray-900">c. Advertisement Cookies</h5>
                    <label class="relative inline-flex items-center cursor-pointer">
                      <input 
                        type="checkbox" 
                        v-model="localPreferences.marketing" 
                        class="sr-only peer"
                      >
                      <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-orange-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-orange-600"></div>
                    </label>
                  </div>
                  <p class="text-sm text-gray-600">
                    Advertisement cookies record your visit to our website, the pages you have visited and the links you have followed. We will use this information to advertise our services to you.
                  </p>
                </div>

                <!-- d. Analytical Cookies -->
                <div class="border border-gray-200 rounded-lg p-4">
                  <div class="flex items-center justify-between mb-2">
                    <h5 class="text-sm font-bold text-gray-900">d. Analytical Cookies</h5>
                    <label class="relative inline-flex items-center cursor-pointer">
                      <input 
                        type="checkbox" 
                        v-model="localPreferences.analytics" 
                        class="sr-only peer"
                      >
                      <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-orange-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-orange-600"></div>
                    </label>
                  </div>
                  <p class="text-sm text-gray-600">
                    Analytical cookies allow us to recognise and count the number of visitors and to see how visitors move around our website when they are using it. This helps us to improve the way our website works, for example, by ensuring that users are finding what they are looking for easily.
                  </p>
                </div>
              </div>
            </div>

            <!-- Modal Actions -->
            <div class="flex flex-col sm:flex-row gap-3 mt-8">
              <button
                @click="savePreferences"
                class="w-full sm:w-auto px-6 py-3 text-sm font-medium text-white bg-orange-600 hover:bg-orange-700 rounded-lg transition-colors duration-200"
              >
                Confirm My Choices
              </button>
              <button
                @click="acceptAllModal"
                class="w-full sm:w-auto px-6 py-3 text-sm font-medium text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors duration-200 border border-gray-300"
              >
                Accept All
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { Link } from '@inertiajs/vue3'
import { useCookieConsent } from '@/composables/useCookieConsent'

// Use the cookie consent composable
const {
  hasConsent,
  preferences,
  hasGivenConsent,
  acceptAllCookies,
  acceptEssentialOnly,
  updatePreferences,
  initializeConsent
} = useCookieConsent()

// Component state
const showBanner = ref(false)
const showPreferencesModal = ref(false)

// Local preferences for the modal (to allow cancel without saving)
const localPreferences = ref({
  essential: true,
  analytics: false,
  marketing: false,
  functional: false
})

// Banner actions
const acceptAll = () => {
  acceptAllCookies()
  showBanner.value = false
}

const acceptEssential = () => {
  acceptEssentialOnly()
  showBanner.value = false
}

const manageCookies = () => {
  // Copy current preferences to local state
  localPreferences.value = { ...preferences }
  showPreferencesModal.value = true
}

// Modal actions
const closePreferences = () => {
  showPreferencesModal.value = false
}

const savePreferences = () => {
  updatePreferences(localPreferences.value)
  showBanner.value = false
  showPreferencesModal.value = false
}

const acceptAllModal = () => {
  localPreferences.value = {
    essential: true,
    analytics: true,
    marketing: true,
    functional: true
  }
  savePreferences()
}

// Initialize on mount
onMounted(() => {
  initializeConsent()
  
  // Show banner if no consent given
  if (!hasGivenConsent()) {
    showBanner.value = true
  }
})

// Expose methods for external use
defineExpose({
  showPreferences: () => {
    // Copy current preferences to local state
    localPreferences.value = { ...preferences }
    showPreferencesModal.value = true
  },
  getPreferences: () => preferences,
  hasConsent: hasGivenConsent
})
</script>