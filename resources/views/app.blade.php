<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="sticky-footer.css" rel="stylesheet">


</head>
<body>
	<div id="app">

		<header>
			<!-- Fixed navbar -->
			<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark px-6">
				<a class="navbar-brand" href="">Colorwale</a>
				 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				 	 <span class="navbar-toggler-icon"></span>
    </button>

				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<router-link to="/recentprojects" class="nav-link">RecentProjects</router-link>	
						</li>
						<li class="nav-item">
							<router-link to="/reviews" class="nav-link">Reviews</router-link>	
						</li>
						<li class="nav-item">
							<router-link to="/survey" class="nav-link">survey</router-link>	
						</li>
						
						<li class="nav-item">
							<router-link to="/faq" class="nav-link">FAQ</router-link>
						</li>
						<li class="nav-item dropdown">
							<router-link to="/products" class="nav-link dropdown-toggle" data-toggle="dropdown">Products</router-link>

<!-- <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
Products
</a> -->

<div class="dropdown-menu">
	<router-link to="/texture" class="dropdown-item" data-toggle="dropdown">Texture</router-link>
	<router-link to="/paints" class="dropdown-item" data-toggle="dropdown">Paints</router-link>
	<router-link to="/waterpgoofing" class="dropdown-item" data-toggle="dropdown">Waterproofing</router-link>
	<router-link to="/stencils" class="dropdown-item" data-toggle="dropdown">Stencils</router-link>


</div>
</li>
<li class="nav-item dropdown">
	<router-link to="/services" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</router-link>

	<div class="dropdown-menu">
		<router-link to="/interiorpainting" class=" dropdown-item" data-toggle="dropdown">Interior Painting</router-link>
		<router-link to="/exteriorpainting" class=" dropdown-item" data-toggle="dropdown">Exterior Painting</router-link>

		</div>
</li>
<li class="nav-item dropdown">
	<router-link to="/more" class="nav-link dropdown-toggle" data-toggle="dropdown">More</router-link>

	<div class="dropdown-menu">
		<router-link to="/blog" class=" dropdown-item" data-toggle="dropdown">Blog</router-link>
		<router-link to="/login" class=" dropdown-item" data-toggle="dropdown">Login</router-link>
	</div>
</li>
<ul class="nav navbar-nav navbar-right">

    <div class="item-animation"><a class=" text-white"  href="tel:+91-9014182316"> <i class="fa fa-phone-volume"></i><b><u> +91-9014182316</u></b></a></div>
</ul>


</div>
</nav>
</header>


 



		<div id="app">

			<router-view></router-view>

		</div>


	</div>

	<script src="{{ asset('js/app.js') }}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>