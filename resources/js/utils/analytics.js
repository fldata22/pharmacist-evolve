/**
 * Analytics utilities for cookie consent management
 * This file provides helper functions to initialize and manage analytics services
 * based on user consent preferences.
 */

/**
 * Initialize Google Analytics 4
 * Call this function when analytics consent is granted
 * 
 * @param {string} measurementId - Your GA4 Measurement ID (e.g., 'G-XXXXXXXXXX')
 */
export const initializeGoogleAnalytics = (measurementId) => {
  if (typeof window === 'undefined' || !measurementId) return

  // Load gtag script if not already loaded
  if (!window.gtag) {
    const script = document.createElement('script')
    script.async = true
    script.src = `https://www.googletagmanager.com/gtag/js?id=${measurementId}`
    document.head.appendChild(script)

    // Initialize gtag
    window.dataLayer = window.dataLayer || []
    window.gtag = function() {
      window.dataLayer.push(arguments)
    }
    window.gtag('js', new Date())
  }

  // Configure with consent
  window.gtag('config', measurementId, {
    'anonymize_ip': true, // GDPR compliance
    'cookie_flags': 'samesite=strict;secure', // Enhanced security
    'consent_mode': 'advanced' // Enable consent mode
  })

  console.log('Google Analytics initialized with consent')
}

/**
 * Update Google Analytics consent
 * 
 * @param {Object} consent - Consent object with analytics and marketing booleans
 */
export const updateGoogleAnalyticsConsent = (consent) => {
  if (typeof window === 'undefined' || !window.gtag) return

  window.gtag('consent', 'update', {
    'analytics_storage': consent.analytics ? 'granted' : 'denied',
    'ad_storage': consent.marketing ? 'granted' : 'denied',
    'ad_user_data': consent.marketing ? 'granted' : 'denied',
    'ad_personalization': consent.marketing ? 'granted' : 'denied'
  })

  console.log('Google Analytics consent updated:', consent)
}

/**
 * Track custom events (only if analytics consent is granted)
 * 
 * @param {string} eventName - The event name
 * @param {Object} parameters - Event parameters
 */
export const trackEvent = (eventName, parameters = {}) => {
  if (typeof window === 'undefined' || !window.gtag) return

  window.gtag('event', eventName, parameters)
}

/**
 * Track page views (useful for SPAs)
 * 
 * @param {string} pageTitle - The page title
 * @param {string} pagePath - The page path
 */
export const trackPageView = (pageTitle, pagePath) => {
  if (typeof window === 'undefined' || !window.gtag) return

  window.gtag('event', 'page_view', {
    page_title: pageTitle,
    page_location: window.location.href,
    page_path: pagePath
  })
}

/**
 * Initialize Facebook Pixel (example for marketing consent)
 * 
 * @param {string} pixelId - Your Facebook Pixel ID
 */
export const initializeFacebookPixel = (pixelId) => {
  if (typeof window === 'undefined' || !pixelId) return

  // Load Facebook Pixel
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');

  window.fbq('init', pixelId)
  window.fbq('track', 'PageView')

  console.log('Facebook Pixel initialized')
}

/**
 * Default consent state for analytics services
 * This sets denied by default until user gives explicit consent
 */
export const initializeConsentMode = () => {
  if (typeof window === 'undefined') return

  // Initialize Google Consent Mode with default denied state
  window.dataLayer = window.dataLayer || []
  window.gtag = window.gtag || function() {
    window.dataLayer.push(arguments)
  }

  window.gtag('consent', 'default', {
    'analytics_storage': 'denied',
    'ad_storage': 'denied',
    'ad_user_data': 'denied',
    'ad_personalization': 'denied',
    'wait_for_update': 500 // Wait 500ms for consent update
  })

  console.log('Consent mode initialized with default denied state')
}

/**
 * Remove analytics cookies when consent is withdrawn
 * This helps with GDPR compliance
 */
export const removeAnalyticsCookies = () => {
  if (typeof window === 'undefined') return

  // List of common analytics cookies to remove
  const analyticsCookies = [
    '_ga',
    '_ga_',
    '_gid',
    '_gat',
    '_gtag',
    '_gcl_au',
    '_fbp',
    '_fbc'
  ]

  analyticsCookies.forEach(cookieName => {
    // Remove cookie from current domain
    document.cookie = `${cookieName}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`
    // Remove cookie from parent domain
    document.cookie = `${cookieName}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=.${window.location.hostname};`
  })

  console.log('Analytics cookies removed')
}