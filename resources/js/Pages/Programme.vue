<template>
  <AppLayout>
    <!-- Hero -->
    <section class="relative bg-gradient-to-br from-gray-900 via-slate-900 to-gray-900 overflow-hidden">
      <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(ellipse_at_top_left,_rgba(249,115,22,0.15),_transparent_50%)]"></div>
        <div class="absolute top-0 right-0 w-full h-full bg-[radial-gradient(ellipse_at_bottom_right,_rgba(59,130,246,0.1),_transparent_50%)]"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 60px 60px;"></div>
      </div>

      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32 text-center">
        <span class="inline-block text-orange-400 font-semibold text-sm uppercase tracking-widest mb-4">Catalyst Conference 2026</span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6">
          Programme
        </h1>
        <p class="text-lg sm:text-xl text-gray-300 max-w-2xl mx-auto mb-8">
          A full day of conversations, panels, breakouts and reflection. From framing the reality in the morning to surfacing the pathway in the afternoon.
        </p>
        <div class="flex flex-wrap items-center justify-center gap-4 text-sm text-gray-400">
          <span class="inline-flex items-center gap-2 bg-white/5 px-4 py-2 rounded-full border border-white/10">
            <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            23rd May 2026
          </span>
          <span class="inline-flex items-center gap-2 bg-white/5 px-4 py-2 rounded-full border border-white/10">
            <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            09:00 to 17:00
          </span>
          <span class="inline-flex items-center gap-2 bg-white/5 px-4 py-2 rounded-full border border-white/10">
            <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            Warwick, UK
          </span>
        </div>
      </div>
    </section>

    <!-- Agenda -->
    <section class="py-16 sm:py-24 bg-gradient-to-b from-gray-50 to-white">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <ol class="space-y-4">
          <li
            v-for="(slot, i) in programmeSlots"
            :key="i"
            class="bg-white rounded-2xl p-5 sm:p-6 shadow-sm border border-gray-100 grid md:grid-cols-[140px_1fr] gap-3 md:gap-8"
          >
            <div class="font-mono text-sm text-orange-600 font-medium pt-1 whitespace-nowrap">{{ slot.time }}</div>
            <div>
              <h3 class="text-lg sm:text-xl font-bold text-gray-900 leading-snug">{{ slot.title }}</h3>
              <div v-if="slot.subtitle" class="text-sm italic text-gray-600 mt-1">{{ slot.subtitle }}</div>
              <div v-if="slot.speaker" class="text-sm text-gray-800 mt-3 leading-relaxed">
                <span class="font-mono text-[10px] uppercase tracking-widest text-orange-600 mr-2">Speaker</span>{{ slot.speaker }}
              </div>
              <div v-if="slot.panelists" class="mt-3">
                <span class="font-mono text-[10px] uppercase tracking-widest text-orange-600">Panel</span>
                <ul class="mt-2 space-y-1.5">
                  <li
                    v-for="(p, j) in slot.panelists"
                    :key="j"
                    class="text-sm text-gray-800 pl-4 relative before:content-[''] before:absolute before:left-0 before:top-2.5 before:w-2 before:h-px before:bg-orange-500"
                  >{{ p }}</li>
                </ul>
                <div v-if="slot.moderator" class="mt-2 text-sm text-gray-800">
                  <span class="font-mono text-[10px] uppercase tracking-widest text-orange-600 mr-2">Moderator</span>{{ slot.moderator }}
                </div>
              </div>
              <p v-if="slot.description" class="text-sm text-gray-600 mt-3 leading-relaxed max-w-2xl">{{ slot.description }}</p>
              <ul v-if="slot.outputs" class="mt-3 flex flex-wrap gap-2">
                <li
                  v-for="(o, k) in slot.outputs"
                  :key="k"
                  class="font-mono text-[10px] uppercase tracking-widest px-2.5 py-1 border border-gray-200 rounded-full text-gray-700 bg-gray-50"
                >{{ o }}</li>
              </ul>
              <p v-if="slot.note" class="text-xs italic text-gray-500 mt-3">{{ slot.note }}</p>
            </div>
          </li>
        </ol>

        <!-- CTA -->
        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center mt-12 px-4 sm:px-0">
          <a
            href="https://www.eventbrite.co.uk/e/pharmacist-evolve-the-catalyst-conference-2026-tickets-1983275923676?aff=oddtdtcreator" target="_blank"
            class="group inline-flex items-center justify-center px-6 sm:px-10 py-3.5 sm:py-4 bg-gradient-to-r from-orange-500 to-amber-500 text-white font-bold rounded-xl hover:from-orange-600 hover:to-amber-600 transform hover:scale-105 transition-all duration-300 shadow-lg shadow-orange-500/25 text-base sm:text-lg"
          >
            Get a Delegate Pass
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>
          <Link
            href="/conference"
            class="group inline-flex items-center justify-center px-6 sm:px-10 py-3.5 sm:py-4 bg-gray-100 text-gray-700 font-bold rounded-xl hover:bg-gray-200 transition-all duration-300 text-base sm:text-lg"
          >
            Back to Conference
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

