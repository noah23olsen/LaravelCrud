<template>
  <div>
    <h2>Inventory</h2>
    <ul>
        <li v-for="car in cars" :key="car.id">
          ID: {{car.id}} | Car Name: {{car.car_name}}
        </li>
    </ul>
    <div v-if="errorMsg">{{ errorMsg }} </div>
  </div>
</template>

<script>
import { carApi } from '@/services/api'
export default {
    data() {
        return {
            cars:[],
            errorMsg: null
        }
    },
    created()  {
        this.getAllCars();
    },
    methods: {
        getAllCars(){
            carApi.getAllCars()
            .then((response) => {
                console.log(response.data);
                this.cars=response.data[0].cars;
            })
            .catch((e) => {
                console.error(e);
                this.errorMsg = e;

            })
        }
    }
}
</script>

<style>

</style>