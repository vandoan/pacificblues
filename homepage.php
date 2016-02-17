<?php /* Template Name: HomePage */ ?>
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
  0%  { opacity: 0 }
  90%   { opacity: .7 }
  100%  { opacity: 1 }
}

.item-hide { opacity: 0; display: none !important; }
#header-dot {
    top: 11px;
    width: 30px;
    right: 20px;
    opacity: .5;
    height: 30px;
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
@keyframes dotBlink {
  0%  { opacity: .5 }
  25%   { opacity: 1; background-color: #FACC3D; }
  50%   { opacity: .3 }
  75%   { opacity: 1; background-color: #FFFFFF; }
  100%  { opacity: .5 }
}
#header-dot:hover { opacity: 1; background-color: #FACC3D; }


								/*				TOP SECTION 				*/
#pac-header { 
	width:100%; 
	float:left; 
    padding: 40px 0;
	text-align: center;
    -webkit-font-smoothing: antialiased;
}
#pac-header span:hover,#pac-header a:hover { opacity: .7; color: #2F88A7; }
#pac-header > div a { 
/*    color: #2B2B2B;*/
   	color: #2F88A7;
    font-size: 24px;
    letter-spacing: 6px;
   	text-decoration: none;
   	font-family: Montserrat, "Helvetica Neue", sans-serif;
}
#pac-header > div a {
    opacity: .7;
    animation: fadeinout 10s linear reverse;
    -webkit-animation: fadeinout 10s linear reverse;
}
#pac-header > div a:hover { opacity: .3; }

								/*				WHALE SECTION    			*/
#whale-sect {
    width: 100%;
    float: left;
    height: 500px;
    padding-top: 40px;
    text-align: center;
    margin-right: -160px;
    overflow: hidden;
    background-color: rgba(41, 128, 185, .15);
}
#blueBand {
  width: 100%;
  height: 245px;
  position: absolute;
  background-color: rgba(41, 128, 185, .3);
}
#blueBand2 {
  width: 100%;
  height: 38px;
  margin-top: 55px;
  position: absolute;
  background-color: rgba(41, 128, 185, .2);
  -webkit-animation: fadein 12s; /* Safari, Chrome and Opera > 12.1 */
}
@-webkit-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}
#blueBand3 {
  width: 100%;
  height: 38px;
  margin-top: 83px;
  position: absolute;
  background-color: rgba(41, 128, 185, .2);
  -webkit-animation: fadein 16s; /* Safari, Chrome and Opera > 12.1 */
}
#blueBand4 {
  width: 100%;
  height: 38px;
  margin-top: 100px;
  position: absolute;
  background-color: rgba(41, 128, 185, .2);
  -webkit-animation: fadein 5s; /* Safari, Chrome and Opera > 12.1 */
}
#blueBand5 {
  width: 100%;
  height: 122px;
  margin-top: 116px;
  position: absolute;
  background-color: rgba(41, 128, 185, .32);
  -webkit-animation: fadein 20s; /* Safari, Chrome and Opera > 12.1 */
}
#whale-body {
  width: 875px;
  height: 290px;
  margin: 0 auto;
  position: relative;
  margin-right: -334px;
}
#whale-body > div { display: inline-block; }
#whale-body > div > img { width: 100%; }
#whale-mid {
	z-index: 99;
	width: 450px;
	position: absolute;
}	        
 #whale-fin { 
    bottom: 0; 
    width: 240px;
	height: 102px;
 	position: absolute;
    animation-duration: 8s;
    -webkit-animation-duration: 8s;
    background-repeat: no-repeat;
    background-position: left top;
    animation-fill-mode: both;
    -webkit-animation-fill-mode: both;
 }
 #whale-head {
	left: 2.5%;
  z-index: 11;
	width: 181px;
	margin-top: 52px;
	margin-left: 15px;
	position: absolute;
	margin-left: 95px;
	position: absolute;
	background-repeat: no-repeat;
	background-position: left top;
	animation-duration: 4s;
	animation-fill-mode: both;
	-webkit-animation-duration: 4s;
	-webkit-animation-fill-mode: both;
 }
 #whale-mid { left: 34%; }
 #whale-tail {
 	top: 25%;
  right: 4%;
	position: absolute;
  animation-duration: 8s;
  animation-fill-mode: both;
	-webkit-animation-duration: 8s;
  -webkit-animation-fill-mode: both;
 }
 #whale-fin {
 	left: 33.5%;
 	bottom: 32px;
    animation-delay: 1s;
 	-webkit-animation-delay: 1s; /* Chrome, Safari, Opera */
 }

								/*				MENU 				*/
