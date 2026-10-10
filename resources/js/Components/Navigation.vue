<template>
  <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <!-- Logo -->
        <div class="flex-shrink-0">
          <Link href="/">
            <Logo :showTagline="false" />
          </Link>
        </div>

        <!-- Desktop + tablet navigation -->
        <div class="hidden md:flex items-center space-x-1 lg:space-x-2">
          <Link
            v-for="item in navItems"
            :key="item.href"
            :href="item.href"
            class="px-3 py-2 text-sm font-medium transition-colors whitespace-nowrap"
            :class="isActive(item)
              ? 'text-orange-600'
              : 'text-gray-700 hover:text-orange-600'"
          >
            {{ item.label }}
          </Link>
        </div>

        <!-- Mobile menu button -->
        <div class="md:hidden">
          <button
            @click="mobileMenuOpen = !mobileMenuOpen"
            class="text-gray-700 hover:text-orange-600 focus:outline-none focus:text-orange-600"
            aria-label="Toggle menu"
          >
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path v-if="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile navigation -->
      <div v-show="mobileMenuOpen" class="md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t">
          <Link
            v-for="item in navItems"
            :key="item.href"
            :href="item.href"
            class="block px-3 py-2 text-sm font-medium"
            :class="isActive(item) ? 'text-orange-600' : 'text-gray-700 hover:text-orange-600'"
            @click="mobileMenuOpen = false"
          >
            {{ item.label }}
          </Link>
        </div>
      </div>
    </div>
  </nav>
</template>

<script setup>
import { ref } from 'vue'
import { Link, usePage } from '@inertiajs/vue3'
import Logo from './Logo.vue'

const page = usePage()
const mobileMenuOpen = ref(false)

const navItems = [
  { label: 'For Pharmacists', href: '/for-pharmacists', component: 'ForPharmacists' },
  { label: 'For Employers', href: '/for-employers', component: 'ForEmployers' },
  { label: 'About', href: '/about', component: 'About' },
  { label: 'Events', href: '/events', component: 'Events' },
  { label: 'Resources', href: '/resources', component: 'Resources' },
]

const isActive = (item) => page.component === item.component
</script>
