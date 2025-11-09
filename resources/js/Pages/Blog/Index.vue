<template>
  <AppLayout>
    <!-- Hero Section -->
    <section class="relative min-h-[50vh] bg-gradient-to-br from-slate-50 via-orange-50 to-amber-50 overflow-hidden">
      <div class="absolute inset-0">
        <div class="absolute top-20 left-10 w-72 h-72 bg-orange-200 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-amber-200 rounded-full opacity-20 blur-3xl"></div>
      </div>

      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-16">
        <div class="text-center">
          <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
            Pharmacist Evolve Blog
          </h1>
          <p class="text-xl lg:text-2xl text-gray-600 mb-8 max-w-4xl mx-auto leading-relaxed">
            Insights, tips, and resources for overseas pharmacists pursuing careers in the UK
          </p>
        </div>
      </div>
    </section>

    <!-- Blog Posts Section -->
    <section class="py-24 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Blog Posts Grid -->
        <div v-if="blogs.data.length > 0" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
          <article 
            v-for="blog in blogs.data" 
            :key="blog.id"
            class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300"
          >
            <!-- Featured Image -->
            <Link :href="`/blog/${blog.slug}`" class="block">
              <div v-if="blog.featured_image" class="relative h-56 overflow-hidden">
                <img 
                  :src="`/storage/${blog.featured_image}`" 
                  :alt="blog.title"
                  class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500"
                />
              </div>
              <div v-else class="relative h-56 bg-gradient-to-br from-orange-400 to-amber-500 flex items-center justify-center">
                <svg class="w-16 h-16 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C20.832 18.477 19.246 18 17.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
              </div>
            </Link>

            <!-- Content -->
            <div class="p-6">
              <!-- Meta Info -->
              <div class="flex items-center text-sm text-gray-500 mb-4">
                <span v-if="blog.author">{{ blog.author }}</span>
                <span v-if="blog.author" class="mx-2">•</span>
                <time>{{ formatDate(blog.published_at) }}</time>
                <span class="mx-2">•</span>
                <span>{{ blog.views }} views</span>
              </div>

              <!-- Title -->
              <Link :href="`/blog/${blog.slug}`">
                <h2 class="text-2xl font-bold text-gray-900 mb-3 hover:text-orange-600 transition-colors">
                  {{ blog.title }}
                </h2>
              </Link>

              <!-- Excerpt -->
              <p v-if="blog.excerpt" class="text-gray-600 mb-4 line-clamp-3">
                {{ blog.excerpt }}
              </p>

              <!-- Read More Link -->
              <Link 
                :href="`/blog/${blog.slug}`"
                class="inline-flex items-center text-orange-600 font-semibold hover:text-orange-700"
              >
                Read More
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
              </Link>
            </div>
          </article>
        </div>

        <!-- Empty State -->
        <div v-else class="text-center py-16">
          <div class="w-24 h-24 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-12 h-12 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C20.832 18.477 19.246 18 17.5 18c-1.746 0-3.332.477-4.5 1.253"/>
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-gray-900 mb-4">No blog posts yet</h3>
          <p class="text-gray-600 mb-8">Check back soon for valuable insights and tips!</p>
        </div>

        <!-- Pagination -->
        <div v-if="blogs.data.length > 0 && (blogs.prev_page_url || blogs.next_page_url)" class="flex justify-center gap-4">
          <Link 
            v-if="blogs.prev_page_url"
            :href="blogs.prev_page_url"
            class="px-6 py-3 bg-white border-2 border-orange-600 text-orange-600 font-semibold rounded-xl hover:bg-orange-600 hover:text-white transition-colors"
          >
            ← Previous
          </Link>
          <Link 
            v-if="blogs.next_page_url"
            :href="blogs.next_page_url"
            class="px-6 py-3 bg-orange-600 text-white font-semibold rounded-xl hover:bg-orange-700 transition-colors"
          >
            Next →
          </Link>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'

defineProps({
  blogs: Object
})

const formatDate = (dateString) => {
  const date = new Date(dateString)
  return date.toLocaleDateString('en-GB', { 
    year: 'numeric', 
    month: 'long', 
    day: 'numeric' 
  })
}
</script>