#kelp-menu {
  top: 138px;
  opacity: 0;
  z-index: 111;
  width: 200px; 
  right: -205px;
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
  transition: all 1s ease-out;
}
.menu-item.page-active a {
  color: #2F88A7; 
}

#whaleSwitch{
    left: 20px;
    top: 410px;
    width: 15px;
    opacity: .5;
    height: 15px;
    z-index: 9;
    position: absolute;
    cursor: pointer;
    border-radius: 25px;
    display: inline-block;
    background-color: rgba(0, 177, 106,0.9);
    animation: dotBlink 6s linear reverse;
    -webkit-animation: dotBlink 6s linear reverse;
    -webkit-animation-delay: 2s; /* Safari */
    animation-delay: 2s;
}
#whaleSwitch:hover { opacity: 1; }
#whaleSwitch.active { opacity: 1; }

							/*			INTERACTION				*/
 @-webkit-keyframes wobble { 
    0% { -webkit-transform: translateX(0%); } 
    15% { -webkit-transform: translateX(-.5%) rotate(-.5deg); } 
    30% { -webkit-transform: translateX(1.5%) rotate(1deg); } 
    45% { -webkit-transform: translateX(-1%) rotate(-1deg); } 
    60% { -webkit-transform: translateX(1%) rotate(1deg); } 
    75% { -webkit-transform: translateX(-.2%) rotate(-.2deg); }
    100% { -webkit-transform: translateX(0%); } 
 }
 .wobble { 
    animation-name: wobble; 
    -webkit-animation-name: wobble; 
 }
.delay-1 {
    animation-delay: .1s;
	-webkit-animation-delay: .1s; /* Chrome, Safari, Opera */
}
.delay-2 {
	-webkit-animation-delay: .2s; animation-delay: .2s;
}
.delay-3 {
	-webkit-animation-delay: .7s;animation-delay: .7s;
}
.delay-5 {
	-webkit-animation-delay: 1s; animation-delay: 1s;
}
@-webkit-keyframes fadeIn {
    0% {opacity: 0;} 100% {opacity: 1;}
} 
@keyframes fadeIn {
    0% {opacity: 0;} 100% {opacity: 1;}
}
.fadeIn {
    animation-name: fadeIn;
    animation-duration: 5s;
    animation-fill-mode: both;
    -webkit-animation-name: fadeIn;
    -webkit-animation-duration: 5s;
    -webkit-animation-fill-mode: both;
}
@-webkit-keyframes fadeinout {
  0% 	{ opacity: .5 }
  25% 	{ opacity: .5 }
  35% 	{ opacity: .2 }
  50% 	{ opacity: .7 }
  70% 	{ opacity: .4 }
  90% 	{ opacity: .8 }
  100% 	{ opacity: .5 }
}
@keyframes fadeinout {
  0% 	{ opacity: .5 }
  25% 	{ opacity: .5 }
  35% 	{ opacity: .2 }
  50% 	{ opacity: .7 }
  70% 	{ opacity: .4 }
  90% 	{ opacity: .8 }
  100% 	{ opacity: .5 }
}

