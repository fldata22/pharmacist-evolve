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
          <!-- Beta Badge -->
          <div class="inline-flex items-center px-4 py-2 rounded-full bg-gradient-to-r from-orange-500 to-amber-500 text-white text-sm font-medium mb-6 animate-pulse">
            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
            </svg>
            BETA EDITION - July 2025
          </div>

          <!-- Main Headline -->
          <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
            Pharmacist Evolve Group Coaching
          </h1>

          <!-- Subheading -->
          <p class="text-xl lg:text-2xl text-gray-600 mb-8 max-w-4xl mx-auto leading-relaxed">
            A comprehensive 6-Week Career Acceleration program for Overseas Pharmacists
          </p>

          <!-- CTA Button -->
          <div class="flex justify-center">
            <a 
              href="https://docs.google.com/forms/d/e/1FAIpQLSf7goPAAcDEYVkSzFkoER2YAE5MMNGkk9EdebtD0IcBOkrZWg/viewform?usp=dialog"
              target="_blank"
              rel="noopener noreferrer"
              class="group inline-flex items-center justify-center px-8 py-4 bg-orange-600 text-white font-semibold rounded-xl hover:bg-orange-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl"
            >
              Apply for Beta Access
              <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Program Overview Section -->
    <section class="py-24 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
            Transform Your UK Pharmacy Career
          </h2>
          <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
            A small-group coaching experience designed for overseas-trained pharmacists who have recently completed/are soon to complete the GPhC registration process and are ready to step confidently into the UK workforce.
          </p>
        </div>

        <!-- Target Audience Highlight -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
          <!-- Perfect For You If -->
          <div class="bg-gradient-to-r from-orange-100 to-amber-100 rounded-2xl p-8 border-l-4 border-orange-600">
            <div class="flex items-start">
              <div class="flex-shrink-0">
                <svg class="w-8 h-8 text-orange-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                </svg>
              </div>
              <div class="ml-4">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Perfect For You If:</h3>
                <p class="text-gray-700">
                  You're an overseas-trained pharmacist who has recently completed or is about to complete the GPhC registration process and wants structured support to confidently enter the UK pharmacy workforce with clarity and clinical confidence.
                </p>
              </div>
            </div>
          </div>

          <!-- Ideal For -->
          <div class="bg-gradient-to-r from-blue-100 to-indigo-100 rounded-2xl p-8 border-l-4 border-blue-600">
            <div class="flex items-start">
              <div class="flex-shrink-0">
                <svg class="w-8 h-8 text-blue-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C20.832 18.477 19.246 18 17.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
              </div>
              <div class="ml-4">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Ideal For:</h3>
                <p class="text-gray-700">
                  Newly GPhC-registered pharmacists or Foundation trainees who want to build confidence, structure their job search, and integrate smoothly into UK pharmacy practice.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Key Features -->
        <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-8 mb-16">
          <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">What You'll Experience</h3>
          <p class="text-lg text-gray-700 text-center max-w-3xl mx-auto">
            You'll receive structured, supportive coaching in a cohort of peers navigating the same transition. Each week focuses on building clarity, job-readiness, and clinical confidence in the UK setting.
          </p>
        </div>
      </div>
    </section>

    <!-- Features Grid -->
    <section class="py-24 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
            Program Benefits
          </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Structured Learning -->
          <div class="group bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-gray-100">
            <div class="w-16 h-16 bg-orange-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C20.832 18.477 19.246 18 17.5 18c-1.746 0-3.332.477-4.5 1.253"/>
              </svg>
            </div>
            <h4 class="text-xl font-bold text-gray-900 mb-4">📚 Structured Learning</h4>
            <p class="text-gray-600">
              Weekly focused sessions building upon each other to create a comprehensive foundation for your UK pharmacy career journey.
            </p>
          </div>

          <!-- Peer Support -->
          <div class="group bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-gray-100">
            <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
              </svg>
            </div>
            <h4 class="text-xl font-bold text-gray-900 mb-4">👥 Peer Support</h4>
            <p class="text-gray-600">
              Connect with fellow overseas pharmacists facing similar challenges, creating lasting professional relationships and support networks.
            </p>
          </div>

          <!-- Job Readiness -->
          <div class="group bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-gray-100">
            <div class="w-16 h-16 bg-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"/>
              </svg>
            </div>
            <h4 class="text-xl font-bold text-gray-900 mb-4">💼 Job Readiness</h4>
            <p class="text-gray-600">
              Develop practical skills and confidence needed to excel in UK pharmacy roles, from community to hospital settings.
            </p>
          </div>

          <!-- Clinical Confidence -->
          <div class="group bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-gray-100">
            <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </div>
            <h4 class="text-xl font-bold text-gray-900 mb-4">🏥 Clinical Confidence</h4>
            <p class="text-gray-600">
              Build expertise in UK-specific clinical practices, regulations, and patient care standards to enhance your professional competence.
            </p>
          </div>

          <!-- Career Clarity -->
          <div class="group bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-gray-100">
            <div class="w-16 h-16 bg-indigo-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
              </svg>
            </div>
            <h4 class="text-xl font-bold text-gray-900 mb-4">🎯 Career Clarity</h4>
            <p class="text-gray-600">
              Gain clear direction on your career path and understand the opportunities available in the UK pharmacy landscape.
            </p>
          </div>

          <!-- Accelerated Growth -->
          <div class="group bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-gray-100">
            <div class="w-16 h-16 bg-pink-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
              </svg>
            </div>
            <h4 class="text-xl font-bold text-gray-900 mb-4">🚀 Accelerated Growth</h4>
            <p class="text-gray-600">
              Fast-track your integration into the UK healthcare system with targeted coaching and practical insights.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- What's Included Section -->
    <section class="py-24 bg-gradient-to-br from-slate-50 via-orange-50 to-amber-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
            What's Included
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Everything you need for a successful transition into the UK pharmacy workforce
          </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
          <!-- Core Program Features -->
          <div class="space-y-6">
            <!-- Live Sessions -->
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
                  <h3 class="text-lg font-bold text-gray-900 mb-2">6 Live Weekly Group Coaching Sessions</h3>
                  <p class="text-gray-600">60–75 minutes each of interactive coaching with your cohort and expert facilitator</p>
                </div>
              </div>
            </div>

            <!-- Resources -->
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
                  <h3 class="text-lg font-bold text-gray-900 mb-2">Weekly Workbooks, Templates & Action Plans</h3>
                  <p class="text-gray-600">Comprehensive resources to guide your learning and track your progress</p>
                </div>
              </div>
            </div>

            <!-- Job Support -->
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
              <div class="flex items-start">
                <div class="flex-shrink-0">
                  <div class="w-12 h-12 bg-emerald-600 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"/>
                    </svg>
                  </div>
                </div>
                <div class="ml-4">
                  <h3 class="text-lg font-bold text-gray-900 mb-2">Job Application & Interview Prep Support</h3>
                  <p class="text-gray-600">Expert guidance on navigating the UK pharmacy job market and excelling in interviews</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Additional Features -->
          <div class="space-y-6">
            <!-- CV Enhancement -->
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
              <div class="flex items-start">
                <div class="flex-shrink-0">
                  <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                  </div>
                </div>
                <div class="ml-4">
                  <h3 class="text-lg font-bold text-gray-900 mb-2">Guided CV & Personal Statement Enhancements</h3>
                  <p class="text-gray-600">Professional guidance to create compelling applications that stand out to UK employers</p>
                </div>
              </div>
            </div>

            <!-- WhatsApp Group -->
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
              <div class="flex items-start">
                <div class="flex-shrink-0">
                  <div class="w-12 h-12 bg-green-600 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a2 2 0 01-2-2v-6a2 2 0 012-2h2m2-4h4a2 2 0 012 2v6a2 2 0 01-2 2h-4m0 0V9a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h4v4z"/>
                    </svg>
                  </div>
                </div>
                <div class="ml-4">
                  <h3 class="text-lg font-bold text-gray-900 mb-2">Private Peer Support Group (WhatsApp)</h3>
                  <p class="text-gray-600">24/7 access to your cohort for ongoing support, questions, and networking</p>
                </div>
              </div>
            </div>

            <!-- Optional Add-ons -->
            <div class="bg-gradient-to-r from-amber-50 to-orange-50 rounded-2xl p-6 border-2 border-amber-200">
              <div class="text-center mb-4">
                <h3 class="text-lg font-bold text-gray-900 mb-2">Optional Add-Ons</h3>
                <p class="text-sm text-gray-600">Choose additional support based on your needs</p>
              </div>
              <div class="space-y-3">
                <div class="flex items-center p-3 bg-white rounded-lg border border-amber-100">
                  <svg class="w-5 h-5 text-amber-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                  </svg>
                  <span class="text-gray-700">1-hour Interview Preparation Session</span>
                </div>
                <div class="flex items-center p-3 bg-white rounded-lg border border-amber-100">
                  <svg class="w-5 h-5 text-amber-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                  </svg>
                  <span class="text-gray-700">Detailed CV Review Session</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Join Our Community Section -->
    <section class="py-24 bg-gradient-to-br from-pink-50 via-purple-50 to-indigo-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
          Join Our Community
        </h2>
        <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
          Connect with fellow overseas pharmacists, get daily tips, and stay updated on opportunities in the UK pharmacy sector.
        </p>
        
        <div class="flex justify-center mb-8">
          <a 
            href="https://www.instagram.com/pharmacist_evolve/" 
            target="_blank"
            rel="noopener noreferrer"
            class="group inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-pink-500 to-purple-600 text-white font-semibold rounded-xl hover:from-pink-600 hover:to-purple-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl"
          >
            <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
            </svg>
            Follow @pharmacist_evolve
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
            </svg>
          </a>
        </div>
        
        <p class="text-sm text-gray-500 max-w-2xl mx-auto">
          Get daily inspiration, career tips, success stories, and be the first to know about new programs and opportunities.
        </p>
      </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-24 bg-gradient-to-r from-gray-900 to-gray-800">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">
          Ready to Accelerate Your UK Pharmacy Career?
        </h2>
        <p class="text-xl text-gray-300 mb-8 max-w-3xl mx-auto">
          Join the Beta Edition of Pharmacist Evolve Group Coaching and be part of our founding cohort. Limited spaces available for this exclusive program.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
          <a 
            href="https://docs.google.com/forms/d/e/1FAIpQLSf7goPAAcDEYVkSzFkoER2YAE5MMNGkk9EdebtD0IcBOkrZWg/viewform?usp=dialog"
            target="_blank"
            rel="noopener noreferrer"
            class="group inline-flex items-center justify-center px-8 py-4 bg-orange-600 text-white font-semibold rounded-xl hover:bg-orange-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl"
          >
            Apply for Beta Access
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
        
        <p class="text-sm text-gray-400">
          Beta Edition participants receive special pricing and lifetime access to program updates
        </p>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from '@inertiajs/vue3'

// Meta information
import { Head } from '@inertiajs/vue3'
</script>

<style scoped>
/* Additional custom styles if needed */
</style>