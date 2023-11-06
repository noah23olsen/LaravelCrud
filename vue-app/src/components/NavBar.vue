<template>
  <nav>
    <router-link to="/allCars">Inventory</router-link>
    <router-link to="/details">Details</router-link>
    <router-link to="/delete">Delete</router-link>
    <router-link to="/update">Update</router-link>
    <router-link to="/add">Add</router-link>
  </nav>
</template>

<script>
export default {

}
</script>

<style>
    nav{
        display:flex;
        justify-content: space-around;
        background-color:lightgray;
        padding:2rem;
        width:100%;
    }

</style>