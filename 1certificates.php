<?php include 'header.php'; ?>

<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</head>

<style type="text/css">
	.certificate-banner{
		  background-image: url(images/certificate-banner-01.jpg);
		  background-size: cover;
		  background-repeat: no-repeat;
	    background-position: center;
	    height: 265px;
	    padding: 7% 0;
	 }

	.about_heading{
		margin-top: 45px;
		color: white;
		margin-right: 916px;
	    background: rgba(0,0,0,0.6);
	    padding-left: 6px;
	    padding-bottom: 5px;
	}

	.hr-line{
	width: 60px;
	text-align: center;
	height: 2px;
	background-color: red;
	margin: auto;
	margin-bottom: 10px;
}

.about-input{
	border-radius: 50px !important;
}

.about-btn{
	border: 4px solid;
	border-radius: 50px !important;
	padding-top: 6px;
	padding-bottom: 6px;
}

.certificate-img{
    width: 200px;
    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
}

.paragraph{
    color: #666666;
    font-size: 15px;
    text-align: justify !important;
    }

/*light-gallery*/

.lightbox-gallery{
		background-image: linear-gradient(#4A148C, #E53935);
		background-repeat: no-repeat;color: #000;overflow-x: hidden
	}

	.lightbox-gallery p{
		color:#fff
	}

	.lightbox-gallery h2{
		font-weight:bold;
		margin-bottom:40px;
		padding-top:40px;
		color:#fff
	}

	@media (max-width:767px){
		.lightbox-gallery h2{
			margin-bottom:25px;
			padding-top:25px;
			font-size:24px
		}
	}

	.lightbox-gallery .intro{
		font-size:16px;
		max-width:500px;
		margin:0 auto 40px
	}

	.lightbox-gallery .intro p{
		margin-bottom:0
	}

	.lightbox-gallery .photos{
		padding-bottom:20px
	}

	.lightbox-gallery .item{
		padding-bottom:30px}

/*light-gallery*/

@media (max-width: 767px){
.about_heading {
    margin: 76px 104px 0px -30px;
    height: auto;
}

.certificate-banner{
		  background-size: contain;
	    background-repeat: no-repeat;
	    background-position: center;
	    height: 275px;
	    padding: 7% 0;
	 }

}
</style>

 <section class="bs-section about">
    <div class="">
      <div class="certificate-banner">
          <div class="container" style="margin-left: 100px;">
          	<div class="about_heading">
          		<h1>Certificates</h1>
          		<span><a href="index.php" class="text-light">Home </a> / Certificates</span>
          	</div>
          </div>		
        </div>
      </div>     
</section>

<section class="">
	<div class="container">
		<div class="mb-5 text-center">
			<div class="text-center mt-4 mb-3">
				<img src="images/about-leave.png">
			</div>
			<h2 class="mb-2 text-center">Certifications</h2>
			<hr class="hr-line">
			
			<p class="paragraph pt-3 px-5">When it comes to food handling and export, maintaining high levels of hygiene, quality and safety are crucial. This is why, at Pisum, we meet international food safety and quality standards through various quality checks and following strict protocols throughout the process. This has allowed us to be accredited to a number of quality and food safety certifications.</p>

			<p class="paragraph px-5">Being accredited to TPCI, APEDA, and other certifications, we make sure the entire process meets the top quality and food safety standards. Be it the food handling, packaging, or processing, we make sure that everything is done in accordance with the stringent protocols. We are an Indian government-certified exporter of food products.</p>
		</div>

	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-12">
				<div class="text-center pt-4 px-4">
				    <a href="images/certificate/thumb-APEDA.jpg" data-lightbox="photos">  	  
				  	  <img src="images/certificate/thumb-APEDA.jpg" class="certificate-img">	
				  	</a>					
                  <p class="mt-2">APEDA</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-12">
				<div class="text-center pt-4 px-4">	
				    <a href="images/certificate/thumb-FIEO.jpg" data-lightbox="photos">  	  
				  	  <img src="images/certificate/thumb-FIEO.jpg" class="certificate-img">	
				  	</a>
					<p class="mt-2">FIEO</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-12">
				<div class="text-center pt-4 px-4">	
				    <a href="images/certificate/thumb_Incorporation.jpg" data-lightbox="photos"> 
				  	  <img src="images/certificate/thumb_Incorporation.jpg" class="certificate-img">
				  	</a>				
					<p class="mt-2">Incorporation</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-12">
				<div class="text-center pt-4 px-4">
				    <a href="images/certificate/thumb_GST.jpg" data-lightbox="photos"> 
				  	  <img src="images/certificate/thumb_GST.jpg" class="certificate-img">
				  	</a>					
					<p class="mt-2">GST</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-12">
				<div class="text-center pt-4 px-4">
				    <a href="images/certificate/thumb-MSME.jpg" data-lightbox="photos"> 
				  	  <img src="images/certificate/thumb-MSME.jpg" class="certificate-img">
				  	</a>					
					<p class="mt-2">MSME</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-12">
				<div class="text-center pt-4 px-4">
				    <a href="images/certificate/thumb-IEC.jpg" data-lightbox="photos"> 
				  	  <img src="images/certificate/thumb-IEC.jpg" class="certificate-img">
				  	</a>					
					<p class="mt-2">IEC</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-12">
				<div class="text-center pt-4 px-4">
				    <a href="images/certificate/thumb-IIFT.jpg" data-lightbox="photos"> 
				  	  <img src="images/certificate/thumb-IIFT.jpg" class="certificate-img">
				  	</a>					
					<p class="mt-2">IIFT</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-12">
				<div class="text-center pt-4 px-4">
				    <a href="images/certificate/thumb-TBL.jpg" data-lightbox="photos"> 
				  	  <img src="images/certificate/thumb-TBL.jpg" class="certificate-img">
				  	</a>					
					<p class="mt-2">Tea Board License</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-12">
				<div class="text-center pt-4 px-4">
				    <a href="images/certificate/thumb-coconut-development-board.jpg"
				     data-lightbox="photos"> 
				  	  <img src="images/certificate/thumb-coconut-development-board.jpg"
				  	   class="certificate-img">
				  	</a>					
					<p class="mt-2">Coconut Development Board</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-12">
				<div class="text-center pt-4 px-4">
				    <a href="images/certificate/thumb-coffee-board.jpg" data-lightbox="photos"> 
				  	  <img src="images/certificate/thumb-coffee-board.jpg" class="certificate-img">
				  	</a>					
					<p class="mt-2">Coffee Board</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-12">
				<div class="text-center pt-4 px-4">
				    <a href="images/certificate/Thumb-TRADEMARK-REGISTRTION-CLASS-29.jpg" data-lightbox="photos"> 
				  	  <img src="images/certificate/Thumb-TRADEMARK-REGISTRTION-CLASS-29.jpg" class="certificate-img">
				  	</a>					
					<p class="mt-2">TRADEMARK-REGISTRATION-CLASS-29</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-12">
				<div class="text-center pt-4 px-4">
				    <a href="images/certificate/Thumb-TRADEMARK-REGISTRATION-CLASS-31.jpg" data-lightbox="photos"> 
				  	  <img src="images/certificate/Thumb-TRADEMARK-REGISTRATION-CLASS-31.jpg" class="certificate-img">
				  	</a>					
					<p class="mt-2">TRADEMARK-REGISTRATION-CLASS-31</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-12">
				<div class="text-center pt-4 px-4">
				    <a href="images/certificate/thumb_iso-9001-2015.jpg" data-lightbox="photos"> 
				  	  <img src="images/certificate/thumb_iso-9001-2015.jpg" class="certificate-img">
				  	</a>					
					<p class="mt-2">ISO 9001:2015</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-12">
				<div class="text-center pt-4 px-4">
				    <a href="images/certificate/Thumb_FSSAI.png" data-lightbox="photos"> 
				  	  <img src="images/certificate/Thumb_FSSAI.png" class="certificate-img">
				  	</a>					
					<p class="mt-2">FSSAI License No.10020022011728</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-12">
				<div class="text-center pt-4 px-4">
				    <a href="images/certificate/EXIM_thumb.png" data-lightbox="photos"> 
				  	  <img src="images/certificate/EXIM_thumb.png" class="certificate-img">
				  	</a>					
					<p class="mt-2">EXIM Membership of the
						India Chamber of Commerce</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-12">
				<div class="text-center pt-4 px-4">
				    <a href="images/certificate/Thumb_dun & bradstreet.png" data-lightbox="photos"> 
				  	  <img src="images/certificate/Thumb_dun & bradstreet.png"
				  	   class="certificate-img">
				  	</a>	 				
					<p class="mt-2">dun & bradstreet</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-12">
				<div class="text-center pt-4 px-4">
				    <a href="images/certificate/thumb-spices-board.jpg" data-lightbox="photos"> 
				  	  <img src="images/certificate/thumb-spices-board.jpg" class="certificate-img">
				  	</a>					
					<p class="mt-2">Spices Board</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-12">
				<div class="text-center pt-4 px-4">
				    <a href="images/certificate/thumb-TPCI.jpg" data-lightbox="photos"> 
				  	  <img src="images/certificate/thumb-TPCI.jpg" class="certificate-img">
				  	</a>					
					<p class="mt-2">TPCI</p>
				</div>
			</div>
			
		</div>
	</div>
</section>

<section class="bs-section calltoaction">
    <!--overlay-->
    <div class="overlay">
      <!--container-->
      <div class="container">
        <!--row-->
        <div class="row align-items-center">
          <div class="col-lg-4 col-md-4 col-12">
          	<span class="text-light">Submit Your Requirements</span>
          	<h3 class="text-light">Just One Step Ahead</h3>
          </div> 

          <div class="col-lg-8 col-md-8 col-12">
          	<div class="f-right">
          		<div class="row g-3 align-items-center">
				  <div class="col-lg-8 col-md-8 col-12">
				  	<div class="mt-5">
				    <input type="email" id="inputPassword6" class="form-control about-input"
				     aria-describedby="passwordHelpInline" placeholder="Enter Email Address">
				    </div>
				  </div>
				  <div class="col-lg-4 col-md-4 col-12">
				    <div class="mt-4 float-left">
				    	<button type="button" class="btn btn-light about-btn">Enquire Now</button>
				    </div>
				  </div>
				</div>
          	</div>
          </div> 
        </div>
        <!--/row-->
      </div>
      <!--container-->
    </div>
    <!--/overlay-->
  </section>

<?php include 'footer.php'; ?>