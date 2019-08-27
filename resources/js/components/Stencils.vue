<template>
	

	<div class="image">
		<img :src="image" style="height: 200">
		 
		<li class="nav-item active">
			<p>Stencils</p>

			<router-link to="/stencils" class="nav-link"></router-link>	
		</li>  
	</div>

</template>


<script type="text/javascript">


	export default {
		data(){
			return {
				//image: '',
				image: 'img/E.jpg'
			}
		},

		mounted() {
			console.log('Component mounted.')
		} 
	}



	</script>