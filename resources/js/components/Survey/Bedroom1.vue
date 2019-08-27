<template>
	<div id="app">
  <form>
  <div v-if="step === 1">

    <h1>Step One</h1>
  
    <p>
    <legend for="shirtsize">Your city:</legend>
    <select id="shirtsize" name="shirtsize" v-model="registration.city">
      <option value="S">thane</option>
      <option value="M">banglore</option>
      <option value="L">hb</option>
      
    </select>
    </p>


    <button @click.prevent="next()">Next</button>
    
  </div>

  <div v-if="step === 2">
    <h1>Step Two</h1>
   <input type="radio" id="one" value="One" v-model="registration">
<label for="one">One</label>
<br>
<input type="radio" id="two" value="Two" v-model="registration">
<label for="two">Two</label>

    

    <button @click.prevent="prev()">Previous</button>
    <button @click.prevent="next()">Next</button>

  </div>

  <div v-if="step === 3">
    <h1>Step Three</h1>
    
     <h3>binding value</h3>
  <input type="radio" v-model="gender" v-bind:value="a">man
  <input type="radio" v-model="gender" v-bind:value="b">woman
  <br />
<!--   <span>value: {{gender}}</span>
 -->
    <button @click.prevent="prev()">Previous</button>
    <button @click.prevent="submit()">Save</button>
    
  </div>
  </form>

  <br/><br/> {{registration}} {{gender}}
</div>

</template>


<script>
	export default {
  data() {
    return {
      step:1,
      registration:{
         city:'thane',
        interior:null,
        Exterior:null,
        one:null,
        two:null,
         a: 0,
    b: 1,
        
       
      }
    }
  },
  methods:{
    prev() {
      this.step--;
    },
    next() {
      this.step++;
    },
    submit() {
      alert('Submit to blah and show blah and etc.');      
    }
  }
}

</script>