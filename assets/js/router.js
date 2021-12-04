import { createRouter, createWebHistory } from 'vue-router'

import Home from './views/Home.vue'
import Info from './views/Info.vue'
import Ajax from './views/Ajax.vue'

const routes = [
  { path: '/', name: 'Home', component: Home },
  { path: '/info', name: 'Info', component: Info },
  { path: '/ajax', name: 'Ajax', component: Ajax }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
