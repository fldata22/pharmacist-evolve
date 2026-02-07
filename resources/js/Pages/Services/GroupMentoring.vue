<template>
  <AppLayout>
    <!-- Hero Section -->
    <section class="relative min-h-[70vh] bg-gradient-to-br from-slate-50 via-orange-50 to-amber-50 overflow-hidden">
      <!-- Background Elements -->
      <div class="absolute inset-0">
        <div class="absolute top-20 left-10 w-72 h-72 bg-orange-200 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-amber-200 rounded-full opacity-20 blur-3xl"></div>
      </div>

      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-16">
        <div class="text-center">
          <!-- Cohort Badge -->
          <div class="inline-flex items-center px-4 py-2 rounded-full bg-gradient-to-r from-orange-500 to-amber-500 text-white text-sm font-medium mb-6">
            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
            </svg>
            Next Cohort - May 2026
          </div>

          <!-- Main Headline -->
          <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
            Career Excellence Coaching & Mentoring School
          </h1>

          <!-- Subheading -->
          <p class="text-xl lg:text-2xl text-gray-600 mb-8 max-w-4xl mx-auto leading-relaxed">
            A 6-week structured pathway for overseas pharmacists building confident, sustainable UK careers
          </p>

          <!-- CTA Button -->
          <div class="flex justify-center">
            <a
              href="https://docs.google.com/forms/d/e/1FAIpQLSf7goPAAcDEYVkSzFkoER2YAE5MMNGkk9EdebtD0IcBOkrZWg/viewform?usp=dialog"
              target="_blank"
              rel="noopener noreferrer"
              class="group inline-flex items-center justify-center px-8 py-4 bg-orange-600 text-white font-semibold rounded-xl hover:bg-orange-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl"
            >
              Apply Now
              <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Emotional Hook Section -->
    <section class="py-24 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
            You didn't come this far to feel uncertain, stuck, or invisible
          </h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-12">
            If any of this sounds familiar, this programme was built for you:
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
          <div class="bg-gradient-to-r from-orange-50 to-amber-50 rounded-2xl p-8 border-l-4 border-orange-500">
            <p class="text-gray-700 text-lg">"I passed my exams, but I still don't feel ready."</p>
          </div>
          <div class="bg-gradient-to-r from-orange-50 to-amber-50 rounded-2xl p-8 border-l-4 border-orange-500">
            <p class="text-gray-700 text-lg">"I don't know how to position myself for the roles I actually want."</p>
          </div>
          <div class="bg-gradient-to-r from-orange-50 to-amber-50 rounded-2xl p-8 border-l-4 border-orange-500">
            <p class="text-gray-700 text-lg">"I feel like I'm starting from scratch even though I have years of experience."</p>
          </div>
          <div class="bg-gradient-to-r from-orange-50 to-amber-50 rounded-2xl p-8 border-l-4 border-orange-500">
            <p class="text-gray-700 text-lg">"I'm applying for jobs but not getting anywhere."</p>
          </div>
        </div>
      </div>
    </section>

    <!-- What This Programme Is (and Isn't) -->
    <section class="py-24 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
            What This Programme Is (and Isn't)
          </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-5xl mx-auto">
          <!-- What it IS -->
          <div class="bg-white rounded-2xl p-8 shadow-lg border border-green-100">
            <h3 class="text-2xl font-bold text-green-700 mb-6 flex items-center">
              <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              This programme IS:
            </h3>
            <ul class="space-y-4">
              <li class="flex items-start">
                <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-700">A structured, guided coaching experience with live group sessions</span>
              </li>
              <li class="flex items-start">
                <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-700">A space to build confidence, clarity, and career strategy</span>
              </li>
              <li class="flex items-start">
                <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-700">Designed specifically for overseas pharmacists navigating UK practice</span>
              </li>
              <li class="flex items-start">
                <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-700">Led by Faith, a pharmacist who has walked this path</span>
              </li>
            </ul>
          </div>

          <!-- What it ISN'T -->
          <div class="bg-white rounded-2xl p-8 shadow-lg border border-red-100">
            <h3 class="text-2xl font-bold text-red-600 mb-6 flex items-center">
              <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              This programme ISN'T:
            </h3>
            <ul class="space-y-4">
              <li class="flex items-start">
                <svg class="w-5 h-5 text-red-400 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-700">A passive course with pre-recorded videos and no interaction</span>
              </li>
              <li class="flex items-start">
                <svg class="w-5 h-5 text-red-400 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-700">A GPhC exam prep programme</span>
              </li>
              <li class="flex items-start">
                <svg class="w-5 h-5 text-red-400 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-700">A job placement or recruitment service</span>
              </li>
              <li class="flex items-start">
                <svg class="w-5 h-5 text-red-400 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-700">A generic motivational programme with no real structure</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Who This Programme Is For -->
    <section class="py-24 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
            Who This Programme Is For
          </h2>
        </div>

        <div class="max-w-3xl mx-auto space-y-6">
          <div class="flex items-start bg-gradient-to-r from-orange-50 to-amber-50 rounded-xl p-6 border border-orange-100">
            <svg class="w-6 h-6 text-orange-600 mt-1 mr-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <p class="text-gray-700 text-lg">Overseas pharmacists who have completed or are completing OSPAP and want to build a confident UK career</p>
          </div>
          <div class="flex items-start bg-gradient-to-r from-orange-50 to-amber-50 rounded-xl p-6 border border-orange-100">
            <svg class="w-6 h-6 text-orange-600 mt-1 mr-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <p class="text-gray-700 text-lg">Foundation trainee pharmacists who want clarity, direction, and support beyond their training placement</p>
          </div>
          <div class="flex items-start bg-gradient-to-r from-orange-50 to-amber-50 rounded-xl p-6 border border-orange-100">
            <svg class="w-6 h-6 text-orange-600 mt-1 mr-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <p class="text-gray-700 text-lg">Pharmacists already registered but feeling stuck, unsure, or undervalued in their current roles</p>
          </div>
          <div class="flex items-start bg-gradient-to-r from-orange-50 to-amber-50 rounded-xl p-6 border border-orange-100">
            <svg class="w-6 h-6 text-orange-600 mt-1 mr-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <p class="text-gray-700 text-lg">Pharmacists who want to move intentionally rather than just take whatever comes their way</p>
          </div>
          <div class="flex items-start bg-gradient-to-r from-orange-50 to-amber-50 rounded-xl p-6 border border-orange-100">
            <svg class="w-6 h-6 text-orange-600 mt-1 mr-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <p class="text-gray-700 text-lg">Anyone who wants to stop second-guessing themselves and start building with confidence</p>
          </div>
        </div>
      </div>
    </section>

    <!-- What Changes (Outcomes) -->
    <section class="py-24 bg-gradient-to-br from-slate-50 via-orange-50 to-amber-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
            What Changes After This Programme
          </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-5xl mx-auto">
          <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
            <div class="flex items-start">
              <svg class="w-6 h-6 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
              </svg>
              <p class="text-gray-700">You know who you are professionally and can articulate your value with confidence</p>
            </div>
          </div>
          <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
            <div class="flex items-start">
              <svg class="w-6 h-6 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
              </svg>
              <p class="text-gray-700">You understand how the UK pharmacy landscape works and where you fit</p>
            </div>
          </div>
          <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
            <div class="flex items-start">
              <svg class="w-6 h-6 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
              </svg>
              <p class="text-gray-700">You have a clear career strategy and direction that aligns with your goals</p>
            </div>
          </div>
          <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
            <div class="flex items-start">
              <svg class="w-6 h-6 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
              </svg>
              <p class="text-gray-700">You can navigate interviews and career conversations with ease</p>
            </div>
          </div>
          <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
            <div class="flex items-start">
              <svg class="w-6 h-6 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
              </svg>
              <p class="text-gray-700">You feel visible, valued, and equipped to advocate for yourself</p>
            </div>
          </div>
          <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
            <div class="flex items-start">
              <svg class="w-6 h-6 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
              </svg>
              <p class="text-gray-700">You have a long-term plan for sustainable career growth and fulfilment</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- How the Programme Works -->
    <section class="py-24 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
            How the Programme Works
          </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
          <div class="text-center bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-8 border border-orange-100">
            <div class="w-16 h-16 bg-orange-600 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">Duration</h3>
            <p class="text-gray-600">6 weeks of focused, structured sessions</p>
          </div>
          <div class="text-center bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 border border-blue-100">
            <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">Format</h3>
            <p class="text-gray-600">Live group coaching, small cohort for personalised attention</p>
          </div>
          <div class="text-center bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-8 border border-emerald-100">
            <div class="w-16 h-16 bg-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">Delivery</h3>
            <p class="text-gray-600">Online with replays available if you miss a session</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Core Pillars -->
    <section class="py-24 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
            The 6 Core Pillars
          </h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto">
            Each week focuses on a key area to help you build a confident, sustainable UK pharmacy career
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Pillar 1 -->
          <div class="group bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-gray-100">
            <div class="w-14 h-14 bg-orange-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <span class="text-white font-bold text-xl">1</span>
            </div>
            <h4 class="text-xl font-bold text-gray-900 mb-4">Identity & Confidence Reset</h4>
            <ul class="space-y-2 text-gray-600">
              <li class="flex items-start">
                <span class="text-orange-500 mr-2">-</span>
                <span>Reconnecting with your professional identity</span>
              </li>
              <li class="flex items-start">
                <span class="text-orange-500 mr-2">-</span>
                <span>Overcoming imposter syndrome and self-doubt</span>
              </li>
              <li class="flex items-start">
                <span class="text-orange-500 mr-2">-</span>
                <span>Building a confident professional mindset</span>
              </li>
            </ul>
          </div>

          <!-- Pillar 2 -->
          <div class="group bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-gray-100">
            <div class="w-14 h-14 bg-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <span class="text-white font-bold text-xl">2</span>
            </div>
            <h4 class="text-xl font-bold text-gray-900 mb-4">Reality of UK Pharmacy</h4>
            <ul class="space-y-2 text-gray-600">
              <li class="flex items-start">
                <span class="text-blue-500 mr-2">-</span>
                <span>Understanding the UK pharmacy landscape</span>
              </li>
              <li class="flex items-start">
                <span class="text-blue-500 mr-2">-</span>
                <span>Navigating sectors, roles, and expectations</span>
              </li>
              <li class="flex items-start">
                <span class="text-blue-500 mr-2">-</span>
                <span>What employers actually look for</span>
              </li>
            </ul>
          </div>

          <!-- Pillar 3 -->
          <div class="group bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-gray-100">
            <div class="w-14 h-14 bg-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <span class="text-white font-bold text-xl">3</span>
            </div>
            <h4 class="text-xl font-bold text-gray-900 mb-4">Career Strategy & Direction</h4>
            <ul class="space-y-2 text-gray-600">
              <li class="flex items-start">
                <span class="text-emerald-500 mr-2">-</span>
                <span>Defining your career goals and pathway</span>
              </li>
              <li class="flex items-start">
                <span class="text-emerald-500 mr-2">-</span>
                <span>Building a strategic career plan</span>
              </li>
              <li class="flex items-start">
                <span class="text-emerald-500 mr-2">-</span>
                <span>Aligning your experience with UK opportunities</span>
              </li>
            </ul>
          </div>

          <!-- Pillar 4 -->
          <div class="group bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-gray-100">
            <div class="w-14 h-14 bg-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <span class="text-white font-bold text-xl">4</span>
            </div>
            <h4 class="text-xl font-bold text-gray-900 mb-4">Visibility, Influence & Advocacy</h4>
            <ul class="space-y-2 text-gray-600">
              <li class="flex items-start">
                <span class="text-purple-500 mr-2">-</span>
                <span>Making yourself visible in the profession</span>
              </li>
              <li class="flex items-start">
                <span class="text-purple-500 mr-2">-</span>
                <span>Networking and building professional relationships</span>
              </li>
              <li class="flex items-start">
                <span class="text-purple-500 mr-2">-</span>
                <span>Self-advocacy and communicating your value</span>
              </li>
            </ul>
          </div>

          <!-- Pillar 5 -->
          <div class="group bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-gray-100">
            <div class="w-14 h-14 bg-indigo-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <span class="text-white font-bold text-xl">5</span>
            </div>
            <h4 class="text-xl font-bold text-gray-900 mb-4">Interviews, Progression & Opportunities</h4>
            <ul class="space-y-2 text-gray-600">
              <li class="flex items-start">
                <span class="text-indigo-500 mr-2">-</span>
                <span>Mastering UK pharmacy interviews</span>
              </li>
              <li class="flex items-start">
                <span class="text-indigo-500 mr-2">-</span>
                <span>CV and application strategies that stand out</span>
              </li>
              <li class="flex items-start">
                <span class="text-indigo-500 mr-2">-</span>
                <span>Identifying and seizing career opportunities</span>
              </li>
            </ul>
          </div>

          <!-- Pillar 6 -->
          <div class="group bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-gray-100">
            <div class="w-14 h-14 bg-pink-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <span class="text-white font-bold text-xl">6</span>
            </div>
            <h4 class="text-xl font-bold text-gray-900 mb-4">Sustainability & Long-Term Growth</h4>
            <ul class="space-y-2 text-gray-600">
              <li class="flex items-start">
                <span class="text-pink-500 mr-2">-</span>
                <span>Avoiding burnout and building resilience</span>
              </li>
              <li class="flex items-start">
                <span class="text-pink-500 mr-2">-</span>
                <span>Long-term career development planning</span>
              </li>
              <li class="flex items-start">
                <span class="text-pink-500 mr-2">-</span>
                <span>Creating a fulfilling, sustainable career</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- What's Included -->
    <section class="py-24 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
            What's Included
          </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
          <!-- Live Coaching -->
          <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
            <div class="flex items-start">
              <div class="flex-shrink-0">
                <div class="w-12 h-12 bg-orange-600 rounded-xl flex items-center justify-center">
                  <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                  </svg>
                </div>
              </div>
              <div class="ml-4">
                <h3 class="text-lg font-bold text-gray-900 mb-2">6 Live Group Coaching Sessions with Faith</h3>
                <p class="text-gray-600">Interactive weekly sessions led by Faith, covering all 6 core pillars with real-time guidance and Q&A</p>
              </div>
            </div>
          </div>

          <!-- Reflection Prompts -->
          <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
            <div class="flex items-start">
              <div class="flex-shrink-0">
                <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center">
                  <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                  </svg>
                </div>
              </div>
              <div class="ml-4">
                <h3 class="text-lg font-bold text-gray-900 mb-2">Weekly Reflection Prompts & Action Steps</h3>
                <p class="text-gray-600">Guided reflection exercises and practical action steps to reinforce your learning between sessions</p>
              </div>
            </div>
          </div>

          <!-- Peer Learning -->
          <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
            <div class="flex items-start">
              <div class="flex-shrink-0">
                <div class="w-12 h-12 bg-emerald-600 rounded-xl flex items-center justify-center">
                  <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                  </svg>
                </div>
              </div>
              <div class="ml-4">
                <h3 class="text-lg font-bold text-gray-900 mb-2">Peer Learning Community</h3>
                <p class="text-gray-600">Connect with a small cohort of like-minded pharmacists for shared support, accountability, and encouragement</p>
              </div>
            </div>
          </div>

          <!-- Optional 1:1 Upgrade -->
          <div class="bg-gradient-to-r from-amber-50 to-orange-50 rounded-2xl p-6 border-2 border-amber-200">
            <div class="flex items-start">
              <div class="flex-shrink-0">
                <div class="w-12 h-12 bg-amber-500 rounded-xl flex items-center justify-center">
                  <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                  </svg>
                </div>
              </div>
              <div class="ml-4">
                <h3 class="text-lg font-bold text-gray-900 mb-2">Optional 1:1 Coaching Upgrade</h3>
                <p class="text-gray-600">Add personalised one-to-one coaching sessions with Faith for deeper, tailored support alongside the group programme</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Investment Section -->
    <section class="py-24 bg-gradient-to-br from-slate-50 via-orange-50 to-amber-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
          <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
            Investment
          </h2>
        </div>

        <div class="max-w-lg mx-auto">
          <div class="bg-white rounded-2xl shadow-xl p-10 text-center border-2 border-orange-200">
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Group Programme</h3>
            <div class="mb-6">
              <span class="text-5xl font-bold text-orange-600">&pound;450</span>
            </div>
            <p class="text-gray-600 mb-6">Full 6-week programme access</p>
            <div class="bg-orange-50 rounded-lg p-4 mb-8">
              <p class="text-sm text-orange-800 font-medium">Payment plans available - contact us to discuss options</p>
            </div>
            <a
              href="https://docs.google.com/forms/d/e/1FAIpQLSf7goPAAcDEYVkSzFkoER2YAE5MMNGkk9EdebtD0IcBOkrZWg/viewform?usp=dialog"
              target="_blank"
              rel="noopener noreferrer"
              class="group inline-flex items-center justify-center w-full px-8 py-4 bg-orange-600 text-white font-semibold rounded-xl hover:bg-orange-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl"
            >
              Apply Now
              <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Why This Programme Exists -->
    <section class="py-24 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center">
          <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-8">
            Why This Programme Exists
          </h2>
          <p class="text-lg text-gray-600 leading-relaxed mb-6">
            There's a gap between completing OSPAP and truly integrating into the UK pharmacy profession. You might have the qualification, but that doesn't automatically come with confidence, clarity, or a career strategy.
          </p>
          <p class="text-lg text-gray-600 leading-relaxed">
            This programme exists to bridge that gap - to give overseas pharmacists the coaching, mentoring, and structured support they need to build careers that are not just functional, but fulfilling. Because you deserve more than just getting by.
          </p>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="py-24 bg-gradient-to-br from-orange-50 to-amber-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
            What Past Participants Say
          </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <!-- Testimonial 1 -->
          <div class="bg-white rounded-2xl p-8 shadow-lg border border-orange-100">
            <div class="flex items-center mb-6">
              <div class="w-14 h-14 bg-orange-200 rounded-full flex items-center justify-center mr-4">
                <span class="text-xl font-bold text-orange-700">P</span>
              </div>
              <div>
                <h4 class="font-bold text-gray-900">Programme Participant</h4>
                <div class="flex text-yellow-400 text-sm">★★★★★</div>
              </div>
            </div>
            <p class="text-gray-700 italic leading-relaxed">
              "The biggest change has been my confidence. I now feel better equipped to integrate into the UK pharmacy system, thanks to the practical resources, tailored advice, and support I received. I also gained a strong professional network and a mentor in Faith, which I consider an invaluable benefit moving forward."
            </p>
          </div>

          <!-- Testimonial 2 -->
          <div class="bg-white rounded-2xl p-8 shadow-lg border border-orange-100">
            <div class="flex items-center mb-6">
              <div class="w-14 h-14 bg-blue-200 rounded-full flex items-center justify-center mr-4">
                <span class="text-xl font-bold text-blue-700">P</span>
              </div>
              <div>
                <h4 class="font-bold text-gray-900">Programme Participant</h4>
                <div class="flex text-yellow-400 text-sm">★★★★★</div>
              </div>
            </div>
            <p class="text-gray-700 italic leading-relaxed">
              "It is remarkable to think that this was her first time coaching a pharmacist-evolved beta program, because she executed it with such flair and confidence. By the end of the program, I truly felt evolved — equipped with a practical toolbox of resources, connected to a strong network of pharmacists, and inspired by the mentorship of Faith."
            </p>
          </div>

          <!-- Testimonial 3 -->
          <div class="bg-white rounded-2xl p-8 shadow-lg border border-orange-100">
            <div class="flex items-center mb-6">
              <div class="w-14 h-14 bg-emerald-200 rounded-full flex items-center justify-center mr-4">
                <span class="text-xl font-bold text-emerald-700">P</span>
              </div>
              <div>
                <h4 class="font-bold text-gray-900">Programme Participant</h4>
                <div class="flex text-yellow-400 text-sm">★★★★★</div>
              </div>
            </div>
            <p class="text-gray-700 italic leading-relaxed">
              "Faith was instrumental in helping us find a sense of balance, not only in our professional growth but also in managing work-life priorities. Her professionalism, attentiveness, and active listening were evident in every interaction. She provided constructive feedback, remained approachable at all times, and even left an open invitation for continued support after the program."
            </p>
          </div>

          <!-- Testimonial 4 -->
          <div class="bg-white rounded-2xl p-8 shadow-lg border border-orange-100">
            <div class="flex items-center mb-6">
              <div class="w-14 h-14 bg-purple-200 rounded-full flex items-center justify-center mr-4">
                <span class="text-xl font-bold text-purple-700">P</span>
              </div>
              <div>
                <h4 class="font-bold text-gray-900">Programme Participant</h4>
                <div class="flex text-yellow-400 text-sm">★★★★★</div>
              </div>
            </div>
            <p class="text-gray-700 italic leading-relaxed">
              "The program included thoughtfully prepared workbooks, learning materials, revision resources, clearly mapped-out plans with achievable goals, and action steps that required us to actively engage. Faith was proactive in inviting guest speakers who shared valuable experiences, helping us navigate areas of ambiguity within the pharmacy network in the United Kingdom."
            </p>
          </div>

          <!-- Testimonial 5 -->
          <div class="md:col-span-2 max-w-2xl mx-auto">
            <div class="bg-white rounded-2xl p-8 shadow-lg border border-orange-100">
              <div class="flex items-center mb-6">
                <div class="w-14 h-14 bg-amber-200 rounded-full flex items-center justify-center mr-4">
                  <span class="text-xl font-bold text-amber-700">P</span>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900">Programme Participant</h4>
                  <div class="flex text-yellow-400 text-sm">★★★★★</div>
                </div>
              </div>
              <p class="text-gray-700 italic leading-relaxed">
                "Our pharmacy just launched a website and they did a bit of highlight about me. I want to say a big thank you to Faith and all the lovely ladies on this group. The guidance and support has been massive and I took all that I have learnt from here into the workspace. Thank you so much, I couldn't have done it without you guys"
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Applications CTA -->
    <section class="py-24 bg-gradient-to-r from-gray-900 to-gray-800">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">
          Ready to Build Your Career with Confidence?
        </h2>
        <p class="text-xl text-gray-300 mb-4 max-w-3xl mx-auto">
          This programme is application-led. The next cohort starts in May 2026 with limited spaces available to ensure every participant gets the attention they deserve.
        </p>
        <p class="text-lg text-gray-400 mb-8">
          Apply now to secure your place.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
          <a
            href="https://docs.google.com/forms/d/e/1FAIpQLSf7goPAAcDEYVkSzFkoER2YAE5MMNGkk9EdebtD0IcBOkrZWg/viewform?usp=dialog"
            target="_blank"
            rel="noopener noreferrer"
            class="group inline-flex items-center justify-center px-8 py-4 bg-orange-600 text-white font-semibold rounded-xl hover:bg-orange-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl"
          >
            Apply Now
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>

          <Link
            href="/contact"
            class="inline-flex items-center justify-center px-8 py-4 border-2 border-gray-300 text-gray-300 font-semibold rounded-xl hover:border-orange-600 hover:text-orange-600 transition-colors"
          >
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
            </svg>
            Ask Questions
          </Link>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from '@inertiajs/vue3'
import { Head } from '@inertiajs/vue3'
</script>
