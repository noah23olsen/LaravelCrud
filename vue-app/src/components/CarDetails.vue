<template>
  <div>
    <h2>Get Car By Id</h2>
    <!-- calls handleGetById, prevents default submission -->
    <form @submit.prevent="handleGetById">
      <label>ID:</label>
      <input type="text" v-model="id">
      <button type="submit">Submit</button>
    </form>
    <div v-if="car">
      <p>ID: {{ car.id }} | Car Name: {{ car.car_name }}</p>
    </div>
    <div v-else>
        <p>{{ errorMsg }}</p>
    </div>
  </div>
</template>

<script>
import { carApi } from '../services/api.js'

export default {
  data() {
    return {
      id: '',
      car: null,
      errorMsg:null,
    };
  },
  methods: {
    handleGetById(){
        carApi.getCarById(this.id)
        .then((response)=>{
            this.car = response.data.car;
        })
        .catch((e)=>{
            console.error(e);
            this.car = null;
            this.errorMsg = e;
        })
    }
  },
};
</script>