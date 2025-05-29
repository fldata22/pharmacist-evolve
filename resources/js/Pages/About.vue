<template>
  <AppLayout>
    <!-- Header Section -->
    <section class="relative bg-gradient-to-br from-slate-50 via-orange-50 to-amber-50 py-20">
      <div class="absolute inset-0">
        <div class="absolute top-20 left-10 w-72 h-72 bg-orange-200 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-amber-200 rounded-full opacity-20 blur-3xl"></div>
      </div>
      
      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
          About <span class="bg-gradient-to-r from-orange-600 to-amber-600 bg-clip-text text-transparent">Pharmacist Evolve</span>
        </h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
          Empowering overseas pharmacists to succeed in the UK through expert coaching, comprehensive support, and unwavering commitment to career excellence.
        </p>
      </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
          <!-- Text Content -->
          <div>
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Our Mission & Values</h2>
            <div class="space-y-6 text-lg text-gray-600">
              <p>
                At Pharmacist Evolve, we believe that every overseas pharmacist has the potential to thrive in the UK healthcare system. Our mission is to bridge the gap between international pharmaceutical expertise and UK practice requirements, ensuring a smooth and successful transition for healthcare professionals.
              </p>
              <p>
                We are committed to providing comprehensive support that goes beyond just exam preparation. Our holistic approach encompasses professional development, cultural integration, and career advancement strategies that empower pharmacists to excel in their new environment.
              </p>
              <p>
                Our core values center on excellence, integrity, and empowerment. We understand the unique challenges faced by overseas pharmacists and have designed our programs to address every aspect of the transition journey.
              </p>
            </div>
          </div>

          <!-- Image/Visual Element -->
          <div class="relative">
            <div class="bg-gradient-to-br from-orange-100 to-amber-100 rounded-3xl p-8">
              <div class="grid grid-cols-2 gap-6">
                <div class="bg-white rounded-2xl p-6 shadow-lg">
                  <div class="w-12 h-12 bg-orange-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                  </div>
                  <h3 class="font-bold text-gray-900 mb-2">Excellence</h3>
                  <p class="text-sm text-gray-600">Committed to the highest standards in everything we do</p>
                </div>
                
                <div class="bg-white rounded-2xl p-6 shadow-lg">
                  <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                  </div>
                  <h3 class="font-bold text-gray-900 mb-2">Integrity</h3>
                  <p class="text-sm text-gray-600">Honest, transparent guidance throughout your journey</p>
                </div>

                <div class="bg-white rounded-2xl p-6 shadow-lg">
                  <div class="w-12 h-12 bg-emerald-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                  </div>
                  <h3 class="font-bold text-gray-900 mb-2">Empowerment</h3>
                  <p class="text-sm text-gray-600">Enabling you to reach your full potential</p>
                </div>

                <div class="bg-white rounded-2xl p-6 shadow-lg">
                  <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                  </div>
                  <h3 class="font-bold text-gray-900 mb-2">Support</h3>
                  <p class="text-sm text-gray-600">Comprehensive assistance every step of the way</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-20 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Our Story</h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Founded on the belief that every pharmacist deserves the opportunity to excel, regardless of where their journey began
          </p>
        </div>

        <div class="max-w-4xl mx-auto">
          <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-12">
            <div class="prose prose-lg max-w-none">
              <p class="text-xl text-gray-700 leading-relaxed mb-6">
                Pharmacist Evolve was born from firsthand experience of the challenges faced by overseas pharmacists seeking to establish successful careers in the UK. Our founders, themselves having navigated the complex transition process, recognized the need for comprehensive, personalized support that addresses not just the technical requirements, but the entire journey of professional integration.
              </p>
              
              <p class="text-lg text-gray-600 leading-relaxed mb-6">
                What began as informal mentoring among colleagues has evolved into a structured, comprehensive support system that has helped hundreds of pharmacists achieve their UK career goals. We understand that behind every application, every exam, and every interview is a person with dreams, aspirations, and the expertise to make a meaningful contribution to UK healthcare.
              </p>

              <p class="text-lg text-gray-600 leading-relaxed mb-8">
                Our vision extends beyond individual success stories. We aim to create a seamless bridge between international pharmaceutical expertise and UK healthcare needs, ensuring that talented professionals can contribute their skills while building fulfilling careers. Through our comprehensive coaching programs, we're not just preparing pharmacists for exams – we're empowering them to become leaders in their field.
              </p>

              <div class="bg-gradient-to-r from-orange-50 to-amber-50 rounded-2xl p-6 border-l-4 border-orange-500">
                <p class="text-lg font-medium text-gray-900 mb-2">Our Commitment</p>
                <p class="text-gray-700">
                  "We believe that diversity in healthcare strengthens patient care. Every overseas pharmacist we support brings unique perspectives and expertise that enriches the UK pharmaceutical landscape."
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Meet the Team Section -->
    <section class="py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Meet Our Team</h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Our dedicated team of experienced professionals is committed to your success every step of the way
          </p>
        </div>

        <!-- Team Members Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
          <!-- Team Member 1 - Founder -->
          <div class="group bg-gradient-to-br from-orange-50 to-amber-50 rounded-3xl p-8 hover:shadow-xl transition-all duration-300">
            <div class="text-center">
              <div class="w-32 h-32 mx-auto mb-6 relative">
                <img 
                  src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-4.0.3&w=400&q=80" 
                  alt="Dr. Sarah Johnson" 
                  class="w-full h-full rounded-full object-cover shadow-lg"
                />
                <div class="absolute inset-0 rounded-full bg-gradient-to-t from-orange-600/20 to-transparent"></div>
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. Sarah Johnson</h3>
              <p class="text-orange-600 font-semibold mb-4">Founder & Lead Coach</p>
              <p class="text-gray-600 text-sm leading-relaxed">
                With over 15 years in UK pharmacy practice and a passion for mentoring, Sarah founded Pharmacist Evolve to support overseas pharmacists. She has personally guided over 200 pharmacists through their OSPAP journey.
              </p>
            </div>
          </div>

          <!-- Team Member 2 - Senior Coach -->
          <div class="group bg-gradient-to-br from-blue-50 to-indigo-50 rounded-3xl p-8 hover:shadow-xl transition-all duration-300">
            <div class="text-center">
              <div class="w-32 h-32 mx-auto mb-6 relative">
                <img 
                  src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&w=400&q=80" 
                  alt="Dr. Michael Chen" 
                  class="w-full h-full rounded-full object-cover shadow-lg"
                />
                <div class="absolute inset-0 rounded-full bg-gradient-to-t from-blue-600/20 to-transparent"></div>
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. Michael Chen</h3>
              <p class="text-blue-600 font-semibold mb-4">Senior OSPAP Coach</p>
              <p class="text-gray-600 text-sm leading-relaxed">
                A clinical pharmacist with expertise in OSPAP preparation and workforce integration. Michael specializes in helping international pharmacists navigate UK clinical practice requirements and interview processes.
              </p>
            </div>
          </div>

          <!-- Team Member 3 - Career Specialist -->
          <div class="group bg-gradient-to-br from-emerald-50 to-teal-50 rounded-3xl p-8 hover:shadow-xl transition-all duration-300">
            <div class="text-center">
              <div class="w-32 h-32 mx-auto mb-6 relative">
                <img 
                  src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&w=400&q=80" 
                  alt="Dr. Priya Patel" 
                  class="w-full h-full rounded-full object-cover shadow-lg"
                />
                <div class="absolute inset-0 rounded-full bg-gradient-to-t from-emerald-600/20 to-transparent"></div>
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. Priya Patel</h3>
              <p class="text-emerald-600 font-semibold mb-4">Career Development Specialist</p>
              <p class="text-gray-600 text-sm leading-relaxed">
                Specializing in career advancement and professional development, Priya helps pharmacists identify opportunities and develop strategies for long-term success in the UK pharmacy sector.
              </p>
            </div>
          </div>

          <!-- Team Member 4 - Mentor -->
          <div class="group bg-gradient-to-br from-purple-50 to-pink-50 rounded-3xl p-8 hover:shadow-xl transition-all duration-300">
            <div class="text-center">
              <div class="w-32 h-32 mx-auto mb-6 relative">
                <img 
                  src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&w=400&q=80" 
                  alt="Dr. James Wilson" 
                  class="w-full h-full rounded-full object-cover shadow-lg"
                />
                <div class="absolute inset-0 rounded-full bg-gradient-to-t from-purple-600/20 to-transparent"></div>
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. James Wilson</h3>
              <p class="text-purple-600 font-semibold mb-4">Group Mentoring Lead</p>
              <p class="text-gray-600 text-sm leading-relaxed">
                Leading our group mentoring programs, James creates supportive learning environments where overseas pharmacists can learn from each other while receiving expert guidance.
              </p>
            </div>
          </div>

          <!-- Team Member 5 - Support Coordinator -->
          <div class="group bg-gradient-to-br from-indigo-50 to-blue-50 rounded-3xl p-8 hover:shadow-xl transition-all duration-300">
            <div class="text-center">
              <div class="w-32 h-32 mx-auto mb-6 relative">
                <img 
                  src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-4.0.3&w=400&q=80" 
                  alt="Emma Thompson" 
                  class="w-full h-full rounded-full object-cover shadow-lg"
                />
                <div class="absolute inset-0 rounded-full bg-gradient-to-t from-indigo-600/20 to-transparent"></div>
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-2">Emma Thompson</h3>
              <p class="text-indigo-600 font-semibold mb-4">Student Support Coordinator</p>
              <p class="text-gray-600 text-sm leading-relaxed">
                Emma ensures every client receives personalized attention and support throughout their journey. She coordinates resources, schedules, and provides ongoing assistance to maximize success.
              </p>
            </div>
          </div>

          <!-- Team Member 6 - Technical Specialist -->
          <div class="group bg-gradient-to-br from-teal-50 to-green-50 rounded-3xl p-8 hover:shadow-xl transition-all duration-300">
            <div class="text-center">
              <div class="w-32 h-32 mx-auto mb-6 relative">
                <img 
                  src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&w=400&q=80" 
                  alt="Dr. Ahmed Hassan" 
                  class="w-full h-full rounded-full object-cover shadow-lg"
                />
                <div class="absolute inset-0 rounded-full bg-gradient-to-t from-teal-600/20 to-transparent"></div>
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. Ahmed Hassan</h3>
              <p class="text-teal-600 font-semibold mb-4">Clinical Practice Specialist</p>
              <p class="text-gray-600 text-sm leading-relaxed">
                With extensive experience in both hospital and community pharmacy, Ahmed helps overseas pharmacists understand UK clinical practices and regulatory requirements.
              </p>
            </div>
          </div>
        </div>

        <!-- Team Values -->
        <div class="bg-gradient-to-r from-orange-600 to-amber-600 rounded-3xl p-12 text-white text-center">
          <h3 class="text-3xl font-bold mb-8">Our Team Values</h3>
          <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="space-y-3">
              <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
              </div>
              <h4 class="text-xl font-bold">Empowerment</h4>
              <p class="text-orange-100">We believe in your potential and work to unlock it</p>
            </div>
            
            <div class="space-y-3">
              <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
              </div>
              <h4 class="text-xl font-bold">Support</h4>
              <p class="text-orange-100">Comprehensive assistance at every step</p>
            </div>
            
            <div class="space-y-3">
              <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
              </div>
              <h4 class="text-xl font-bold">Excellence</h4>
              <p class="text-orange-100">Committed to the highest standards</p>
            </div>
            
            <div class="space-y-3">
              <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                </svg>
              </div>
              <h4 class="text-xl font-bold">Integrity</h4>
              <p class="text-orange-100">Honest, transparent guidance always</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gray-50">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="bg-white rounded-3xl shadow-xl p-12">
          <h2 class="text-4xl font-bold text-gray-900 mb-6">
            Ready to Learn More About Our Team?
          </h2>
          <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
            Get in touch with us to discover how our experienced team can support your journey to pharmacy success in the UK.
          </p>
          
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <Link 
              href="/contact" 
              class="group inline-flex items-center justify-center px-8 py-4 bg-orange-600 text-white font-semibold rounded-xl hover:bg-orange-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl"
            >
              <span>Contact Us to Learn More</span>
              <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
              </svg>
            </Link>
            
            <Link 
              href="/book-consultation" 
              class="inline-flex items-center justify-center px-8 py-4 border-2 border-orange-600 text-orange-600 font-semibold rounded-xl hover:bg-orange-600 hover:text-white transition-colors"
            >
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 002 2z"/>
              </svg>
              Book a Free Consultation
            </Link>
          </div>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
</script>
