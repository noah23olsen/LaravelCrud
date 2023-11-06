<template>
  <div>
    <button @click="fetchCar">Fetch Car</button>
    <div v-if="car">
      <h2>Car Details</h2>
      <p>ID: {{ car.id }}</p>
      <p>Name: {{ car.car_name }}</p>
    </div>
    <div v-else>
      <p v-if="error">{{ error }}</p>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      car: null,
      error: null,
    };
  },
  methods: {
    fetchCar() {
      const carId = 2; // Replace with the car ID you want to fetch
      fetch(`http://127.0.0.1:8000/cars/${carId}`)
        .then((response) => {
          if (response.ok) {
            return response.json();
          } else {
            throw new Error('Car not found');
          }
        })
        .then((data) => {
          this.car = data.car;
          this.error = null;
        })
        .catch((error) => {
          this.car = null;
          this.error = error.message;
        });
    },
  },
};
</script>