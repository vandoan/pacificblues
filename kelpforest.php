<?php /* Template Name: KelpGalleryPage */ ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<style>
body {
	background-image: url(http://pacificblues.co/wp-content/uploads/2016/02/paper.jpg);
    background-repeat: repeat;
    background-size: contain;
    opacity: 0;
    margin: 0;
    background-color: #FFFFFF;
    animation: pageFade 1.2s linear forwards;
    -webkit-animation: pageFade 1.2s linear forwards;
}
@keyframes pageFade {
  0% 	{ opacity: 0 }
  90% 	{ opacity: .7 }
  100% 	{ opacity: 1 }
}



				/*  					HEADER						*/
.0-opacity { opacity: 0; }
.item-hide { opacity: 0; display: none !important; }
#header-section {
	width: 100%;
	height: 31px;
    display: block;
	padding-top: 4px;
	position: relative;
	text-align: center;
}
#header-dot {
    top: 11px;
    width: 15px;
    right: 20px;
    opacity: .5;
    height: 15px;
    z-index: 9;
    position: fixed;
    cursor: pointer;
    border-radius: 25px;
    display: inline-block;
    background-color: #FACC3D;
    animation: dotBlink 6s linear reverse;
    -webkit-animation: dotBlink 6s linear reverse;
    -webkit-animation-delay: 2s; /* Safari */
    animation-delay: 2s;
}
#header-dot:hover { opacity: 1; background-color: #FACC3D; }
#header-text {
	animation: fadein 5s linear reverse;
    -webkit-animation: fadein 5s linear reverse;
}
#header-text a { 
   	opacity: .75;
	color: #2F88A7; 
	font-size: 20px;
    letter-spacing: 6px;
   	text-decoration: none;
   	font-family: Montserrat, "Helvetica Neue", sans-serif;
	-webkit-font-smoothing: antialiased;
}
#header-text:hover { 
 	opacity: .4; color: #FFFFFF; 
 }
 .fadeIn {
    -webkit-animation-name: fadeIn;
    -webkit-animation-duration: 5s;
    -webkit-animation-fill-mode: both;
    animation-name: fadeIn;
    animation-duration: 5s;
    animation-fill-mode: both;

 }
#header-text {
    animation: fadeinout 5s linear;
    -webkit-animation: fadeinout 5s linear;
}

@keyframes fadeinout {
  0% 	{ opacity: 0 }
  50% 	{ opacity: .3 }
  100% 	{ opacity: .6 }
}

				/*  					MENU						*/


#kelp-menu {
	top: 138px;
	opacity: 0;
	right: -205px;
	z-index: 11;
	width: 200px; 
	height: auto;
	position: fixed;
	transition: all 1s;
	background-color: #505050;
	border-radius: 8px 0 0 8px;
}
#menu-hide { opacity: 0; }
#kelp-menu.menu-open {
	opacity: .8; right: 0;
}
#menu-close {
    top: 16px;
    width: 12px;
    right: 20px;
    opacity: .5;
    height: 12px;
    cursor: pointer;
    position: absolute;
    border-radius: 25px;
    display: inline-block;
    background-color: #FFFFFF;
    animation: dotBlink 5s linear infinite;
    -webkit-animation: dotBlink 5s linear infinite;
    -webkit-animation-delay: 2s; /* Safari */
    animation-delay: 2s;
}
#menu-close:hover { opacity: 1; background-color: #FACC3D; }
#menu-list {
	margin-top: 45px;
	margin-bottom: 22px;
}
.menu-item {
	margin: 10px 15px;
}
.menu-item a {
	color: #FFFFFF; 
	font-size: 14px;
    letter-spacing: 6px;
   	text-decoration: none;
   	font-family: Montserrat, "Helvetica Neue", sans-serif;
	-webkit-font-smoothing: antialiased;
}
.menu-item a:hover {
	color: #FACC3D;
	transition: all .5s ease-out;
}
.menu-item.page-active a {
 	color: #2F88A7; 
}


				/*  					HERO						*/


