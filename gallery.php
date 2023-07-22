<?php include 'header.php';?>

<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</head>

<style type="">
	.banner{
		  background-image: url(images/terms.jpg);	
		  width: 100%;
		  height: 100%;
		  text-align: center;
		  }

.layer {
    background-color: rgba(0, 0, 0, 0.5);
    padding: 65px 0;
    width: 100%;
}

	.home_link{
			font-size: 36px;
			text-decoration: none;
			color: white;
			opacity: 10;
			font-weight: normal;
		}

	.home_link:hover{
			color: white;
		}

	.gallery__img{
			height: 220px;
			width: 100%;
			border-radius: 10px;
			margin-bottom: 25px;
		}

	.gallery_head{
      font-size: 48px;
      font-weight: 500;
      color: #ffffff; 
		}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
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

/* 100% Image Width on Smaller Screens */

@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}

</style>


  <div class="">
  	<div class="banner">
  	  <div class="layer">	
		<h1 class="gallery_head">Gallery</h1>
  			<a href="index.php" class="home_link">Home / </a><span class="home_link"> Gallery</span>
  	 </div>
  	</div>
  </div>

  <div class="container p-5 mb-5">
  <div class="row">
	<div class="col-lg-3 col-md-6">
		<div class="p-1">	
		    <a href="images/gallery/gallery-1.jpg" data-lightbox="photos">  	  
	  	   <img src="images/gallery/gallery-1.jpg" class="gallery__img">	
	  	  </a> 
	  </div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="p-1">	
		    <a href="images/gallery/gallery-2.jpg" data-lightbox="photos">  	  
	  	   <img src="images/gallery/gallery-2.jpg" class="gallery__img">	
	  	  </a>  	  
	  	 </div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="p-1">	
		    <a href="images/gallery/gallery-3.jpg" data-lightbox="photos">  	  
	  	   <img src="images/gallery/gallery-3.jpg" class="gallery__img">	
	  	  </a>  	  
	  </div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="p-1">
		    <a href="images/gallery/gallery-4.jpg" data-lightbox="photos">  	  
	  	   <img src="images/gallery/gallery-4.jpg" class="gallery__img">	
	  	  </a>	  	  
	  </div>
	</div>
  
  <div class="col-lg-3 col-md-6">
		<div class="p-1">
		    <a href="images/gallery/gallery-5.jpg" data-lightbox="photos">  	  
	  	   <img src="images/gallery/gallery-5.jpg" class="gallery__img">	
	  	  </a>	  	  
	  </div>
	</div>

	<div class="col-lg-3 col-md-6">
		<div class="p-1">	
		     <a href="images/gallery/gallery-6.jpg" data-lightbox="photos">  	  
	  	   <img src="images/gallery/gallery-6.jpg" class="gallery__img">	
	  	  </a>  	  
	  </div>
	</div>

	<div class="col-lg-3 col-md-6">
		<div class="p-1">
		    <a href="images/gallery/gallery-7.jpg" data-lightbox="photos">  	  
	  	   <img src="images/gallery/gallery-7.jpg" class="gallery__img">	
	  	  </a>	  	  
	  </div>
	</div>

	<div class="col-lg-3 col-md-6">
		<div class="p-1">	
		    <a href="images/gallery/gallery-8.jpg" data-lightbox="photos">  	  
	  	   <img src="images/gallery/gallery-8.jpg" class="gallery__img">	
	  	  </a>  	  
	  </div>
	</div>

	<div class="col-lg-3 col-md-6">
		<div class="p-1">
		    <a href="images/gallery/gallery-9.jpg" data-lightbox="photos">  	  
	  	   <img src="images/gallery/gallery-9.jpg" class="gallery__img">	
	  	  </a>	  	  
	  </div>
	</div>

	<div class="col-lg-3 col-md-6">
		<div class="p-1">
		    <a href="images/gallery/gallery-10.jpg" data-lightbox="photos">  	  
	  	   <img src="images/gallery/gallery-10.jpg" class="gallery__img">	
	  	  </a>	  	  
	  </div>
	</div>

	<div class="col-lg-3 col-md-6">
		<div class="p-1">
		    <a href="images/gallery/gallery-11.jpg" data-lightbox="photos">  	  
	  	   <img src="images/gallery/gallery-11.jpg" class="gallery__img">	
	  	  </a>	  	  
	  </div>
	</div>

	<div class="col-lg-3 col-md-6">
		<div class="p-1">
		    <a href="images/gallery/gallery-12.jpg" data-lightbox="photos">  	  
	  	   <img src="images/gallery/gallery-12.jpg" class="gallery__img">	
	  	  </a>	  	  
	  </div>
	</div>

	<div class="col-lg-3 col-md-6">
		<div class="p-1">
		    <a href="images/gallery/gallery-13.jpg" data-lightbox="photos">  	  
	  	   <img src="images/gallery/gallery-13.jpg" class="gallery__img">	
	  	  </a>	  	  
	  </div>
	</div>

	<div class="col-lg-3 col-md-6">
		<div class="p-1">
		    <a href="images/gallery/gallery-14.jpg" data-lightbox="photos">  	  
	  	   <img src="images/gallery/gallery-14.jpg" class="gallery__img">	
	  	  </a>	  	  
	  </div>
	</div>

	<div class="col-lg-3 col-md-6">
		<div class="p-1">
		    <a href="images/gallery/gallery-15.jpg" data-lightbox="photos">  	  
	  	   <img src="images/gallery/gallery-15.jpg" class="gallery__img">	
	  	  </a>	  	  
	  </div>
	</div>

	<div class="col-lg-3 col-md-6">
		<div class="p-1">
		    <a href="images/gallery/gallery-16.jpg" data-lightbox="photos">  	  
	  	   <img src="images/gallery/gallery-16.jpg" class="gallery__img">	
	  	  </a>	  	  
	  </div>
	</div>

	<div class="col-lg-3 col-md-6">
		<div class="p-1">
		    <a href="images/gallery/gallery-17.jpg" data-lightbox="photos">  	  
	  	   <img src="images/gallery/gallery-17.jpg" class="gallery__img">	
	  	  </a>	  	  
	  </div>
	</div>

 </div>
</div>
  
<?php include 'footer.php' ?>