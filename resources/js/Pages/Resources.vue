<template>
  <AppLayout>
    <Head title="Resources" />

    <section class="relative bg-gradient-to-br from-slate-50 via-orange-50 to-amber-50 overflow-hidden">
      <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-10 left-10 w-72 h-72 bg-orange-200 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-amber-200 rounded-full opacity-20 blur-3xl"></div>
      </div>

      <div class="relative max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-16 text-center">
        <span class="inline-flex items-center px-4 py-1.5 rounded-full bg-orange-100 text-orange-800 text-sm font-medium mb-6">
          Coming soon
        </span>
        <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
          Resource <span class="text-orange-600">Library</span>
        </h1>
        <p class="text-xl text-gray-600 mb-10 leading-relaxed">
          We are building a library of free and paid resources for internationally trained pharmacists, including those still considering OSPAP and the route into UK practice.
        </p>

        <div class="bg-white rounded-3xl shadow-sm border border-orange-100 p-8 text-left">
          <p class="text-gray-600 mb-6">
            Want to be told when it opens? Register your interest in the Transition Programme and we will keep you updated as resources go live.
          </p>
          <div class="flex flex-col sm:flex-row gap-4">
            <Link href="/for-pharmacists" class="inline-flex items-center justify-center px-6 py-3 bg-orange-600 text-white font-semibold rounded-xl hover:bg-orange-700 transition-colors">
              For pharmacists
            </Link>
            <Link href="/contact" class="inline-flex items-center justify-center px-6 py-3 border-2 border-gray-300 text-gray-700 font-semibold rounded-xl hover:border-orange-600 hover:text-orange-600 transition-colors">
              Ask a question
            </Link>
          </div>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'

defineOptions({ layout: null })
</script>
