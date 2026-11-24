<template>
  <AppLayout>
    <Head :title="`${folder.title} | Media`" />

    <section class="bg-gradient-to-br from-slate-50 via-orange-50 to-amber-50">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-14 pb-10">
        <Link href="/media" class="inline-flex items-center text-sm font-medium text-orange-600 hover:text-orange-700 mb-6">
          <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
          All media
        </Link>
        <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-3">{{ folder.title }}</h1>
        <p class="text-lg text-gray-600">{{ folder.description }} {{ folder.photos.length }} photos.</p>
      </div>
    </section>

    <section class="py-12 bg-white">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <ul class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
          <li v-for="(photo, i) in folder.photos" :key="photo.file">
            <button
              type="button"
              class="block w-full aspect-[3/2] overflow-hidden rounded-xl bg-gray-100 focus:outline-none focus-visible:ring-4 focus-visible:ring-orange-400"
              :aria-label="`Open photo ${i + 1} of ${folder.photos.length}`"
              @click="open(i)"
            >
              <img
                :src="thumbUrl(folder, photo.file)"
                :alt="`${folder.title}, photo ${i + 1}`"
                :width="photo.width"
                :height="photo.height"
                loading="lazy"
                decoding="async"
                class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
              />
            </button>
          </li>
        </ul>
      </div>
    </section>

    <!-- Lightbox -->
    <div
      v-if="current !== null"
      class="fixed inset-0 z-[60] bg-black/90 flex items-center justify-center"
      role="dialog"
      aria-modal="true"
      :aria-label="`${folder.title}, photo ${current + 1} of ${folder.photos.length}`"
      @click.self="close"
    >
      <img
        :src="photoUrl(folder, folder.photos[current].file)"
        :alt="`${folder.title}, photo ${current + 1}`"
        class="max-w-[92vw] max-h-[85vh] object-contain rounded-lg"
      />
      <p class="absolute bottom-4 left-1/2 -translate-x-1/2 text-white/80 text-sm">{{ current + 1 }} / {{ folder.photos.length }}</p>
      <button ref="closeBtn" type="button" class="absolute top-4 right-4 text-white/80 hover:text-white p-2" aria-label="Close" @click="close">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
      </button>
      <button type="button" class="absolute left-2 sm:left-6 top-1/2 -translate-y-1/2 text-white/80 hover:text-white p-3" aria-label="Previous photo" @click="step(-1)">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
      </button>
      <button type="button" class="absolute right-2 sm:right-6 top-1/2 -translate-y-1/2 text-white/80 hover:text-white p-3" aria-label="Next photo" @click="step(1)">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
      </button>
    </div>
  </AppLayout>
</template>

<script setup>
import { computed, nextTick, onBeforeUnmount, onMounted, ref } from 'vue'
import { Head, Link } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import { findFolder, photoUrl, thumbUrl } from '@/config/media'

defineOptions({ layout: null })

const props = defineProps({ slug: { type: String, required: true } })

const folder = computed(() => findFolder(props.slug))

const current = ref(null)
const closeBtn = ref(null)

const open = async (i) => {
  current.value = i
  document.body.style.overflow = 'hidden'
  await nextTick()
  closeBtn.value?.focus()
}
const close = () => {
  current.value = null
  document.body.style.overflow = ''
}
const step = (dir) => {
  const n = folder.value.photos.length
  current.value = (current.value + dir + n) % n
}

const onKey = (e) => {
  if (current.value === null) return
  if (e.key === 'Escape') close()
  else if (e.key === 'ArrowRight') step(1)
  else if (e.key === 'ArrowLeft') step(-1)
}

onMounted(() => window.addEventListener('keydown', onKey))
onBeforeUnmount(() => {
  window.removeEventListener('keydown', onKey)
  document.body.style.overflow = ''
})
</script>
