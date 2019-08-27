<!-- <template>
	
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Living Room</h2>
   
  </div>

 
      
          




        
        <hr class="mb-4">

        <h4 class="mb-3">Type Of Painting</h4>

        <div class="d-block my-3">
         <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Freshpainting</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Re-painting</label>

  

</div>
<hr>
        <div class="row">
          <div class="col-md-1 mb-1">
            <label for="cc-name">L</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-1 mb-1">
            <label for="cc-number">W</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>

            
          </div>
           <div class="col-md-2 mb-2">
            <label for="cc-number">Area(sq ft)</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
        </div>
        
        <hr>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>


        <hr>

       
  <p>{{ message }}</p>
  <input v-model="message">
 


     
    </div>
  </div>
</div>
</template>



<script type="text/javascript">
 
//  data: {
  //  message: 'Hello Vue!'
  //}

      export default {

      	data(){
      		return{
      			
      		}
      	}
      }

 
</script> -->
<template>


<div class="image">





<h1>Calculator</h1>
<p>Discover your payment</p>
<label for="height">Height</label>
<input type="number" name="ch-1" class="currency" v-model.number="ch1"/>
<br />
<label for="width">Width</label>
<input type="number" name="cw-2" class="currency" v-model.number="cw2"/>


</form>
<div class="payment">{{ calcPayment }} </div>
</div>
</template>


<script type="text/javascript">


export default {
data(){
return {
//image: '',
payment:'',
ch1: '',
cw2: '',

//calcPayment: '',

}
},

mounted() {
console.log('Component mounted.')
},

computed: {
calcPayment: function(e){

return this.ch1 * this.cw2;

},

}
}



</script>
