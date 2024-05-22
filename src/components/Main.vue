<template>
  <div class="main-part">
    <Navbar />
    <RouterView />
  </div>
</template>
<script setup>
import { RouterView } from "vue-router";
import Navbar from "@/components/Navbar.vue";
</script>

<style scoped>
.main-part {
  width: 900px;
  display: flex;
  flex-direction: column;
  flex: 1 1;
}

@media screen and (max-width: 1260px) {
  .main-part {
    width: 800px;
  }
}

@media screen and (min-width: 1000px) {
  .main-part {
    //width: 900px;
  }
}

</style>
