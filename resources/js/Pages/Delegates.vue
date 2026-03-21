<template>
  <AppLayout>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-gray-900 via-slate-900 to-gray-900 overflow-hidden">
      <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(ellipse_at_top_left,_rgba(249,115,22,0.15),_transparent_50%)]"></div>
        <div class="absolute top-0 right-0 w-full h-full bg-[radial-gradient(ellipse_at_bottom_right,_rgba(59,130,246,0.1),_transparent_50%)]"></div>
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-orange-500 rounded-full opacity-[0.07] blur-[100px]"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-blue-500 rounded-full opacity-[0.07] blur-[100px]"></div>
      </div>

      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28">
        <div class="text-center">
          <div class="inline-flex items-center px-4 sm:px-5 py-2 sm:py-2.5 rounded-full bg-gradient-to-r from-orange-500/20 to-amber-500/20 border border-orange-500/30 text-orange-300 text-xs sm:text-sm font-semibold mb-6 sm:mb-8 backdrop-blur-sm">
            <span class="w-2 h-2 bg-orange-400 rounded-full mr-2 sm:mr-3 animate-pulse"></span>
            Catalyst Conference 2026
          </div>

          <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-4 sm:mb-6 leading-tight">
            Our <span class="bg-gradient-to-r from-orange-400 via-amber-400 to-orange-500 bg-clip-text text-transparent">Delegates</span>
          </h1>

          <p class="text-lg sm:text-xl lg:text-2xl font-light text-gray-300 mb-8 sm:mb-10 max-w-3xl mx-auto leading-relaxed px-2">
            Meet the inspiring professionals, speakers, and partners joining us to shape the future of overseas pharmacist workforce integration.
          </p>

          <Link
            href="/conference"
            class="inline-flex items-center text-orange-400 hover:text-orange-300 font-semibold transition-colors"
          >
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Back to Conference
          </Link>
        </div>
      </div>
    </section>

    <!-- Delegates List -->
    <section v-if="delegates.length > 0" class="py-16 sm:py-24 bg-white">
      <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Speakers -->
        <div v-if="groupedDelegates.speakers.length > 0" class="mb-16">
          <div class="flex items-center gap-3 mb-8">
            <div class="w-1.5 h-8 bg-gradient-to-b from-emerald-500 to-teal-500 rounded-full"></div>
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Speakers</h2>
          </div>
          <div class="flex flex-wrap gap-x-2 gap-y-3">
            <span
              v-for="delegate in groupedDelegates.speakers"
              :key="delegate.id"
              class="inline-flex items-center px-4 py-2 rounded-full bg-emerald-50 text-emerald-800 font-medium text-sm sm:text-base border border-emerald-100 hover:bg-emerald-100 hover:border-emerald-200 transition-colors"
            >
              {{ delegate.name }}
            </span>
          </div>
        </div>

        <!-- Partners -->
        <div v-if="groupedDelegates.partners.length > 0" class="mb-16">
          <div class="flex items-center gap-3 mb-8">
            <div class="w-1.5 h-8 bg-gradient-to-b from-blue-500 to-indigo-500 rounded-full"></div>
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Partners</h2>
          </div>
          <div class="flex flex-wrap gap-x-2 gap-y-3">
            <span
              v-for="delegate in groupedDelegates.partners"
              :key="delegate.id"
              class="inline-flex items-center px-4 py-2 rounded-full bg-blue-50 text-blue-800 font-medium text-sm sm:text-base border border-blue-100 hover:bg-blue-100 hover:border-blue-200 transition-colors"
            >
              {{ delegate.name }}
            </span>
          </div>
        </div>

        <!-- Sponsors -->
        <div v-if="groupedDelegates.sponsors.length > 0" class="mb-16">
          <div class="flex items-center gap-3 mb-8">
            <div class="w-1.5 h-8 bg-gradient-to-b from-purple-500 to-violet-500 rounded-full"></div>
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Sponsors</h2>
          </div>
          <div class="flex flex-wrap gap-x-2 gap-y-3">
            <span
              v-for="delegate in groupedDelegates.sponsors"
              :key="delegate.id"
              class="inline-flex items-center px-4 py-2 rounded-full bg-purple-50 text-purple-800 font-medium text-sm sm:text-base border border-purple-100 hover:bg-purple-100 hover:border-purple-200 transition-colors"
            >
              {{ delegate.name }}
            </span>
          </div>
        </div>

        <!-- Attendees -->
        <div v-if="groupedDelegates.attendees.length > 0" class="mb-16">
          <div class="flex items-center gap-3 mb-8">
            <div class="w-1.5 h-8 bg-gradient-to-b from-orange-500 to-amber-500 rounded-full"></div>
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Attendees</h2>
          </div>
          <div class="flex flex-wrap gap-x-2 gap-y-3">
            <span
              v-for="delegate in groupedDelegates.attendees"
              :key="delegate.id"
              class="inline-flex items-center px-4 py-2 rounded-full bg-orange-50 text-orange-800 font-medium text-sm sm:text-base border border-orange-100 hover:bg-orange-100 hover:border-orange-200 transition-colors"
            >
              {{ delegate.name }}
            </span>
          </div>
        </div>

      </div>
    </section>

    <!-- Empty State -->
    <section v-if="delegates.length === 0" class="py-24 bg-white">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
          <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
          </svg>
        </div>
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Delegates Coming Soon</h2>
        <p class="text-lg text-gray-600 mb-8">
          We're currently confirming delegates for the Catalyst Conference 2026. Check back soon to meet our amazing community of professionals.
        </p>
        <Link
          href="/conference"
          class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-orange-500 to-amber-500 text-white font-bold rounded-xl hover:from-orange-600 hover:to-amber-600 transition-all duration-300 shadow-lg"
        >
          Back to Conference
          <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </Link>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 sm:py-24 bg-gradient-to-br from-gray-900 via-slate-900 to-gray-900 text-white relative overflow-hidden">
      <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(ellipse_at_top_right,_rgba(249,115,22,0.12),_transparent_50%)]"></div>
      </div>

      <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl sm:text-4xl font-bold mb-4">
          Join Our Delegates
        </h2>
        <p class="text-lg sm:text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
          Be part of this transformative conference. Connect with industry leaders, learn from experts, and help shape the future of overseas pharmacist workforce integration.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a
            href="https://www.eventbrite.co.uk/e/pharmacist-evolve-the-catalyst-conference-2026-tickets-1983275923676?aff=oddtdtcreator"
            target="_blank"
            class="group inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-orange-500 to-amber-500 text-white font-bold rounded-xl hover:from-orange-600 hover:to-amber-600 transform hover:scale-105 transition-all duration-300 shadow-lg shadow-orange-500/25"
          >
            Get Your Delegate Pass
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>
          <Link
            href="/conference"
            class="group inline-flex items-center justify-center px-8 py-4 border-2 border-white/20 text-white font-bold rounded-xl hover:bg-white/10 hover:border-white/40 transition-all duration-300"
          >
            Learn More
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </Link>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from '@inertiajs/vue3'

const props = defineProps({
  delegates: {
    type: Array,
    default: () => []
  },
  groupedDelegates: {
    type: Object,
    default: () => ({
      speakers: [],
      partners: [],
      sponsors: [],
      attendees: []
    })
  },
  stats: {
    type: Object,
    default: () => ({})
  }
})
</script>
