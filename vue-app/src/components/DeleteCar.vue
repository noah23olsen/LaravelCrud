<template>
  <div>
    <h2>Delete Car By Id</h2>
    <!-- calls handleGetById, prevents default submission -->
    <form @submit.prevent="handleDeleteById">
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
    handleDeleteById(){
        carApi.deleteCarById(this.id)
        .then((response)=>{
            console.log(response.data)
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