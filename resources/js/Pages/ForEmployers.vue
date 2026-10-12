<template>
  <AppLayout>
    <Head title="For Employers | Integration Partnership" />

    <!-- Hero -->
    <section class="relative bg-gradient-to-br from-gray-900 via-slate-800 to-gray-900 overflow-hidden">
      <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 right-0 w-96 h-96 bg-orange-600 rounded-full opacity-10 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-amber-500 rounded-full opacity-10 blur-3xl"></div>
      </div>

      <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-14">
        <span class="inline-flex items-center px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-orange-200 text-sm font-medium mb-6">
          For Employers
        </span>
        <h1 class="text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
          Structured integration support for internationally trained pharmacists joining your team
        </h1>
        <p class="text-xl text-gray-300 mb-8 max-w-3xl leading-relaxed">
          The Pharmacist Evolve Integration Partnership provides six months of transition and professional development support for internationally trained, newly registered pharmacists, alongside your organisation's induction and supervision.
        </p>

        <div class="flex flex-wrap gap-3 mb-8">
          <span v-for="item in atAGlance" :key="item" class="inline-flex items-center px-4 py-2 rounded-xl bg-white/5 border border-white/10 text-gray-200 text-sm font-medium">
            <svg class="w-4 h-4 mr-2 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            {{ item }}
          </span>
        </div>

        <a href="#enquire" class="inline-flex items-center justify-center px-8 py-4 bg-orange-600 text-white font-semibold rounded-xl hover:bg-orange-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl">
          Discuss a paid pilot
          <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </a>
      </div>
    </section>

    <!-- Who this is for + Why it helps -->
    <section class="py-16 bg-white">
      <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-10">
        <div>
          <h2 class="text-2xl font-bold text-gray-900 mb-4">Who this is for</h2>
          <p class="text-lg text-gray-600">
            Pharmacy employers supporting internationally trained, newly registered pharmacists as they enter UK employment. An initial conversation will establish whether the programme suits the pharmacist's needs and your organisation's arrangements.
          </p>
        </div>
        <div>
          <h2 class="text-2xl font-bold text-gray-900 mb-4">Why this support can help</h2>
          <p class="text-lg text-gray-600">
            Our programme provides a structured space to work through the transition into practice and agree practical development priorities, so newly employed international pharmacists can meet business and service needs while becoming a valued team member.
          </p>
        </div>
      </div>
    </section>

    <!-- What is included -->
    <section class="py-16 bg-gray-50">
      <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">What is included</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div v-for="item in included" :key="item" class="flex items-start bg-white rounded-2xl p-6 border border-gray-100">
            <svg class="w-6 h-6 text-orange-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <span class="text-gray-700">{{ item }}</span>
          </div>
        </div>
        <p class="mt-6 text-sm text-gray-500">
          The initial employer meeting can also serve as the commencement review. Meeting lengths and the precise scope are agreed before contracting.
        </p>
      </div>
    </section>

    <!-- Price and payment -->
    <section class="py-16 bg-white">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-3xl p-8 lg:p-10 bg-gradient-to-br from-gray-900 to-slate-800 text-white">
          <h2 class="text-2xl font-bold mb-6">Price and payment</h2>
          <div class="flex flex-col md:flex-row md:items-end gap-6 mb-6">
            <div>
              <p class="text-5xl font-bold mb-1">£2,000</p>
              <p class="text-gray-300">per pharmacist, for six months, plus VAT.</p>
            </div>
            <div class="md:border-l md:border-white/15 md:pl-6">
              <p class="text-gray-200 font-medium mb-1">Payment schedule</p>
              <p class="text-gray-300">£1,000 at commencement, followed by five monthly payments of £200.</p>
            </div>
          </div>
          <p class="text-sm text-gray-400 border-t border-white/10 pt-4">
            Any matching or recruitment arrangement is separate and must be agreed in writing.
          </p>
        </div>
      </div>
    </section>

    <!-- How it works -->
    <section class="py-16 bg-gray-50">
      <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">How it works</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
          <div v-for="(step, i) in howItWorks" :key="i" class="bg-white rounded-2xl p-6 border border-gray-100">
            <div class="w-10 h-10 rounded-xl bg-orange-600 text-white flex items-center justify-center font-bold mb-4">{{ i + 1 }}</div>
            <h3 class="font-bold text-gray-900 mb-2">{{ step.title }}</h3>
            <p class="text-gray-600 text-sm">{{ step.detail }}</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Responsibilities -->
    <section class="py-16 bg-white">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Responsibilities and confidentiality</h2>
        <div class="space-y-4 text-gray-600">
          <p>The employer remains responsible for induction, supervision, clinical governance, performance management and employment decisions. This programme complements those arrangements.</p>
          <p>Before support begins, we agree what information will be shared with the employer and explain this to the pharmacist. Individual conversations are not automatically reported in full.</p>
          <p>Faith Adebimpe leads the initial pilots and oversees quality. Recruitment, immigration advice and emergency support are not included. Employment, retention and performance outcomes are not guaranteed.</p>
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

    <!-- Enquiry form -->
    <section id="enquire" class="py-20 bg-white scroll-mt-16">
      <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div v-if="$page.props.flash?.success" class="mb-8 bg-green-50 border-l-4 border-green-500 p-6 rounded-lg">
          <div class="flex items-start">
            <svg class="w-6 h-6 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div>
              <h3 class="text-green-800 font-semibold mb-1">Enquiry received</h3>
              <p class="text-green-700">{{ $page.props.flash.success }}</p>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-3xl shadow-xl border border-gray-100 overflow-hidden">
          <div class="bg-gradient-to-r from-gray-900 to-slate-800 px-8 py-6">
            <h2 class="text-2xl font-bold text-white mb-1">Request a pilot discussion</h2>
            <p class="text-gray-300 text-sm">Submitting this form does not reserve capacity or create a purchase commitment. We will contact you within five working days.</p>
          </div>

          <form @submit.prevent="submitForm" class="p-8 space-y-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
              <div>
                <label for="contact_name" class="block text-sm font-semibold text-gray-700 mb-2">Contact name <span class="text-red-500">*</span></label>
                <input id="contact_name" v-model="form.contact_name" type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all" placeholder="Your name" />
                <p v-if="errors.contact_name" class="mt-1 text-sm text-red-600">{{ errors.contact_name }}</p>
              </div>
              <div>
                <label for="work_email" class="block text-sm font-semibold text-gray-700 mb-2">Work email <span class="text-red-500">*</span></label>
                <input id="work_email" v-model="form.work_email" type="email" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all" placeholder="you@organisation.com" />
                <p v-if="errors.work_email" class="mt-1 text-sm text-red-600">{{ errors.work_email }}</p>
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
              <div>
                <label for="organisation" class="block text-sm font-semibold text-gray-700 mb-2">Organisation <span class="text-red-500">*</span></label>
                <input id="organisation" v-model="form.organisation" type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all" placeholder="Your organisation" />
                <p v-if="errors.organisation" class="mt-1 text-sm text-red-600">{{ errors.organisation }}</p>
              </div>
              <div>
                <label for="role" class="block text-sm font-semibold text-gray-700 mb-2">Your role <span class="text-red-500">*</span></label>
                <input id="role" v-model="form.role" type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all" placeholder="e.g. Superintendent Pharmacist" />
                <p v-if="errors.role" class="mt-1 text-sm text-red-600">{{ errors.role }}</p>
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
              <div>
                <label for="number_of_pharmacists" class="block text-sm font-semibold text-gray-700 mb-2">Number of pharmacists <span class="text-red-500">*</span></label>
                <input id="number_of_pharmacists" v-model="form.number_of_pharmacists" type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all" placeholder="e.g. 1, or 2-3" />
                <p v-if="errors.number_of_pharmacists" class="mt-1 text-sm text-red-600">{{ errors.number_of_pharmacists }}</p>
              </div>
              <div>
                <label for="expected_start_month" class="block text-sm font-semibold text-gray-700 mb-2">Expected start month <span class="text-gray-400 font-normal">(optional)</span></label>
                <input id="expected_start_month" v-model="form.expected_start_month" type="text" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all" placeholder="e.g. March 2027" />
                <p v-if="errors.expected_start_month" class="mt-1 text-sm text-red-600">{{ errors.expected_start_month }}</p>
              </div>
            </div>

            <div>
              <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone <span class="text-gray-400 font-normal">(optional)</span></label>
              <input id="phone" v-model="form.phone" type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all" placeholder="+44 7700 900000" />
              <p v-if="errors.phone" class="mt-1 text-sm text-red-600">{{ errors.phone }}</p>
            </div>

            <div>
              <label for="support_need" class="block text-sm font-semibold text-gray-700 mb-2">Main support need <span class="text-red-500">*</span></label>
              <textarea id="support_need" v-model="form.support_need" rows="4" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all resize-none" placeholder="Tell us who you are onboarding and what support would help. Please do not include named staff or sensitive employee information at this stage."></textarea>
              <p v-if="errors.support_need" class="mt-1 text-sm text-red-600">{{ errors.support_need }}</p>
            </div>

            <button type="submit" :disabled="processing" class="w-full px-8 py-4 bg-orange-600 text-white font-bold rounded-xl hover:bg-orange-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl disabled:opacity-50 disabled:cursor-not-allowed disabled:transform-none">
              <span v-if="!processing">Request a pilot discussion</span>
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
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { ref } from 'vue'
import { Head, useForm } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'

