<template>
  <AppLayout>
    <!-- Hero Section -->
    <section class="relative min-h-screen bg-gradient-to-br from-gray-900 via-slate-900 to-gray-900 overflow-hidden flex items-center">
      <!-- Animated Background Elements -->
      <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(ellipse_at_top_left,_rgba(249,115,22,0.15),_transparent_50%)]"></div>
        <div class="absolute top-0 right-0 w-full h-full bg-[radial-gradient(ellipse_at_bottom_right,_rgba(59,130,246,0.1),_transparent_50%)]"></div>
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-orange-500 rounded-full opacity-[0.07] blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-blue-500 rounded-full opacity-[0.07] blur-[100px] animate-pulse" style="animation-delay: 1s"></div>
        <!-- Grid Pattern -->
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 60px 60px;"></div>
      </div>

      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28 lg:py-32">
        <div class="text-center">
          <!-- Event Badge -->
          <div class="inline-flex items-center px-4 sm:px-5 py-2 sm:py-2.5 rounded-full bg-gradient-to-r from-orange-500/20 to-amber-500/20 border border-orange-500/30 text-orange-300 text-xs sm:text-sm font-semibold mb-6 sm:mb-8 backdrop-blur-sm">
            <span class="w-2 h-2 bg-orange-400 rounded-full mr-2 sm:mr-3 animate-pulse"></span>
            23rd May 2026 &middot; Warwick, UK
          </div>

          <!-- Main Headline -->
          <h1 class="text-4xl sm:text-6xl lg:text-8xl font-extrabold text-white mb-4 sm:mb-6 leading-[0.95] tracking-tight">
            <span class="block">Catalyst</span>
            <span class="block bg-gradient-to-r from-orange-400 via-amber-400 to-orange-500 bg-clip-text text-transparent">Conference</span>
            <span class="block text-2xl sm:text-4xl lg:text-5xl font-bold text-gray-300 mt-3 sm:mt-4">2026</span>
          </h1>

          <!-- Tagline -->
          <p class="text-lg sm:text-2xl lg:text-3xl font-light text-gray-300 mb-3 sm:mb-4 max-w-4xl mx-auto leading-relaxed px-2">
            Shaping the Future of Overseas Pharmacist Workforce Integration
          </p>

          <!-- Theme -->
          <div class="flex items-center justify-center gap-2 sm:gap-3 text-base sm:text-lg text-orange-400 font-semibold mb-8 sm:mb-10">
            <span class="w-6 sm:w-8 h-px bg-orange-500/50"></span>
            Empower &middot; Evolve &middot; Excel
            <span class="w-6 sm:w-8 h-px bg-orange-500/50"></span>
          </div>

          <!-- Description -->
          <p class="text-base sm:text-lg text-gray-400 mb-8 sm:mb-12 max-w-3xl mx-auto leading-relaxed px-2">
            Catalyst is the UK's first dedicated conference focused exclusively on workforce
            integration for overseas-trained pharmacists. Bringing together frontline professionals
            and decision-makers to transform lived experience into actionable reform.
          </p>
          <div class="text-left max-w-2xl mx-auto mb-2">
            <p class="text-base sm:text-lg text-gray-300 mb-3 font-semibold">Delegates will leave with:</p>
            <ul class="space-y-2 text-base sm:text-lg text-gray-400">
              <li class="flex items-start gap-3">
                <svg class="w-5 h-5 text-orange-400 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span>Strategic clarity on how integration actually works in practice</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-5 h-5 text-orange-400 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span>Tools to influence, lead, and advocate within their organisations</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-5 h-5 text-orange-400 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span>Cross-sector relationships that unlock opportunity</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-5 h-5 text-orange-400 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span>A collective roadmap for building a more inclusive, high-performing pharmacy workforce</span>
              </li>
            </ul>
          </div>
          <p class="hidden">
          </p>

          <!-- Event Quick Details -->
          <div class="grid grid-cols-2 sm:flex sm:flex-wrap sm:justify-center gap-3 sm:gap-4 lg:gap-6 mb-8 sm:mb-12">
            <div class="flex items-center gap-2 text-gray-300 bg-white/5 backdrop-blur-sm rounded-xl px-3 sm:px-5 py-2.5 sm:py-3 border border-white/10">
              <svg class="w-4 sm:w-5 h-4 sm:h-5 text-orange-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <span class="text-xs sm:text-sm font-medium">Warwick, UK</span>
            </div>
            <div class="flex items-center gap-2 text-gray-300 bg-white/5 backdrop-blur-sm rounded-xl px-3 sm:px-5 py-2.5 sm:py-3 border border-white/10">
              <svg class="w-4 sm:w-5 h-4 sm:h-5 text-orange-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              <span class="text-xs sm:text-sm font-medium">10 AM &ndash; 4:30 PM</span>
            </div>
            <div class="flex items-center gap-2 text-gray-300 bg-white/5 backdrop-blur-sm rounded-xl px-3 sm:px-5 py-2.5 sm:py-3 border border-white/10">
              <svg class="w-4 sm:w-5 h-4 sm:h-5 text-orange-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
              </svg>
              <span class="text-xs sm:text-sm font-medium">100&ndash;120 Delegates</span>
            </div>
            <div class="flex items-center gap-2 text-gray-300 bg-white/5 backdrop-blur-sm rounded-xl px-3 sm:px-5 py-2.5 sm:py-3 border border-white/10">
              <svg class="w-4 sm:w-5 h-4 sm:h-5 text-orange-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/>
              </svg>
              <span class="text-xs sm:text-sm font-medium">Panels &middot; Workshops</span>
            </div>
          </div>

          <!-- CTA Buttons -->
          <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center px-4 sm:px-0">
            <a
              href="https://www.eventbrite.co.uk/e/pharmacist-evolve-the-catalyst-conference-2026-tickets-1983275923676?aff=oddtdtcreator" target="_blank"
              class="group inline-flex items-center justify-center px-6 sm:px-10 py-3.5 sm:py-4 bg-gradient-to-r from-orange-500 to-amber-500 text-white font-bold rounded-xl hover:from-orange-600 hover:to-amber-600 transform hover:scale-105 transition-all duration-300 shadow-lg shadow-orange-500/25 hover:shadow-orange-500/40 text-base sm:text-lg"
            >
              Get a Delegate Pass
              <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
              </svg>
            </a>
            <a
              href="mailto:faithadebimpe@pharmacistevolve.com?subject=Catalyst Conference 2026 - Partnership Enquiry"
              class="group inline-flex items-center justify-center px-6 sm:px-10 py-3.5 sm:py-4 border-2 border-white/20 text-white font-bold rounded-xl hover:bg-white/10 hover:border-white/40 transition-all duration-300 text-base sm:text-lg backdrop-blur-sm"
            >
              Partner With Us
              <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Scroll Indicator -->
      <div class="absolute bottom-6 sm:bottom-8 left-1/2 -translate-x-1/2 animate-bounce hidden sm:block">
        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
        </svg>
      </div>
    </section>

    <!-- Why the Conference Exists -->
    <section class="py-16 sm:py-24 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
          <div class="text-center mb-8 sm:mb-12">
            <span class="inline-block text-orange-600 font-semibold text-sm uppercase tracking-widest mb-3 sm:mb-4">The Purpose</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6 sm:mb-8">
              Why the Catalyst Conference Exists
            </h2>
          </div>

          <div class="space-y-5 sm:space-y-6 text-base sm:text-lg text-gray-600 leading-relaxed">
            <p>
              Overseas-trained pharmacists play a vital role in the UK pharmacy workforce. Yet too often their
              journey is shaped by <strong class="text-gray-900">fragmented support</strong>, <strong class="text-gray-900">unclear pathways</strong>,
              and <strong class="text-gray-900">inconsistent integration</strong> into practice.
            </p>
            <p>
              Pharmacists are expected to adapt quickly, perform confidently, and contribute safely -while
              navigating cultural differences, system complexity, and professional uncertainty. Employers want
              workforce-ready pharmacists, educators want effective progression pathways, and policymakers
              want sustainable solutions -but these conversations rarely happen together, in the same room.
            </p>
            <div class="bg-gradient-to-r from-orange-50 to-amber-50 rounded-2xl p-6 sm:p-8 border-l-4 border-orange-500 my-8 sm:my-10">
              <p class="text-lg sm:text-xl font-semibold text-gray-900">
                The Pharmacist Evolve Catalyst Conference exists to change that.
              </p>
            </div>
            <p>
              This conference creates space for <strong class="text-gray-900">honest dialogue</strong>,
              <strong class="text-gray-900">shared understanding</strong>, and
              <strong class="text-gray-900">practical collaboration</strong> -moving beyond surface-level
              discussions toward solutions that can be tested, refined, and scaled.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Who This Conference Is For -->
    <section class="py-16 sm:py-24 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10 sm:mb-16">
          <span class="inline-block text-orange-600 font-semibold text-sm uppercase tracking-widest mb-3 sm:mb-4">Audience</span>
          <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">
            Who This Conference Is For
          </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
          <!-- Pharmacists -->
          <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-orange-200 relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-orange-500 to-amber-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
            <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-amber-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-orange-500/20 group-hover:scale-110 transition-transform duration-300">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 7l-9-5 9-5 9 5-9 5z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Overseas-Trained & Early Career Pharmacists</h3>
            <ul class="space-y-3">
              <li class="flex items-start gap-3">
                <svg class="w-5 h-5 text-orange-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600">Post-OSPAP pharmacists navigating UK practice</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-5 h-5 text-orange-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600">Pharmacists in foundation training or early career roles</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-5 h-5 text-orange-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600">Those seeking clarity, confidence, and sustainable career progression</span>
              </li>
            </ul>
          </div>

          <!-- Employers -->
          <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-blue-200 relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-indigo-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-blue-500/20 group-hover:scale-110 transition-transform duration-300">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Employers & Pharmacy Leaders</h3>
            <ul class="space-y-3">
              <li class="flex items-start gap-3">
                <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600">Pharmacy owners and superintendents</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600">PCN, GP, and NHS pharmacy leaders</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600">Workforce, education, and inclusion leads</span>
              </li>
            </ul>
          </div>

          <!-- Educators -->
          <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-emerald-200 relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-emerald-500 to-teal-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
            <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-emerald-500/20 group-hover:scale-110 transition-transform duration-300">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Educators, Regulators & Industry Partners</h3>
            <ul class="space-y-3">
              <li class="flex items-start gap-3">
                <svg class="w-5 h-5 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600">Universities and training providers</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-5 h-5 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600">Professional bodies and sector organisations</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-5 h-5 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600">Industry partners invested in workforce development and quality</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Closing statement -->
        <div class="text-center mt-12">
          <p class="text-xl text-gray-700 font-medium">
            If you care about building a <strong class="text-orange-600">safe, confident, and well-supported pharmacy workforce</strong>, this conference is for you.
          </p>
        </div>

        <!-- Mid-page CTA -->
        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center mt-10 px-4 sm:px-0">
          <a
            href="https://www.eventbrite.co.uk/e/pharmacist-evolve-the-catalyst-conference-2026-tickets-1983275923676?aff=oddtdtcreator" target="_blank"
            class="group inline-flex items-center justify-center px-6 sm:px-10 py-3.5 sm:py-4 bg-gradient-to-r from-orange-500 to-amber-500 text-white font-bold rounded-xl hover:from-orange-600 hover:to-amber-600 transform hover:scale-105 transition-all duration-300 shadow-lg shadow-orange-500/25 text-base sm:text-lg"
          >
            Get a Delegate Pass
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>
          <a
            href="mailto:faithadebimpe@pharmacistevolve.com?subject=Catalyst Conference 2026 - Partnership Enquiry"
            class="group inline-flex items-center justify-center px-6 sm:px-10 py-3.5 sm:py-4 border-2 border-orange-500/30 text-orange-600 font-bold rounded-xl hover:bg-orange-50 hover:border-orange-500/50 transition-all duration-300 text-base sm:text-lg"
          >
            Partner With Us
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>
        </div>
      </div>
    </section>

    <!-- What Makes It Different -->
    <section class="py-16 sm:py-24 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10 sm:mb-16">
          <span class="inline-block text-orange-600 font-semibold text-sm uppercase tracking-widest mb-3 sm:mb-4">Our Approach</span>
          <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">
            What Makes the Catalyst Conference Different
          </h2>
          <p class="text-lg sm:text-xl text-gray-600 max-w-2xl mx-auto">
            This is not a traditional CPD event.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-8 max-w-5xl mx-auto">
          <!-- Lived Experience -->
          <div class="relative bg-gradient-to-br from-gray-900 to-slate-800 rounded-2xl p-6 sm:p-8 text-white overflow-hidden group">
            <div class="absolute top-0 right-0 w-32 h-32 bg-orange-500 rounded-full opacity-10 blur-2xl group-hover:opacity-20 transition-opacity duration-500"></div>
            <div class="relative">
              <div class="w-12 h-12 bg-orange-500/20 rounded-xl flex items-center justify-center mb-5">
                <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                </svg>
              </div>
              <h3 class="text-xl font-bold mb-3">Lived Experience at the Centre</h3>
              <p class="text-gray-300 leading-relaxed">
                Real insights from overseas pharmacists who have navigated the system -not just theoretical perspectives.
              </p>
            </div>
          </div>

          <!-- Practical -->
          <div class="relative bg-gradient-to-br from-gray-900 to-slate-800 rounded-2xl p-6 sm:p-8 text-white overflow-hidden group">
            <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500 rounded-full opacity-10 blur-2xl group-hover:opacity-20 transition-opacity duration-500"></div>
            <div class="relative">
              <div class="w-12 h-12 bg-blue-500/20 rounded-xl flex items-center justify-center mb-5">
                <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                </svg>
              </div>
              <h3 class="text-xl font-bold mb-3">Practical, Not Performative</h3>
              <p class="text-gray-300 leading-relaxed">
                Conversations grounded in what works, what doesn't, and why.
              </p>
            </div>
          </div>

          <!-- Cross-Sector -->
          <div class="relative bg-gradient-to-br from-gray-900 to-slate-800 rounded-2xl p-6 sm:p-8 text-white overflow-hidden group">
            <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-500 rounded-full opacity-10 blur-2xl group-hover:opacity-20 transition-opacity duration-500"></div>
            <div class="relative">
              <div class="w-12 h-12 bg-emerald-500/20 rounded-xl flex items-center justify-center mb-5">
                <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
              </div>
              <h3 class="text-xl font-bold mb-3">Cross-Sector Collaboration</h3>
              <p class="text-gray-300 leading-relaxed">
                Pharmacists, employers, educators, policymakers, and industry partners in the same room, engaging in shared problem-solving.
              </p>
            </div>
          </div>

          <!-- Solutions -->
          <div class="relative bg-gradient-to-br from-gray-900 to-slate-800 rounded-2xl p-6 sm:p-8 text-white overflow-hidden group">
            <div class="absolute top-0 right-0 w-32 h-32 bg-purple-500 rounded-full opacity-10 blur-2xl group-hover:opacity-20 transition-opacity duration-500"></div>
            <div class="relative">
              <div class="w-12 h-12 bg-purple-500/20 rounded-xl flex items-center justify-center mb-5">
                <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
              </div>
              <h3 class="text-xl font-bold mb-3">Solutions-Focused</h3>
              <p class="text-gray-300 leading-relaxed">
                Moving from problem identification toward actionable pathways and pilot-ready ideas.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- The Journey of the Day (Timeline) -->
    <section class="py-16 sm:py-24 bg-gradient-to-b from-gray-50 to-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 sm:mb-20">
          <span class="inline-block text-orange-600 font-semibold text-sm uppercase tracking-widest mb-3 sm:mb-4">Agenda</span>
          <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">
            The Journey of the Day
          </h2>
          <p class="text-lg sm:text-xl text-gray-600 max-w-2xl mx-auto">
            The conference is designed to take delegates on a clear and intentional journey.
          </p>
        </div>

        <div class="max-w-4xl mx-auto">
          <!-- Timeline -->
          <div class="relative">
            <!-- Timeline Line - left on mobile, center on desktop -->
            <div class="absolute left-4 md:left-1/2 top-0 bottom-0 w-0.5 bg-gradient-to-b from-orange-500 via-blue-500 to-emerald-500"></div>

            <!-- Morning -->
            <div class="relative mb-12 md:mb-24">
              <!-- Mobile dot -->
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
                        <span class="text-sm sm:text-base text-gray-700">Opening keynote: the overseas pharmacist experience -data, lived reality, and workforce impact</span>
                      </li>
                      <li class="flex items-start gap-3">
                        <div class="w-2 h-2 bg-orange-500 rounded-full mt-2 flex-shrink-0"></div>
                        <span class="text-sm sm:text-base text-gray-700">Panel discussion: workforce integration -what's working, what isn't, and what needs to change</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Midday -->
            <div class="relative mb-12 md:mb-24">
              <!-- Mobile dot -->
              <div class="absolute left-4 -translate-x-1/2 w-4 h-4 md:w-6 md:h-6 bg-blue-500 rounded-full border-2 md:border-4 border-white shadow-lg md:left-1/2 md:-translate-x-1/2 z-10"></div>
              <div class="pl-10 md:pl-0 md:flex md:items-start md:gap-12">
                <!-- Label - shown first on mobile, reordered on desktop -->
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
                <!-- Content card -->
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
              <!-- Mobile dot -->
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
      </div>
    </section>

    <!-- Workforce Integration Pathway -->
    <section class="py-16 sm:py-24 bg-gradient-to-br from-gray-900 via-slate-900 to-gray-900 text-white relative overflow-hidden">
      <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(ellipse_at_center,_rgba(249,115,22,0.08),_transparent_60%)]"></div>
      </div>

      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center mb-10 sm:mb-16">
          <span class="inline-block text-orange-400 font-semibold text-sm uppercase tracking-widest mb-3 sm:mb-4">Centrepiece</span>
          <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 sm:mb-6">
            From Insight to Action
          </h2>
          <h3 class="text-xl sm:text-2xl lg:text-3xl font-light text-gray-300 mb-6 sm:mb-8">
            The Workforce Integration Pathway
          </h3>
          <p class="text-base sm:text-lg text-gray-400 leading-relaxed">
            A central feature of the Catalyst Conference is the introduction of the
            <strong class="text-white">Overseas Pharmacist Workforce Integration Pathway</strong> -
            bringing together insights from lived experience, employer needs, education
            frameworks, and workforce priorities.
          </p>
        </div>

        <!-- Pathway Steps -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 sm:gap-8 max-w-4xl mx-auto mb-10 sm:mb-16">
          <div class="text-center group">
            <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-amber-500 rounded-2xl flex items-center justify-center mx-auto mb-5 shadow-lg shadow-orange-500/20 group-hover:scale-110 transition-transform duration-300">
              <span class="text-2xl font-bold text-white">1</span>
            </div>
            <h4 class="text-lg font-bold text-white mb-2">Pre-OSPAP</h4>
            <p class="text-gray-400">Preparation and readiness support</p>
          </div>
          <div class="text-center group">
            <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center mx-auto mb-5 shadow-lg shadow-blue-500/20 group-hover:scale-110 transition-transform duration-300">
              <span class="text-2xl font-bold text-white">2</span>
            </div>
            <h4 class="text-lg font-bold text-white mb-2">OSPAP & Training</h4>
            <p class="text-gray-400">Structured training support</p>
          </div>
          <div class="text-center group">
            <div class="w-20 h-20 bg-gradient-to-br from-emerald-500 to-teal-500 rounded-2xl flex items-center justify-center mx-auto mb-5 shadow-lg shadow-emerald-500/20 group-hover:scale-110 transition-transform duration-300">
              <span class="text-2xl font-bold text-white">3</span>
            </div>
            <h4 class="text-lg font-bold text-white mb-2">Post-Registration</h4>
            <p class="text-gray-400">Integration and career progression</p>
          </div>
        </div>

        <!-- Connecting Lines (decorative) -->
        <div class="hidden md:flex items-center justify-center gap-4 max-w-2xl mx-auto mb-12">
          <div class="flex-1 h-px bg-gradient-to-r from-transparent via-orange-500 to-blue-500"></div>
          <div class="flex-1 h-px bg-gradient-to-r from-blue-500 via-emerald-500 to-transparent"></div>
        </div>

        <div class="max-w-3xl mx-auto space-y-6 text-center">
          <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 sm:p-8 border border-white/10">
            <p class="text-gray-300 leading-relaxed text-base sm:text-lg">
              This is not presented as a finished solution, but as a <strong class="text-orange-400">pilot framework</strong>
              that invites collaboration, challenge, and shared ownership from across the sector.
            </p>
          </div>
          <p class="text-xl font-semibold text-gray-200">
            The Catalyst Conference marks the <span class="text-orange-400">beginning of wider collaboration</span>, not the end of the conversation.
          </p>
        </div>
      </div>
    </section>

    <!-- Speakers -->
    <section class="py-16 sm:py-24 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10 sm:mb-16">
          <span class="inline-block text-orange-600 font-semibold text-sm uppercase tracking-widest mb-3 sm:mb-4">Voices</span>
          <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">
            Speakers & Contributors
          </h2>
          <p class="text-lg sm:text-xl text-gray-600 max-w-2xl mx-auto">
            Speakers and contributors will include voices from across the pharmacy sector.
          </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 max-w-4xl mx-auto mb-10 sm:mb-12">
          <div class="text-center bg-gray-50 rounded-2xl p-4 sm:p-6 border border-gray-100">
            <div class="w-16 h-16 bg-gradient-to-br from-orange-100 to-orange-200 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 7l-9-5 9-5 9 5-9 5z"/>
              </svg>
            </div>
            <p class="font-semibold text-gray-900">Overseas-Trained Pharmacists</p>
          </div>
          <div class="text-center bg-gray-50 rounded-2xl p-4 sm:p-6 border border-gray-100">
            <div class="w-16 h-16 bg-gradient-to-br from-blue-100 to-blue-200 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
              </svg>
            </div>
            <p class="font-semibold text-gray-900">Pharmacy Leaders & Employers</p>
          </div>
          <div class="text-center bg-gray-50 rounded-2xl p-4 sm:p-6 border border-gray-100">
            <div class="w-16 h-16 bg-gradient-to-br from-emerald-100 to-emerald-200 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
              </svg>
            </div>
            <p class="font-semibold text-gray-900">Educators & Training Providers</p>
          </div>
          <div class="text-center bg-gray-50 rounded-2xl p-4 sm:p-6 border border-gray-100">
            <div class="w-16 h-16 bg-gradient-to-br from-purple-100 to-purple-200 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
              </svg>
            </div>
            <p class="font-semibold text-gray-900">Workforce & Policy Stakeholders</p>
          </div>
        </div>

        <div class="text-center">
          <div class="inline-flex items-center gap-2 bg-amber-50 text-amber-800 px-6 py-3 rounded-xl border border-amber-200">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span class="font-semibold">Full speaker announcements coming soon.</span>
          </div>
          <p class="mt-6 text-gray-600 italic">
            Interested in contributing or participating in the conversation?
            <a href="mailto:faithadebimpe@pharmacistevolve.com" class="text-orange-600 hover:text-orange-700 font-medium underline underline-offset-2">
              Please get in touch.
            </a>
          </p>
        </div>

        <!-- Mid-page CTA 2 -->
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
          <a
            href="mailto:faithadebimpe@pharmacistevolve.com?subject=Catalyst Conference 2026 - Partnership Enquiry"
            class="group inline-flex items-center justify-center px-6 sm:px-10 py-3.5 sm:py-4 border-2 border-orange-500/30 text-orange-600 font-bold rounded-xl hover:bg-orange-50 hover:border-orange-500/50 transition-all duration-300 text-base sm:text-lg"
          >
            Partner With Us
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>
        </div>
      </div>
    </section>

    <!-- Partners & Sponsors -->
    <section class="py-16 sm:py-24 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10 sm:mb-16">
          <span class="inline-block text-orange-600 font-semibold text-sm uppercase tracking-widest mb-3 sm:mb-4">Collaborate</span>
          <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">
            Partners & Sponsors
          </h2>
          <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto">
            Partners and sponsors of the Catalyst Conference are more than event supporters -they are
            contributors to meaningful workforce conversations and solutions.
          </p>
        </div>

        <div class="max-w-3xl mx-auto mb-12">
          <p class="text-lg text-gray-700 text-center mb-8 font-medium">
            We welcome collaboration with organisations aligned to:
          </p>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="flex items-center gap-4 bg-white rounded-xl p-5 border border-gray-100 shadow-sm">
              <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
              </div>
              <span class="text-gray-800 font-medium">Workforce Sustainability</span>
            </div>
            <div class="flex items-center gap-4 bg-white rounded-xl p-5 border border-gray-100 shadow-sm">
              <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
              </div>
              <span class="text-gray-800 font-medium">Education & Training</span>
            </div>
            <div class="flex items-center gap-4 bg-white rounded-xl p-5 border border-gray-100 shadow-sm">
              <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
              </div>
              <span class="text-gray-800 font-medium">Inclusion & Professional Development</span>
            </div>
            <div class="flex items-center gap-4 bg-white rounded-xl p-5 border border-gray-100 shadow-sm">
              <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                </svg>
              </div>
              <span class="text-gray-800 font-medium">Innovation in Pharmacy Practice</span>
            </div>
          </div>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a
            href="mailto:faithadebimpe@pharmacistevolve.com?subject=Catalyst Conference 2026 - Partnership Enquiry"
            class="inline-flex items-center justify-center px-8 py-4 bg-gray-900 text-white font-bold rounded-xl hover:bg-gray-800 transition-colors duration-200 text-lg"
          >
            Discuss Partnership Opportunities
          </a>
        </div>
      </div>
    </section>

    <!-- Practical Information -->
    <section class="py-16 sm:py-24 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10 sm:mb-16">
          <span class="inline-block text-orange-600 font-semibold text-sm uppercase tracking-widest mb-3 sm:mb-4">Details</span>
          <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">
            Practical Information
          </h2>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 max-w-5xl mx-auto">
          <!-- Venue -->
          <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-4 sm:p-6 border border-orange-100 text-center">
            <div class="w-10 sm:w-14 h-10 sm:h-14 bg-white rounded-xl flex items-center justify-center mx-auto mb-3 sm:mb-4 shadow-sm">
              <svg class="w-5 sm:w-7 h-5 sm:h-7 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
            </div>
            <h4 class="font-bold text-gray-900 mb-1 sm:mb-2 text-sm sm:text-base">Venue</h4>
            <p class="text-gray-600 text-xs sm:text-sm">The Slate Conferences, Warwick CV4 7SH</p>
          </div>

          <!-- Accessibility -->
          <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-4 sm:p-6 border border-blue-100 text-center">
            <div class="w-10 sm:w-14 h-10 sm:h-14 bg-white rounded-xl flex items-center justify-center mx-auto mb-3 sm:mb-4 shadow-sm">
              <svg class="w-5 sm:w-7 h-5 sm:h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
              </svg>
            </div>
            <h4 class="font-bold text-gray-900 mb-1 sm:mb-2 text-sm sm:text-base">Accessibility</h4>
            <p class="text-gray-600 text-xs sm:text-sm">Fully accessible. Contact us with any requirements.</p>
          </div>

          <!-- Catering -->
          <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-4 sm:p-6 border border-emerald-100 text-center">
            <div class="w-10 sm:w-14 h-10 sm:h-14 bg-white rounded-xl flex items-center justify-center mx-auto mb-3 sm:mb-4 shadow-sm">
              <svg class="w-5 sm:w-7 h-5 sm:h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </div>
            <h4 class="font-bold text-gray-900 mb-1 sm:mb-2 text-sm sm:text-base">Catering</h4>
            <p class="text-gray-600 text-xs sm:text-sm">All dietary requirements accommodated.</p>
          </div>

          <!-- Tickets -->
          <div class="bg-gradient-to-br from-purple-50 to-violet-50 rounded-2xl p-4 sm:p-6 border border-purple-100 text-center">
            <div class="w-10 sm:w-14 h-10 sm:h-14 bg-white rounded-xl flex items-center justify-center mx-auto mb-3 sm:mb-4 shadow-sm">
              <svg class="w-5 sm:w-7 h-5 sm:h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
              </svg>
            </div>
            <h4 class="font-bold text-gray-900 mb-1 sm:mb-2 text-sm sm:text-base">Tickets</h4>
            <p class="text-gray-600 text-xs sm:text-sm">Get your delegate pass now via Eventbrite.</p>
          </div>
        </div>

        <div class="text-center mt-10">
          <p class="text-gray-600">
            For enquiries, please contact:
            <a href="mailto:faithadebimpe@pharmacistevolve.com" class="text-orange-600 hover:text-orange-700 font-semibold underline underline-offset-2">
              faithadebimpe@pharmacistevolve.com
            </a>
          </p>
        </div>
      </div>
    </section>

    <!-- About Pharmacist Evolve -->
    <section class="py-16 bg-gray-50">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h3 class="text-2xl font-bold text-gray-900 mb-4">About Pharmacist Evolve</h3>
        <p class="text-lg text-gray-600 leading-relaxed mb-6">
          Pharmacist Evolve is a platform dedicated to supporting overseas-trained pharmacists to
          integrate, progress, and thrive within the UK workforce. Through coaching, community, advocacy,
          and strategic collaboration, Pharmacist Evolve works to turn complexity into clarity -
          supporting both individual pharmacists and the wider systems they work within.
        </p>
        <Link href="/about" class="text-orange-600 hover:text-orange-700 font-semibold inline-flex items-center gap-2">
          Learn more about Pharmacist Evolve
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </Link>
      </div>
    </section>

    <!-- Final CTA -->
    <section class="py-16 sm:py-24 bg-gradient-to-br from-gray-900 via-slate-900 to-gray-900 text-white relative overflow-hidden">
      <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(ellipse_at_top_right,_rgba(249,115,22,0.12),_transparent_50%)]"></div>
        <div class="absolute bottom-0 right-0 w-full h-full bg-[radial-gradient(ellipse_at_bottom_left,_rgba(59,130,246,0.08),_transparent_50%)]"></div>
      </div>

      <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 sm:mb-6">
          Be Part of the Conversation
        </h2>
        <p class="text-base sm:text-xl text-gray-300 mb-3 sm:mb-4 leading-relaxed max-w-3xl mx-auto">
          The future of the pharmacy workforce will be shaped by the conversations we are willing to have
          and the actions we are willing to test.
        </p>
        <p class="text-base sm:text-xl text-gray-300 mb-8 sm:mb-12 leading-relaxed max-w-3xl mx-auto">
          Join us at the Pharmacist Evolve Catalyst Conference and be part of building a more
          <strong class="text-white">confident, supported, and sustainable workforce</strong>.
        </p>

        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center px-4 sm:px-0">
          <a
            href="https://www.eventbrite.co.uk/e/pharmacist-evolve-the-catalyst-conference-2026-tickets-1983275923676?aff=oddtdtcreator" target="_blank"
            class="group inline-flex items-center justify-center px-6 sm:px-10 py-3.5 sm:py-4 bg-gradient-to-r from-orange-500 to-amber-500 text-white font-bold rounded-xl hover:from-orange-600 hover:to-amber-600 transform hover:scale-105 transition-all duration-300 shadow-lg shadow-orange-500/25 text-base sm:text-lg"
          >
            Get a Delegate Pass
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>
          <a
            href="mailto:faithadebimpe@pharmacistevolve.com?subject=Catalyst Conference 2026 - Partnership Enquiry"
            class="group inline-flex items-center justify-center px-6 sm:px-10 py-3.5 sm:py-4 border-2 border-white/20 text-white font-bold rounded-xl hover:bg-white/10 hover:border-white/40 transition-all duration-300 text-base sm:text-lg"
          >
            Partner With Us
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>
