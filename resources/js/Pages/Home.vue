<template>
  <AppLayout>
    <!-- Hero -->
    <section class="relative min-h-[90vh] bg-gradient-to-br from-slate-50 via-orange-50 to-amber-50 overflow-hidden">
      <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-20 left-10 w-72 h-72 bg-orange-200 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-amber-200 rounded-full opacity-20 blur-3xl"></div>
      </div>

      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center min-h-[78vh]">
          <!-- Content -->
          <div>
            <div class="mb-8">
              <Logo size="xlarge" />
            </div>

            <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
              Structured support for internationally trained pharmacists building their
              <span class="bg-gradient-to-r from-orange-600 to-amber-600 bg-clip-text text-transparent">UK careers</span>
            </h1>

            <p class="text-xl text-gray-600 mb-8 max-w-2xl leading-relaxed">
              Practical transition support for OSPAP graduates and foundation trainees, alongside employer-funded integration support for newly registered pharmacists.
            </p>

            <div class="flex flex-col sm:flex-row gap-4">
              <Link
                href="/for-pharmacists"
                class="group inline-flex items-center justify-center px-8 py-4 bg-orange-600 text-white font-semibold rounded-xl hover:bg-orange-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl"
              >
                Explore Pharmacist Support
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
              </Link>
              <Link
                href="/for-employers"
                class="inline-flex items-center justify-center px-8 py-4 border-2 border-gray-300 text-gray-700 font-semibold rounded-xl hover:border-orange-600 hover:text-orange-600 transition-colors"
              >
                Explore Employer Support
              </Link>
            </div>
          </div>

          <!-- Faith's photograph -->
          <div class="order-first lg:order-last">
            <div class="relative group">
              <div class="relative overflow-hidden rounded-3xl shadow-2xl">
                <div class="relative h-[360px] sm:h-[480px] lg:h-[620px]">
                  <img
                    src="/images/IMG_2898.jpg"
                    alt="Faith Adebimpe, founder of Pharmacist Evolve"
                    class="w-full h-full object-cover"
                    style="object-position: center 20%;"
                  />
                </div>
              </div>
              <div class="absolute inset-0 bg-gradient-to-br from-orange-100/50 to-amber-100/50 rounded-3xl transform rotate-3 -z-10 group-hover:rotate-2 transition-transform duration-700"></div>
              <div class="absolute inset-0 bg-gradient-to-br from-orange-50/30 to-amber-50/30 rounded-3xl transform rotate-6 -z-20 group-hover:rotate-4 transition-transform duration-1000"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Two offers -->
    <section class="py-24 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Choose your path</h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">Two focused programmes: one for pharmacists, one for the employers who hire them.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
          <!-- Transition Programme -->
          <div class="flex flex-col rounded-3xl p-8 lg:p-10 bg-gradient-to-br from-orange-50 to-amber-50 border border-orange-100">
            <span class="inline-flex self-start items-center px-3 py-1 rounded-full bg-orange-100 text-orange-800 text-xs font-bold uppercase tracking-wide mb-5">For pharmacists</span>
            <h3 class="text-2xl font-bold text-gray-900 mb-3">Pharmacist Evolve Transition Programme</h3>
            <p class="text-gray-600 mb-6 flex-grow">
              Six months of structured guidance, practical resources and peer support for OSPAP graduates entering years 1 to 3 of practice.
            </p>
            <div class="mb-6">
              <p class="text-3xl font-bold text-gray-900">£450 <span class="text-base font-medium text-gray-500">upfront</span></p>
              <p class="text-gray-500 text-sm">or six monthly payments of £80 (£480 total).</p>
            </div>
            <Link href="/for-pharmacists" class="inline-flex items-center justify-center px-6 py-3 bg-orange-600 text-white font-semibold rounded-xl hover:bg-orange-700 transition-colors">
              View the Programme
              <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
            </Link>
          </div>

          <!-- Integration Partnership -->
          <div class="flex flex-col rounded-3xl p-8 lg:p-10 bg-gradient-to-br from-gray-900 to-slate-800 text-white">
            <span class="inline-flex self-start items-center px-3 py-1 rounded-full bg-white/10 border border-white/20 text-orange-200 text-xs font-bold uppercase tracking-wide mb-5">For employers</span>
            <h3 class="text-2xl font-bold mb-3">Pharmacist Evolve Integration Partnership</h3>
            <p class="text-gray-300 mb-6 flex-grow">
              Six-month integration support for internationally trained, newly registered pharmacists, alongside your organisation's induction and supervision.
            </p>
            <div class="mb-6">
              <p class="text-3xl font-bold">£2,000 <span class="text-base font-medium text-gray-400">per pharmacist</span></p>
              <p class="text-gray-400 text-sm">for six months, plus VAT.</p>
            </div>
            <Link href="/for-employers" class="inline-flex items-center justify-center px-6 py-3 bg-orange-600 text-white font-semibold rounded-xl hover:bg-orange-700 transition-colors">
              Explore Employer Support
              <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
            </Link>
          </div>
        </div>
      </div>
    </section>

    <!-- Practical challenges -->
    <section class="py-24 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">The transition we help with</h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">Moving into UK practice brings practical questions. We work through them with you.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div v-for="challenge in challenges" :key="challenge.title" class="bg-white rounded-2xl p-7 border border-gray-100">
            <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mb-4">
              <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="challenge.icon" />
              </svg>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">{{ challenge.title }}</h3>
            <p class="text-gray-600 text-sm">{{ challenge.detail }}</p>
          </div>
        </div>
      </div>
    </section>

    <!-- How to get started -->
    <section class="py-24 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">How to get started</h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">Learn about the programme first, then take the step that matches you. No call required to begin.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
          <div class="rounded-2xl p-8 border border-orange-100 bg-orange-50">
            <h3 class="text-xl font-bold text-gray-900 mb-2">If you are a pharmacist</h3>
            <p class="text-gray-600 mb-6">Read the Transition Programme, then register your interest. We will email you when dates and applications are confirmed. No payment is taken to register.</p>
            <Link href="/for-pharmacists" class="inline-flex items-center text-orange-600 font-semibold hover:text-orange-700">
              Register your interest
              <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
            </Link>
          </div>
          <div class="rounded-2xl p-8 border border-gray-200 bg-gray-50">
            <h3 class="text-xl font-bold text-gray-900 mb-2">If you are an employer</h3>
            <p class="text-gray-600 mb-6">Read the Integration Partnership, then send a pilot enquiry. We will contact you within five working days. No purchase commitment at this stage.</p>
            <Link href="/for-employers" class="inline-flex items-center text-orange-600 font-semibold hover:text-orange-700">
              Request a pilot discussion
              <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
            </Link>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="py-24 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-4">
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">What people say about working with Faith</h2>
        </div>
        <p class="text-center text-sm text-gray-500 mb-16 max-w-2xl mx-auto">
          Feedback from Faith's earlier one-to-one coaching and career sessions. The six-month programmes above are newly introduced.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div v-for="t in testimonials" :key="t.name" class="bg-white rounded-2xl p-8 border border-gray-100">
            <div class="flex items-center mb-6">
              <div class="w-14 h-14 bg-orange-100 rounded-full flex items-center justify-center mr-4">
                <span class="text-xl font-bold text-orange-700">{{ t.name.charAt(0) }}</span>
              </div>
              <div>
                <h4 class="font-bold text-gray-900">{{ t.name }}</h4>
                <div class="flex text-yellow-400 text-sm">★★★★★</div>
              </div>
            </div>
            <p class="text-gray-700 italic">"{{ t.quote }}"</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Faith intro -->
    <section class="py-24 bg-white">
      <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-10 items-center">
          <div class="md:col-span-2">
            <div class="rounded-3xl overflow-hidden shadow-xl aspect-[4/5]">
              <img src="/images/IMG_2898.jpg" alt="Faith Adebimpe" class="w-full h-full object-cover" style="object-position: center 20%;" />
            </div>
          </div>
          <div class="md:col-span-3">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Led by Faith Adebimpe</h2>
            <p class="text-lg text-gray-600 mb-4">
              Pharmacist Evolve supports internationally trained pharmacists as they navigate the transition into UK practice, and works with employers on integration and professional development.
            </p>
            <p class="text-gray-600 mb-6">
              Faith leads the programmes and oversees their quality. Any additional mentors or contributors are named only once their involvement is confirmed.
            </p>
            <Link href="/about" class="inline-flex items-center text-orange-600 font-semibold hover:text-orange-700">
              More about Faith and Pharmacist Evolve
              <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
            </Link>
          </div>
        </div>
      </div>
    </section>

    <!-- Events / community -->
    <section class="py-20 bg-gradient-to-r from-orange-600 to-amber-600">
      <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">Events and community</h2>
        <p class="text-lg text-orange-50 mb-8 max-w-2xl mx-auto">
          Pharmacist Evolve runs events that bring internationally trained pharmacists together. See what is coming up.
        </p>
        <Link href="/events" class="inline-flex items-center justify-center px-8 py-4 bg-white text-orange-600 font-bold rounded-xl hover:bg-gray-50 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl">
          View events
          <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
        </Link>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import Logo from '@/Components/Logo.vue'

