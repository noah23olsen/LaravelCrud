<template>
  <NavBar />
  <router-view></router-view>
  <GetAllCars v-if="$route.path !== '/allCars'"/>
</template>

<script>
import GetAllCars from './components/GetAllCars.vue'
import NavBar from './components/NavBar.vue'


export default {
  name: 'App',
  components: {
    NavBar,
    GetAllCars,
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
