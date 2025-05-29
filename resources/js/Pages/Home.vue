<template>
  <AppLayout>
    <!-- Modern Hero Section -->
    <section class="relative min-h-screen bg-gradient-to-br from-slate-50 via-orange-50 to-amber-50 overflow-hidden">
      <!-- Background Elements -->
      <div class="absolute inset-0">
        <div class="absolute top-20 left-10 w-72 h-72 bg-orange-200 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-amber-200 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-gradient-to-r from-orange-100 to-amber-100 rounded-full opacity-30 blur-3xl"></div>
      </div>

      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center min-h-[80vh]">
          <!-- Content Side -->
          <div class="text-left order-2 lg:order-1">
            <!-- Logo -->
            <div class="mb-8">
              <Logo size="xlarge" />
            </div>

            <!-- Badge -->
            <div class="inline-flex items-center px-4 py-2 rounded-full bg-orange-100 text-orange-800 text-sm font-medium mb-6">
              <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              Trusted by 500+ Pharmacists
            </div>

            <!-- Main Headline -->
            <h1 class="text-5xl lg:text-7xl font-bold text-gray-900 mb-6 leading-tight">
              Empowering Overseas Pharmacists for a
              <span class="bg-gradient-to-r from-orange-600 to-amber-600 bg-clip-text text-transparent">
                Successful Career
              </span>
              in the UK
            </h1>

            <!-- Subheading -->
            <p class="text-xl text-gray-600 mb-8 max-w-2xl leading-relaxed">
              Expert coaching, seamless transition, and career excellence for overseas pharmacists.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 mb-12">
              <Link 
                href="/book-consultation" 
                class="group inline-flex items-center justify-center px-8 py-4 bg-orange-600 text-white font-semibold rounded-xl hover:bg-orange-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl"
              >
                <span>Start Your Journey Today</span>
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
              </Link>
              <Link 
                href="/services" 
                class="inline-flex items-center justify-center px-8 py-4 border-2 border-gray-300 text-gray-700 font-semibold rounded-xl hover:border-orange-600 hover:text-orange-600 transition-colors"
              >
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h10a2 2 0 012 2v12a2 2 0 01-2 2z"/>
                </svg>
                Explore Services
              </Link>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-3 gap-8">
              <div class="text-center">
                <div class="text-3xl font-bold text-gray-900">98%</div>
                <div class="text-sm text-gray-600">Success Rate</div>
              </div>
              <div class="text-center">
                <div class="text-3xl font-bold text-gray-900">500+</div>
                <div class="text-sm text-gray-600">Pharmacists Coached</div>
              </div>
              <div class="text-center">
                <div class="text-3xl font-bold text-gray-900">50+</div>
                <div class="text-sm text-gray-600">Partner Hospitals</div>
              </div>
            </div>
          </div>

          <!-- Image Side -->
          <div class="order-1 lg:order-2">
            <div class="relative">
              <!-- Main Pharmacist Image -->
              <div class="relative z-10">
                <img 
                  src="/images/pharm.PNG" 
                  alt="Professional Pharmacist" 
                  class="w-full h-[700px] object-cover rounded-3xl shadow-2xl"
                  style="object-position: center 15%;"
                />
              </div>

              <!-- Background Decoration -->
              <div class="absolute inset-0 bg-gradient-to-br from-orange-400 to-amber-400 rounded-3xl transform rotate-6 opacity-20"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Modern Features Section -->
    <section class="py-24 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-20">
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
            Our Services
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Comprehensive support programs designed to help overseas pharmacists succeed in the UK
          </p>
        </div>

        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Service 1: Group Mentoring School -->
          <div class="group relative bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-orange-100">
            <div class="w-16 h-16 bg-orange-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C20.832 18.477 19.246 18 17.5 18c-1.746 0-3.332.477-4.5 1.253"/>
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Group Mentoring School</h3>
            <p class="text-gray-600 mb-6">
              Comprehensive group coaching program with live webinars, resources, and community support for OSPAP preparation and career transition.
            </p>
            <Link 
              href="/services/group-mentoring" 
              class="inline-flex items-center text-orange-600 font-semibold hover:text-orange-700 group-hover:translate-x-1 transition-all"
            >
              Link to full details
              <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </Link>
          </div>

          <!-- Service 2: OSPAP Transition Coaching -->
          <div class="group relative bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-blue-100">
            <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-4">OSPAP Transition Coaching</h3>
            <p class="text-gray-600 mb-6">
              One-on-one personalized coaching to help you pass OSPAP exams with tailored study plans and expert guidance throughout the process.
            </p>
            <Link 
              href="/services/ospap-coaching" 
              class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 group-hover:translate-x-1 transition-all"
            >
              Link to full details
              <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </Link>
          </div>

          <!-- Service 3: Workforce Integration & Excellence Coaching -->
          <div class="group relative bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-emerald-100">
            <div class="w-16 h-16 bg-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Workforce Integration & Excellence Coaching</h3>
            <p class="text-gray-600 mb-6">
              Comprehensive support for integrating into UK pharmacy practice with job search strategies, interview preparation, and career development.
            </p>
            <Link 
              href="/services/workforce-integration" 
              class="inline-flex items-center text-emerald-600 font-semibold hover:text-emerald-700 group-hover:translate-x-1 transition-all"
            >
              Link to full details
              <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </Link>
          </div>
        </div>
        
        <div class="text-center mt-16">
          <Link 
            href="/services" 
            class="inline-flex items-center px-8 py-4 bg-orange-600 text-white font-semibold rounded-xl hover:bg-orange-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl"
          >
            <span>Explore Our Services</span>
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </Link>
        </div>
      </div>
    </section>

    <!-- How We Support You Section -->
    <section class="py-24 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
            How We Support You
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Our comprehensive approach ensures your success at every step of your pharmacy career journey in the UK
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Pass the OSPAP Exams -->
          <div class="text-center">
            <div class="w-24 h-24 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
              <svg class="w-12 h-12 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Pass the OSPAP Exams</h3>
            <p class="text-gray-600">
              Tailored coaching for exam preparation.
            </p>
          </div>

          <!-- Seamless Workforce Integration -->
          <div class="text-center">
            <div class="w-24 h-24 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
              <svg class="w-12 h-12 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Seamless Workforce Integration</h3>
            <p class="text-gray-600">
              Personalized support for entering the UK workforce.
            </p>
          </div>

          <!-- Career Excellence Coaching -->
          <div class="text-center">
            <div class="w-24 h-24 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
              <svg class="w-12 h-12 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Career Excellence Coaching</h3>
            <p class="text-gray-600">
              Strategies for long-term career success in the UK pharmacy industry.
            </p>
          </div>
        </div>

        <div class="text-center mt-12">
          <Link 
            href="/about" 
            class="inline-flex items-center px-8 py-4 border-2 border-orange-600 text-orange-600 font-semibold rounded-xl hover:bg-orange-600 hover:text-white transition-colors"
          >
            <span>Learn More</span>
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </Link>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
            What Our Clients Say
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Short quotes from satisfied clients with their photos, focusing on their journey through the OSPAP process and workforce integration
          </p>
        </div>

        <!-- Testimonials Carousel -->
        <div class="relative">
          <!-- Carousel Container -->
          <div class="overflow-hidden">
            <div class="flex transition-transform duration-500 ease-in-out" :style="{ transform: `translateX(-${currentSlide * 100}%)` }">
              <!-- Slide 1 -->
              <div class="w-full flex-shrink-0">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                  <!-- Testimonial 1 - OSPAP Focus -->
                  <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-8 border border-orange-100">
                    <div class="flex items-center mb-6">
                      <img 
                        src="https://images.unsplash.com/photo-1551836022-deb4988cc6c0?ixlib=rb-4.0.3&w=150&q=80" 
                        alt="Sarah Ahmed" 
                        class="w-16 h-16 rounded-full object-cover mr-4"
                      />
                      <div>
                        <h4 class="font-bold text-gray-900">Sarah Ahmed</h4>
                        <p class="text-gray-600">Hospital Pharmacist, London</p>
                      </div>
                    </div>
                    <p class="text-gray-700 italic">
                      "The OSPAP coaching was exceptional. I passed on my first attempt and the structured approach made all the difference in my preparation."
                    </p>
                  </div>

                  <!-- Testimonial 2 - Workforce Integration Focus -->
                  <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 border border-blue-100">
                    <div class="flex items-center mb-6">
                      <img 
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&w=150&q=80" 
                        alt="Mohammed Khan" 
                        class="w-16 h-16 rounded-full object-cover mr-4"
                      />
                      <div>
                        <h4 class="font-bold text-gray-900">Mohammed Khan</h4>
                        <p class="text-gray-600">Clinical Pharmacist, Manchester</p>
                      </div>
                    </div>
                    <p class="text-gray-700 italic">
                      "The workforce integration support was invaluable. They helped me transition smoothly into the UK pharmacy system and secure my ideal position."
                    </p>
                  </div>

                  <!-- Testimonial 3 - OSPAP & Integration Journey -->
                  <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-8 border border-emerald-100">
                    <div class="flex items-center mb-6">
                      <img 
                        src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&w=150&q=80" 
                        alt="Dr. Priya Patel" 
                        class="w-16 h-16 rounded-full object-cover mr-4"
                      />
                      <div>
                        <h4 class="font-bold text-gray-900">Dr. Priya Patel</h4>
                        <p class="text-gray-600">Community Pharmacist, Birmingham</p>
                      </div>
                    </div>
                    <p class="text-gray-700 italic">
                      "From OSPAP preparation to workforce integration, the journey was seamless. The personalized support helped me navigate every step confidently."
                    </p>
                  </div>
                </div>
              </div>

              <!-- Slide 2 -->
              <div class="w-full flex-shrink-0">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                  <!-- Testimonial 4 - Career Growth -->
                  <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 border border-purple-100">
                    <div class="flex items-center mb-6">
                      <img 
                        src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&w=150&q=80" 
                        alt="Dr. James Wilson" 
                        class="w-16 h-16 rounded-full object-cover mr-4"
                      />
                      <div>
                        <h4 class="font-bold text-gray-900">Dr. James Wilson</h4>
                        <p class="text-gray-600">Senior Pharmacist, Bristol</p>
                      </div>
                    </div>
                    <p class="text-gray-700 italic">
                      "The ongoing career support helped me advance to senior positions. The mentorship continued well beyond OSPAP completion."
                    </p>
                  </div>

                  <!-- Testimonial 5 - Group Mentoring -->
                  <div class="bg-gradient-to-br from-indigo-50 to-blue-50 rounded-2xl p-8 border border-indigo-100">
                    <div class="flex items-center mb-6">
                      <img 
                        src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-4.0.3&w=150&q=80" 
                        alt="Dr. Fatima Al-Rashid" 
                        class="w-16 h-16 rounded-full object-cover mr-4"
                      />
                      <div>
                        <h4 class="font-bold text-gray-900">Dr. Fatima Al-Rashid</h4>
                        <p class="text-gray-600">Clinical Pharmacist, Leeds</p>
                      </div>
                    </div>
                    <p class="text-gray-700 italic">
                      "The group mentoring created a supportive community. Learning alongside other overseas pharmacists made the OSPAP journey less isolating."
                    </p>
                  </div>

                  <!-- Testimonial 6 - Complete Journey -->
                  <div class="bg-gradient-to-br from-teal-50 to-green-50 rounded-2xl p-8 border border-teal-100">
                    <div class="flex items-center mb-6">
                      <img 
                        src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&w=150&q=80" 
                        alt="Dr. Raj Patel" 
                        class="w-16 h-16 rounded-full object-cover mr-4"
                      />
                      <div>
                        <h4 class="font-bold text-gray-900">Dr. Raj Patel</h4>
                        <p class="text-gray-600">Pharmacy Manager, Edinburgh</p>
                      </div>
                    </div>
                    <p class="text-gray-700 italic">
                      "From initial assessment to becoming a pharmacy manager, they supported every step. The comprehensive approach exceeded my expectations."
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Carousel Controls -->
          <button 
            @click="previousSlide" 
            class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-3 shadow-lg hover:shadow-xl transition-shadow duration-200 z-10"
            :disabled="currentSlide === 0"
            :class="{ 'opacity-50 cursor-not-allowed': currentSlide === 0 }"
          >
            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
          </button>
          
          <button 
            @click="nextSlide" 
            class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-3 shadow-lg hover:shadow-xl transition-shadow duration-200 z-10"
            :disabled="currentSlide === totalSlides - 1"
            :class="{ 'opacity-50 cursor-not-allowed': currentSlide === totalSlides - 1 }"
          >
            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </button>

          <!-- Carousel Indicators -->
          <div class="flex justify-center mt-8 space-x-2">
            <button
              v-for="(slide, index) in totalSlides"
              :key="index"
              @click="currentSlide = index"
              class="w-3 h-3 rounded-full transition-colors duration-200"
              :class="currentSlide === index ? 'bg-orange-600' : 'bg-gray-300'"
            ></button>
          </div>
        </div>
      </div>
    </section>

    <!-- Featured Partners Section -->
    <section class="py-16 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
          <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Our Partners</h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto">
            Trusted by leading pharmaceutical companies, universities, and healthcare organizations
          </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 items-center">
          <!-- Partner 1: NHS -->
          <div class="bg-white rounded-lg shadow-sm p-6 flex items-center justify-center h-24 hover:shadow-md transition-shadow">
            <div class="text-center">
              <div class="text-blue-600 font-bold text-lg">NHS</div>
              <div class="text-xs text-gray-500">National Health Service</div>
            </div>
          </div>

          <!-- Partner 2: University of London -->
          <div class="bg-white rounded-lg shadow-sm p-6 flex items-center justify-center h-24 hover:shadow-md transition-shadow">
            <div class="text-center">
              <div class="text-purple-600 font-bold text-sm">University of</div>
              <div class="text-purple-600 font-bold text-sm">London</div>
            </div>
          </div>

          <!-- Partner 3: Boots -->
          <div class="bg-white rounded-lg shadow-sm p-6 flex items-center justify-center h-24 hover:shadow-md transition-shadow">
            <div class="text-center">
              <div class="text-green-600 font-bold text-lg">Boots</div>
              <div class="text-xs text-gray-500">UK Pharmacy</div>
            </div>
          </div>

          <!-- Partner 4: Lloyds Pharmacy -->
          <div class="bg-white rounded-lg shadow-sm p-6 flex items-center justify-center h-24 hover:shadow-md transition-shadow">
            <div class="text-center">
              <div class="text-red-600 font-bold text-sm">Lloyds</div>
              <div class="text-red-600 font-bold text-sm">Pharmacy</div>
            </div>
          </div>

          <!-- Partner 5: King's College London -->
          <div class="bg-white rounded-lg shadow-sm p-6 flex items-center justify-center h-24 hover:shadow-md transition-shadow">
            <div class="text-center">
              <div class="text-indigo-600 font-bold text-xs">King's College</div>
              <div class="text-indigo-600 font-bold text-xs">London</div>
            </div>
          </div>

          <!-- Partner 6: Royal Pharmaceutical Society -->
          <div class="bg-white rounded-lg shadow-sm p-6 flex items-center justify-center h-24 hover:shadow-md transition-shadow">
            <div class="text-center">
              <div class="text-orange-600 font-bold text-xs">Royal Pharma</div>
              <div class="text-orange-600 font-bold text-xs">Society</div>
            </div>
          </div>

          <!-- Partner 7: Superdrug -->
          <div class="bg-white rounded-lg shadow-sm p-6 flex items-center justify-center h-24 hover:shadow-md transition-shadow">
            <div class="text-center">
              <div class="text-pink-600 font-bold text-lg">Superdrug</div>
              <div class="text-xs text-gray-500">Health & Beauty</div>
            </div>
          </div>

          <!-- Partner 8: Tesco Pharmacy -->
          <div class="bg-white rounded-lg shadow-sm p-6 flex items-center justify-center h-24 hover:shadow-md transition-shadow">
            <div class="text-center">
              <div class="text-blue-700 font-bold text-sm">Tesco</div>
              <div class="text-blue-700 font-bold text-sm">Pharmacy</div>
            </div>
          </div>

          <!-- Partner 9: University of Manchester -->
          <div class="bg-white rounded-lg shadow-sm p-6 flex items-center justify-center h-24 hover:shadow-md transition-shadow">
            <div class="text-center">
              <div class="text-purple-700 font-bold text-xs">University of</div>
              <div class="text-purple-700 font-bold text-xs">Manchester</div>
            </div>
          </div>

          <!-- Partner 10: Asda Pharmacy -->
          <div class="bg-white rounded-lg shadow-sm p-6 flex items-center justify-center h-24 hover:shadow-md transition-shadow">
            <div class="text-center">
              <div class="text-green-700 font-bold text-sm">Asda</div>
              <div class="text-green-700 font-bold text-sm">Pharmacy</div>
            </div>
          </div>

          <!-- Partner 11: Well Pharmacy -->
          <div class="bg-white rounded-lg shadow-sm p-6 flex items-center justify-center h-24 hover:shadow-md transition-shadow">
            <div class="text-center">
              <div class="text-teal-600 font-bold text-lg">Well</div>
              <div class="text-xs text-gray-500">Pharmacy</div>
            </div>
          </div>

          <!-- Partner 12: Independent Pharmacies -->
          <div class="bg-white rounded-lg shadow-sm p-6 flex items-center justify-center h-24 hover:shadow-md transition-shadow">
            <div class="text-center">
              <div class="text-gray-600 font-bold text-xs">Independent</div>
              <div class="text-gray-600 font-bold text-xs">Pharmacies</div>
            </div>
          </div>
        </div>

        <!-- Partner Stats -->
        <div class="mt-12 text-center">
          <p class="text-gray-600">
            <span class="font-semibold text-orange-600">50+</span> partner organizations across the UK supporting overseas pharmacists
          </p>
        </div>
      </div>
    </section>

  </AppLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3'
import { ref, onMounted, onUnmounted } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import Logo from '@/Components/Logo.vue'

defineOptions({
  layout: null
})

// Carousel functionality
const currentSlide = ref(0)
const totalSlides = ref(2)
let autoSlideInterval = null

const nextSlide = () => {
  if (currentSlide.value < totalSlides.value - 1) {
    currentSlide.value++
  } else {
    currentSlide.value = 0 // Loop back to first slide
  }
}

const previousSlide = () => {
  if (currentSlide.value > 0) {
    currentSlide.value--
  } else {
    currentSlide.value = totalSlides.value - 1 // Loop to last slide
  }
}

// Auto-slide functionality
const startAutoSlide = () => {
  autoSlideInterval = setInterval(() => {
    nextSlide()
  }, 5000) // Change slide every 5 seconds
}

const stopAutoSlide = () => {
  if (autoSlideInterval) {
    clearInterval(autoSlideInterval)
    autoSlideInterval = null
  }
}

onMounted(() => {
  startAutoSlide()
})

onUnmounted(() => {
  stopAutoSlide()
})
</script>
