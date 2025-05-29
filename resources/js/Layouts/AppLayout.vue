<template>
  <div class="min-h-screen bg-gray-50">
    <Navigation />
    
    <main class="pt-16">
      <slot />
    </main>

    <Footer />
  </div>
</template>

<script setup>
import Navigation from '@/Components/Navigation.vue'
import Footer from '@/Components/Footer.vue'
</script>
