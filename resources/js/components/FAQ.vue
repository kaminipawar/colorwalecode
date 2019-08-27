<!-- <template>
	<div>
	<h1>FAQ</h1>

	<ul>
		<li><strong>Total Series:</strong> {{ series }}</li>
				<li><strong>Total Lessons:</strong> {{ lessons }}</li>
			</ul>
		</div>

</template>


<script>
	export default {
		data() {
			return {
			series: 0,
			lessons:0
		};
		},

		created() {
			axios.get('http://localhost:8000/api/faq').then(response => {
				let { data } = response;

				this.series = data.series;
				this.lessons = data.lessons;
			});
		}
	};
</script>



 -->
<template>
 <div class="container">
<div class="page-heading">
	<br>
<h2>Frequently Asked Questions</h2>
<div class="hr"></div>
</div>
<div class="page-description">
<h4>Got a question or a doubt? <span>We've got the answers right here</span></h4>
</div>
<div class="panel-group" id="accordion">
<h3>About Colorwale and Payments:</h3>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone1">
1 What is Colorwale? </a>
</h4>
</div>
<div id="collapseone1" class="panel-collapse collapse">
<div class="panel-body">
<p>colorwale.in is the easiest way to paint your home or office, bringing in technology, automation and service guarantee. aapkapainter.com manages the entire process online, from paint selection, to quotes to service booking, project management and payment. We, at AapkaPainter are on mission to revolutionize the way homes get painted. </p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone2">
2 Why Colorwale and not any local painter? </a>
</h4>
</div>
<div id="collapseone2" class="panel-collapse collapse">
<div class="panel-body">
<p>We are true to our work and words. We do not charge a lump sum. We measure exact square foot. Use the exact materials promised. And yes, we deliver on time, always. All of AapkaPainter's painters are trained and background checked, and there is a full team of project managers to guarantee job completion and satisfaction. </p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone3">
3 What kind of painting jobs you offer? </a>
</h4>
</div>
<div id="collapseone3" class="panel-collapse collapse">
<div class="panel-body">
<p><p>We provide an end to end 1. Interior Painting 2. Exterior Painting 3. Wood Finishes ( Paint &amp; Polish ) 4.Metal Painting 5. Textures 6. Stencils 7. Wall Arts 8. Wall Paper 9. Waterproofing 10. Cleaning Services</p><p>When it comes to painting, we take pride in saying we know in and out. Give us any design/image, we recreate them on the walls - Pixel Perfect. You also have the flexibility of choosing over a wide range of products from the brands like Asian Paints, Berger, Dulux, Nerolac, Dr Fixit, Fosroc, Marshalls, Sanmarco.<span data-cke-bookmark="1" style="display: none;">&nbsp;</span><br></p><p><br></p><p><br></p><p><br></p></p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone4">
4 Is there any consultancy/visit charge? </a>
</h4>
</div>
<div id="collapseone4" class="panel-collapse collapse">
<div class="panel-body">
<p>It’s Absolutely Free. Expert assistance is just a click/call away.</p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone5">
5 What is the overall procedure once I place a contact request? </a>
</h4>
</div>
<div id="collapseone5" class="panel-collapse collapse">
<div class="panel-body">
<p>You will receive a call from us very soon. Then as per your comfort, we schedule a visit at your site and our qualified engineers will guide you with all your requirements along with helping you choose the right product, keeping your budget intact. Further, you get an email with completely customized quotation on the same day (in the best of situations). View your quotation, along with detailed measurements on your dashboard. We are always available, should you need any clarification or further customization.</p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone6">
6 I am fine with the quotation, how do I proceed? </a>
</h4>
</div>
<div id="collapseone6" class="panel-collapse collapse">
<div class="panel-body">
<p>Just click on “Accept Quotation” button provided in your quotation and enter the date you want to get started. Rest we will take care.</p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone7">
7 What are the payment terms? </a>
</h4>
</div>
<div id="collapseone7" class="panel-collapse collapse">
<div class="panel-body">
<p>Pay as you go. Payment milestones are 40 percent in advance, next 40 percent when we are through while you pay the last 20 percent once we have satisfactorily delivered the service to you. Assuring you a hassle free painting service and experience.</p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone8">
8 How do I make the payment? </a>
</h4>
</div>
<div id="collapseone8" class="panel-collapse collapse">
<div class="panel-body">
<p>All payment milestones are defined in the Payment section on your dashboard. Just click on “Pay Now” button and the rest is all similar to how we have been booking our movie tickets online. </p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone9">
9 Will there be any supervisor allotted to my site? </a>
</h4>
</div>
<div id="collapseone9" class="panel-collapse collapse">
<div class="panel-body">
<p>Our painters are very well trained but we still closely monitor your project through technology and individual attention to assure a hassle free delivery. </p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone10">
10 What are the working hours of the painters? </a>
</h4>
</div>
<div id="collapseone10" class="panel-collapse collapse">
<div class="panel-body">
<p>Painters work minimum from 10 am to 5 pm. But if the work demands we don’t mind extending our working hours. We like being workaholics.</p>
</div>
</div>
</div>
 <div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone11">
