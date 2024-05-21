import { createRouter, createWebHistory } from 'vue-router'
import LandingPage from "@/views/LandingPage.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: LandingPage
    },
    {
      path: '/about',
      name: 'about',
      component: () => import('../views/AboutView.vue')
    },
    {
      path: '/servers',
      name: 'servers',
      component: () => import('../views/ContentView.vue')
    },
    {
      path: '/alerts-management',
      name: 'alerts-management',
      component: () => import('../views/AlertsManagementView.vue')
    },

    {
      path: '/users-management',
      name: 'users-management',
      component: () => import('../views/UsersManagementView.vue')
    },

    {
      path: '/process-management',
      name: 'process-management',
      component: () => import('../views/ProcessManagementView.vue')
    },

    {
      path: '/reports-management',
      name: 'reports-management',
      component: () => import('../views/ReportsManagementView.vue')
    },

    {
      path: '/automation',
      name: 'automation',
      component: () => import('../views/AutomationView.vue')
    },


    /********************************************************/
    /*                        Navbar                        */
    /********************************************************/

    {
      path: '/alerts',
      name: 'alerts',
      component: () => import('../views/AlertsView.vue')
    },

    {
      path: '/ownership-tracker',
      name: 'ownership-tracker',
      component: () => import('../views/OwnershipTrackerView.vue')
    },

    {
      path: '/process-tracker',
      name: 'process-tracker',
      component: () => import('../views/ProcessTrackerView.vue')
    },

    {
      path: '/settings',
      name: 'settings',
      component: () => import('../views/SettingView.vue')
    },


    {
      path: '/automation',
      name: 'automation',
      component: () => import('../views/AutomationView.vue')
    },


    {
      path: '/automation',
      name: 'automation',
      component: () => import('../views/AutomationView.vue')
    },

    {
      path: '/profile',
      name: 'profile',
      component: () => import('../views/ProfileView.vue')
    },
  ]
})

export default router
