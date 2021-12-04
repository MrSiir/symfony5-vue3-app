<template>
  <div class="row">
    <div class="col-12">
      <h1>[INFO]</h1>
      <router-link :to="{ name: 'Home'}">Back to HOME</router-link>
    </div>
  </div>
</template>

<script>
import { useMeta } from 'vue-meta'

export default {
  name: 'Home',
  setup () {
    useMeta({
      title: 'Info'
    })
  }
}
</script>
