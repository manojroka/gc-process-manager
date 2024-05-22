<script setup>

import ProfileButton from "@/components/ProfileButton.vue";
</script>

<template>
  <div class="navbar">
    <div class="topnav">
      <RouterLink class="topnav-first-btn" to="/alerts">Alerts</RouterLink>
      <RouterLink class="topnav-btn" to="/automation">Ownership Tracker</RouterLink>
      <RouterLink class="topnav-btn" to="/process-tracker">Process Tracker</RouterLink>
      <RouterLink class="topnav-btn" to="/settings">Settings</RouterLink>
    </div>
    <ProfileButton/>
  </div>
</template>

<style scoped>
.navbar{
  flex-direction: row;
  /* //flex:1 1; */
  justify-content: space-between;
  position: relative;
  /* //right: 10px;
  //top:10px; */
}

.topnav {
  overflow: hidden;
/* //background-color: #e3eae8; */
}

.topnav-first-btn {
  border-top: 1px solid black;
  border-bottom: 1px solid black;
  border-left: 1px solid black;
  width: 100px;
/* //border-top-right-radius: 10px; //border-bottom-right-radius: 10px; */
}

.topnav-btn {
  border: 1px solid black;
  width: 200px;
  border-radius: 5px;
}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  //padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

@media screen and (max-width: 800px) {
  .topnav {
    //min-width: 5px;
  }

  navbar {
    flex-direction: row;
    display: flex;
    width: 50px;
  }

  .topnav a{
    padding: 5px;
  }
}
</style>