#kelp-main {
}
#heroDot {
	bottom: 10px;
    width: 15px;
    right: 20px;
    opacity: .4;
    height: 15px;
    z-index: 9;
    position: absolute;
    cursor: pointer;
    border-radius: 25px;
    display: inline-block;
	background-color: rgba(0, 177, 106,0.9);
	animation: dotBlink 6s linear reverse;
    -webkit-animation: dotBlink 20s linear reverse;
    -webkit-animation-delay: 20s; /* Safari */
    animation-delay: 5s;
}
#heroDot:hover { opacity: 1; }
#heroDot.activeDot { opacity: 1; }
#hero-section {
	float:left;
	width: 100%;
	height: 500px;
    margin-top: -3px;
	position: relative;
/*	background-color: rgba(41, 128, 185, .2);
*/ }
#hero {
	width: 700px;
	margin: auto;
	height: 460px;
	display: block;
	position: relative;
}
#hero > div {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
	width: 700px;
	margin: auto;
	height: 400px;
	padding: 20px 0;
    position: absolute;
	text-align: center;
}
#imageBorder {
    display: block;
    display: block;
    display: inline-block;
    width: auto;
    height: auto;
    margin: auto;
    border-radius: 2px;
    border: #FFFFFF double 4px;
}
#imageBorder > img { 
    width: auto;
    margin: 8px;
    max-height: 380px;
    border-radius: 3px;
    display: inline-block;
}
#captionBox, #captionHidden {
	right: 0;
	top: 150px;
	opacity: .8;
	width: 300px;
	height: auto;
	position: absolute;
    background-color: rgba(250, 250, 250, 0.4);
    border-radius: 3px 0 0 3px;
	transition: all 1s; 
	-webkit-font-smoothing: antialiased;
	font-family: Montserrat, "Helvetica Neue", sans-serif;

}
#placeBox, #placeHidden {
	left: 0;
	top: 80px;
	z-index: 1;
	opacity: .8;
	width: 200px;
	height: auto;
	position: absolute;
	transition: all 1s; 
    background-color: rgba(250, 250, 250, 0.4);
   	border-radius: 0 3px 3px 0;
	-webkit-font-smoothing: antialiased;
	font-family: Montserrat, "Helvetica Neue", sans-serif;
}
#captionBody, #placeBody, #captionBodyHidden, #placeBodyHidden {
	margin: 20px 30px;
	color: rgba(0, 0, 0, 0.8);
	letter-spacing: 2px;
}
#captionHidden, #placeHidden { visibility: hidden; }
#captionBox.hideCaption { right: -305px; }
#placeBox.hidePlace { left: -205px; }

									/*				SLIDE SHOW 				*/
#right-button, #left-button {
    right: 20px;
    width: 12px;
    z-index: 10;
    opacity: 0.5;
    display: block;
    cursor: pointer;
    margin-top: 15px;
    position: absolute;
    border-radius: 4px;
    background-color: #FFFFFF;
    padding: 20px 5px 20px 6px;
}
#left-button {
	left: 20px;
	right: initial;
	padding: 20px 6px 20px 5px;
}
#left-button:hover, #right-button:hover {
 	opacity: .8;
}
#right-button img, #left-button img {
	width: 100%;
}
#slide-show {
	width: 100%;
	height:	auto;
	overflow: scroll;
	padding-top: 12px;
  	transition: all 1s;
	white-space: nowrap;
    background-color: rgba(41, 128, 185, .1);
}
#slide-show > div.first-slide { margin-left: 62px; }
#slide-show > div:last-child { margin-right: 58px; }
.slide {
	width: auto;
	height: auto;
	margin-bottom: -3px;
	cursor: pointer;
	max-width: 130px;
	max-height: 73px;
	overflow: hidden;
	padding: 6px 10px;
	border-radius: 1px;
	display: inline-block;
	transition: all .5s ease-out;
}
.slide img { opacity: .6; }
.slide img:hover { opacity: 1; }
.slide.viewed {
	opacity: .4;
}
.slide.viewed:hover { opacity: 1; }
.slide.active, .slide.active img {
	opacity: .9;
	background-color: rgba(41, 128, 185, .4);
}
.slide > div > img { width: auto; max-height: 73px; }
.imageLocation, .imageCaption { display: none; }
#about-section {
	width: 100%; 
	float: left;
	height: 900px;
	position: relative;
    background-color: rgba(41, 128, 185, .1);
}
#aboutBody {
	margin-top: 200px;
    margin-left: 100px;
	-webkit-font-smoothing: antialiased;
	font-family: Montserrat, "Helvetica Neue", sans-serif;
}
#aboutHeadline {
	font-size: 56px;
	margin-left: 60px;
    margin-bottom: 30px;
    letter-spacing: 15px;
    color: rgba(0, 0, 0, .8);
}
#aboutHeadline span {
    float: left;
    width: 15px;
	font-size: 26px;
    margin-top: 20px;
    margin-right: 20px;
    padding-bottom: 9px;
    border-bottom: solid 5px rgba(0, 0, 0, .7);
}
#aboutText {
	font-size: 26px;
    line-height: 44px;
    margin-left: 116px;
    letter-spacing: 5px;
    color: rgba(0, 0, 0, .74);
}
#aboutText2 {
	right: 0;
	z-index: 9;
    font-size: 21px;
    margin-top: 50px;
    line-height: 36px;
    position: absolute;
    margin-right: 60px;
    letter-spacing: 5px;
    color: rgba(0, 0, 0, .7);
}
#greenBand{
	top: 500px;
	width: 100%;
	height: 22px;
	position: absolute;
	background-color: rgba(3, 166, 120, .17);
}
#greenBand2{
	top: 551px;
	width: 100%;
	height: 5px;
	position: absolute;
	background-color: rgba(3, 166, 120, .1);
}

