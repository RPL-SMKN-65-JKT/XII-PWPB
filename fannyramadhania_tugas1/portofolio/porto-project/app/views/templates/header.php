<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $data['judul']; ?></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/css/<?php echo $data['style']; ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <link rel="stylesheet"  href="<?php echo BASEURL; ?>/img">
  <link rel="stylesheet"  href="<?php echo BASEURL; ?>/js">
</head>
<style type="text/css">

  .service-item p{
    margin-left: 25%;
  }

  body{
    font-family: times new roman;
  }

  .work-item{
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
  }

  .work-img{
    background-color: #F9B5D0;
    margin: 2%;
    padding: 2%;
    font-weight: bold;
    font-size: 20px;
    border-radius: 22px;
  }

  .work-img p{
    text-align: center;
    margin-top: 1%;
  }
  .work img{
    width: 500px;
  }

  .sosmed{
    display: flex;
    font-family: times new roman;
  }

  .item-sosmed{
    display: flex;
    justify-content: space-around;

  }
  .sosialmedia{
    margin-bottom: 2%;
  }

  .sosmed h6{
    align-self: center;
    margin-left: 2%;
  }

  .judul{
    display: flex;
    flex-direction: column;
  }
  .line{
    align-self: center;
  }

  .service{
    padding-top: 3%;
    background-color: #EEEEEE;
  }

 .carousel{
  align-self: center;
 }

 .maps{
  display: flex;
 }

 .call{
  padding-top: 2%;
  display: flex;
 }

 .contact{
  width: 450px;
padding: 2%;
 }

 .contact p{
  margin-left: 4%;
  align-self: center;
  color: #EEEEEE;
 }

 .foot-item{
  display: flex;
  justify-content: space-around;
 }

 footer{
  margin-top: 7%;
  background-color: #FF597B;
 }

 .kotak{
  padding: 2%;
 }

 .sosialmedia a{
  font-size: 20px;
  text-decoration: none;
 }

 .sosialmedia a:hover{
  color: #FF597B;
 }

 .sosialmedia a{
  color: black;
 }

 @media screen and (max-width:767px){
  .sosialmedia{
    padding-bottom: 5%;
  }
  .item-sosmed{
    display: inline;
  }

  .sosmed h6{
    align-self: center;
  }

  .content2{
    display: flex;
    flex-direction: column;
  }
  .about-text{
    width: 100%;
  }

  .skill{
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .skill-item{
    display: flex;
    flex-direction: column;
    border: 0px;
    margin-left: 35%;
  }

  .skill-item p{
    text-align: center;
    align-self: center;
  }

  .ser{
    display: flex;
    flex-direction: column;
  }

  .service-item{
    width: 80%;
    align-self: center;
    margin: 3%;
  }

  .work{
    display: flex;
    flex-direction: column;

  }

  .work img{
    width: 80%;
    margin-left: 10%;
    margin-top: 5%;
  }

  .carousel{
    margin-top: 5%;

  }

  .present{
    display: flex;
    flex-direction: column;
    margin-left: 3%;
  }

  .foot-item{
    display: flex;
    flex-direction: column;
  }

  .item-progress1 .progress{
    width: 60%;
   }

   .item-progress1{
      display: flex;
   }
   .progress{
    align-self: center;
   }



  .item-progress2 .progress{
    width: 50%;
  }
  .item-progress3 .progress{
    width: 40%;
  }
  .item-progress4 .progress{
    width: 30%;
  }
  .item-progress5 .progress{
    width: 70%;
  }



  


 }




</style>
<body>
	<header>
		<nav class="navbar navbar-expand-lg" style="background-color: #FF597B; height: 80%;">
  <div class="container">
  
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#service">Services</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#work">Works</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#testi">Testimonials</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	</header>
 

