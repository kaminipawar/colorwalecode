<!-- <template>
	<p>more
	</p>
</template>


<script type="text/javascript"></script> -->



	



<template>
	<div id="app">

	
				<li class="nav-item active">
	 	<p>Texture</p>
	 	
	<router-link to="/texture" class="nav-link"></router-link>	
						</li>  
						<input type="text" v-on:input="chnageTitle">
		<p>{{ title }}</p>
			</div>
						
		
	</div>
</template>

	<script>
		
         data:{
         	title: "Hello Wrold"
         }
         
			</script>
	
	<!-- </html>