::-webkit-scrollbar {
    width: 0px;  /* remove scrollbar space */
    background: transparent;  /* optional: just make scrollbar invisible */
}
@keyframes dotBlink {
  0% 	{ opacity: .5 }
  25% 	{ opacity: 1; background-color: #FACC3D; }
  50% 	{ opacity: .3 }
  75% 	{ opacity: 1; background-color: #FFFFFF; }
  100% 	{ opacity: .5 }
}
#footerSection {
  width: 100%;
  float: left;
  height: 500px;
  color: #FFFFFF;
  font-size: 30px;
  position: relative;
  letter-spacing: 6px;
  background-color: rgba(57, 40, 33, 0.3);
  -webkit-font-smoothing: antialiased;    
  font-family: Montserrat, "Helvetica Neue", sans-serif;
}
#footerSection a {
	color: #FFFFFF;
}
#footerSection > a > div {
	width: 100%;
	position: absolute;
	-webkit-font-smoothing: antialiased;  
	font-family: Montserrat, "Helvetica Neue", sans-serif;
}
#footerSection > a > div:hover {
	opacity: .7;
}
#footerSection > a:hover {
	 color: #FACC3D;
	 transition: all .5s ease-out;
}
#meBand{
	top: 140px;
	height: 28px;
	background-color: rgba(57, 40, 33, 0.25);
}
#pacificBand{
	top: 78px;
	height: 44px;
	background-color: rgba(57, 40, 33, 0.15);
}
#coralBand{
	top: 216px;
	height: 64px;
	background-color: rgba(57, 40, 33, 0.1);
}
#kelpBand{
	top: 300px;
	height: 130px;
	width: 100%;
	position: absolute;
	-webkit-font-smoothing: antialiased;  
	background-color: rgba(57, 40, 33, 0.15);
	font-family: Montserrat, "Helvetica Neue", sans-serif;
}
#meText {
    right: 200px;
	opacity: .8;
    font-size: 18px;
    margin-top: 3px;
    position: absolute;
}
#pacificText {
    right: 60px;
	opacity: .8;
    font-size: 24px;
    margin-top: 6px;
	margin-left: 10px;
    position: absolute;
}
#kelpText {
    left: 24px;
    bottom: 8px;
    opacity: .9;
    font-size: 20px;
    margin-left: 10px;
    position: absolute;
    color: rgba(200, 247, 197, .5);
}
#coralText {
    right: 40px;
	opacity: .8;
    font-size: 28px;
    margin-top: 6px;
	margin-left: 10px;
    position: absolute;
}

</style>


