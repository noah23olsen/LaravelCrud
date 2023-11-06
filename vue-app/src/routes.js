import CarDetail from './components/CarDetails.vue'
import DeleteCar from './components/DeleteCar.vue'
import { createRouter, createWebHistory } from 'vue-router';

const routes = [
  { path: '/details', component: CarDetail },
  { path: '/delete', component: DeleteCar },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
  });

export default router;