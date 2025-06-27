
<template>
  <div class="flex items-center">
    <div :class="iconSize" class="mr-3 relative">
      <svg viewBox="0 0 100 100" class="w-full h-full">
        <circle cx="50" cy="50" r="45" fill="none" :stroke="strokeColor" stroke-width="6"/>
        <path d="M50 20 C60 35, 60 65, 50 80 C40 65, 40 35, 50 20" :fill="fillColor" opacity="0.8"/>
        <path d="M20 50 C35 40, 65 40, 80 50 C65 60, 35 60, 20 50" :fill="fillColor" opacity="0.6"/>
        <path d="M30 30 C45 35, 55 45, 50 60 C45 45, 35 35, 30 30" :fill="fillColor" opacity="0.7"/>
        <path d="M70 30 C65 35, 55 45, 50 60 C55 45, 65 35, 70 30" :fill="fillColor" opacity="0.7"/>
        <path d="M30 70 C45 65, 55 55, 50 40 C45 55, 35 65, 30 70" :fill="fillColor" opacity="0.7"/>
        <path d="M70 70 C65 65, 55 55, 50 40 C55 55, 65 65, 70 70" :fill="fillColor" opacity="0.7"/>
      </svg>
    </div>
    <div class="flex flex-col">
      <span :class="[titleSize, titleColor]">
        Pharmacist<span :class="accentColor">Evolve</span>
      </span>
      <span v-if="showTagline" :class="[subtitleSize, subtitleColor]">
        Empowering Overseas Pharmacists
      </span>
    </div>
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
  },
  showTagline: {
    type: Boolean,
    default: true
  }
})

// Define icon sizes
const iconSize = computed(() => {
  const sizes = {
    small: 'w-8 h-8',        // Small for mobile/compact areas
    medium: 'w-12 h-12',     // Standard navigation size
    large: 'w-16 h-16',      // Large for headers
    xlarge: 'w-20 h-20',     // Extra large for hero sections
    hero: 'w-24 h-24'        // Hero section size
  }
  return sizes[props.size] || sizes.medium
})

// Define title sizes
const titleSize = computed(() => {
  const sizes = {
    small: 'text-lg font-bold',
    medium: 'text-xl font-bold',
    large: 'text-2xl font-bold',
    xlarge: 'text-3xl font-bold',
    hero: 'text-4xl font-bold'
  }
  return sizes[props.size] || sizes.medium
})

// Define subtitle sizes
const subtitleSize = computed(() => {
  const sizes = {
    small: 'text-xs mt-0.5',
    medium: 'text-sm mt-0.5',
    large: 'text-sm mt-0.5',
    xlarge: 'text-base mt-1',
    hero: 'text-lg mt-1'
  }
  return sizes[props.size] || sizes.medium
})

// Define colors based on variant
const strokeColor = computed(() => {
  return '#F59E0B' // Orange color for all variants
})

const fillColor = computed(() => {
  return '#F59E0B' // Orange color for all variants
})

const titleColor = computed(() => {
  return props.variant === 'dark' ? 'text-white' : 'text-gray-900'
})

const accentColor = computed(() => {
  return props.variant === 'dark' ? 'text-orange-400' : 'text-orange-600'
})

const subtitleColor = computed(() => {
  return props.variant === 'dark' ? 'text-gray-300' : 'text-gray-600'
})
</script>
