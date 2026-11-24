<template>
  <AppLayout>
    <Head title="Media" />

    <section class="relative bg-gradient-to-br from-slate-50 via-orange-50 to-amber-50 overflow-hidden">
      <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-14">
        <span class="inline-flex items-center px-4 py-1.5 rounded-full bg-orange-100 text-orange-800 text-sm font-medium mb-6">
          Media
        </span>
        <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">Photos and media</h1>
        <p class="text-xl text-gray-600 max-w-3xl leading-relaxed">
          Moments from Pharmacist Evolve events and programmes.
        </p>
      </div>
    </section>

    <section class="py-16 bg-white">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
          <Link
            v-for="folder in mediaFolders"
            :key="folder.slug"
            :href="`/media/${folder.slug}`"
            class="group block rounded-3xl overflow-hidden border border-gray-100 bg-white shadow-sm hover:shadow-lg transition-shadow"
          >
            <div class="aspect-[3/2] overflow-hidden bg-gray-100">
              <img
                :src="thumbUrl(folder, folder.cover)"
                :alt="`${folder.title} cover photo`"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
              />
            </div>
            <div class="p-6">
              <div class="flex items-center gap-2 text-orange-600 text-sm font-semibold mb-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7a2 2 0 012-2h4l2 2h8a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V7z" />
                </svg>
                {{ folder.photos.length }} photos
              </div>
              <h2 class="text-xl font-bold text-gray-900 group-hover:text-orange-600 transition-colors">{{ folder.title }}</h2>
              <p class="text-gray-600 text-sm mt-1">{{ folder.description }}</p>
            </div>
          </Link>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import { mediaFolders, thumbUrl } from '@/config/media'

defineOptions({ layout: null })
</script>
