<script setup>

</script>

<template>
  <div class="content-part">
    <table id="customers">
      <tr>
        <th>Timestamp</th>
        <th>Sevirity</th>
        <th>Details</th>
        <th>Action</th>
      </tr>
      <tr>
        <td>2024-05-17 14:22:23</td>
        <td>Critical</td>
        <td>Detected Suspicious Ownership Transfer</td>
        <td>
          <p class="action">Fix it</p>
          <p class="action">Ignore</p>
          <p class="action">Save to Investigation Basket</p>
        </td>
      </tr>

      <tr>
        <td>2024-05-17 14:22:23</td>
        <td>Critical</td>
        <td>Detected Suspicious Ownership Transfer</td>
        <td>
          <p class="action">Fix it</p>
          <p class="action">Ignore</p>
          <p class="action">Save to Investigation Basket</p>
        </td>
      </tr>

      <tr>
        <td>2024-05-17 14:22:23</td>
        <td>Critical</td>
        <td>Detected Suspicious Ownership Transfer</td>
        <td>
          <p class="action">Fix it</p>
          <p class="action">Ignore</p>
          <p class="action">Save to Investigation Basket</p>
        </td>
      </tr>

      <tr>
        <td>2024-05-17 14:22:23</td>
        <td>Critical</td>
        <td>Detected Suspicious Ownership Transfer</td>
        <td>
          <p class="action">Fix it</p>
          <p class="action">Ignore</p>
          <p class="action">Save to Investigation Basket</p>
        </td>
      </tr>
    </table>

  </div>
</template>

<style scoped>
.content-part{
  margin: 50px;
  width: 100px;
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  min-width: 800px;
}

#customers th {
font-weight: bold;
}

#customers td, #customers th {
  border: 1px solid rgb(153,191,35);
/* //font-weight: bold; */
  text-align: center;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: white; height: 100px;}

#customers tr:nth-child(odd){background-color: rgb(234,242,211); height: 100px;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  text-align: center;
  padding-top: 12px;
  padding-bottom: 12px;
  /* //text-align: left; */
  background-color: rgb(167,201,66);
  color: white;
}
</style>