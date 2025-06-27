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

        <!-- Compact Navigation for Medium Screens -->
        <div class="hidden md:flex lg:hidden items-center space-x-2">
          <Link href="/" class="text-gray-700 hover:text-orange-600 text-xs font-medium px-2 py-1">Home</Link>
          <Link href="/services" class="text-gray-700 hover:text-orange-600 text-xs font-medium px-2 py-1">Services</Link>
          <Link href="/events" class="text-gray-700 hover:text-orange-600 text-xs font-medium px-2 py-1">Events</Link>
          <Link href="/about" class="text-gray-700 hover:text-orange-600 text-xs font-medium px-2 py-1">About</Link>
          <Link href="/contact" class="text-gray-700 hover:text-orange-600 text-xs font-medium px-2 py-1">Contact</Link>
          <a 
            href="https://book.heygoldie.com/FaithThePharmacist"
            target="_blank"
            rel="noopener noreferrer"
            class="bg-orange-600 text-white px-3 py-1.5 rounded text-xs font-medium hover:bg-orange-700 whitespace-nowrap ml-2"
          >
            Book Now
          </a>
        </div>

        <!-- Full Desktop Navigation -->
        <div class="hidden lg:block">
          <div class="ml-6 flex items-baseline space-x-4">
            <Link 
              href="/" 
              class="text-gray-700 hover:text-orange-600 px-2 py-2 text-sm font-medium transition-colors"
              :class="{ 'text-orange-600': $page.component === 'Home' }"
            >
              Home
            </Link>
            
            <Link 
              href="/services" 
              class="text-gray-700 hover:text-orange-600 px-2 py-2 text-sm font-medium transition-colors"
              :class="{ 'text-orange-600': $page.component === 'Services' }"
            >
              Services
            </Link>

            <Link 
              href="/events" 
              class="text-gray-700 hover:text-orange-600 px-2 py-2 text-sm font-medium transition-colors"
              :class="{ 'text-orange-600': $page.component === 'Events' }"
            >
              Events
            </Link>

            <Link 
              href="/about" 
              class="text-gray-700 hover:text-orange-600 px-2 py-2 text-sm font-medium transition-colors"
              :class="{ 'text-orange-600': $page.component === 'About' }"
            >
              About
            </Link>
            
            <Link 
              href="/testimonials" 
              class="text-gray-700 hover:text-orange-600 px-2 py-2 text-sm font-medium transition-colors"
              :class="{ 'text-orange-600': $page.component === 'Testimonials' }"
            >
              Testimonials
            </Link>

            <Link 
              href="/collaborate" 
              class="text-gray-700 hover:text-orange-600 px-2 py-2 text-sm font-medium transition-colors"
              :class="{ 'text-orange-600': $page.component === 'Collaborate' }"
            >
              Collaborate
            </Link>

            <Link 
              href="/blog" 
              class="text-gray-700 hover:text-orange-600 px-2 py-2 text-sm font-medium transition-colors"
              :class="{ 'text-orange-600': $page.component === 'Blog' }"
            >
              Blog
            </Link>
            
            <Link 
              href="/contact" 
              class="text-gray-700 hover:text-orange-600 px-2 py-2 text-sm font-medium transition-colors"
              :class="{ 'text-orange-600': $page.component === 'Contact' }"
            >
              Contact
            </Link>
          </div>
        </div>

        <!-- CTA Button for Large Screens -->
        <div class="hidden lg:block">
          <a 
            href="https://book.heygoldie.com/FaithThePharmacist"
            target="_blank"
            rel="noopener noreferrer"
            class="inline-flex items-center bg-orange-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-orange-700 transition-colors whitespace-nowrap"
          >
            Book a Consultation
          </a>
        </div>

        <!-- Mobile menu button -->
        <div class="lg:hidden">
          <button 
            @click="mobileMenuOpen = !mobileMenuOpen"
            class="text-gray-700 hover:text-orange-600 focus:outline-none focus:text-orange-600"
          >
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path 
                v-if="!mobileMenuOpen" 
                stroke-linecap="round" 
                stroke-linejoin="round" 
                stroke-width="2" 
                d="M4 6h16M4 12h16M4 18h16"
              ></path>
              <path 
                v-else 
                stroke-linecap="round" 
                stroke-linejoin="round" 
                stroke-width="2" 
                d="M6 18L18 6M6 6l12 12"
              ></path>
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Navigation -->
      <div v-show="mobileMenuOpen" class="lg:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t">
          <Link href="/" class="block px-3 py-2 text-sm font-medium text-gray-700 hover:text-orange-600">
            Home
          </Link>
          <Link href="/services" class="block px-3 py-2 text-sm font-medium text-gray-700 hover:text-orange-600">
            Services
          </Link>
          <Link href="/events" class="block px-3 py-2 text-sm font-medium text-gray-700 hover:text-orange-600">
            Events
          </Link>
          <Link href="/about" class="block px-3 py-2 text-sm font-medium text-gray-700 hover:text-orange-600">
            About Us
          </Link>
          <Link href="/testimonials" class="block px-3 py-2 text-sm font-medium text-gray-700 hover:text-orange-600">
            Testimonials
          </Link>
          <Link href="/collaborate" class="block px-3 py-2 text-sm font-medium text-gray-700 hover:text-orange-600">
            Collaborate with Us
          </Link>
          <Link href="/blog" class="block px-3 py-2 text-sm font-medium text-gray-700 hover:text-orange-600">
            Blog
          </Link>
          <Link href="/contact" class="block px-3 py-2 text-sm font-medium text-gray-700 hover:text-orange-600">
            Contact
          </Link>
          <div class="px-3 py-2">
            <a 
              href="https://book.heygoldie.com/FaithThePharmacist"
              target="_blank"
              rel="noopener noreferrer"
              class="block bg-orange-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-orange-700 text-center"
            >
              Book a Consultation
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>
</template>

<script setup>
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3'
import Logo from './Logo.vue'

const mobileMenuOpen = ref(false)
</script>
