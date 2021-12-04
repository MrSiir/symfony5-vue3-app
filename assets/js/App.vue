<template>
  <metainfo>
    <template v-slot:title="{ content }">{{ content ? `${content} | Iquadrat` : `Iquadrat` }}</template>
  </metainfo>
  <header class="container">
    <h1>[HEADER]</h1>
  </header>
  <main class="container">
    <router-view />
  </main>
  <footer class="container">
    <h1>[FOOTER]</h1>
  </footer>
</template>