<div id='kelp-main'>

	<div id='header-section'>
		<div id='header-text'><a href="http://pacificblues.co">pacific blues</a></div>
	</div>
	<div id='slide-show'>
		<div id='right-button'><img src='http://pacificblues.co/wp-content/uploads/2016/02/right.png' /></div>
		<div id='left-button'><img src ='http://pacificblues.co/wp-content/uploads/2016/02/left.png' /></div>
		<div class='slide active first-slide'>
			<div><img src='http://pacificblues.co/wp-content/uploads/2016/02/nyc.jpg'></div>
			<div class='imageLocation'>New York, Williamsburg</div>
			<div class='imageCaption'></div>
		</div>
		<div class='slide'>
			<div><img src='http://pacificblues.co/wp-content/uploads/2016/02/george.jpg'></div>
			<div class='imageLocation'>New York, Brooklyn</div>
			<div class='imageCaption'>George, a pugachu</div>
		</div>
		<div class='slide'>
			<div><img src='http://pacificblues.co/wp-content/uploads/2016/02/nyc.jpg'></div>
			<div class='imageLocation'>Mexico, Cancun</div>
			<div class='imageCaption'>Polaroid deep v tote bag asymmetrical hammock mlkshk, bitters squid tousled ugh. Narwhal blue bottle +1, synth echo park tousled tote bag. Slow-carb flannel DIY authentic blue bottle</div>
		</div>
		<div class='slide'><div><img src='http://pacificblues.co/wp-content/uploads/2016/02/george.jpg?size=400x224'/></div> </div>
		<div class='slide'><div><img src='http://pacificblues.co/wp-content/uploads/2016/02/G12.jpg'></div></div>
		<div class='slide'>
			<div><img src='http://pacificblues.co/wp-content/uploads/2016/02/nyc.jpg'></div>
			<div class='imageLocation'>New York, </br>Bahamas</div>
			<div class='imageCaption'>Bugaboo bugaboo</div>
		</div>
		<div class='slide'><div><img src='http://pacificblues.co/wp-content/uploads/2016/02/george.jpg?size=400x224'/></div> </div>
		<div class='slide'><div><img src='http://pacificblues.co/wp-content/uploads/2016/02/nyc.jpg'></div></div>
		<div class='slide'><div><img src='http://pacificblues.co/wp-content/uploads/2016/02/moon.jpg'/></div> </div>
		<div class='slide'><div><img src='http://pacificblues.co/wp-content/uploads/2016/02/george.jpg?size=400x224'/></div> </div>
		<div class='slide'><div><img src='http://pacificblues.co/wp-content/uploads/2016/02/george.jpg?size=400x224'/></div> </div>
		<div class='slide'><div><img src='http://pacificblues.co/wp-content/uploads/2016/02/nyc.jpg'></div></div>
		<div class='slide'><div><img src='http://pacificblues.co/wp-content/uploads/2016/02/george.jpg?size=400x224'/></div> </div>
		<div class='slide'><div><img src='http://pacificblues.co/wp-content/uploads/2016/02/G12.jpg'></div></div>
		<div class='slide'><div><img src='http://pacificblues.co/wp-content/uploads/2016/02/george.jpg?size=400x224'/></div> </div>
		<div class='slide'><div><img src='http://pacificblues.co/wp-content/uploads/2016/02/nyc.jpg'></div></div>
		<div class='slide'><div><img src='http://pacificblues.co/wp-content/uploads/2016/02/nyc.jpg'></div></div>
		<div class='slide'><div><img src='http://pacificblues.co/wp-content/uploads/2016/02/G12.jpg'></div></div>
		<div class='slide'><div><img src='http://pacificblues.co/wp-content/uploads/2016/02/george.jpg?size=400x224'/></div> </div>
		<div class='slide'><div><img src='http://pacificblues.co/wp-content/uploads/2016/02/G12.jpg'></div></div>
	</div>
	<div id='header-dot'>
	</div>
	
	<div id='kelp-menu'>
		<div id='menu-list'>
			<div id='menu-close'></div>
			<div class='menu-item'><a href='/homepage.php'>pacific blues</a></div>
			<div class='menu-item page-active'><a href=''>kelp gallery</a></div>
			<div class='menu-item'><a href=''>coral gallery</a></div>
			<div class='menu-item'><a href=''>about</a></div>
		</div>
	</div>

	<div id='hero-section'>
		<div id='heroDot'></div>
		<div id='placeBox'>
			<div id='placeBody'>
				test test <br> test test
			</div>
		</div>
		<div id='hero'><div><div id='imageBorder'><img src='http://pacificblues.co/wp-content/uploads/2016/02/nyc.jpg'/></div></div></div>
		<div id='captionBox'>
			<div id='captionBody'>
				Test test <br/> test test
			</div>
		</div>
		<div id='captionHidden'><div id='captionBodyHidden'></div></div>
		<div id='placeHidden'><div id='placeBodyHidden'></div></div>
	</div>


