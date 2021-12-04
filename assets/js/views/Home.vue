<template>
  <div class="row">
    <div class="col-12">
      <h2>[HOME]</h2>
    </div>
  </div>
  <ul>
    <li><router-link :to="{ name: 'Info'}">Go to INFO</router-link></li>
    <li><router-link :to="{ name: 'Ajax'}">Go to AJAX</router-link></li>
  </ul>
</template>

<script>
import { useMeta } from 'vue-meta'

export default {
  components: {
  },
  setup () {
    useMeta({
      title: 'Home'
    })
  }
}
</script>
