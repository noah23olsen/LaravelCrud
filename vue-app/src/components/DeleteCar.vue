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
      <p></p>
    </div>
    <div v-else>
        <p>{{ returnMsg }}</p>
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
      returnMsg:null,
      
    };
  },
  methods: {
    handleDeleteById(){
        carApi.deleteCarById(this.id)
        .then((response)=>{
            console.log(response.data);
            this.returnMsg = response.data.message;
        })
        .catch((e)=>{
            console.error(e);
            this.car = null;
            this.returnMsg = e;
        })
    }
  },
};
</script>