<template>
  <AppLayout>
    <Head title="OSPAP Networking & Awards Dinner" />

    <!-- Hero -->
    <section class="relative overflow-hidden bg-gradient-to-br from-slate-900 via-slate-900 to-gray-900">
      <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 left-10 w-80 h-80 bg-[#D4A853] rounded-full opacity-10 blur-3xl"></div>
        <div class="absolute bottom-0 right-10 w-96 h-96 bg-orange-500 rounded-full opacity-10 blur-3xl"></div>
      </div>

      <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-16">
        <span class="inline-flex items-center px-4 py-1.5 rounded-full bg-[#D4A853]/15 border border-[#D4A853]/30 text-[#D4A853] text-sm font-medium mb-6">
          Pharmacist Evolve presents
        </span>
        <h1 class="font-serif text-4xl sm:text-5xl lg:text-7xl text-white mb-5 leading-[1.05]">
          OSPAP Networking <span class="text-[#D4A853]">&amp; Awards Dinner</span>
        </h1>
        <p class="text-lg sm:text-xl text-gray-300 mb-4 max-w-3xl leading-relaxed">
          Celebrating achievement, building connections and recognising the contribution of internationally trained pharmacists to UK pharmacy.
        </p>
        <p class="text-base text-gray-400 mb-8 max-w-3xl leading-relaxed">
          Join OSPAP students, foundation trainees, registered pharmacists, employers and pharmacy leaders for an evening of networking and celebration.
        </p>

        <!-- Essentials -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3 mb-10">
          <div v-for="item in essentials" :key="item.label" class="rounded-2xl bg-white/5 border border-white/10 px-4 py-4">
            <div class="flex items-center gap-2 text-[#D4A853] mb-1.5">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="item.icon" />
              </svg>
              <span class="text-[11px] font-semibold uppercase tracking-wider">{{ item.label }}</span>
            </div>
            <p class="text-white font-semibold text-sm leading-snug">{{ item.value }}</p>
          </div>
        </div>

        <div class="flex flex-col sm:flex-row gap-4">
          <a :href="links.book" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-8 py-4 bg-[#D4A853] text-slate-900 font-bold rounded-xl hover:bg-[#e0bb6a] transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl">
            Book your place
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </a>
          <a :href="links.nominate" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white/25 text-white font-semibold rounded-xl hover:border-[#D4A853] hover:text-[#D4A853] transition-colors">
            Nominate for an award
          </a>
        </div>
      </div>
    </section>

    <!-- What the evening is about -->
    <section class="py-16 bg-white">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-serif text-3xl sm:text-4xl text-gray-900 mb-6">What the evening is about</h2>
        <p class="text-lg text-gray-600 leading-relaxed">
          The journey from overseas qualification to practising in the UK takes commitment, resilience and support. This evening brings our community together to celebrate that journey, recognise outstanding contributions and build connections across the profession.
        </p>
      </div>
    </section>

    <!-- Who should attend + What to expect -->
    <section class="py-16 bg-gray-50">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100">
          <h2 class="text-2xl font-bold text-gray-900 mb-6">Who should attend</h2>
          <ul class="space-y-4">
            <li v-for="item in attendees" :key="item" class="flex items-start">
              <svg class="w-6 h-6 text-orange-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span class="text-gray-700">{{ item }}</span>
            </li>
          </ul>
        </div>

        <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100">
          <h2 class="text-2xl font-bold text-gray-900 mb-6">What guests can expect</h2>
          <ul class="space-y-4">
            <li v-for="item in expectations" :key="item" class="flex items-start">
              <svg class="w-6 h-6 text-[#D4A853] mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span class="text-gray-700">{{ item }}</span>
            </li>
          </ul>
          <p class="mt-6 text-sm text-gray-500 border-t border-gray-100 pt-4">
            <span class="font-semibold text-gray-700">Your ticket includes:</span> meal, drinks, entertainment, goodie bags and all other benefits.
          </p>
        </div>
      </div>
    </section>

    <!-- The awards -->
    <section id="awards" class="py-16 bg-white scroll-mt-20">
      <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-4">
          <h2 class="font-serif text-3xl sm:text-4xl text-gray-900 mb-3">The awards</h2>
          <p class="text-gray-600 max-w-2xl mx-auto">Recognising achievement across the OSPAP journey. Tap any award to see who is eligible, how it is judged and what evidence is needed.</p>
        </div>

        <!-- Key dates -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 my-8">
          <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-5 border border-orange-100 text-center">
            <p class="text-xs font-bold uppercase tracking-wide text-orange-700 mb-1">Achievement period</p>
            <p class="text-gray-900 font-semibold">1 Nov 2025 &ndash; 31 Oct 2026</p>
          </div>
          <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-5 border border-orange-100 text-center">
            <p class="text-xs font-bold uppercase tracking-wide text-orange-700 mb-1">Nomination deadline</p>
            <p class="text-gray-900 font-semibold">15 Nov 2026, 11:59pm UK</p>
          </div>
          <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-5 border border-orange-100 text-center">
            <p class="text-xs font-bold uppercase tracking-wide text-orange-700 mb-1">To nominate</p>
            <p class="text-gray-900 font-semibold">Free &middot; shortlisted guests attend free</p>
          </div>
        </div>

        <div class="space-y-3">
          <details v-for="(award, i) in awards" :key="i" class="group bg-gray-50 rounded-2xl border border-gray-100 overflow-hidden">
            <summary class="flex items-start justify-between cursor-pointer px-6 py-5 list-none gap-4">
              <div class="flex items-start gap-4">
                <span class="flex-shrink-0 w-9 h-9 rounded-lg bg-slate-900 text-[#D4A853] flex items-center justify-center font-bold text-sm">{{ i + 1 }}</span>
                <div>
                  <h3 class="font-bold text-gray-900 leading-snug">{{ award.name }}</h3>
                  <p class="text-sm text-gray-500 mt-0.5">{{ award.focus }}</p>
                </div>
              </div>
              <svg class="w-5 h-5 text-orange-600 flex-shrink-0 mt-1 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </summary>
            <div class="px-6 pb-6 pt-1 space-y-4 border-t border-gray-100">
              <div>
                <p class="text-xs font-bold uppercase tracking-wide text-gray-400 mb-1">Who is eligible</p>
                <p class="text-gray-700">{{ award.eligible }}</p>
              </div>
              <div>
                <p class="text-xs font-bold uppercase tracking-wide text-gray-400 mb-2">Judging criteria</p>
                <ul class="space-y-2">
                  <li v-for="c in award.criteria" :key="c" class="flex items-start text-gray-700">
                    <span class="w-1.5 h-1.5 rounded-full bg-orange-500 mt-2 mr-3 flex-shrink-0"></span>
                    {{ c }}
                  </li>
                </ul>
              </div>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                  <p class="text-xs font-bold uppercase tracking-wide text-gray-400 mb-1">Self-nominations</p>
                  <p class="text-gray-700 text-sm">{{ award.selfNom }}</p>
                </div>
                <div>
                  <p class="text-xs font-bold uppercase tracking-wide text-gray-400 mb-1">Nomination deadline</p>
                  <p class="text-gray-700 text-sm">{{ award.deadline }}</p>
                </div>
              </div>
              <div>
                <p class="text-xs font-bold uppercase tracking-wide text-gray-400 mb-1">Evidence required</p>
                <p class="text-gray-700 text-sm">{{ award.evidence }}</p>
              </div>
            </div>
          </details>
        </div>

        <div class="text-center mt-10">
          <a :href="links.nominate" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-8 py-4 bg-orange-600 text-white font-semibold rounded-xl hover:bg-orange-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl">
            Nominate yourself or someone else
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </a>
        </div>
      </div>
    </section>

    <!-- Guidance for nominations -->
    <section class="py-16 bg-gray-50">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Guidance for all nominations</h2>
        <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm">
          <ul class="space-y-3">
            <li v-for="g in guidance" :key="g" class="flex items-start text-gray-700">
              <svg class="w-5 h-5 text-orange-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>{{ g }}</span>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Tickets -->
    <section id="tickets" class="py-16 bg-white scroll-mt-20">
      <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-serif text-3xl sm:text-4xl text-gray-900 mb-2 text-center">Tickets and booking</h2>
        <p class="text-gray-500 mb-10 text-center">Secure your place for the evening.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div v-for="ticket in tickets" :key="ticket.name" class="rounded-3xl p-8 border-2 relative flex flex-col" :class="ticket.featured ? 'border-[#D4A853] bg-gradient-to-br from-amber-50 to-orange-50' : 'border-gray-200 bg-white'">
            <span v-if="ticket.featured" class="absolute -top-3 left-8 px-3 py-1 rounded-full bg-[#D4A853] text-slate-900 text-xs font-bold uppercase tracking-wide">Best value</span>
            <p class="text-sm font-bold uppercase tracking-wide text-gray-500 mb-3">{{ ticket.name }}</p>
            <p class="text-4xl font-bold text-gray-900 mb-2">{{ ticket.price }}</p>
            <p class="text-gray-600 text-sm flex-grow">{{ ticket.note }}</p>
          </div>
        </div>

        <div class="text-center mt-10">
          <a :href="links.book" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-8 py-4 bg-[#D4A853] text-slate-900 font-bold rounded-xl hover:bg-[#e0bb6a] transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl">
            Book your place
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </a>
        </div>
      </div>
    </section>

    <!-- Sponsors -->
    <section class="py-16 bg-gradient-to-r from-slate-900 to-gray-900">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-serif text-3xl sm:text-4xl text-white mb-4">Partners and sponsors</h2>
        <p class="text-lg text-gray-300 mb-8 max-w-2xl mx-auto">
          Interested in supporting the evening? Explore sponsorship, award sponsorship and opportunities to introduce your organisation to our community.
        </p>
        <a :href="links.sponsor" class="inline-flex items-center justify-center px-8 py-4 border-2 border-[#D4A853] text-[#D4A853] font-semibold rounded-xl hover:bg-[#D4A853] hover:text-slate-900 transition-colors">
          Enquire about sponsorship
          <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
          </svg>
        </a>
      </div>
    </section>

    <!-- Venue, travel and accommodation -->
    <section class="py-16 bg-white">
      <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-serif text-3xl sm:text-4xl text-gray-900 mb-8">Venue, travel and accommodation</h2>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
          <!-- Venue card -->
          <div class="bg-gradient-to-br from-slate-900 to-gray-900 rounded-3xl p-8 text-white">
            <p class="text-[#D4A853] text-xs font-bold uppercase tracking-wider mb-2">The venue</p>
            <h3 class="text-2xl font-bold mb-3">Hyatt Regency Birmingham</h3>
            <p class="text-gray-300 leading-relaxed mb-1">2 Bridge Street</p>
            <p class="text-gray-300 leading-relaxed mb-1">Birmingham, B1 2JZ</p>
            <p class="text-gray-300 leading-relaxed mb-6">United Kingdom</p>
            <a :href="links.map" target="_blank" rel="noopener noreferrer" class="inline-flex items-center text-[#D4A853] font-medium hover:text-[#e0bb6a]">
              View venue on Google Maps
              <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
            </a>
            <p class="mt-6 pt-6 border-t border-white/10 text-sm text-gray-400">
              The dinner is planned for the <span class="text-gray-200 font-medium">Sonata Suite</span>, accessed through the hotel lobby.
            </p>
          </div>

          <!-- Travel + parking -->
          <div class="space-y-6">
            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
              <h3 class="font-bold text-gray-900 mb-2">Travelling by train</h3>
              <p class="text-gray-600 text-sm leading-relaxed">
                Birmingham New Street is the recommended arrival station, about 10 minutes' walk from the hotel. Birmingham Snow Hill and Birmingham Moor Street are also city-centre alternatives. Taxis are available for the onward journey.
              </p>
            </div>
            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
              <h3 class="font-bold text-gray-900 mb-2">Parking</h3>
              <p class="text-gray-600 text-sm leading-relaxed">
                Limited parking is available at the hotel; availability and booking will be confirmed nearer the date. Nearby paid alternatives include Q-Park Mailbox and Q-Park Brindleyplace. Parking charges are not included in your ticket.
              </p>
            </div>
          </div>
        </div>

        <!-- Accessibility + overnight -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
          <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
            <h3 class="font-bold text-gray-900 mb-2">Accessibility</h3>
            <p class="text-gray-600 text-sm leading-relaxed mb-3">
              Guests requiring step-free access, accessible toilet facilities, suitable seating or assistance on arrival should contact the hotel before travelling so arrangements can be confirmed. Accessible bedrooms are available subject to availability; please confirm your requirements directly with the hotel in writing when booking.
            </p>
            <p class="text-gray-600 text-sm leading-relaxed">
              Call Hyatt Regency Birmingham on <a href="tel:+441216431234" class="text-orange-600 font-medium hover:text-orange-700">0121 643 1234</a> and mention the Pharmacist Evolve Networking and Awards Dinner on 30 January 2027. Please also tell the Pharmacist Evolve team about any arrangements needed when booking your ticket.
            </p>
          </div>
          <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
            <h3 class="font-bold text-gray-900 mb-2">Staying overnight</h3>
            <p class="text-gray-600 text-sm leading-relaxed mb-3">
              Guests can book accommodation at Hyatt Regency Birmingham to stay at the event venue. A dedicated event booking rate is not yet confirmed; any agreed rate and instructions will be shared here once available. Accommodation is booked and paid for separately from dinner tickets.
            </p>
            <p class="text-gray-600 text-sm leading-relaxed">
              Other nearby options include <span class="font-medium text-gray-700">Premier Inn Birmingham City Centre (Bridge Street)</span>, 20 Bridge Street, B1 2JR, and <span class="font-medium text-gray-700">Hilton Garden Inn Birmingham Brindleyplace</span>, 1 Brunswick Square, B1 2HW. Please check rates, availability and cancellation terms directly with your chosen hotel.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="py-16 bg-gray-50">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-serif text-3xl sm:text-4xl text-gray-900 mb-8 text-center">Frequently asked questions</h2>
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

    <!-- Final invitation -->
    <section class="py-20 bg-gradient-to-br from-slate-900 via-slate-900 to-gray-900 relative overflow-hidden">
      <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 right-20 w-72 h-72 bg-[#D4A853] rounded-full opacity-10 blur-3xl"></div>
      </div>
      <div class="relative max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-serif text-3xl sm:text-5xl text-white mb-4">We would love to see you there</h2>
        <p class="text-lg text-gray-300 mb-2">Saturday, 30 January 2027 &middot; 5pm to 10pm</p>
        <p class="text-gray-400 mb-8">Hyatt Regency Birmingham &middot; Black Tie Formal</p>
        <a :href="links.book" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-10 py-4 bg-[#D4A853] text-slate-900 font-bold rounded-xl hover:bg-[#e0bb6a] transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl">
          Book your place
          <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </a>
        <p class="mt-10 text-sm text-gray-400">
          Questions? Contact
          <a href="mailto:gloria.nd@pharmacistevolve.com" class="text-[#D4A853] hover:text-[#e0bb6a] font-medium">Gloria</a>
          or
          <a href="mailto:faithadebimpe@pharmacistevolve.com" class="text-[#D4A853] hover:text-[#e0bb6a] font-medium">Faith</a>.
        </p>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'

defineOptions({ layout: null })

const links = {
  book: 'https://www.eventbrite.co.uk/e/ospap-pharmacists-networking-awards-dinner-by-pharmacistevolve-tickets-1995464109869?aff=oddtdtcreator',
  nominate: 'https://docs.google.com/forms/d/e/1FAIpQLSd0MYrpChE2W-YSwi_XphZd_1mf0syFCPciyKrFtarN3nLixA/viewform',
  sponsor: 'mailto:faithadebimpe@pharmacistevolve.com?subject=Sponsorship enquiry - OSPAP Networking & Awards Dinner',
  map: 'https://www.google.com/maps/search/?api=1&query=Hyatt%20Regency%20Birmingham%202%20Bridge%20Street%20B1%202JZ',
}

const essentials = [
  { label: 'Date', value: 'Sat 30 January 2027', icon: 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z' },
  { label: 'Venue', value: 'Hyatt Regency, Birmingham', icon: 'M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z' },
  { label: 'Time', value: '5:00pm to 10:00pm', icon: 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z' },
  { label: 'Dress code', value: 'Black Tie Formal', icon: 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z' },
  { label: 'Tickets', value: 'From £35 to £70', icon: 'M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z' },
]

const attendees = [
  'Current and prospective OSPAP students.',
  'Foundation trainee pharmacists.',
  'OSPAP graduates and registered pharmacists at every career stage.',
  'Pharmacy employers, educators, mentors and industry partners.',
  'Friends, family and supporters.',
]

const expectations = [
  'A welcome reception and time to meet other guests.',
  'A seated dinner.',
  'Contributions from invited speakers or special guests.',
  'The awards ceremony.',
  'Further networking and entertainment.',
]

const awards = [
  {
    name: 'OSPAP Pharmacist of the Year Award',
    focus: 'Outstanding overall contribution to pharmacy practice, patient care and the profession.',
    eligible: 'GPhC-registered pharmacists who qualified through the OSPAP route and practised in the UK during the achievement period.',
    criteria: [
      'Excellence in professional practice and patient care.',
      'Meaningful contributions to their team, organisation or the wider profession.',
      'Initiative, professionalism and commitment to continued development.',
      'Positive impact as a role model for the OSPAP community.',
    ],
    selfNom: 'Accepted. Nominations by colleagues, managers, mentors or others familiar with the nominee’s work are also welcome.',
    evidence: 'A supporting statement of max 500 words. Shortlisted nominees will be asked to provide one professional testimonial and up to three supporting items demonstrating impact, such as feedback, project outcomes, service improvements or professional recognition.',
    deadline: '15 November 2026.',
  },
  {
    name: 'Emerging Leader Award',
    focus: 'Initiative, positive influence and leadership potential.',
    eligible: 'OSPAP students, foundation trainees and OSPAP-qualified pharmacists within their first five years of GPhC registration who demonstrated leadership during the achievement period. A formal leadership title is not required.',
    criteria: [
      'Taking initiative to address a challenge or create an opportunity.',
      'Inspiring, supporting or developing others.',
      'Bringing people together and translating ideas into action.',
      'Evidence of positive impact and potential for further leadership.',
    ],
    selfNom: 'Accepted, alongside nominations from others familiar with the nominee’s contribution.',
    evidence: 'A supporting statement of up to 500 words describing a specific leadership example. Shortlisted nominees will be asked to provide one testimonial and up to three supporting items showing the nominee’s contribution and results.',
    deadline: '15 November 2026.',
  },
  {
    name: 'Community Impact Award',
    focus: 'Meaningful contributions to a UK community during the achievement period.',
    eligible: 'Individuals or teams led by, or including, an OSPAP student, foundation trainee or OSPAP-qualified pharmacist who made a meaningful contribution to a UK community during the achievement period. Contributions may be paid or voluntary.',
    criteria: [
      'Responding to an identifiable community need.',
      'Improving health awareness, access to support, inclusion or wellbeing.',
      'Meaningful engagement with the community served.',
      'Evidence of benefit and potential for lasting impact.',
    ],
    selfNom: 'Accepted, including submissions by a team representative.',
    evidence: 'A supporting statement of max 500 words. Shortlisted nominees will be asked to provide feedback from a community member or partner organisation, and up to three supporting items such as participation figures, outcomes, campaign materials or feedback summaries.',
    deadline: '15 November 2026.',
  },
  {
    name: 'OSPAP Employer of the Year Award',
    focus: 'An employer showing strong support, development and inclusion of OSPAP pharmacists or trainees.',
    eligible: 'UK pharmacy employers or individual workplaces that employed or hosted OSPAP students, foundation trainees or OSPAP-qualified pharmacists during the achievement period. Employers of any size and across all pharmacy sectors may enter.',
    criteria: [
      'Structured induction and support for transition into UK practice.',
      'Accessible supervision, mentorship and professional development.',
      'Fair, inclusive working practices and a supportive workplace culture.',
      'Evidence of employee or trainee progression, wellbeing and positive experience.',
    ],
    selfNom: 'Accepted from employers. Employees, trainees and other professionals may also nominate an employer.',
    evidence: 'A supporting statement of max 500 words. Shortlisted nominees will be asked to provide at least one testimonial from an OSPAP-route employee or trainee, and up to three supporting items such as induction plans, development programmes, anonymised feedback or progression outcomes. Employer-submitted entries must include employee or trainee evidence.',
    deadline: '15 November 2026.',
  },
  {
    name: 'OSPAP Entrepreneur of the Year Award',
    focus: 'Enterprise and innovation through a pharmacy or healthcare business or initiative.',
    eligible: 'OSPAP students, foundation trainees or OSPAP-qualified pharmacists who founded or co-founded an active business or social enterprise, in any sector, demonstrating progress during the achievement period. An idea alone is not sufficient.',
    criteria: [
      'A clear understanding of the problem or customer need being addressed.',
      'Initiative, creativity and effective execution.',
      'Demonstrable business progress or social impact.',
      'A credible approach to sustainability and responsible business practice.',
    ],
    selfNom: 'Accepted, alongside nominations from clients, colleagues, partners or others familiar with the business.',
    evidence: 'A supporting statement of max 500 words. Shortlisted nominees will be asked to provide confirmation of the nominee’s founder or co-founder role, and up to three supporting items showing progress, for example customer feedback, trading activity, partnerships, user growth or social outcomes. Confidential financial information is not mandatory.',
    deadline: '15 November 2026.',
  },
  {
    name: 'OSPAP Foundation Trainee of the Year Award',
    focus: 'Outstanding development, professionalism and contribution during foundation training.',
    eligible: 'Individuals who completed OSPAP and undertook UK foundation pharmacist training at any point during the achievement period, including those who have since registered as pharmacists.',
    criteria: [
      'Commitment to learning and applying knowledge in practice.',
      'Professionalism, teamwork and patient-centred care.',
      'Initiative and constructive use of feedback.',
      'Positive contributions to their training environment or patient services.',
    ],
    selfNom: 'Accepted. Nominations from supervisors, colleagues and mentors are also welcome.',
    evidence: 'A supporting statement of max 500 words. Shortlisted nominees will be asked to provide one testimonial from a designated supervisor or another professional who directly observed the nominee’s work, and up to three supporting items such as feedback, reflective examples or improvement projects.',
    deadline: '15 November 2026.',
  },
  {
    name: 'OSPAP Student of the Year Award',
    focus: 'Achievement, initiative and contribution during the OSPAP course.',
    eligible: 'Individuals enrolled on a GPhC-accredited OSPAP programme at any point during the achievement period, including those who have since completed the programme or entered foundation training.',
    criteria: [
      'Commitment to learning and professional development.',
      'Applying learning and responding constructively to feedback.',
      'Supporting peers and contributing to university or student life.',
      'Initiative, professionalism and readiness for the next stage of UK practice.',
    ],
    selfNom: 'Accepted. Nominations from lecturers, tutors, peers or mentors are also welcome.',
    evidence: 'A supporting statement of max 500 words. Shortlisted nominees will be asked to provide one testimonial from a lecturer, tutor or placement supervisor, and up to three supporting items demonstrating achievement or contribution. Academic grades may support an entry but are not compulsory.',
    deadline: '15 November 2026.',
  },
  {
    name: 'OSPAP Educator and Mentor of the Year Award',
    focus: 'Outstanding contribution to developing OSPAP learners through teaching, supervision or mentorship.',
    eligible: 'Lecturers, teacher practitioners, foundation supervisors, practice educators, coaches and formal or informal mentors who supported OSPAP students, foundation trainees or OSPAP-qualified pharmacists during the achievement period. Nominees do not need to have qualified through OSPAP themselves.',
    criteria: [
      'Teaching, supervision or mentorship responsive to learners’ needs.',
      'Understanding and addressing challenges associated with entering UK practice.',
      'Creating an inclusive environment that builds confidence and professional capability.',
      'Evidence of positive effects on learners’ development, progression or practice.',
    ],
    selfNom: 'Accepted. Nominations from students, trainees, mentees and colleagues are particularly encouraged.',
    evidence: 'A supporting statement of up to 500 words. Shortlisted nominees will be asked to provide at least one testimonial from someone directly taught, supervised or mentored by the nominee, and up to three supporting items such as learner feedback, teaching resources or development outcomes.',
    deadline: '15 November 2026.',
  },
]

const guidance = [
  'Explain what the nominee personally contributed and what changed as a result. Specific examples carry more weight than general praise.',
  'Obtain the nominee’s consent before submitting their nomination, and permission to share any testimonials.',
  'Remove patient-identifiable information and confidential information from all evidence.',
  'Previous achievements may provide context, but judging will focus on the stated achievement period.',
  'Individuals may enter more than one category where eligible, but each submission must address that category’s criteria.',
  'Entries will be assessed on the quality and impact of the contribution, taking account of the nominee’s career stage and available resources.',
]

const tickets = [
  { name: 'Student / Foundation trainee', price: '£35', note: 'A student ID or proof of trainee registration will be required on the day.', featured: false },
  { name: 'Early booking rate', price: '£50', note: 'Reduced rate; closes 15 November 2026. Book early to save.', featured: true },
  { name: 'Individual ticket', price: '£70', note: 'Standard individual admission to the dinner and awards ceremony.', featured: false },
]

const faqs = [
  { q: 'Can I attend if I am not nominated for an award?', a: 'Absolutely. You do not need to be an award nominee to attend. Purchase your ticket using the booking link above and join us for an evening of celebration and connection.' },
  { q: 'Can I come alone?', a: 'Yes. Whether you come alone or with others, there will be opportunities to meet fellow guests, make connections and grow your network.' },
  { q: 'Can I bring a partner, friend or family member?', a: 'Yes, partners, friends and family members are welcome to celebrate with us. Each guest will need their own ticket.' },
  { q: 'Is the event open to pharmacists who did not take the OSPAP route?', a: 'Yes. Pharmacists from all training backgrounds are welcome to join us in celebrating the OSPAP community.' },
  { q: 'What is the dress code?', a: 'Black tie or formal evening wear. Dress for a special evening of celebration.' },
  { q: 'Can you accommodate dietary requirements?', a: 'Yes. Please let us know about any dietary requirements or food allergies at least two weeks before the event so we can discuss suitable arrangements with the venue.' },
  { q: 'Can I request to sit with someone?', a: 'Seating is available on a first-come, first-served basis. We recommend arriving together if you would like to sit with someone, although we cannot guarantee seats together.' },
  { q: 'Can I transfer my ticket or receive a refund?', a: 'Please contact the Pharmacist Evolve team to discuss ticket transfers or refund requests.' },
  { q: 'Will photographs and videos be taken?', a: 'Yes, official photography and filming will take place during the evening. Please speak to the event team on arrival if you would prefer not to be photographed or filmed.' },
  { q: 'I booked for the original October date. Is my ticket still valid?', a: 'Yes. Your original ticket remains valid for the rescheduled dinner on 30 January 2027. You do not need to purchase another ticket.' },
]
</script>