defineOptions({ layout: null })

const challenges = [
  { title: 'Workplace expectations', detail: 'Understand how UK pharmacy teams work and what is expected of you day to day.', icon: 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z' },
  { title: 'Communicating with confidence', detail: 'Practise the conversations that come up at work, and how to ask for help.', icon: 'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z' },
  { title: 'Raising concerns', detail: 'Know how to recognise issues, document them and find appropriate support.', icon: 'M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z' },
  { title: 'Professional development', detail: 'Build a development plan and a way to reflect on your progress.', icon: 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C20.832 18.477 19.246 18 17.5 18c-1.746 0-3.332.477-4.5 1.253' },
  { title: 'Your next career step', detail: 'Prepare applications, interviews and the career conversations ahead.', icon: 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6' },
  { title: 'A plan that is yours', detail: 'Leave with a personal transition plan and practical next steps.', icon: 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4' },
]

const testimonials = [
  { name: 'Chioma', quote: 'Faith has been a trailblazer in providing guidance for immigrants pursuing a career path, ever since I first came across her YouTube channel. I am thrilled that she now offers structured support specifically for migrating pharmacists.' },
  { name: 'Ameeta Carmels', quote: 'I had a video session with Faith and it was very useful. I gained ideas, career advice and future plans. The discussion was amazing and she maintains an impressive platform to help people build better careers.' },
  { name: 'Charity Chinaka', quote: 'The conversation was very detailed and helpful. Thank you so much Pharmacist Faith for every bit of information I received.' },
]
</script>
