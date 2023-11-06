<template>
  <div>
    <h2>Add Car</h2>
    <form @submit.prevent="handleAddCar">
      <div>
        <label>Car Name:</label>
        <input type="text" v-model="car.car_name" />
      </div>
      <button type="submit">Submit</button>
    </form>
    <div v-if="responseMsg">{{ responseMsg }} </div>
  </div>
</template>

<script>
import { carApi } from "../services/api.js";

export default {
  data() {
    return {
      car: {
        car_name: ""
      },
      responseMsg: null,
    };
  },
  methods: {
    handleAddCar() {
      carApi
        .addCar(this.car)
        .then((response) => {
        //   this.car = response.data.car;
            console.log(response);
            this.responseMsg = response.data.message;

        })
        .catch((e) => {
          console.error(e);
        //   this.car = null;
          this.responseMsg = e;
        });
    },
  },
};
</script>

<style>
</style>