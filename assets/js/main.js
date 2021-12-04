import { createApp } from 'vue'
import { createMetaManager } from 'vue-meta'
import 'bootstrap-icons/font/bootstrap-icons.css'
import 'bootstrap'

import router from './router.js'
import store from './store'
import App from './App.vue'

import '../scss/app.scss'

const app = createApp(App)
  .use(router)
  .use(store)
  .use(createMetaManager())

app.mount('#app')
