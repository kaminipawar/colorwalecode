<template>
	<div id="app">
	<section>
  <h3>radio buttons</h3>
  <input type="radio" v-model="color" value="0">red
  <input type="radio" v-model="color" value="1">blue
  <input type="radio" v-model="color" value="2">yellow
  <br />
  <span>value: {{color}}</span>



  <h3>binding value</h3>
  <input type="radio" v-model="gender" v-bind:value="a">man
  <input type="radio" v-model="gender" v-bind:value="b">woman
  <br />
  <span>value: {{gender}}</span>
</section>
</div>



	
</template>


<script type="text/javascript">
	
export default {
  data() {
    return {
     gender:{
         a: 0,
     
    b: 1,
}
        }
    }
}
</script>