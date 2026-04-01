<template>
  <AppLayout>
    <!-- Hero -->
    <section class="relative bg-gradient-to-br from-gray-900 via-slate-900 to-gray-900 overflow-hidden">
      <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(ellipse_at_top_left,_rgba(249,115,22,0.15),_transparent_50%)]"></div>
        <div class="absolute top-0 right-0 w-full h-full bg-[radial-gradient(ellipse_at_bottom_right,_rgba(59,130,246,0.1),_transparent_50%)]"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 60px 60px;"></div>
      </div>

      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32 text-center">
        <span class="inline-block text-orange-400 font-semibold text-sm uppercase tracking-widest mb-4">Catalyst Conference 2026</span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6">
          Programme
        </h1>
        <p class="text-lg sm:text-xl text-gray-300 max-w-2xl mx-auto mb-8">
          The conference is designed to take delegates on a clear and intentional journey.
        </p>
        <div class="flex flex-wrap items-center justify-center gap-4 text-sm text-gray-400">
          <span class="inline-flex items-center gap-2 bg-white/5 px-4 py-2 rounded-full border border-white/10">
            <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            23rd May 2026
          </span>
          <span class="inline-flex items-center gap-2 bg-white/5 px-4 py-2 rounded-full border border-white/10">
            <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            10:00 AM - 4:30 PM
          </span>
          <span class="inline-flex items-center gap-2 bg-white/5 px-4 py-2 rounded-full border border-white/10">
            <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            Warwick, UK
          </span>
        </div>
      </div>
    </section>

    <!-- Timeline -->
    <section class="py-16 sm:py-24 bg-gradient-to-b from-gray-50 to-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
          <div class="relative">
            <!-- Timeline Line -->
            <div class="absolute left-4 md:left-1/2 top-0 bottom-0 w-0.5 bg-gradient-to-b from-orange-500 via-blue-500 to-emerald-500"></div>

            <!-- Morning -->
            <div class="relative mb-12 md:mb-24">
              <div class="absolute left-4 -translate-x-1/2 w-4 h-4 md:w-6 md:h-6 bg-orange-500 rounded-full border-2 md:border-4 border-white shadow-lg md:left-1/2 md:-translate-x-1/2 z-10"></div>
              <div class="pl-10 md:pl-0 md:flex md:items-start md:gap-12">
                <div class="md:w-1/2 md:text-right md:pr-8">
                  <div class="inline-flex items-center gap-2 bg-orange-100 text-orange-700 px-3 sm:px-4 py-1.5 rounded-full text-xs sm:text-sm font-bold mb-3 sm:mb-4">
                    <svg class="w-3.5 sm:w-4 h-3.5 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707"/>
                    </svg>
                    MORNING
                  </div>
                  <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-1 sm:mb-2">Framing the Reality</h3>
                  <p class="text-sm text-gray-500 mb-3 sm:mb-4">10:00 AM</p>
                </div>
                <div class="md:w-1/2 md:pl-8">
                  <div class="bg-white rounded-2xl p-4 sm:p-6 shadow-sm border border-gray-100">
                    <ul class="space-y-3 sm:space-y-4">
                      <li class="flex items-start gap-3">
                        <div class="w-2 h-2 bg-orange-500 rounded-full mt-2 flex-shrink-0"></div>
                        <span class="text-sm sm:text-base text-gray-700">Registration and networking</span>
                      </li>
                      <li class="flex items-start gap-3">
                        <div class="w-2 h-2 bg-orange-500 rounded-full mt-2 flex-shrink-0"></div>
                        <span class="text-sm sm:text-base text-gray-700">Opening keynote: the overseas pharmacist experience - data, lived reality, and workforce impact</span>
                      </li>
                      <li class="flex items-start gap-3">
                        <div class="w-2 h-2 bg-orange-500 rounded-full mt-2 flex-shrink-0"></div>
                        <span class="text-sm sm:text-base text-gray-700">Panel discussion: workforce integration - what's working, what isn't, and what needs to change</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Midday -->
            <div class="relative mb-12 md:mb-24">
              <div class="absolute left-4 -translate-x-1/2 w-4 h-4 md:w-6 md:h-6 bg-blue-500 rounded-full border-2 md:border-4 border-white shadow-lg md:left-1/2 md:-translate-x-1/2 z-10"></div>
              <div class="pl-10 md:pl-0 md:flex md:items-start md:gap-12">
                <div class="md:w-1/2 md:pl-8 md:order-2">
                  <div class="inline-flex items-center gap-2 bg-blue-100 text-blue-700 px-3 sm:px-4 py-1.5 rounded-full text-xs sm:text-sm font-bold mb-3 sm:mb-4">
                    <svg class="w-3.5 sm:w-4 h-3.5 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    MIDDAY
                  </div>
                  <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-1 sm:mb-2">Deepening the Conversation</h3>
                  <p class="text-sm text-gray-500 mb-3 sm:mb-4">12:00 PM</p>
                </div>
                <div class="md:w-1/2 md:text-right md:pr-8 md:order-1">
                  <div class="bg-white rounded-2xl p-4 sm:p-6 shadow-sm border border-gray-100">
                    <ul class="space-y-3 sm:space-y-4">
                      <li class="flex items-start gap-3 md:flex-row-reverse md:text-right">
                        <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 flex-shrink-0"></div>
                        <span class="text-sm sm:text-base text-gray-700">Interactive sessions and facilitated discussions</span>
                      </li>
                      <li class="flex items-start gap-3 md:flex-row-reverse md:text-right">
                        <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 flex-shrink-0"></div>
                        <span class="text-sm sm:text-base text-gray-700">Cross-sector roundtable conversations</span>
                      </li>
                      <li class="flex items-start gap-3 md:flex-row-reverse md:text-right">
                        <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 flex-shrink-0"></div>
                        <span class="text-sm sm:text-base text-gray-700">Lunch and networking</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Afternoon -->
            <div class="relative">
              <div class="absolute left-4 -translate-x-1/2 w-4 h-4 md:w-6 md:h-6 bg-emerald-500 rounded-full border-2 md:border-4 border-white shadow-lg md:left-1/2 md:-translate-x-1/2 z-10"></div>
              <div class="pl-10 md:pl-0 md:flex md:items-start md:gap-12">
                <div class="md:w-1/2 md:text-right md:pr-8">
                  <div class="inline-flex items-center gap-2 bg-emerald-100 text-emerald-700 px-3 sm:px-4 py-1.5 rounded-full text-xs sm:text-sm font-bold mb-3 sm:mb-4">
                    <svg class="w-3.5 sm:w-4 h-3.5 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                    </svg>
                    AFTERNOON
                  </div>
                  <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-1 sm:mb-2">Pathways and Possibilities</h3>
                  <p class="text-sm text-gray-500 mb-3 sm:mb-4">2:00 PM</p>
                </div>
                <div class="md:w-1/2 md:pl-8">
                  <div class="bg-white rounded-2xl p-4 sm:p-6 shadow-sm border border-gray-100">
                    <ul class="space-y-3 sm:space-y-4">
                      <li class="flex items-start gap-3">
                        <div class="w-2 h-2 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
                        <span class="text-sm sm:text-base text-gray-700">Panel discussion: employer, education, and policy perspectives</span>
                      </li>
                      <li class="flex items-start gap-3">
                        <div class="w-2 h-2 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
                        <span class="text-sm sm:text-base text-gray-700">Presentation of the Overseas Pharmacist Workforce Integration Pathway</span>
                      </li>
                      <li class="flex items-start gap-3">
                        <div class="w-2 h-2 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
                        <span class="text-sm sm:text-base text-gray-700">Open dialogue to test, challenge, and refine ideas</span>
                      </li>
                      <li class="flex items-start gap-3">
                        <div class="w-2 h-2 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
                        <span class="text-sm sm:text-base text-gray-700">Closing reflections, keynote, and next steps</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- CTA -->
        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center mt-12 px-4 sm:px-0">
          <a
            href="https://www.eventbrite.co.uk/e/pharmacist-evolve-the-catalyst-conference-2026-tickets-1983275923676?aff=oddtdtcreator" target="_blank"
            class="group inline-flex items-center justify-center px-6 sm:px-10 py-3.5 sm:py-4 bg-gradient-to-r from-orange-500 to-amber-500 text-white font-bold rounded-xl hover:from-orange-600 hover:to-amber-600 transform hover:scale-105 transition-all duration-300 shadow-lg shadow-orange-500/25 text-base sm:text-lg"
          >
            Get a Delegate Pass
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>
          <Link
            href="/conference"
            class="group inline-flex items-center justify-center px-6 sm:px-10 py-3.5 sm:py-4 bg-gray-100 text-gray-700 font-bold rounded-xl hover:bg-gray-200 transition-all duration-300 text-base sm:text-lg"
          >
            Back to Conference
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
</script>
