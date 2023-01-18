<div style="width:50%;margin: 40px auto;background:#eee;"><div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://images.pexels.com/photos/414171/pexels-photo-414171.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.pexels.com/photos/371633/pexels-photo-371633.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.pexels.com/photos/358482/pexels-photo-358482.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<script>
  $('#carouselExampleControls').carousel();
</script>
{{-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="main.css" rel="stylesheet" type="text/css">
    <title>Responsive Image Slider Only With Html And Css</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      body {
    padding: 20px;
    background: #333;
}
.h1-title {
    text-align: center;
    padding-bottom: 20px;
    color: #fff;
}
.slides {
    width: 609px;
    margin: 0 auto;
    position: relative;
    display: block;
}
.slides input { 
    display: none; 
}

.slide-container { 
    display: block;
}

.slide {
    top: 0;
    opacity: 0;
    display: block;
    position: absolute;
    transform: scale(0);
    transition: all .7s ease-in-out;
}

.slide img {
    width: 100%;
    height: 100%;
    display: block;
}

.nav label {
    display: none;
    position: absolute;
    cursor: pointer;
    color: rgba(0,0,0,0.5);
    text-align: center;
    margin-top: 29%;
}

.nav label:hover { 
    color: #000;
}

.nav .next { 
    right: 5px; 
}

.nav .prev {
    left: 5px;
} 

input:checked + .slide-container  .slide {
    opacity: 1;
    transform: scale(1);
    transition: opacity 1s ease-in-out;
}

input:checked + .slide-container .nav label { 
    display: block; 
}

.nav-dots {
	width: 100%;
	height: 11px;
	display: block;
	position: absolute;
	text-align: center;
    margin-top: 63%;
}

.nav-dots .nav-dot {
	width: 11px;
	height: 11px;
	margin: 0 4px;
	position: relative;
	border-radius: 100%;
	display: inline-block;
	background-color: rgba(0, 0, 0, 0.6);
}

.nav-dots .nav-dot:hover {
	cursor: pointer;
	background-color: rgba(0, 0, 0, 0.8);
}

input#img-1:checked ~ .nav-dots label#img-dot-1,
input#img-2:checked ~ .nav-dots label#img-dot-2,
input#img-3:checked ~ .nav-dots label#img-dot-3,
input#img-4:checked ~ .nav-dots label#img-dot-4,
input#img-5:checked ~ .nav-dots label#img-dot-5,
input#img-6:checked ~ .nav-dots label#img-dot-6 {
	background: rgba(0, 0, 0, 0.8);
}
@media screen and (max-width: 609px) {
  .slides {
    width: 100%;
  }
}

.myvideo {
  text-decoration: none;
  color: #fff;
  background: red;
  text-align: center;
  padding: 10px;
  font-weight: 600;
  z-index:100;
  position: absolute;
  bottom: 20px;
}
.myvideo:hover {
  color: #000;
}

    </style>
</head>
<body>
<section id="images-slider">
  
   <ul class="slides">
   
    <input type="radio" name="radio-btn" id="img-1" checked />
    <li class="slide-container">
		<div class="slide">
			<img src="assets/img/homeSlider/1-min.jpg"/>
        </div>
		<div class="nav">
			<label for="img-6" class="prev"><i class="fas fa-chevron-circle-left fa-3x"></i></label>
			<label for="img-2" class="next"><i class="fas fa-chevron-circle-right fa-3x"></i></label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-2" />
    <li class="slide-container">
        <div class="slide">
          <img src="assets/img/homeSlider/2-min.jpg"/>
        </div>
		<div class="nav">
			<label for="img-1" class="prev"><i class="fas fa-chevron-circle-left fa-3x"></i></label>
			<label for="img-3" class="next"><i class="fas fa-chevron-circle-right fa-3x"></i></label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-3" />
    <li class="slide-container">
        <div class="slide">
          <img src="assets/img/homeSlider/3-min.jpg"/>
        </div>
		<div class="nav">
			<label for="img-2" class="prev"><i class="fas fa-chevron-circle-left fa-3x"></i></label>
			<label for="img-4" class="next"><i class="fas fa-chevron-circle-right fa-3x"></i></label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-4" />
    <li class="slide-container">
        <div class="slide">
          <img src="assets/img/homeSlider/4-min.jpg"/>
        </div>
		<div class="nav">
			<label for="img-3" class="prev"><i class="fas fa-chevron-circle-left fa-3x"></i></label>
			<label for="img-5" class="next"><i class="fas fa-chevron-circle-right fa-3x"></i></label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-5" />
    <li class="slide-container">
        <div class="slide">
          <img src="assets/img/homeSlider/5-min.jpg"/>
        </div>
		<div class="nav">
			<label for="img-4" class="prev"><i class="fas fa-chevron-circle-left fa-3x"></i></label>
			<label for="img-6" class="next"><i class="fas fa-chevron-circle-right fa-3x"></i></label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-6" />
    <li class="slide-container">
        <div class="slide">
          <img src="assets/img/homeSlider/6-min.jpg"/>
        </div>
		<div class="nav">
			<label for="img-5" class="prev"><i class="fas fa-chevron-circle-left fa-3x"></i></label>
			<label for="img-1" class="next"><i class="fas fa-chevron-circle-right fa-3x"></i></label>
		</div>
    </li>

    <li class="nav-dots">
      <label for="img-1" class="nav-dot" id="img-dot-1"></label>
      <label for="img-2" class="nav-dot" id="img-dot-2"></label>
      <label for="img-3" class="nav-dot" id="img-dot-3"></label>
      <label for="img-4" class="nav-dot" id="img-dot-4"></label>
      <label for="img-5" class="nav-dot" id="img-dot-5"></label>
      <label for="img-6" class="nav-dot" id="img-dot-6"></label>
    </li>
</ul>
</section>
  
   
</body>
</html>     --}}