11 Do you provide any service warranty? </a>
</h4>
</div>
<div id="collapseone11" class="panel-collapse collapse">
<div class="panel-body">
<p>There are two kinds of warranties involved in painting process. 1. Paint Product Warranty and 2. Service Warranty Paint Product warranty if applicable is directly provided by manufacturers of paint (with their terms & conditions ). Our painting service warranty will be of 1 year in selected painting systems. </p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone12">
12 Awesome. So who are behind this? </a>
</h4>
</div>
<div id="collapseone12" class="panel-collapse collapse">
<div class="panel-body">
<p>We are a team of young and creative engineers who are trying to make home painting as easy as buying anything online these days. Our customers’ happiness mean everything to us. We would like to be a part of your beautiful home too :)</p>
</div>
</div>
</div>
<h3>General Painting Process:</h3>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone44">
1 What is the standard procedure of re-painting? </a>
</h4>
</div>
<div id="collapseone44" class="panel-collapse collapse">
<div class="panel-body">
<p>Putty touch up, followed by a coat of primer and 2 coats of paint application, provided walls are in good condition without any cracks or water seepage. Priming can be skipped if matte finish paint is used. However, it is always advisable to have an under coat of primer if a gloss (sheen) finish is desired or when painting a shade way lighter or darker than existing. </p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone45">
2 What is the use of putty? </a>
</h4>
</div>
<div id="collapseone45" class="panel-collapse collapse">
<div class="panel-body">
<p>Putty is often used to prepare a smooth, even surface prior painting. It fills in minor cracks and holes and removes any undulations on walls.</p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone46">
3 What is a primer? What is its use? </a>
</h4>
</div>
<div id="collapseone46" class="panel-collapse collapse">
<div class="panel-body">
<p>A primer is a substance that is used as a pre-coat before paint application on any surface - walls, wood or metal. Primer improves adhesion of paint onto the surface and enhances paint durability.</p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone47">
4 Should primer always be used before applying paint? </a>
</h4>
</div>
<div id="collapseone47" class="panel-collapse collapse">
<div class="panel-body">
<p>Priming can be skipped while repainting using a flat paint (matte finish), though it is always advisable to apply paint on well prepped and primed surface. But never give it a miss when 1. Fresh painting a surface/drywall 2. Using gloss/high sheen paints 3. Painting a drastic colour change - lighter shade over a darker one and vice-versa. 4. Painting on repaired walls(patched areas) or walls in bad condition – paint flaking/peel off 5. Painting wood surfaces </p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone48">
5 What all paint finishes are available? </a>
</h4>
</div>
<div id="collapseone48" class="panel-collapse collapse">
<div class="panel-body">
<p><p>Paints are available in following dead flat to high gloss finishes: · Matte · Semi Gloss or Satin or Soft Sheen · High Gloss or Super Sheen or Silky</p></p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone49">
6 What is a matte finish? </a>
</h4>
</div>
<div id="collapseone49" class="panel-collapse collapse">
<div class="panel-body">
<p>Matte finish is opaque and does not reflect light at all and thus can cover up minor imperfections. It is not washable or stain resistant, so only way to get rid of scribbles or stains, is to paint over them. Matte paint is least expensive of all emulsions and is the most economical solution for houses on rent.</p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone50">
7 How do I choose paint finishes for my house? </a>
</h4>
</div>
<div id="collapseone50" class="panel-collapse collapse">
<div class="panel-body">
<p>Rule of thumb says higher the sheen, higher the shine, more durable and easy to maintain it is and higher the cost. But, high sheen also reflects more light and hence imperfections like patches or reworked areas are easily noticeable. Gloss paints can be used in areas that demand attention and easy maintenance, like high traffic living room, kids room, kitchen and bath. If you have to impress your tenants with your freshly painted apartment and also save good cash, go for matte paints. They are easy to be painted over and do not show up minor imperfections as well. A smart tip is to use combination of paints: Matte finish on ceiling and products of desired sheen on walls.</p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone51">
8 What paint should I use for kitchen? </a>
</h4>
</div>
<div id="collapseone51" class="panel-collapse collapse">
<div class="panel-body">
<p>High gloss paints are well suited for kitchens because of their high washability and stain resistance. </p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone52">
9 Can I use enamels for kitchen and bathroom walls? </a>
</h4>
</div>
<div id="collapseone52" class="panel-collapse collapse">
<div class="panel-body">
<p>Enamels, primarily used on wooden and metallic surfaces can also provide easy to maintain surfaces on walls. But due to their very high gloss, even paint brush or roller marks become visible. It is hence advisable to use enamels, only on smaller area on walls. </p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone53">
10 What are the most economical paints available in market? </a>
</h4>
</div>
<div id="collapseone53" class="panel-collapse collapse">
<div class="panel-body">
<p>Tractor Emulsion of Asian Paints ·Bison Super Emulsion of Berger ·Beauty Smooth of Nerolac</p>
</div>
</div>
</div>
<h3>Products:</h3>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone85">
 1 What are emulsions? </a>
