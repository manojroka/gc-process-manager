<script setup>
import Sidebar from './components/Sidebar.vue'
import Main from './components/Main.vue'
</script>

<template>
  <div class="ownership-tracker">
    <Sidebar />
    <Main/>
  </div>
</template>

<style scoped>


body {
  background: #f1f5f9;
}

button {
  cursor: pointer;
  appearance: none;
  border: none;
  outline: none;
  background: none;
}

.ownership-tracker {
  margin: auto;
  border: 1px solid black;
  display: flex;
  flex-direction: row;
  flex:1 1;
}

.ownership-tracker main {
  /* //flex: 1 1 ;
  //padding: 1rem; */
}


header {
  line-height: 1.5;
  max-height: 100vh;
}

.logo {
  display: block;
  margin: 0 auto 2rem;
}

nav {
  width: 100%;
  font-size: 12px;
  text-align: center;
  margin-top: 2rem;
}

nav a.router-link-exact-active {
  color: var(--color-text);
}

nav a.router-link-exact-active:hover {
  background-color: transparent;
}

nav a {
  display: inline-block;
  padding: 0 1rem;
  border-left: 1px solid var(--color-border);
}

nav a:first-of-type {
  border: 0;
}

@media (min-width: 1024px) {
  header {
    display: flex;
    place-items: center;
    padding-right: calc(var(--section-gap) / 2);
  }

  .logo {
    margin: 0 2rem 0 0;
  }

  header .wrapper {
    display: flex;
    place-items: flex-start;
    flex-wrap: wrap;
  }

  nav {
    text-align: left;
    margin-left: -1rem;
    font-size: 1rem;

    padding: 1rem 0;
    margin-top: 1rem;
  }
}
</style>
