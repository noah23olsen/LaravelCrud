import CarDetail from './components/CarDetails.vue';
import DeleteCar from './components/DeleteCar.vue';
import UpdateCar from './components/UpdateCar.vue';
import GetAllCars from './components/GetAllCars.vue';
import AddCar from './components/AddCar';
import { createRouter, createWebHistory } from 'vue-router';

const routes = [
  { path: '/details', component: CarDetail },
  { path: '/delete', component: DeleteCar },
  { path: '/update', component: UpdateCar },
  { path: '/allCars', component: GetAllCars },
  { path: '/add', component: AddCar },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
  });

export default router;