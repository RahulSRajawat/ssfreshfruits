<?php include 'header.php'; ?>

<style type="text/css">
	.production-banner{
		background-image: url(images/terms.jpg);
		background-size: contain;
	    background-position: center;
	    height: 100%;
	    width: 100%;
	    
	 }

	.layer {
    background-color: rgba(0, 0, 0, 0.5);
    padding: 40px 0;
    width: 100%;
}

	.production_heading{
		margin-top: 60px;
		color: white;
		text-align: center;
		/*margin-right: 916px;
	    background: rgba(0,0,0,0.4);
	    padding-left: 6px;
	    padding-bottom: 5px;*/
	}

	.quote_header {
    position: relative;
    top: -13px;
    margin-right: 15px;
    font-size: 25px !important;
    color: red !important;
    margin-left: -40px;
}

.quote_header_head {
    display: inline-block;
    text-transform: uppercase;
    font-size: 23px;
    text-align: left;
    color: #111;
    font-weight: 600;
    margin-bottom: 40px;
}

.quote_header_head:before{
	content: " ";
    border-bottom-style: solid;
    border-bottom-width: 5px;
    display: table-cell;
    width: 60px;
    position: relative;
    top: 50px;
    color: red;
}

.nutri li {
    list-style: square;
    font-size: 15px;
    letter-spacing: 0.5px;
    line-height: 2;
}

.data {
        padding: 0px 0px 30px 40px;
}

.row:before {
    display: table;
    content: " ";
}

.package{
	font-size: 20px;
    margin-bottom: 5px;
    font-weight: 500;
}

.package_para{
	font-weight: 400;
    color: #666;
    font-size: 16px;
    line-height: 25px;
    font-family: "Open Sans", sans-serif !important;
    text-align: justify;
}

.production_img{
	width: 100%;
    border-radius: 5px;
    padding: 60px 0 0 35px;
}

</style>

<section class="bs-section about">
    <div class="">
      <div class="production-banner">
          <div class="layer">
           <div class="container">
          	<div class="production_heading">
          		<h1>Production</h1>
          		<span><a href="index.php" class="">Home </a> / Production</span>
          		<p>Handpicked bananas, Grown with passion, harvested with efforts, packed delicately are delivering to you with care.</p>
          	</div>
           </div>
          </div>		
        </div> 
    </div>
</section>

<div class="container">
	    <div class="p-4">
 			<i class="fa fa-quote-left quote_header" aria-hidden="true"></i>
	 		<div class="quote_header_head">
	 			BANANA NUTRITIONAL FACTS:
	 		</div>
 		</div>

 		<div class="row">
 			<div class="col-sm-12">
 				<div class="">
 					<ul class="nutri">
 						<li>Rich in Vitamin B6 and Vitamin C- helps to reduce your fatigue and provides instant energy</li>
 						<li>Bananas are rich in fiber and potassium. Eating a banana in the morning prevents acidity.</li>
 						<li>It also helps in generating happy hormone and serves as the brain tonic.</li>
 					</ul>
 				</div>
 			</div>
 		</div>


 		<div class="p-4">
	 			  <i class="fa fa-quote-left quote_header" aria-hidden="true"></i>
		 		<div class="quote_header_head">
		 			BANANA NUTRITIONAL FACTS:
		 		</div>
 		    </div>

 		<div class="row data">
 			

 		    <div class="col-sm-12 col-lg-5 col-md-5">
 		    	<div class="row">
 		    		<div>
 		    		<h4 class="package">Packaging</h4>
 		    		<p class="package_para">Corrugated Top Bottom - Premium, Vacuum Bag with foam separators</p>
 		    		</div>
 		    	</div>

 		    	<div class="row">
 		    		<div>
 		    		<h4 class="package">Marking & Labelling</h4>
 		    		<p class="package_para">Product, Number of Hands, Date, Origin, Traceability</p>
 		    	    </div>
 		    	</div>

 		    	<div class="row">
 		    		<div>
 		    		<h4 class="package">Gross Weight</h4>
 		    		<p class="package_para">14kg</p>
 		    		</div>
 		    	</div>

 		    	<div class="row">
 		    		<div>
 		    		<h4 class="package">Net Weight <br></h4>
 		    		<p class="package_para">13kg</p>
 		    		</div>
 		    	</div>

 		    	<div class="row">
 		    		<div>
 		    		<h4 class="package">Recyclable</h4>
 		    		<p class="package_para">Yes</p>
 		    		</div>
 		    	</div>

 		    	<div class="row">
 		    		<div>
 		    		<h4 class="package">Units per carton</h4>
 		    		<p class="package_para">4 / 5 / 6 / 8 / Clusters</p>
 		    		</div>
 		    	</div>

 		    	<div class="row">
 		    		<div>
 		    		<h4 class="package">Number of fingers per hand</h4>
 		    		<p class="package_para">Minimum 12</p>
 		    		</div>
 		    	</div>

 		    	<div class="row">
 		    		<div>
 		    		<h4 class="package">Calibration</h4>
 		    		<p class="package_para">39 - 46</p>
 		    		</div>
 		    	</div>
 		    </div>

 		    <div class="col-sm-12 col-lg-7 col-md-7">
 		    	<div class="">
 		    		<img src="images/banana-fresh-diagram.jpg" class="production_img">
 		    	</div>
 		    </div>
 		</div>
</div>

<?php include 'footer.php'; ?>