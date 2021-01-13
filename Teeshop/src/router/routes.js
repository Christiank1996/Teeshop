
const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('pages/index.vue') },
      { path: '/gruenertee', component: () => import('pages/gruenertee.vue') },
      { path: 'oolongtee', component: () => import('pages/oolongtee.vue') },
      { path: 'schwarzertee', component: () => import('pages/schwarzertee.vue') },
      { path: 'weissertee', component: () => import('pages/weissertee.vue') },
      { path: 'zubehoer', component: () => import('pages/zubehoer.vue') }
    ]
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '*',
    component: () => import('pages/Error404.vue')
  }
]

export default routes
