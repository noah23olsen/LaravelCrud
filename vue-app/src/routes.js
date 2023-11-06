import CarDetail from './components/CarDetails.vue'
import { createRouter, createWebHistory } from 'vue-router';

const routes = [
  { path: '/details', component: CarDetail },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
  });

export default router;