const programmeSlots = [
  { time: '09:00–10:00', title: 'Arrival, registration & table orientation' },
  { time: '10:00–10:15', title: 'Welcome & framing the day', speaker: 'Faith Adebimpe, Founder, Pharmacist Evolve' },
  { time: '10:20–10:40', title: 'GPhC representation' },
  {
    time: '10:40–11:20',
    title: 'Panel 1: What are we actually asking overseas pharmacists to do?',
    subtitle: 'Lived experience meets the system.',
    panelists: [
      'Bisola Sonoiki, Clinical Portfolio Pharmacist, SW IPP Co-Chair',
      'Ahmed Abdeldayem, Rotational Hospital Pharmacist (OSPAP)',
      'Sobha Sharma Kandel, Pharmacy Director',
      'Gift Chukwuma, Community Pharmacist (OSPAP)',
    ],
    moderator: 'Faith Adebimpe',
  },
  { time: '11:20–11:35', title: 'Break', note: 'Interested overseas pharmacists move to the CPPE breakout session.' },
  {
    time: '11:35–12:10',
    title: 'Table breakouts: diagnosing the problem',
    description: 'Each table is assigned a lens. Describe the problem as it exists, no solutions.',
    outputs: ['Symptoms', 'Root causes', 'Who is most impacted'],
  },
  { time: '12:10–13:10', title: 'Lunch & networking · Exhibition' },
  {
    time: '13:15–13:35',
    title: 'Keynote 2: Workforce risk & system impact',
    subtitle: 'Integration as a safety, retention, and system issue.',
    speaker: 'Trevor Gore, Founder, Maestro Consulting; Advisory Council, Institute for Collaborative Working',
  },
  {
    time: '13:40–14:20',
    title: 'Panel 2: If we accept the problem, what must change?',
    panelists: [
      'Tase Oputu, President, Royal College of Pharmacy',
      'Jawn Jiang, Director, GM Graham Pharmacies; Pharmacist Independent Prescriber',
      'Nirusha Govender, Strategic Pharmacy & Health Systems Leader, FRCPharm',
      'Nicola Stockmann, Pharmacy Operations Manager, Past-President, APTUK',
    ],
    moderator: 'Angela Chiweshe',
    note: 'Final 5–7 minutes, table task: "If nothing changes, what happens in 5 years?"',
  },
  { time: '14:30–14:45', title: 'Break' },
  {
    time: '14:45–15:10',
    title: 'Pathway reveal: a provocation',
    speaker: 'Faith Adebimpe, Founder, Pharmacist Evolve',
    description: 'Introducing The Pharmacist Evolve Workforce Integration Pathway v0.1. Framed as a hypothesis, not a solution. An invitation to challenge.',
  },
  {
    time: '15:10–15:35',
    title: 'Table clinics: test the pathway',
    description: 'Each table is assigned a stage of the pathway.',
    outputs: ['Keep', 'Change', 'Risk', 'Opportunity'],
  },
  {
    time: '15:35–15:45',
    title: 'Collective reflection',
    description: 'Each table shares one hard truth and one condition for success. Faith synthesises.',
  },
  {
    time: '15:45–16:00',
    title: 'Final keynote: workforce ally perspective',
    speaker: 'Nicola Stockmann, Pharmacy Operations Manager, Past-President, APTUK',
  },
  {
    time: '16:00–16:10',
    title: 'Closing: what happens next',
    speaker: 'Faith Adebimpe, Founder, Pharmacist Evolve',
    description: 'What changed today. What happens next: pilots, advisory, report. An invitation to collaborate.',
  },
  { time: '16:10–17:00', title: 'Networking' },
]
</script>
