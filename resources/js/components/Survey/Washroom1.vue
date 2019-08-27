
	<template>
	<div id="app">
  <form>
  <div v-if="step === 1">

    <h1>Step One</h1>
    <p>
    <legend for="city">Your City:</legend>
    
     <select id="shirtsize" name="shirtsize" v-model="registration.city">
      <option value="thane">thane</option>
      <option value="banglore">banglore</option>
      <option value="hyb">hyb</option>
      
    </select>
    </p>

   

    <button @click.prevent="next()">Next</button>
    
  </div>

  <div v-if="step === 2">
    <h1>Step Two</h1>
    <p>
    <input type="radio" id="one" value="One" v-model="registration.one">
<label for="one">One</label>
    </p>

    <p>
  <input type="radio" id="two" value="Two" v-model="registration.two">
<label for="two">Two</label>
    </p>

   

    <button @click.prevent="prev()">Previous</button>
    <button @click.prevent="next()">Next</button>

  </div>

  <div v-if="step === 3">
    <h1>Step Three</h1>
    
    <p>
     <input type="radio" id="inte" value=interior v-model="registration.interior">
<label for="interior">Interior</label>
    </p>

    <p>
     <input type="radio" id="exte" value="exterior" v-model="registration.exterior">
<label for="exterior">Exterior</label>
    </p>

    <button @click.prevent="prev()">Previous</button>
    <button @click.prevent="submit()">Save</button>
    
  </div>
  </form>

  <br/><br/> {{registration}}
</div>

</template>


<script>
	export default {
  data() {
    return {
      step:1,
      registration:{
        city:'thane',
        
        one:null,
        two:null,
        
        interior:null,
        exterior:null,
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



