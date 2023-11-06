<template>
  <car-details></car-details>
</template>

<script>
import CarDetails from './components/CarDetails.vue';

export default {
  name: 'App',
  components: {
     CarDetails,
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