defineOptions({ layout: null })

const atAGlance = ['Six months', '£2,000 per pharmacist', 'Defined support and employer reviews']

const included = [
  'An initial pharmacist needs assessment and employer expectations meeting.',
  'An individual development plan.',
  'Six monthly pharmacist check-ins of 45 minutes.',
  'Employer reviews at commencement, midpoint and completion.',
  'Relevant resources and signposting.',
  'A final summary of progress against agreed development priorities.',
]

const howItWorks = [
  { title: 'Tell us your needs', detail: 'Explain who you are onboarding and what support would help.' },
  { title: 'Discuss a pilot', detail: 'We establish suitability and agree the proposed support.' },
  { title: 'Agree the programme', detail: 'Review the proposal, price and agreement.' },
  { title: 'Begin support', detail: 'Complete onboarding and follow the agreed schedule.' },
]

const faqs = [
  { q: 'Can you support someone we have already recruited?', a: 'Yes, subject to suitability. Recruitment is not required to access this integration service.' },
  { q: 'Does the fee include recruitment?', a: 'No. Any recruitment or matching arrangement is separate and must be expressly agreed.' },
  { q: 'Can we enrol several pharmacists?', a: 'Tell us the number and timing. We will confirm available capacity and a suitable scope before agreeing places.' },
  { q: 'Can foundation trainees join this employer programme?', a: 'The starting offer is for newly registered pharmacists. Enquire about other stages so we can discuss suitability.' },
  { q: 'What results do you guarantee?', a: 'We provide the agreed support and review progress against development priorities. Employment, retention and performance outcomes are not guaranteed.' },
]

const form = ref({
  contact_name: '',
  work_email: '',
  organisation: '',
  role: '',
  number_of_pharmacists: '',
  expected_start_month: '',
  phone: '',
  support_need: '',
})

const processing = ref(false)
const errors = ref({})

const submitForm = () => {
  processing.value = true
  errors.value = {}

  const inertiaForm = useForm(form.value)
  inertiaForm.post('/for-employers/enquire', {
    preserveScroll: true,
    onSuccess: () => {
      form.value = {
        contact_name: '', work_email: '', organisation: '', role: '',
        number_of_pharmacists: '', expected_start_month: '', phone: '', support_need: '',
      }
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
