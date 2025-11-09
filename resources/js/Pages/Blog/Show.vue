<template>
  <AppLayout>
    <!-- Hero Section with Featured Image -->
    <section class="relative min-h-[60vh] bg-gradient-to-br from-slate-900 to-gray-800 overflow-hidden">
      <!-- Featured Image Overlay -->
      <div v-if="blog.featured_image" class="absolute inset-0">
        <img 
          :src="`/storage/${blog.featured_image}`" 
          :alt="blog.title"
          class="w-full h-full object-cover opacity-30"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/50 to-transparent"></div>
      </div>

      <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-16">
        <!-- Back Link -->
        <Link 
          href="/blog" 
          class="inline-flex items-center text-white/80 hover:text-white mb-8 transition-colors"
        >
          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
          </svg>
          Back to Blog
        </Link>

        <!-- Article Header -->
        <article>
          <h1 class="text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
            {{ blog.title }}
          </h1>

          <!-- Meta Information -->
          <div class="flex flex-wrap items-center gap-4 text-white/80">
            <div v-if="blog.author" class="flex items-center">
              <div class="w-10 h-10 bg-orange-600 rounded-full flex items-center justify-center text-white font-semibold mr-3">
                {{ blog.author.charAt(0) }}
              </div>
              <span>{{ blog.author }}</span>
            </div>
            <span v-if="blog.author">•</span>
            <time>{{ formatDate(blog.published_at) }}</time>
            <span>•</span>
            <span>{{ blog.views }} views</span>
          </div>
        </article>
      </div>
    </section>

    <!-- Article Content -->
    <section class="py-16 bg-white">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Article Body -->
        <div class="prose prose-lg max-w-none">
          <div v-html="blog.content" class="text-gray-800 leading-relaxed"></div>
        </div>

        <!-- Tags -->
        <div v-if="blog.tags && blog.tags.length > 0" class="mt-12 pt-8 border-t border-gray-200">
          <h3 class="text-sm font-semibold text-gray-600 mb-4">TAGS</h3>
          <div class="flex flex-wrap gap-2">
            <span 
              v-for="(tag, index) in blog.tags" 
              :key="index"
              class="px-4 py-2 bg-orange-100 text-orange-700 rounded-full text-sm font-medium"
            >
              {{ tag }}
            </span>
          </div>
        </div>

        <!-- Share Section -->
        <div class="mt-12 pt-8 border-t border-gray-200">
          <h3 class="text-lg font-semibold text-gray-900 mb-4">Share this article</h3>
          <div class="flex gap-4">
            <a 
              :href="`https://twitter.com/intent/tweet?text=${encodeURIComponent(blog.title)}&url=${encodeURIComponent(currentUrl)}`"
              target="_blank"
              rel="noopener noreferrer"
              class="w-12 h-12 bg-blue-500 hover:bg-blue-600 text-white rounded-full flex items-center justify-center transition-colors"
            >
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
              </svg>
            </a>
            <a 
              :href="`https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(currentUrl)}`"
              target="_blank"
              rel="noopener noreferrer"
              class="w-12 h-12 bg-blue-700 hover:bg-blue-800 text-white rounded-full flex items-center justify-center transition-colors"
            >
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Related Posts -->
    <section v-if="relatedPosts.length > 0" class="py-16 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Related Articles</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <article 
            v-for="post in relatedPosts" 
            :key="post.id"
            class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300"
          >
            <Link :href="`/blog/${post.slug}`">
              <div v-if="post.featured_image" class="h-48 overflow-hidden">
                <img 
                  :src="`/storage/${post.featured_image}`" 
                  :alt="post.title"
                  class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500"
                />
              </div>
              <div v-else class="h-48 bg-gradient-to-br from-orange-400 to-amber-500"></div>
            </Link>

            <div class="p-6">
              <time class="text-sm text-gray-500">{{ formatDate(post.published_at) }}</time>
              <Link :href="`/blog/${post.slug}`">
                <h3 class="text-xl font-bold text-gray-900 mt-2 mb-3 hover:text-orange-600 transition-colors">
                  {{ post.title }}
                </h3>
              </Link>
              <p v-if="post.excerpt" class="text-gray-600 line-clamp-2">
                {{ post.excerpt }}
              </p>
            </div>
          </article>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { computed } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'

const props = defineProps({
  blog: Object,
  relatedPosts: Array
})

const formatDate = (dateString) => {
  const date = new Date(dateString)
  return date.toLocaleDateString('en-GB', { 
    year: 'numeric', 
    month: 'long', 
    day: 'numeric' 
  })
}

const currentUrl = computed(() => {
  if (typeof window !== 'undefined') {
    return window.location.href
  }
  return `https://pharmacistevolve.com/blog/${props.blog.slug}`
})
</script>

<style scoped>
.prose {
  @apply text-gray-800;
}

.prose h2 {
  @apply text-3xl font-bold mt-8 mb-4 text-gray-900;
}

.prose h3 {
  @apply text-2xl font-bold mt-6 mb-3 text-gray-900;
}

.prose p {
  @apply mb-4 leading-relaxed;
}

.prose ul, .prose ol {
  @apply mb-4 ml-6;
}

.prose li {
  @apply mb-2;
}

.prose a {
  @apply text-orange-600 hover:text-orange-700 underline;
}

.prose img {
  @apply rounded-lg my-8;
}

.prose blockquote {
  @apply border-l-4 border-orange-500 pl-4 italic text-gray-700 my-6;
}

.prose code {
  @apply bg-gray-100 px-2 py-1 rounded text-sm;
}

.line-clamp-2 {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.line-clamp-3 {
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
</style>