#aboutSection {
  width: 100%;
  float: left;
  height: 700px;
  margin-top: 100px;
  -webkit-font-smoothing: antialiased;    
  background-color: rgba(34, 49, 63,0.25);
  font-family: Montserrat, "Helvetica Neue", sans-serif;
}
#aboutHeader {
    color: white;
    font-size: 40px;
    margin: 53px 60px;
    letter-spacing: 16px;
    margin-top: 60px;
    margin-left: 300px;
}
#aboutText {
    color: white;
    font-size: 24px;
    line-height: 46px; 
    margin: 28px 110px;
    letter-spacing: 6px;
    margin-left: 347px;
}
#aboutWhaleTail{
  right; 0;
  width: 100px;
  position: absolute;
}
#aboutWhaleTail img { width: 100%; }
#linkSection {
  width: 100%;
  float: left;
  height: 800px;
  color: #FFFFFF;
  font-size: 30px;
  position: relative;
  letter-spacing: 6px;
  background-color: rgba(57, 40, 33,0.5);
  -webkit-font-smoothing: antialiased;    
  font-family: Montserrat, "Helvetica Neue", sans-serif;
}
#linkSection a {
  text-decoration: none;
  color: rgba(255, 255, 255,0.77);
}
#linkSection a:hover { opacity: .5; }
#mePage {
  width: 35%;
  height: 100%;
  position: absolute;
  background-color: rgba(57, 40, 33,0.3);
  -webkit-animation: mePage 10s infinite;
}
#kelpPage {
  width: 35%;
  height: 100%;
  right: 0;
  position: absolute;
  background-color: rgba(57, 40, 33,0.1);
  -webkit-animation: kelpPage 10s infinite;
  -webkit-animation-delay: 3s;

}
#mePage > div {
  top: 50%;
  left: 60px;
  bottom: 50%;
  position: absolute;
}
#kelpPage > div {
  top: 50%;
  right: 60px;
  bottom: 50%;
  position: absolute;
}
@-webkit-keyframes mePage {
  50%  { color: rgba(47, 136, 167, .5) }
  100%  { color: #FFFFFF }
}
@-webkit-keyframes kelpPage {
  50%  { color: rgba(63, 195, 128, .3) }
  100%  { color: #FFFFFF }
}
#brownBanner {
  width: 100%;
  bottom: 30px;
  height: 224px;
  position: absolute;
  background-color: rgba(57, 40, 33,0.1);
}
#brownBanner2 {
  width: 100%;
  bottom: 120px;
  height: 70px;
  position: absolute;
  background-color: rgba(57, 40, 33,0.1);
}
#brownBanner3 {
  width: 100%;
  top: 400px;
  height: 10px;
  position: absolute;
  background-color: rgba(57, 40, 33,0.1);
}
</style>
<div id='header-dot'></div>
<div id='kelp-menu'>
  <div id='menu-list'>
    <div id='menu-close'></div>
    <div class='menu-item page-active'><a href='/homepage.php'>pacific blues</a></div>
    <div class='menu-item'><a href='/kelpforest.php'>kelp gallery</a></div>
    <div class='menu-item'><a href=''>coral gallery</a></div>
    <div class='menu-item'><a href=''>about</a></div>
  </div>
</div> 


<div id='whale-container'>
	<div id='pac-header'>
		<div><a href="http://pacificblues.co"><span>pac</span><span class='delay-2 fadeIn'>ific</span> blue<span class='fadeIn delay-5'>s</span></a></div>
	</div>
 


	<div id='whale-sect'>
    <div id='whaleSwitch'></div>
    <div id='blueBand'></div>
    <div id='blueBand2'></div>
    <div id='blueBand3'></div>
    <div id='blueBand4'></div>
    <div id='blueBand5'></div>
		<div id='whale-body'>
			<div id='whale-head'> <img src='http://pacificblues.co/wp-content/uploads/2016/02/whale-head.png' alt='whale head'></div>
			<div id='whale-mid'> <img src='http://pacificblues.co/wp-content/uploads/2016/02/whale-body.png' alt='whale body'></div>
			<div id='whale-tail' class='wobble animated'> <img src='http://pacificblues.co/wp-content/uploads/2016/02/whale-tail.png' alt='whale tail'></div>
			<div id='whale-fin' class='wobble animated'> <img src='http://pacificblues.co/wp-content/uploads/2016/02/whale-fin.png'> </div>
		</div>
	</div>

  <div id='aboutSection'>
    <div id='aboutHeader'>the p. blu<span style='color:#2F88A7;opacity:.7;'>e</span>s</div>
    <div id='aboutText'>
      a collection 
      <br/>&nbsp;&nbsp;&nbsp;&nbsp;of code
      <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and color</div>
    <div id='aboutWhaleTail' class='wobble animated'> <img src='http://pacificblues.co/wp-content/uploads/2016/02/whale-tail.png'> </div>
  </div>

  <div id='linkSection'>
    <div id='brownBanner'></div>
    <div id='brownBanner2'></div>
    <div id='brownBanner3'></div>
    
    <a href='me'>
      <div id='mePage'>
        <div>me</div>
      </div>
    
    </a>
    <a href='kelpforest.php'>
      <div id='kelpPage'>
        <div>the kelp gallery</div>
      </div>
    </a>
    </div>
  </div>
</div>


<script>

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

// whale switch 
$('#whaleSwitch').click(function(){
  if($('#whaleSwitch').hasClass('active')){
    $('#whaleSwitch').removeClass('active');
  } else {
    $('#whaleSwitch').addClass('active');
  }
});
// move whale
var lastScrollTop = 0;
$(window).scroll(function() {
  var st = $(window).scrollTop();
  if ($('#whaleSwitch').hasClass('active')){
    if (st > lastScrollTop) {
      $('#whale-body').animate({marginRight: '+=10'}, 10);
      console.log('work');
    } else {
      $('#whale-body').animate({marginRight: '-=10'}, 10);
    }
  }
  lastScrollTop = st;
});
</script>


