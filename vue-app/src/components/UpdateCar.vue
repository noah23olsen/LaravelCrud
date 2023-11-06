<template>
  <div>
    <h2>Update Car</h2>
    <form @submit.prevent="handleUpdateById">
      <div>
        <label>ID to update:</label>
        <input type="text" v-model="car.id" />
      </div>
      <div>
        <label>New Car Name:</label>
        <input type="text" v-model="car.car_name" />
      </div>
      <button type="submit">Submit</button>
    </form>
    <div v-if="errorMsg">{{ errorMsg }} </div>
  </div>
</template>

<script>
import { carApi } from "../services/api.js";

export default {
  data() {
    return {
      car: {
        id: "",
        car_name: ""
      },
      errorMsg: null,
    };
  },
  methods: {
    handleUpdateById() {
      carApi
        .updateCarById(this.car)
        .then((response) => {
        //   this.car = response.data.car;
            console.log(response);
        })
        .catch((e) => {
          console.error(e);
        //   this.car = null;
          this.errorMsg = e;
        });
    },
  },
};
</script>

<style>
</style>