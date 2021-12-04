<template>
  <div class="row">
    <div class="col-12">
      <h1>[AJAX]</h1>
      <h2>Message: {{ message }}</h2>
      <router-link :to="{ name: 'Home'}">Back to HOME</router-link>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
import { useMeta } from 'vue-meta'

export default {
  name: 'Ajax',
  setup () {
    useMeta({
      title: 'Ajax Test'
    })
  },
  data () {
    return {
      message: null
    }
  },
  mounted () {
    axios
      .get('/ajax-test')
      .then(response => (this.message = response.data.message))
  }
}
</script>