</h4>
</div>
<div id="collapseone85" class="panel-collapse collapse">
<div class="panel-body">
<p>Emulsions are essentially water based paints wherein paint pigments and their binders are carried by solvent water. Emulsions also called acrylics or latex paints, are contained in water, they are easy to apply and dry up quickly as well. Emulsions come in different finishes and are more versatile and widely used.</p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone86">
2 What is the difference between distempers and emulsions? </a>
</h4>
</div>
<div id="collapseone86" class="panel-collapse collapse">
<div class="panel-body">
<p>Distempers contain chalk/lime, unlike emulsions which contain polymeric resins. Lime when mixed with colouring pigments, glue and a solvent like water or oil, can be applied on to surfaces. Distempers do not produce long lasting effect and slowly flake off and colour fades away. Low cost emulsions are better alternatives to distempers for household painting and offer much more value for money. </p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone87">
3 What are enamels? </a>
</h4>
</div>
<div id="collapseone87" class="panel-collapse collapse">
<div class="panel-body">
<p>Enamels refer to paints that produce hard, glossy finishes.Enamels are mostly oil based paints,and are available in semi-gloss (satin) to highly glossy finish, with heat resistant properties. They are widely used on metal and wooden surfaces. Since, they offer easy maintenance and washability, they can also be applied on kitchen/bathroom walls. </p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone88">
4 What are polyurethane (PU) coatings? </a>
</h4>
</div>
<div id="collapseone88" class="panel-collapse collapse">
<div class="panel-body">
<p>Polyurethane coatings are enamels specific for wooden surfaces. They,like regular enamels impart hard and glossy finish on wood, thus enhancing beauty and life of wooden surfaces. PU coatings are mostly oil based, however water based PU finishes are available as well these days. </p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone89">
5 What are oil based and water based enamels? </a>
</h4>
</div>
<div id="collapseone89" class="panel-collapse collapse">
<div class="panel-body">
<p>Polyurethane coatings are enamels specific for wooden surfaces. They,like regular enamels impart hard and glossy finish on wood, thus enhancing beauty and life of wooden surfaces. PU coatings are mostly oil based, however water based PU finishes are available as well these days.</p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone90">
6 What is the difference between satin and gloss enamel? </a>
</h4>
</div>
<div id="collapseone90" class="panel-collapse collapse">
<div class="panel-body">
<p>Gloss levels are different - Satin enamels produce smooth-satin (fabric) like sheen, while high gloss enamels are extremely glossy.</p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone91">
7 What are the finishes in which paint products are available? </a>
</h4>
</div>
<div id="collapseone91" class="panel-collapse collapse">
<div class="panel-body">
<p>Paints are available in following dead flat to high gloss finishes: · Matte · Semi Gloss or Satin or Soft Sheen · High Gloss or Super Sheen or Silky. </p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone92">
8 How do I choose a paint product for interiors of my house? </a>
</h4>
</div>
<div id="collapseone92" class="panel-collapse collapse">
<div class="panel-body">
<p>Rule of thumb says higher the sheen/gloss, higher the shine, more durable and easy to maintain it is and higher the cost. High sheen also reflects more light and hence imperfections like patches or reworked areas are easily noticeable. Gloss paints can be used in areas that demand attention and easy maintenance, like high traffic living room, kids room, kitchen and bath. If you have to impress your tenants with your freshly painted apartment and also save good cash, go for matte paints. They are easy to be painted over and do not show up minor imperfections as well. A smart tip is to use combination of paints: Matte finish on ceiling and products of desired sheen on walls.</p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone93">
9 Can I use enamels for kitchen and bathroom walls? </a>
</h4>
</div>
<div id="collapseone93" class="panel-collapse collapse">
<div class="panel-body">
<p>Enamel can provide easy to maintain, washable surfaces, when used on walls. But due to their very high gloss, paint brush or roller marks may become visible. It is hence advisable to use enamels, on smaller area on walls. </p>
</div>
</div>
</div>
</div>

 <h2 class="h2 h3-responsive text-center">We Are In</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="https://aapkapainter.com/assets/newdesign/images/homepage/logo-painters-in-bangalore.png" alt="house painting in bangalore" style="height:180px;">
                <span>Bangalore</span>


            </div>

            <div class="col-md-3">
            <img src="https://aapkapainter.com/assets/newdesign/images/homepage/logo-painters-in-mumbai.png" alt="house painting in mumbai" style="height:180px;">
                <span>Mumbai</span>

        </div>
         <div class="col-md-3">
            <img src="https://aapkapainter.com/assets/newdesign/images/homepage/logo-painters-in-pune.png" alt="house painting in pune" style="height:180px;">
                <span>Pune</span>

        </div>
        <div class="col-md-3">
            <img src="https://aapkapainter.com/assets/newdesign/images/homepage/logo-painters-in-bangalore.png" alt="house painting in bangalore" style="height:180px;">
                            <span>Bangalore</span>

        </div>


        </div>
    </div>
</div>



</div>

</template>