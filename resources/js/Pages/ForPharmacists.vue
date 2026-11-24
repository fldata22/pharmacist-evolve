<template>
  <AppLayout>
    <Head :title="`For Pharmacists | ${programme.name}`" />

    <!-- Hero -->
    <section class="relative bg-gradient-to-br from-slate-50 via-orange-50 to-amber-50 overflow-hidden">
      <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-10 left-10 w-72 h-72 bg-orange-200 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-amber-200 rounded-full opacity-20 blur-3xl"></div>
      </div>

      <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-14">
        <span class="inline-flex items-center px-4 py-1.5 rounded-full bg-orange-100 text-orange-800 text-sm font-medium mb-6">
          For Pharmacists
        </span>
        <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
          OSPAP Pharmacists <span class="text-orange-600">Coaching Program</span>
        </h1>
        <p class="text-xl text-gray-600 mb-6 max-w-3xl leading-relaxed">
          Build a practical plan for your transition into UK working life, with six weeks of structured small-group coaching, live group sessions and time for your individual development plan, tailored to internationally trained pharmacists.
        </p>

        <!-- Partnership -->
        <p class="text-gray-700 mb-8 max-w-3xl">
          A partnership between{{ " " }}
          <template v-for="(partner, i) in partnership" :key="partner.name"><template v-if="i > 0">{{ ' and ' }}</template><span class="font-semibold text-gray-900">{{ partner.name }}</span>{{ ` (${partner.org})` }}</template>.
        </p>

        <!-- At a glance -->
        <div class="flex flex-wrap gap-3 mb-8">
          <span v-for="item in atAGlance" :key="item" class="inline-flex items-center px-4 py-2 rounded-xl bg-white border border-orange-100 text-gray-700 text-sm font-medium shadow-sm">
            <svg class="w-4 h-4 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            {{ item }}
          </span>
        </div>

        <div class="flex flex-col sm:flex-row gap-4">
          <a :href="programme.enrolUrl" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-8 py-4 bg-orange-600 text-white font-semibold rounded-xl hover:bg-orange-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl">
            Enrol now<template v-if="offerActive">, £{{ currentPrice() }}</template>
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </a>
          <a :href="programme.webinar.url" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-8 py-4 border-2 border-gray-300 text-gray-700 font-semibold rounded-xl hover:border-orange-600 hover:text-orange-600 transition-colors">
            Join the free webinar
          </a>
        </div>
      </div>
    </section>

    <!-- Who this is for -->
    <section class="py-16 bg-white">
      <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Who this is for</h2>
        <p class="text-lg text-gray-600 mb-4 max-w-3xl">
          This programme is for OSPAP pharmacists in years 1 to 3 after GPHC registration who need support to navigate their career journeys.
        </p>
        <p class="text-lg text-gray-600 max-w-3xl">
          It may suit you if you want help understanding workplace expectations, communicating confidently, planning your development or navigating challenges during the transition.
        </p>
      </div>
    </section>

    <!-- What you will work towards + What is included -->
    <section class="py-16 bg-gray-50">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100">
          <h2 class="text-2xl font-bold text-gray-900 mb-6">What you will work towards</h2>
          <ul class="space-y-4">
            <li v-for="item in workTowards" :key="item" class="flex items-start">
              <svg class="w-6 h-6 text-orange-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span class="text-gray-700">{{ item }}</span>
            </li>
          </ul>
        </div>

        <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100">
          <h2 class="text-2xl font-bold text-gray-900 mb-6">What is included</h2>
          <ul class="space-y-4">
            <li v-for="item in included" :key="item" class="flex items-start">
              <svg class="w-6 h-6 text-amber-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span class="text-gray-700">{{ item }}</span>
            </li>
          </ul>
          <p class="mt-6 text-sm text-gray-500 border-t border-gray-100 pt-4">
            Community support is for shared learning during the six weeks. It does not include immediate replies or unlimited private messages.
          </p>
        </div>
      </div>
    </section>

    <!-- Programme outline -->
    <section class="py-16 bg-white">
      <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Programme outline</h2>

        <div class="space-y-4">
          <div v-for="(session, i) in outline" :key="i" class="flex items-start gap-5 bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-6 border border-orange-100">
            <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-orange-600 text-white flex items-center justify-center font-bold text-lg">
              {{ i + 1 }}
            </div>
            <div>
              <h3 class="font-bold text-gray-900 mb-1">{{ session.title }}</h3>
              <p class="text-gray-600">{{ session.detail }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Meet your coaches -->
    <section id="coaches" class="py-16 bg-gray-50 scroll-mt-20">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Meet your coaches</h2>
        <p class="text-lg text-gray-600 max-w-3xl mb-10">
          The programme is delivered in partnership by Faith Adebimpe of Pharmacist Evolve and Nirusha Govender of Mediqis. Your joining information will explain who delivers each part and how to access support.
        </p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
          <article v-for="coach in coaches" :key="coach.name" class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100">
            <div class="flex flex-col sm:flex-row sm:items-center gap-6 mb-6">
              <img
                :src="coach.photo"
                :alt="coach.name"
                class="w-32 h-32 rounded-full object-cover shadow-md flex-shrink-0"
                :style="{ objectPosition: coach.photoPosition }"
                loading="lazy"
              />
              <div>
                <h3 class="text-xl font-bold text-gray-900">{{ coach.name }}</h3>
                <p class="text-orange-700 font-medium mt-1">{{ coach.role }}</p>
              </div>
            </div>
            <p v-for="(para, i) in coach.bio" :key="i" class="text-gray-600 leading-relaxed" :class="{ 'mt-4': i > 0 }">{{ para }}</p>
          </article>
        </div>
      </div>
    </section>

    <!-- Free webinar -->
    <section class="py-14 bg-white">
      <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-3xl bg-gradient-to-r from-gray-900 to-slate-800 text-white p-8 lg:p-10 flex flex-col md:flex-row md:items-center gap-6 md:justify-between">
          <div>
            <p class="text-orange-300 text-sm font-bold uppercase tracking-wide mb-2">Free webinar</p>
            <h2 class="text-2xl font-bold mb-2">{{ programme.webinar.title }}</h2>
            <p class="text-gray-300">Meet Faith and Nirusha, hear how the programme works and ask your questions before you enrol.</p>
          </div>
          <a :href="programme.webinar.url" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-6 py-3 bg-orange-600 text-white font-semibold rounded-xl hover:bg-orange-700 transition-colors flex-shrink-0">
            Sign up free on Eventbrite
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
          </a>
        </div>
      </div>
    </section>

    <!-- Pricing -->
    <section id="pricing" class="py-16 bg-gray-50 scroll-mt-20">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-2 text-center">Choose your payment option</h2>
        <p class="text-gray-500 mb-10 text-center">Both options include exactly the same support.</p>

        <div v-if="offerActive" class="mb-8 rounded-2xl bg-gray-900 text-white px-6 py-4 text-center">
          <span class="font-bold text-orange-300 uppercase tracking-wide text-sm">{{ blackFridayOffer.label }}</span>
          <span class="mx-2">&middot;</span>
          {{ blackFridayOffer.percentOff }}% off when you pay in full: £{{ blackFridayOffer.price }} instead of £{{ programme.price }}.
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div class="rounded-3xl p-8 border-2 border-orange-600 bg-gradient-to-br from-orange-50 to-amber-50 relative">
            <span class="absolute -top-3 left-8 px-3 py-1 rounded-full bg-orange-600 text-white text-xs font-bold uppercase tracking-wide">Pay in full</span>
            <p class="text-5xl font-bold text-gray-900 mb-2">
              <span v-if="offerActive" class="block text-2xl font-semibold text-gray-400 line-through mb-1">£{{ programme.price }}</span>
              £{{ currentPrice() }}
            </p>
            <p class="text-gray-600">Upfront for the full six-week programme.</p>
          </div>

          <div class="rounded-3xl p-8 border border-gray-200 bg-white">
            <span class="inline-block mb-3 px-3 py-1 rounded-full bg-gray-100 text-gray-600 text-xs font-bold uppercase tracking-wide">Spread the cost</span>
            <p class="text-5xl font-bold text-gray-900 mb-2">{{ programme.instalments.count }} &times; £{{ programme.instalments.amount }}</p>
            <p class="text-gray-600">Two monthly payments, £{{ programme.instalments.count * programme.instalments.amount }} in total. This spreads the programme fee; it is not an ongoing monthly membership.</p>
          </div>
        </div>

        <p class="mt-6 text-sm text-gray-500 text-center">
          The price shown at enrolment is the full payable amount, including any applicable tax. Participation and cancellation terms are linked at enrolment.
        </p>

        <div class="text-center mt-10">
          <a :href="programme.enrolUrl" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-8 py-4 bg-orange-600 text-white font-semibold rounded-xl hover:bg-orange-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl">
            Enrol now
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </a>
          <p class="mt-3 text-sm text-gray-500">Enrolment opens in a Google Form.</p>
        </div>
      </div>
    </section>

    <!-- Participation terms -->
    <section class="py-16 bg-white">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 text-center">
          <p class="text-3xl font-bold text-orange-600 mb-1">{{ programme.participantsPerCoach }} per coach</p>
          <p class="text-gray-600 text-sm">Small group of {{ programme.participantsPerCoach }} paying participants per coach.</p>
        </div>
        <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 text-center">
          <p class="text-3xl font-bold text-orange-600 mb-1">{{ programme.cohortStart }}</p>
          <p class="text-gray-600 text-sm">Next cohort start, to be confirmed with dates and session times.</p>
        </div>
      </div>
    </section>

    <!-- Common questions -->
    <section class="py-16 bg-gray-50">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Common questions</h2>
        <div class="space-y-3">
          <details v-for="(faq, i) in faqs" :key="i" class="group bg-white rounded-2xl border border-gray-100 overflow-hidden">
            <summary class="flex items-center justify-between cursor-pointer px-6 py-5 font-semibold text-gray-900 list-none">
              {{ faq.q }}
              <svg class="w-5 h-5 text-orange-600 flex-shrink-0 ml-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </summary>
            <p class="px-6 pb-5 text-gray-600">{{ faq.a }}</p>
          </details>
        </div>
      </div>
    </section>

    <!-- Register Interest form -->
    <section id="register" class="py-20 bg-gradient-to-br from-slate-50 via-orange-50 to-amber-50 scroll-mt-16">
      <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div v-if="$page.props.flash?.success" class="mb-8 bg-green-50 border-l-4 border-green-500 p-6 rounded-lg">
          <div class="flex items-start">
            <svg class="w-6 h-6 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div>
              <h3 class="text-green-800 font-semibold mb-1">Thank you</h3>
              <p class="text-green-700">{{ $page.props.flash.success }}</p>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-3xl shadow-xl border border-gray-100 overflow-hidden">
          <div class="bg-gradient-to-r from-orange-600 to-amber-600 px-8 py-6">
            <h2 class="text-2xl font-bold text-white mb-1">Not ready to enrol yet?</h2>
            <p class="text-orange-100 text-sm">Register your interest and we will keep you updated. This does not reserve a place or take payment. To secure a place, <a :href="programme.enrolUrl" target="_blank" rel="noopener noreferrer" class="underline font-semibold text-white">enrol here</a>.</p>
          </div>

          <form @submit.prevent="submitForm" class="p-8 space-y-6">
            <div>
              <label for="first_name" class="block text-sm font-semibold text-gray-700 mb-2">First name <span class="text-red-500">*</span></label>
              <input id="first_name" v-model="form.first_name" type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all" placeholder="Your first name" />
              <p v-if="errors.first_name" class="mt-1 text-sm text-red-600">{{ errors.first_name }}</p>
            </div>

            <div>
              <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email <span class="text-red-500">*</span></label>
              <input id="email" v-model="form.email" type="email" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all" placeholder="you@example.com" />
              <p v-if="errors.email" class="mt-1 text-sm text-red-600">{{ errors.email }}</p>
            </div>

            <div>
              <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone number <span class="text-red-500">*</span></label>
              <input id="phone" v-model="form.phone" type="tel" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all" placeholder="07123 456789" />
              <p v-if="errors.phone" class="mt-1 text-sm text-red-600">{{ errors.phone }}</p>
            </div>

            <div>
              <label for="career_stage" class="block text-sm font-semibold text-gray-700 mb-2">Current career stage <span class="text-red-500">*</span></label>
              <select id="career_stage" v-model="form.career_stage" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all">
                <option value="">Select your stage</option>
                <option v-for="stage in careerStages" :key="stage" :value="stage">{{ stage }}</option>
              </select>
              <p v-if="errors.career_stage" class="mt-1 text-sm text-red-600">{{ errors.career_stage }}</p>
            </div>

            <div>
              <label for="support_need" class="block text-sm font-semibold text-gray-700 mb-2">Your main support need <span class="text-gray-400 font-normal">(optional)</span></label>
              <textarea id="support_need" v-model="form.support_need" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all resize-none" placeholder="Tell us what would help most, if you would like to."></textarea>
              <p v-if="errors.support_need" class="mt-1 text-sm text-red-600">{{ errors.support_need }}</p>
            </div>

            <button type="submit" :disabled="processing" class="w-full px-8 py-4 bg-gradient-to-r from-orange-600 to-amber-600 text-white font-bold rounded-xl hover:from-orange-700 hover:to-amber-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl disabled:opacity-50 disabled:cursor-not-allowed disabled:transform-none">
              <span v-if="!processing">Register Interest</span>
              <span v-else class="flex items-center justify-center">
                <svg class="animate-spin h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                  <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Submitting...
              </span>
            </button>
          </form>
        </div>

        <!-- Optional suitability call, kept secondary -->
        <p class="mt-6 text-center text-sm text-gray-500">
          Prefer to talk first? A
          <a href="https://book.heygoldie.com/FaithThePharmacist" target="_blank" rel="noopener noreferrer" class="text-orange-600 font-medium hover:text-orange-700 underline">Programme Suitability Call</a>
          is a 15-minute conversation to discuss whether the programme fits your stage and needs. It is not an individual coaching session or a personalised career assessment.
        </p>
      </div>
    </section>

    <!-- Other stages -->
    <section class="py-16 bg-white">
      <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">At a different stage?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
            <h3 class="font-bold text-gray-900 mb-2">Still considering OSPAP</h3>
            <p class="text-gray-600 text-sm mb-4">We are building a resource library for pharmacists weighing up OSPAP and the route into UK practice.</p>
            <Link href="/resources" class="text-orange-600 font-medium hover:text-orange-700 text-sm inline-flex items-center">
              Explore resources
              <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
            </Link>
          </div>
          <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
            <h3 class="font-bold text-gray-900 mb-2">Already a registered pharmacist</h3>
            <p class="text-gray-600 text-sm mb-4">Contact us about your needs, or ask your employer about our employer-funded Integration Partnership.</p>
            <Link href="/for-employers" class="text-orange-600 font-medium hover:text-orange-700 text-sm inline-flex items-center">
              See employer support
              <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
            </Link>
          </div>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { ref } from 'vue'
import { Head, Link, useForm } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import { programme, blackFridayOffer, offerIsActive, currentPrice, partnership, coaches } from '@/config/programme'

defineOptions({ layout: null })

const offerActive = offerIsActive()

const atAGlance = [programme.duration, 'Online', `Small group, ${programme.participantsPerCoach} per coach`, 'Live group sessions', `Starts ${programme.cohortStart}`]

const workTowards = [
  'A personal transition plan with practical next steps.',
  'A clearer understanding of communication and expectations at work.',
  'Knowing how to raise concerns and find appropriate support.',
  'A professional development plan and a way to reflect on progress.',
  'Greater clarity about applications and your next career stage.',
]

const included = [
  'Live group sessions across the six weeks.',
  'One individual onboarding appointment of 30 minutes.',
  'One individual progress review of 30 minutes.',
  'CV optimisation tailored to your desired job.',
  'Interview preparation.',
  'Practical resources, templates and action plans.',
  'A programme community for support and shared learning during the six weeks.',
  'Questions reviewed twice weekly on the published working days.',
  'Experience a dramatic transformation that opens doors to new opportunities in your UK pharmacy career.',
]

const outline = [
  { title: 'Your transition plan', detail: 'Identify priorities and agree practical next steps.' },
  { title: 'Communication and teamwork', detail: 'Explore workplace scenarios and asking for help.' },
  { title: 'When challenges arise', detail: 'Recognise concerns, document issues and find appropriate support.' },
  { title: 'Professional development', detail: 'Plan learning, reflection and constructive feedback.' },
  { title: 'Your next career step', detail: 'Prepare applications, interviews and career conversations.' },
  { title: 'Review and future plan', detail: 'Review progress and plan continued development.' },
]

const faqs = [
  { q: 'Is this exam preparation?', a: 'No. The programme focuses on transition, working life and career development. It is not a GPhC examination preparation course.' },
  { q: 'Will you find me a job?', a: 'Employment and placement are not included or guaranteed. Career planning and application guidance form part of the programme.' },
  { q: 'Does this replace my training provider or supervisor?', a: 'No. It complements your existing training and workplace support.' },
  { q: 'Can I contact my coach privately whenever I need help?', a: 'Support is provided through scheduled appointments, group sessions and the designated community space. Private on-demand support is not included.' },
  { q: 'When does it start?', a: `The next cohort starts ${programme.cohortStart}. We will confirm the start date, session times and time zone to everyone who enrols.` },
  { q: 'What happens if I miss a session?', a: 'Sessions are recorded, and there is the opportunity to ask questions as needed.' },
]

const careerStages = [
  'Considering OSPAP',
  'Completed OSPAP, preparing for foundation training',
  'Currently in foundation training',
  'Registered pharmacist (first 1-3 years)',
  'Other',
]

const form = ref({
  first_name: '',
  email: '',
  phone: '',
  career_stage: '',
  support_need: '',
})

const processing = ref(false)
const errors = ref({})

const submitForm = () => {
  processing.value = true
  errors.value = {}

  const inertiaForm = useForm(form.value)
  inertiaForm.post('/for-pharmacists/register-interest', {
    preserveScroll: true,
    onSuccess: () => {
      form.value = { first_name: '', email: '', phone: '', career_stage: '', support_need: '' }
    },
    onError: (formErrors) => {
      errors.value = formErrors
    },
    onFinish: () => {
      processing.value = false
    },
  })
}
</script>
