<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<script src="https://cdn.tailwindcss.com"></script>
<head>
    <meta charset="UTF-8">
    <title>How to make Responsive Website with video background</title>
    <style>
        /* * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
body {
	font-family: nexa;
} */
ul {
	list-style: none;
}
a {
	text-decoration: none;
	color: inherit;
	cursor: pointer;
}
section {
	display: flex;
	flex-direction: column;
	align-items: center;
	/* padding: 110px 100px; */
}
@media (max-width: 1000px) {
	section {
		/* padding: 100px 50px; */
	}
}
@media (max-width: 600px) {
	section {
		/* padding: 125px 30px; */
	}
}
/* header {
	position: absolute;
	top: 0;
	left: 0;
	z-index: 10;
	width: 100%;
	display: flex;
	justify-content: space-between;
	align-items: center;
	color: #fff;
	padding: 35px 100px 0;
}
header a {
	text-transform: capitalize;
	font-weight: 900;
}
header h2 {
	text-transform: uppercase;
}
header .nav {
	display: flex;
}
header .nav li {
	margin: 0 15px;
}
header .nav li:first-child {
	margin-left: 0;
}
header .nav li:last-child {
	margin-right: 0;
}
@media (max-width: 1000px) {
	header {
		padding: 20px 50px;
	}
}
@media (max-width: 700px) {
	header {
		flex-direction: column;
	}
	header h2 {
		margin-bottom: 15px;
	}
	header .nav li {
		margin: 0 7px;
	}
} */
.box {
	position: relative;
	justify-content: center;
	min-height: 100vh;
	color: #fff;
	text-align: center;
}
.box video {
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	object-fit: cover;
	z-index: -1;
}
.box h1 {
	margin-bottom: 15px;
	font-size: 65px;
	text-transform: uppercase;
	text-shadow: 0 2px 2px rgba(0, 0, 0, 0.5);
}
.box h3 {
	margin-bottom: 40px;
	font-size: 25px;
}
.box a.boxBtn {
	padding: 15px 35px;
	background: transparent;
	border-radius: 50px;
	color: #fff;
	text-transform: uppercase;
	border: 4px solid #fff;
	transition: all .5s;
}
.box a.boxBtn:hover {
	background: #fff;
	color: #000;
}
@media (max-width: 800px) {
	.box {
		min-height: 200px;
	}
	.box h1 {
		font-size: 32px;
	}
	.box h3 {
		font-size: 20px;
	}
	.box a.boxBtn {
		padding: 15px 40px;
	}
}

    </style>
</head>
<body>
    {{-- <header>
		<h2><a href="#">Yougik</a></h2> 
		<ul class="nav">  
			<li><a href="#">Home</a></li>
			<li><a href="#about">About</a></li> 
			<li><a href="#services">Services</a></li>
			<li><a href="#contact">Contact</a></li> 
		</ul>
	</header> --}}
	
	<section class=" relative w-100 sm:h-50 md:h-50 lg:h-50 xl:h-100 2xl:h-100">  
        {{-- <iframe src="https://www.youtube.com/embed/ubWEwdmBltQ?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=1" frameborder="0" allowfullscreen></iframe> --}}
		<video src="assets/impitvideo.mp4"autoplay muted loop></video>
		{{-- <h1>Yoga Center</h1> 
		<h3>Find your own path in yoga</h3>
		<a href="#" class="boxBtn">Contact Us</a>    --}}
	</section>
</body>
</html>
