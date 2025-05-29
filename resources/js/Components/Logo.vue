<template>
  <div class="flex items-center">
    <!-- Actual Logo Image (includes all text and tagline) -->
    <img 
      :src="logoSrc" 
      alt="Pharmacist Evolve - Empowering Overseas Pharmacists to Succeed in UK" 
      :class="logoSize"
      class="object-contain"
    />
  </div>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
  size: {
    type: String,
    default: 'medium'
  },
  variant: {
    type: String,
    default: 'light' // 'light' for light backgrounds, 'dark' for dark backgrounds
  }
})

// Choose logo version based on background
const logoSrc = computed(() => {
  // For now, we'll use the same logo but you can add different versions
  if (props.variant === 'dark') {
    // If you create a version with transparent background, use: '/images/logo-dark.png'
    return '/images/logo.png'
  }
  return '/images/logo.png'
})

// Define logo sizes - adjusted for the full logo with text
const logoSize = computed(() => {
  const sizes = {
    small: 'h-8 w-auto',        // Small for mobile/compact areas
    medium: 'h-12 w-auto',      // Standard navigation size
    large: 'h-16 w-auto',       // Large for headers
    xlarge: 'h-24 w-auto',      // Extra large for hero sections
    hero: 'h-32 w-auto'         // Hero section size
  }
  return sizes[props.size] || sizes.medium
})
</script>

<style scoped>
/* Remove white background from logo */
.logo-transparent {
  mix-blend-mode: multiply;
  background: transparent;
}

/* Alternative approach for better browser support */
.logo-transparent {
  background-color: transparent;
  /* This CSS filter removes white background by making it transparent */
  filter: 
    contrast(1.2) 
    brightness(1.1)
    drop-shadow(0 0 0 transparent);
}

/* For dark backgrounds, ensure logo is visible */
.dark .logo-transparent,
.bg-gray-900 .logo-transparent {
  filter: 
    contrast(1.2) 
    brightness(1.3)
    drop-shadow(0 1px 2px rgba(0, 0, 0, 0.1));
}
</style>
