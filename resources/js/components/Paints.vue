<template>
	

	<div class="">						

		<nav aria-label="breadcrumb">
				<router-link to="/texture" class="nav-link"></router-link>
			
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Paints</li>
  </ol>
</nav>
	<div class="card-body">

<h2>Paint Brands</h2>

<div class="row">
	<div class="col-md-3 pb-3">
		<div class="card" style="width: 18rem;">
  <div class="center-block">
    <img :src="image" style="height: 145px">
<hr class="hrline"> 
<h5 class="text-center">Asian paints</h5>   
  </div>
</div>
	</div>
		<div class="col-md-3 pb-3">
			<div class="card" style="width: 18rem;">
  <div class="center-block">
    <img :src="image1" style="height: 145px">
<hr class="hrline"> 
<h5 class="text-center">Berger paints</h5>   
  </div>
</div>
			
		</div>
<div class="col-md-3 pb-3">
	<div class="card" style="width: 18rem;">
  <div class="center-block">
   <img :src="image2" style="height: 145px">
<hr class="hrline"> 
<h5 class="text-center">Dulux paints</h5>
  </div>
</div>
			
		</div>
		<div class="col-md-3 pb-3">
			<div class="card" style="width: 18rem;">
  <div class="card-body">
    <img :src="image3" style="height: 130px">
<hr class="hrline"> 
<h5 class="text-center">Nerolac paints</h5>
  </div>
</div>
			
		</div>
		<div class="card-body">
			<h2>Different Categories</h2>
			<div class="row">
				<div class="col-md-6 pb-6">
    <img :src="image4" style="height: 400px, width:300px">
          
            <div class="carousel-caption">
              <h1 class="text center">Interior</h1>
            </div>
          
				</div>
				<div class="col-md-6 pb-6">
    <img :src="image5" style="height: 400px, width:300px">

            <div class="carousel-caption">
              <h1>Exterior</h1>
            </div>
          
				</div>
		</div>
		</div>
	</div>

		
		 
		</div>
	
	</div>

</template>



<script type="text/javascript">


	export default {
		data(){
			return {
				//image: '',
				image: 'img/asianpaints.png',
				image1: 'img/berger.jpg',
				image2: 'img/dulux.jpg',
				image3: 'img/nerolac.jpg',
				image4: 'img/inte.jpg',
				image5: 'img/exte.jpg',


			}
		},

		mounted() {
			console.log('Component mounted.')
		} 
	}



	</script>