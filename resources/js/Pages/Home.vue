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
          <div class="text-left order-1 lg:order-1">
            <!-- Logo -->
            <div class="mb-8">
              <Logo size="xlarge" />
            </div>

            <!-- Badge -->
            <div class="inline-flex items-center px-4 py-2 rounded-full bg-orange-100 text-orange-800 text-sm font-medium mb-6">
              <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              Trusted by Pharmacists Nationwide
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
              <a 
                href="https://book.heygoldie.com/FaithThePharmacist"
                target="_blank"
                rel="noopener noreferrer"
                class="group inline-flex items-center justify-center px-6 sm:px-8 py-4 min-w-fit bg-orange-600 text-white font-semibold rounded-xl hover:bg-orange-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl whitespace-nowrap text-sm sm:text-base"
              >
                <span class="flex-shrink-0">Book a Consultation</span>
                <svg class="w-5 h-5 ml-2 flex-shrink-0 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                </svg>
              </a>
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

          </div>

          <!-- Image Side -->
          <div class="order-2 lg:order-2">
            <div class="relative">
              <!-- Main Pharmacist Image -->
              <div class="relative z-10">
                <img 
                  src="/images/pharm.PNG" 
                  alt="Professional Pharmacist" 
                  class="w-full h-[400px] sm:h-[500px] lg:h-[700px] object-cover rounded-3xl shadow-2xl"
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
              Comprehensive group coaching program with live webinars, resources, and community support for career transition and professional development.
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

          <!-- Service 2: Professional Development Coaching -->
          <div class="group relative bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-blue-100">
            <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Professional Development Coaching</h3>
            <p class="text-gray-600 mb-6">
              One-on-one personalized coaching to help you develop your professional skills with tailored development plans and expert guidance throughout your career journey.
            </p>
            <Link 
              href="/services/professional-development" 
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
          <!-- Professional Skills Development -->
          <div class="text-center">
            <div class="w-24 h-24 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
              <svg class="w-12 h-12 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Professional Skills Development</h3>
            <p class="text-gray-600">
              Tailored coaching for developing essential pharmacy skills and competencies.
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

    <!-- Book a Free Call Section -->
    <section class="py-24 bg-gradient-to-r from-orange-600 to-amber-600">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="max-w-4xl mx-auto">
          <!-- Main CTA Headline -->
          <h2 class="text-4xl lg:text-6xl font-bold text-white mb-6 leading-tight">
            BOOK A FREE CALL
          </h2>
          
          <!-- Subheading -->
          <p class="text-xl lg:text-2xl text-orange-100 mb-8 leading-relaxed">
            LET'S GET YOUR JOURNEY STARTED
          </p>
          
          <!-- Description -->
          <p class="text-lg text-orange-50 mb-12 max-w-3xl mx-auto leading-relaxed">
            Ready to take the next step in your UK pharmacy career? Book a complimentary consultation call to discuss your goals, challenges, and how we can support your professional journey.
          </p>
          
          <!-- CTA Button -->
          <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a 
              href="https://book.heygoldie.com/FaithThePharmacist" 
              target="_blank"
              rel="noopener noreferrer"
              class="group inline-flex items-center justify-center px-8 py-4 bg-white text-orange-600 font-bold text-lg rounded-xl hover:bg-gray-50 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl"
            >
              <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2z"/>
              </svg>
              <span>Book Your Free Call Now</span>
              <svg class="w-5 h-5 ml-3 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
              </svg>
            </a>
          </div>
          
          <!-- Trust Indicators -->
          <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="flex flex-col items-center">
              <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mb-4">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
              </div>
              <h3 class="text-lg font-semibold text-white mb-2">30-Minute Consultation</h3>
              <p class="text-orange-100">Comprehensive career assessment</p>
            </div>
            
            <div class="flex flex-col items-center">
              <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mb-4">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
              </div>
              <h3 class="text-lg font-semibold text-white mb-2">Personalized Action Plan</h3>
              <p class="text-orange-100">Tailored roadmap for your success</p>
            </div>
            
            <div class="flex flex-col items-center">
              <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mb-4">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
              </div>
              <h3 class="text-lg font-semibold text-white mb-2">Expert Guidance</h3>
              <p class="text-orange-100">Professional pharmacy career coaching</p>
            </div>
          </div>
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
            Real testimonials from pharmacists who have transformed their careers with our guidance
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
                  <!-- Testimonial 1 - Chioma -->
                  <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-8 border border-orange-100">
                    <div class="flex items-center mb-6">
                      <div class="w-16 h-16 bg-orange-200 rounded-full flex items-center justify-center mr-4">
                        <span class="text-2xl font-bold text-orange-700">C</span>
                      </div>
                      <div>
                        <h4 class="font-bold text-gray-900">Chioma</h4>
                        <div class="flex items-center">
                          <div class="flex text-yellow-400 text-sm">
                            ★★★★★
                          </div>
                          <span class="text-xs text-gray-500 ml-2">16 Jun 2025</span>
                        </div>
                      </div>
                    </div>
                    <p class="text-gray-700 italic">
                      "Faith has been a trailblazer in providing guidance for immigrants pursuing a career path, ever since I first came across her YouTube channel. I'm thrilled that she now offers a structured program specifically for migrating pharmacists."
                    </p>
                  </div>

                  <!-- Testimonial 2 - Ameeta -->
                  <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 border border-blue-100">
                    <div class="flex items-center mb-6">
                      <div class="w-16 h-16 bg-blue-200 rounded-full flex items-center justify-center mr-4">
                        <span class="text-2xl font-bold text-blue-700">A</span>
                      </div>
                      <div>
                        <h4 class="font-bold text-gray-900">Ameeta Carmels</h4>
                        <div class="flex items-center">
                          <div class="flex text-yellow-400 text-sm">
                            ★★★★★
                          </div>
                          <span class="text-xs text-gray-500 ml-2">9 Jun 2025</span>
                        </div>
                      </div>
                    </div>
                    <p class="text-gray-700 italic">
                      "I had a video session with Faith and it was very much useful. I gained some ideas, career advice and future plans. The discussion was amazing and she maintains an impressive platform to help people build better career."
                    </p>
                  </div>

                  <!-- Testimonial 3 - Charity -->
                  <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-8 border border-emerald-100">
                    <div class="flex items-center mb-6">
                      <div class="w-16 h-16 bg-emerald-200 rounded-full flex items-center justify-center mr-4">
                        <span class="text-2xl font-bold text-emerald-700">C</span>
                      </div>
                      <div>
                        <h4 class="font-bold text-gray-900">Charity Chinaka</h4>
                        <div class="flex items-center">
                          <div class="flex text-yellow-400 text-sm">
                            ★★★★★
                          </div>
                          <span class="text-xs text-gray-500 ml-2">20 Mar 2025</span>
                        </div>
                      </div>
                    </div>
                    <p class="text-gray-700 italic">
                      "The conversation was very detailed and helpful. Thank you so much pharmacist faith for every bit of information I have received."
                    </p>
                  </div>
                </div>
              </div>

              <!-- Slide 2 -->
              <div class="w-full flex-shrink-0">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                  <!-- Testimonial 4 - Amarachi -->
                  <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 border border-purple-100">
                    <div class="flex items-center mb-6">
                      <div class="w-16 h-16 bg-purple-200 rounded-full flex items-center justify-center mr-4">
                        <span class="text-2xl font-bold text-purple-700">A</span>
                      </div>
                      <div>
                        <h4 class="font-bold text-gray-900">Amarachi</h4>
                        <div class="flex items-center">
                          <div class="flex text-yellow-400 text-sm">
                            ★★★★★
                          </div>
                          <span class="text-xs text-gray-500 ml-2">19 Mar 2025</span>
                        </div>
                      </div>
                    </div>
                    <p class="text-gray-700 italic">
                      "It was a great and informative session. I'm grateful for her help, would highly recommend."
                    </p>
                  </div>

                  <!-- Testimonial 5 - Precious -->
                  <div class="bg-gradient-to-br from-indigo-50 to-blue-50 rounded-2xl p-8 border border-indigo-100">
                    <div class="flex items-center mb-6">
                      <div class="w-16 h-16 bg-indigo-200 rounded-full flex items-center justify-center mr-4">
                        <span class="text-2xl font-bold text-indigo-700">P</span>
                      </div>
                      <div>
                        <h4 class="font-bold text-gray-900">Precious</h4>
                        <div class="flex items-center">
                          <div class="flex text-yellow-400 text-sm">
                            ★★★★★
                          </div>
                          <span class="text-xs text-gray-500 ml-2">10 Feb 2025</span>
                        </div>
                      </div>
                    </div>
                    <p class="text-gray-700 italic">
                      "It was an enlightening and interesting conversation, highly motivational and I got the encouragement I needed to think about and commence my conversion process. Thank you Faith."
                    </p>
                  </div>

                  <!-- Testimonial 6 - Anjlee -->
                  <div class="bg-gradient-to-br from-teal-50 to-green-50 rounded-2xl p-8 border border-teal-100">
                    <div class="flex items-center mb-6">
                      <div class="w-16 h-16 bg-teal-200 rounded-full flex items-center justify-center mr-4">
                        <span class="text-2xl font-bold text-teal-700">A</span>
                      </div>
                      <div>
                        <h4 class="font-bold text-gray-900">Anjlee Ruparel</h4>
                        <div class="flex items-center">
                          <div class="flex text-yellow-400 text-sm">
                            ★★★★★
                          </div>
                          <span class="text-xs text-gray-500 ml-2">12 Feb 2025</span>
                        </div>
                      </div>
                    </div>
                    <p class="text-gray-700 italic">
                      "I am really grateful for your support and guidance for progressing towards my pharmacy career in uk."
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
