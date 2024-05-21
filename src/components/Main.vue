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
  width: 1000px;
  display: flex;
  flex-direction: column;
  flex: 1 1;
}
</style>
