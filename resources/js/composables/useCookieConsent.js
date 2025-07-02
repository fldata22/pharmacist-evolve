import { ref, reactive } from 'vue'

// Constants
const COOKIE_CONSENT_KEY = 'cookie-consent'
const COOKIE_PREFERENCES_KEY = 'cookie-preferences'

// Global state
const hasConsent = ref(false)
const preferences = reactive({
  essential: true,
  analytics: false,
  marketing: false,
  functional: false
})

// Initialize consent status
const initializeConsent = () => {
  if (typeof window === 'undefined') return

  // Check if consent has been given
  const consentStatus = localStorage.getItem(COOKIE_CONSENT_KEY)
  hasConsent.value = consentStatus === 'true'

  // Load preferences
  const savedPreferences = localStorage.getItem(COOKIE_PREFERENCES_KEY)
  if (savedPreferences) {
    try {
      const parsed = JSON.parse(savedPreferences)
      Object.assign(preferences, { ...preferences, ...parsed })
    } catch (error) {
      console.warn('Failed to parse cookie preferences:', error)
    }
  }

  // Initialize analytics if consent exists and analytics is enabled
  if (hasConsent.value && preferences.analytics) {
    initializeAnalytics()
  }
}

// Save consent status
const saveConsent = (status) => {
  if (typeof window === 'undefined') return
  localStorage.setItem(COOKIE_CONSENT_KEY, status.toString())
  hasConsent.value = status
}

// Save preferences
const savePreferences = (prefs) => {
  if (typeof window === 'undefined') return
  localStorage.setItem(COOKIE_PREFERENCES_KEY, JSON.stringify(prefs))
  Object.assign(preferences, prefs)
}

// Initialize analytics and other tracking
const initializeAnalytics = () => {
  if (!preferences.analytics || typeof window === 'undefined') return

  // Google Analytics 4 initialization
  if (window.gtag) {
    window.gtag('consent', 'update', {
      'analytics_storage': 'granted'
    })
    console.log('Analytics consent granted')
  }

  // You can add other analytics services here
  // Example: Facebook Pixel, Google Tag Manager, etc.
}

// Initialize marketing tracking
const initializeMarketing = () => {
  if (!preferences.marketing || typeof window === 'undefined') return

  // Initialize marketing tracking services
  if (window.gtag) {
    window.gtag('consent', 'update', {
      'ad_storage': 'granted',
      'ad_user_data': 'granted',
      'ad_personalization': 'granted'
    })
    console.log('Marketing consent granted')
  }

  // You can add other marketing services here
  // Example: Facebook Pixel for marketing, LinkedIn Insight Tag, etc.
}

// Initialize functional features
const initializeFunctional = () => {
  if (!preferences.functional || typeof window === 'undefined') return

  // Initialize functional features like live chat, etc.
  console.log('Functional features enabled')

  // You can add functional services here
  // Example: Live chat widgets, social media features, etc.
}

// Accept all cookies
const acceptAllCookies = () => {
  const allAcceptedPrefs = {
    essential: true,
    analytics: true,
    marketing: true,
    functional: true
  }
  
  saveConsent(true)
  savePreferences(allAcceptedPrefs)
  
  // Initialize all tracking
  initializeAnalytics()
  initializeMarketing()
  initializeFunctional()
}

// Accept only essential cookies
const acceptEssentialOnly = () => {
  const essentialOnlyPrefs = {
    essential: true,
    analytics: false,
    marketing: false,
    functional: false
  }
  
  saveConsent(true)
  savePreferences(essentialOnlyPrefs)
}

// Update preferences and initialize enabled services
const updatePreferences = (newPreferences) => {
  saveConsent(true)
  savePreferences(newPreferences)
  
  // Initialize services based on new preferences
  if (newPreferences.analytics) {
    initializeAnalytics()
  }
  
  if (newPreferences.marketing) {
    initializeMarketing()
  }
  
  if (newPreferences.functional) {
    initializeFunctional()
  }
}

// Check if a specific cookie category is enabled
const isCategoryEnabled = (category) => {
  return preferences[category] || false
}

// Get all preferences
const getPreferences = () => {
  return { ...preferences }
}

// Check if user has given any consent
const hasGivenConsent = () => {
  return hasConsent.value
}

// Reset all cookies and preferences (useful for testing or GDPR right to be forgotten)
const resetCookieConsent = () => {
  if (typeof window === 'undefined') return
  
  localStorage.removeItem(COOKIE_CONSENT_KEY)
  localStorage.removeItem(COOKIE_PREFERENCES_KEY)
  
  hasConsent.value = false
  Object.assign(preferences, {
    essential: true,
    analytics: false,
    marketing: false,
    functional: false
  })
}

// Composable export
export function useCookieConsent() {
  return {
    // State
    hasConsent,
    preferences,
    
    // Methods
    initializeConsent,
    acceptAllCookies,
    acceptEssentialOnly,
    updatePreferences,
    isCategoryEnabled,
    getPreferences,
    hasGivenConsent,
    resetCookieConsent,
    
    // Individual initializers (useful for manual control)
    initializeAnalytics,
    initializeMarketing,
    initializeFunctional
  }
}