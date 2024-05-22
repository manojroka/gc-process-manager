<template>
    <aside>
      <span class="logo"> LPS </span>
  
      <div class="menu">
        <p class="button border-top">
          <span class="text"><RouterLink to="/servers">Servers</RouterLink></span>

        </p>
        <p class="button border-top">
          <span class="text"><RouterLink to="/alerts-management">Alerts Management</RouterLink></span>
        </p>

        <p class="button border-top">
          <span class="text"><RouterLink to="/users-management">Users Management</RouterLink></span>
        </p>

        <p class="button border-top">
          <span class="text"><RouterLink to="/process-management">Process Management</RouterLink></span>
        </p>

        <p class="button border-top">
          <span class="text"><RouterLink to="/reports-management">Reports Management</RouterLink></span>
        </p>

        <p class="button border-top border-bottom">
          <span class="text"><RouterLink to="/automation">Automation</RouterLink></span>
        </p>

      </div>
    </aside>
  </template>
  
  <script setup>
  
  
  
  </script>
  
  <style scoped>
  .border-top {
    border-top: 6px solid black;
  }
  
  .border-bottom {
    border-bottom: 6px solid black;
  }
  
  aside {
    width: 280px;
    text-align: center;
  
    background-color: white;
    color: black;
  
    //width: calc(15rem + 100px);
    overflow: hidden;
    min-height: 100vh;
    padding: 1rem;
  
    border: 1px solid black;
    transition: 0.2s ease-in-out;
  }
  
  aside .flex {
    margin: auto;
  }
  
  aside .logo {
    padding: 5px;
    margin: auto;
    font-size: 30px;
    color: white;
    background-color: #0050ef;
    width: 100px;
    text-align: center;
    border-radius: 10px;
  }
  
  aside .menu {
    margin: 2rem;
  }
  aside .menu .button {
    text-decoration: none;
    cursor: pointer;
    transition: 0.2s ease-in-out;
    padding: 1.0rem 0.6rem;
  }

  @media screen and (max-width: 800px) {
    aside {
      width: 200px;
    }

    aside .menu .button {
      font-size: 10px;
      padding: 5px;
    }
  }
  </style>
  