</div>

<div id='about-section'>
	<div id='aboutBody'>
		<div id='aboutHeadline'><span>a</span>gallery</div>
		<div id='aboutText'>
			&nbsp;&nbsp;&nbsp;&nbsp;on plants
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;animals
		</div>
		<div id='aboutText2'>
			from key west
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;to luang prabang
		</div>
	</div>
	<div id='greenBand'></div>
	<div id='greenBand2'></div>
</div>

<div id='footerSection'>
	<a href='me.php'>
		<div id='meBand'>
			<div id='meText'>me</div>
		</div>
	</a>
	<a href='homepage.php'>
		<div id='pacificBand'>
			<div id='pacificText'>pacific blues</div>
		</div>
	</a>
	<a href='coral.php'>
		<div id='coralBand'>
			<div id='coralText'>coral gallery</div>
		</div>
	</a>
	<div id='kelpBand'>
		<div id='kelpText'>kelp gallery</div>
	</div>
</div>

<script>
// when slide image is clicked
$('.slide').click(function(){
	// clear the active class
	$('.active').removeClass('active').addClass('viewed');
	// get the current clicked item's image src
	var currentImage = $(this).find('img').attr("src");
	var currentCaption = $(this).find('.imageCaption').text();
	var currentPlace = $(this).find('.imageLocation').text();
	// give the current slide the active class
	$(this).addClass('active');
	// fade in the new hero
	$('#hero img, #captionBody').fadeOut( 700, function(){
		$(this).load(function() { $(this).fadeIn(700); }); 
		$('#hero img').attr('src', currentImage);
		$('#captionBodyHidden').text( currentCaption );
		$('#placeBodyHidden').text( currentPlace );
		var newCaptionHeight = $('#captionHidden').height();
		var newPlaceHeight = $('#placeHidden').height();
		$('#captionBox').height( newCaptionHeight );
		$('#placeBox').height( newPlaceHeight );
		$('#captionBody').text( currentCaption ).fadeIn(700);
		$('#placeBody').text( currentPlace ).fadeIn(700);
	});
});

// when the menu dot is clicked
$('#header-dot').click(function(){
	if($('#kelp-menu').hasClass('menu-open')){
		$('#kelp-menu').removeClass('menu-open');
	} else {
		$('#kelp-menu').addClass('menu-open');
		$(this).addClass('item-hide');
	}
});
// menu close button
$('#menu-close').click(function(){
	$('#kelp-menu').addClass('menu-hide');
	$('#kelp-menu').removeClass('menu-open');
	$('#header-dot').removeClass('item-hide');
});

// scroll button
$('#right-button').click(function(){
	var currentPosition = $('#slide-show').scrollLeft();
	$('#slide-show').animate( { scrollLeft: '+=700' }, 1000);
});
$('#left-button').click(function(){
	var currentPosition = $('#slide-show').scrollLeft();
	$('#slide-show').animate( { scrollLeft: '-=700' }, 1000);
});
$('#heroDot').click(function(){
	if($('#heroDot').hasClass('activeDot')){
		$('#heroDot').removeClass('activeDot');
		$('#captionBox').removeClass('hideCaption');
		$('#placeBox').removeClass('hidePlace');
		console.log('true');
	} else {
		$('#heroDot').addClass('activeDot');
		$('#captionBox').addClass('hideCaption');
		$('#placeBox').addClass('hidePlace');
	} 
});
</script>