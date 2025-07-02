<template>
  <div class="min-h-screen bg-gray-50">
    <Navigation />
    
    <main class="pt-16">
      <slot />
    </main>

    <Footer />
    
    <!-- Cookie Consent Banner -->
    <CookieConsent ref="cookieConsentRef" />
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import Navigation from '@/Components/Navigation.vue'
import Footer from '@/Components/Footer.vue'
import CookieConsent from '@/Components/CookieConsent.vue'

const cookieConsentRef = ref(null)

// Listen for custom event to show cookie preferences
onMounted(() => {
  if (typeof window !== 'undefined') {
    window.addEventListener('show-cookie-preferences', () => {
      if (cookieConsentRef.value) {
        cookieConsentRef.value.showPreferences()
      }
    })
  }
})
</script>
