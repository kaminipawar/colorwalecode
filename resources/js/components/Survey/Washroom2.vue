<template>
	<div id="app">
	<input type="radio" id="one" value="One" v-model="picked">
<label for="one">One</label>
<br>
<input type="radio" id="two" value="Two" v-model="picked">
<label for="two">Two</label>
<br>
<span>Picked: {{ picked }}</span>
</div>
</template>


<script type="text/javascript">
	export default {
  data() {
    return {
    
      picked:{
       one:null,
       two:null
   }
}
}}
</script>