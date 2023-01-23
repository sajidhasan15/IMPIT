<style>
    /* --- Default Overrides - Personal Preference --- */


/* *,
*:before,
*:after {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
} */

/* form > * {
	outline: none;
} */

a {
	text-decoration: none;
	color: inherit;
}

ul, li {
	list-style: none;
}


/* --- Clearfix for floated Elements --- */

/* I never ended up using this for the nav-bar */
.clearfix:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: " ";
  clear: both;
  height: 0;
}


/* --- Typography --- */


body {
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	background-color: #C8C8C8;
	color: #666;
	/* margin-top: 60px;  */
}

p {
	line-height: 1.4;
}

.small-caps {
	text-transform: uppercase;
	letter-spacing: 0.15rem;
	font-size: 0.7rem;
}

.bolder {
	font-weight: bolder;
}

.lighter {
	font-weight: lighter;
}

.text-center {
	text-align: center;
}

.site-logo {
	font-size: 2rem;
	font-weight: bolder;
	text-transform: uppercase;
	letter-spacing: 0.8rem;
	margin: 0 0;
	margin-right: 6%;
	padding-right: 6%;
}

/* --- Elements --- */


.container {
	max-width: 1200px; 
	margin: 0 auto; 
}
.container-nav{
	max-width: 1920px;
	margin: 0 auto;
	display: inline-block;
}

.nav-bar {
	/* position: fixed;  */
    /* lock to top */
	/* top: 0; */
	width: 100%; /* full width */
	background-color: #C8C8C8;
	/* height: 100px; */
}

.nav-bar .container {
	display: flex;
	align-items: center; /* vertically center */
	height: 100%;
}

/* Hide checkbox that controls Mobile Nav Button*/
#drop-down-cbox {
	display: none;
}

/* Mobile Nav Button */
#drop-down-cbox + label {
	position: relative;
	display: none;
	width: 60px;
	height: 60px;
	overflow: hidden;
	background-color: transparent;
	transition: all 10ms ease-in-out;
}

/* Mobile Nav Button Bars */
#drop-down-cbox + label span {
	position: absolute;
	display: block;
	background-color: #666;
	width: 34px;
	height: 4px;
	border-radius: 2px;
	left: 50%;
	transform: translate(-50%, -50%); /* centering trick */
	transition: all 300ms ease-in-out;
}

/* Mobile Nav Button Bars Invididually */
#drop-down-cbox + label span:nth-child(1) {
	top: 35%; /* evenly spaced */
}
#drop-down-cbox + label span:nth-child(2) {
	top: 50%; /* evenly spaced */
}
#drop-down-cbox + label span:nth-child(3) {
	top: 65%; /* evenly spaced */
}

/* Mobile Nav Button Styling for Checked */
#drop-down-cbox:checked + label {
	background-color: #666;
}

#drop-down-cbox:checked + label span {
	background-color: white;
}

/* Transform the bars into an 'X' */
#drop-down-cbox:checked + label span:nth-child(1) {
	top: 50%;
	transform: translate(-50%, -50%) rotate(45deg); /* center, then rotate */
}
#drop-down-cbox:checked + label span:nth-child(2) {
	left: -150%; /* move center bar out of the picture */
}
#drop-down-cbox:checked + label span:nth-child(3) {
	top: 50%;
	transform: translate(-50%, -50%) rotate(-45deg); /* center, then rotate */
}

/* Main Nav Desktop */
.main-nav {
	flex-grow: 1; /* fill remaining space */
	display: flex;
	justify-content: space-around; /* evenly space items */
	align-items: center; /* center vertically */
}

.main-nav li {
	display: block;
	/* width: 100%; */
	height: 60px;
	line-height: 60px; /* vertically center text, matches height */
	text-align: center;
}

.main-nav li a,
.main-nav li span {
/* 	display: block; */
	width: 100%;
	height: 100%;
	border: 1px solid #DBDBDB;
    padding: 4px 12px;
    text-decoration: none;
    background-color: transparent;
    color: #000000;
    font-size: 16px;
    line-height: 24px;
    border-radius: 4px;
    font-weight: bold;
}

.main-nav li a:hover,
.main-nav li span:hover {
	border-radius: 4px;
	background: #000;
    color: rgb(255, 255, 255) !important;
}

.main-nav li > ul {
	max-height: 0px; /* max-height instead of height, height can't transition to auto */
	transition: all 500ms ease-in-out;
	overflow: hidden; /* make it so nav doesn't show beyond the 0px max-height */
}

.main-nav li:hover > ul {
	max-height: 180px; /* height x how many links */
	height: auto;
}

.main-nav li > ul li a,
.main-nav li > ul li span {
	background-color: white;
}

.main-nav li > ul li a:hover,
.main-nav li > ul li span:hover {
	background-color: #666;
	color: white;
	border-bottom: none;
}

/* Tablet and Mobile View */
@media (max-width: 768px) {
	.site-logo {
		font-size: 1.5rem;
		flex-grow: 1;
		text-align: center;
	}
	
	#drop-down-cbox + label {
		display: block; /* unhide the mobile nav button */
	}
	
	.main-nav {
		max-height: 0px; /* same vertical grow transition trick as above */
		height: calc(100vh - 60px); /* take full vertical viewport height, -60px for nav-bar */
		overflow: hidden;
		position: absolute;
		top: 60px;
		line-height: auto;
		left: 0;
		width: 100%;
		flex-direction: column;
		background-color: white;
		transition: all 500ms ease-in-out;
        z-index: 999;
	}
	
	#drop-down-cbox:checked ~ .main-nav {
        z-index: 9999;
		max-height: calc(50vh - 30px);
		transition: all 500ms ease-in-out;
	}

	.main-nav li span {
		position: relative;
	}
	
	/* design and position downward arrow */
	.main-nav li span:after {
		content: "";
		width: 6px;
		height: 6px;
		position: absolute;
		top: 50%;
		margin-top: -2px;
		margin-left: 8px;
		transform: translateY(-50%) rotate(-45deg);
		border-left: 2px solid #666;
		border-bottom: 2px solid #666;
	}
	
	.main-nav li a:hover,
	.main-nav li span:hover {
		background-color: #666;
		color: white;
		border-bottom: none;
	}
	
	.main-nav li > ul li {
		position: relative;
	}
	
	.main-nav li > ul li a,
	.main-nav li > ul li span {
		background-color: #eee;
	}
	
}

</style>
<nav class="nav-bar">
	<div class="container-nav">
		<input type="checkbox" id="drop-down-cbox"/>
		<label for="drop-down-cbox">
			<span></span>
			<span></span>
			<span></span>
		</label>

		<h1 class="site-logo">
            <a class="navbar-brand" href="/">
				<img src="assets/img/IMPIT_logo.png" width="200px" >
                {{-- <img src="https://static.wixstatic.com/media/a983bc_c9d2a261a7ba4174a898ee09b215ccbd~mv2.png/v1/crop/x_89,y_188,w_351,h_138/fill/w_252,h_99,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/LOGO_1-removebg-preview%20(2).png" alt=""> --}}
            </a>
        </h1>

		<ul class="main-nav small-caps py-2" style="margin-bottom: 0; ">
			
			<li><a href="/about">ABOUT</a></li>
			<li><a href="/services">SERVICES</a></li>
			<li><a href="/team">TEAM</a></li>
			<li><a href="/gallery">GALLERY</a></li>
			<li><a href="/career">CAREER</a></li>
			<li><a href="/contact">CONTACT</a></li>
			
		</ul>
		
	</div>
</nav>



