<template>
  <AppLayout>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-gray-900 via-slate-900 to-gray-900 overflow-hidden">
      <!-- Background Elements -->
      <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(ellipse_at_top_left,_rgba(249,115,22,0.15),_transparent_50%)]"></div>
        <div class="absolute top-0 right-0 w-full h-full bg-[radial-gradient(ellipse_at_bottom_right,_rgba(59,130,246,0.1),_transparent_50%)]"></div>
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-orange-500 rounded-full opacity-[0.07] blur-[100px]"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-blue-500 rounded-full opacity-[0.07] blur-[100px]"></div>
      </div>

      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28">
        <div class="text-center">
          <!-- Event Badge -->
          <div class="inline-flex items-center px-4 sm:px-5 py-2 sm:py-2.5 rounded-full bg-gradient-to-r from-orange-500/20 to-amber-500/20 border border-orange-500/30 text-orange-300 text-xs sm:text-sm font-semibold mb-6 sm:mb-8 backdrop-blur-sm">
            <span class="w-2 h-2 bg-orange-400 rounded-full mr-2 sm:mr-3 animate-pulse"></span>
            Catalyst Conference 2026
          </div>

          <!-- Main Headline -->
          <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-4 sm:mb-6 leading-tight">
            Our <span class="bg-gradient-to-r from-orange-400 via-amber-400 to-orange-500 bg-clip-text text-transparent">Delegates</span>
          </h1>

          <!-- Tagline -->
          <p class="text-lg sm:text-xl lg:text-2xl font-light text-gray-300 mb-8 sm:mb-10 max-w-3xl mx-auto leading-relaxed px-2">
            Meet the inspiring professionals, speakers, and partners joining us to shape the future of overseas pharmacist workforce integration.
          </p>

          <!-- Stats -->
          <div class="flex flex-wrap justify-center gap-4 sm:gap-6 mb-8">
            <div class="bg-white/5 backdrop-blur-sm rounded-xl px-6 py-4 border border-white/10">
              <div class="text-2xl sm:text-3xl font-bold text-orange-400">{{ stats.total }}</div>
              <div class="text-sm text-gray-400">Total Delegates</div>
            </div>
            <div v-if="stats.speakers > 0" class="bg-white/5 backdrop-blur-sm rounded-xl px-6 py-4 border border-white/10">
              <div class="text-2xl sm:text-3xl font-bold text-emerald-400">{{ stats.speakers }}</div>
              <div class="text-sm text-gray-400">Speakers</div>
            </div>
            <div v-if="stats.partners > 0" class="bg-white/5 backdrop-blur-sm rounded-xl px-6 py-4 border border-white/10">
              <div class="text-2xl sm:text-3xl font-bold text-blue-400">{{ stats.partners }}</div>
              <div class="text-sm text-gray-400">Partners</div>
            </div>
            <div v-if="stats.sponsors > 0" class="bg-white/5 backdrop-blur-sm rounded-xl px-6 py-4 border border-white/10">
              <div class="text-2xl sm:text-3xl font-bold text-purple-400">{{ stats.sponsors }}</div>
              <div class="text-sm text-gray-400">Sponsors</div>
            </div>
          </div>

          <!-- CTA -->
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

    <!-- Speakers Section -->
    <section v-if="groupedDelegates.speakers.length > 0" class="py-16 sm:py-24 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 sm:mb-16">
          <span class="inline-block text-emerald-600 font-semibold text-sm uppercase tracking-widest mb-3 sm:mb-4">Featured</span>
          <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
            Speakers
          </h2>
          <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Expert voices leading the conversation on workforce integration
          </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 sm:gap-8">
          <div
            v-for="(delegate, index) in groupedDelegates.speakers"
            :key="delegate.id"
            class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-emerald-200 relative overflow-hidden"
          >
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-emerald-500 to-teal-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
            
            <!-- Photo -->
            <div class="mb-4">
              <div
                v-if="delegate.photo"
                class="w-24 h-24 rounded-full mx-auto overflow-hidden ring-4 ring-emerald-100"
              >
                <img
                  :src="`/storage/${delegate.photo}`"
                  :alt="delegate.name"
                  class="w-full h-full object-cover"
                >
              </div>
              <div
                v-else
                class="w-24 h-24 rounded-full mx-auto flex items-center justify-center text-white text-2xl font-bold ring-4 ring-emerald-100"
                :class="getGradientClass(index)"
              >
                {{ delegate.initials }}
              </div>
            </div>

            <!-- Info -->
            <div class="text-center">
              <h3 class="text-lg font-bold text-gray-900 mb-1">{{ delegate.name }}</h3>
              <p v-if="delegate.role" class="text-emerald-600 font-medium text-sm mb-1">{{ delegate.role }}</p>
              <p v-if="delegate.organization" class="text-gray-500 text-sm mb-3">{{ delegate.organization }}</p>
              <p v-if="delegate.country" class="text-gray-400 text-xs flex items-center justify-center gap-1">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                {{ delegate.country }}
              </p>

              <!-- Bio -->
              <p v-if="delegate.bio" class="text-gray-600 text-sm mt-3 line-clamp-3">{{ delegate.bio }}</p>

              <!-- Social Links -->
              <div v-if="hasSocialLinks(delegate)" class="flex justify-center gap-3 mt-4">
                <a
                  v-if="delegate.linkedin_url"
                  :href="delegate.linkedin_url"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="w-8 h-8 rounded-full bg-gray-100 hover:bg-emerald-100 flex items-center justify-center text-gray-500 hover:text-emerald-600 transition-colors"
                >
                  <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                  </svg>
                </a>
                <a
                  v-if="delegate.twitter_url"
                  :href="delegate.twitter_url"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="w-8 h-8 rounded-full bg-gray-100 hover:bg-emerald-100 flex items-center justify-center text-gray-500 hover:text-emerald-600 transition-colors"
                >
                  <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                  </svg>
                </a>
                <a
                  v-if="delegate.website_url"
                  :href="delegate.website_url"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="w-8 h-8 rounded-full bg-gray-100 hover:bg-emerald-100 flex items-center justify-center text-gray-500 hover:text-emerald-600 transition-colors"
                >
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Partners Section -->
    <section v-if="groupedDelegates.partners.length > 0" class="py-16 sm:py-24 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 sm:mb-16">
          <span class="inline-block text-blue-600 font-semibold text-sm uppercase tracking-widest mb-3 sm:mb-4">Collaborators</span>
          <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
            Partners
          </h2>
          <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Organizations collaborating to drive meaningful change
          </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 sm:gap-8">
          <div
            v-for="(delegate, index) in groupedDelegates.partners"
            :key="delegate.id"
            class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-blue-200 relative overflow-hidden"
          >
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-indigo-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
            
            <!-- Photo -->
            <div class="mb-4">
              <div
                v-if="delegate.photo"
                class="w-24 h-24 rounded-full mx-auto overflow-hidden ring-4 ring-blue-100"
              >
                <img
                  :src="`/storage/${delegate.photo}`"
                  :alt="delegate.name"
                  class="w-full h-full object-cover"
                >
              </div>
              <div
                v-else
                class="w-24 h-24 rounded-full mx-auto flex items-center justify-center text-white text-2xl font-bold ring-4 ring-blue-100"
                :class="getGradientClass(index + 100)"
              >
                {{ delegate.initials }}
              </div>
            </div>

            <!-- Info -->
            <div class="text-center">
              <h3 class="text-lg font-bold text-gray-900 mb-1">{{ delegate.name }}</h3>
              <p v-if="delegate.role" class="text-blue-600 font-medium text-sm mb-1">{{ delegate.role }}</p>
              <p v-if="delegate.organization" class="text-gray-500 text-sm mb-3">{{ delegate.organization }}</p>
              <p v-if="delegate.bio" class="text-gray-600 text-sm mt-3 line-clamp-3">{{ delegate.bio }}</p>

              <!-- Social Links -->
              <div v-if="hasSocialLinks(delegate)" class="flex justify-center gap-3 mt-4">
                <a
                  v-if="delegate.linkedin_url"
                  :href="delegate.linkedin_url"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="w-8 h-8 rounded-full bg-gray-100 hover:bg-blue-100 flex items-center justify-center text-gray-500 hover:text-blue-600 transition-colors"
                >
                  <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                  </svg>
                </a>
                <a
                  v-if="delegate.website_url"
                  :href="delegate.website_url"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="w-8 h-8 rounded-full bg-gray-100 hover:bg-blue-100 flex items-center justify-center text-gray-500 hover:text-blue-600 transition-colors"
                >
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Sponsors Section -->
    <section v-if="groupedDelegates.sponsors.length > 0" class="py-16 sm:py-24 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 sm:mb-16">
          <span class="inline-block text-purple-600 font-semibold text-sm uppercase tracking-widest mb-3 sm:mb-4">Supporters</span>
          <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
            Sponsors
          </h2>
          <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Organizations supporting the Catalyst Conference
          </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 sm:gap-8">
          <div
            v-for="(delegate, index) in groupedDelegates.sponsors"
            :key="delegate.id"
            class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-purple-200 relative overflow-hidden"
          >
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-purple-500 to-violet-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
            
            <!-- Photo -->
            <div class="mb-4">
              <div
                v-if="delegate.photo"
                class="w-24 h-24 rounded-full mx-auto overflow-hidden ring-4 ring-purple-100"
              >
                <img
                  :src="`/storage/${delegate.photo}`"
                  :alt="delegate.name"
                  class="w-full h-full object-cover"
                >
              </div>
              <div
                v-else
                class="w-24 h-24 rounded-full mx-auto flex items-center justify-center text-white text-2xl font-bold ring-4 ring-purple-100"
                :class="getGradientClass(index + 200)"
              >
                {{ delegate.initials }}
              </div>
            </div>

            <!-- Info -->
            <div class="text-center">
              <h3 class="text-lg font-bold text-gray-900 mb-1">{{ delegate.name }}</h3>
              <p v-if="delegate.organization" class="text-purple-600 font-medium text-sm mb-3">{{ delegate.organization }}</p>
              <p v-if="delegate.bio" class="text-gray-600 text-sm mt-3 line-clamp-3">{{ delegate.bio }}</p>

              <!-- Website Link -->
              <a
                v-if="delegate.website_url"
                :href="delegate.website_url"
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex items-center gap-2 mt-4 text-purple-600 hover:text-purple-700 font-medium text-sm"
              >
                Visit Website
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Attendees Section -->
    <section v-if="groupedDelegates.attendees.length > 0" class="py-16 sm:py-24 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 sm:mb-16">
          <span class="inline-block text-orange-600 font-semibold text-sm uppercase tracking-widest mb-3 sm:mb-4">Community</span>
          <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
            Attendees
          </h2>
          <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Professionals joining us to learn, connect, and grow
          </p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4 sm:gap-6">
          <div
            v-for="(delegate, index) in groupedDelegates.attendees"
            :key="delegate.id"
            class="group bg-white rounded-xl p-4 shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 hover:border-orange-200 text-center"
          >
            <!-- Photo -->
            <div class="mb-3">
              <div
                v-if="delegate.photo"
                class="w-16 h-16 rounded-full mx-auto overflow-hidden"
              >
                <img
                  :src="`/storage/${delegate.photo}`"
                  :alt="delegate.name"
                  class="w-full h-full object-cover"
                >
              </div>
              <div
                v-else
                class="w-16 h-16 rounded-full mx-auto flex items-center justify-center text-white text-lg font-bold"
                :class="getGradientClass(index + 300)"
              >
                {{ delegate.initials }}
              </div>
            </div>

            <!-- Info -->
            <h3 class="text-sm font-semibold text-gray-900 mb-1 truncate">{{ delegate.name }}</h3>
            <p v-if="delegate.organization" class="text-xs text-gray-500 truncate">{{ delegate.organization }}</p>
            <p v-if="delegate.country" class="text-xs text-gray-400 mt-1">{{ delegate.country }}</p>
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

// Define props
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
    default: () => ({
      total: 0,
      speakers: 0,
      partners: 0,
      sponsors: 0,
      attendees: 0
    })
  }
})

// Helper function to check if delegate has social links
const hasSocialLinks = (delegate) => {
  return delegate.linkedin_url || delegate.twitter_url || delegate.website_url
}

// Helper function to get gradient class based on index
const getGradientClass = (index) => {
  const gradients = [
    'bg-gradient-to-br from-orange-400 to-orange-600',
    'bg-gradient-to-br from-emerald-400 to-emerald-600',
    'bg-gradient-to-br from-blue-400 to-blue-600',
    'bg-gradient-to-br from-purple-400 to-purple-600',
    'bg-gradient-to-br from-teal-400 to-teal-600',
    'bg-gradient-to-br from-pink-400 to-pink-600',
    'bg-gradient-to-br from-indigo-400 to-indigo-600',
    'bg-gradient-to-br from-red-400 to-red-600',
    'bg-gradient-to-br from-cyan-400 to-cyan-600',
    'bg-gradient-to-br from-amber-400 to-amber-600',
  ]
  return gradients[index % gradients.length]
}
</script>
