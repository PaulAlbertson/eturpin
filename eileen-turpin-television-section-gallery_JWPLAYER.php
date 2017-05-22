<?php
$sectionVar = $_REQUEST["sectionVar"];
$vimeoArray = array("32765134","32763808","32765373","32764292","32765155","32763713","32763609","32763400","32765356");
//echo $vimeoArray[$sectionVar];
?>
<script type="text/javascript">
sectionVar = <?php echo $sectionVar ?>;
//ogvArray = new Array();
//m4vArray = new Array();
//ogvArray = ["FlipnDiveBarbie.ogg","Cher.ogg","ShavingFunKen.ogg","FlashlightFunStacie.ogg","PizzaPartySkipper.ogg","BarbieCollectibles.ogg","ArrowheadTrucking.ogg","ArrowheadProcess.ogg","PrisonSearsSavingsBank.ogg"];
//m4vArray = ["FlipnDiveBarbie.m4v","Cher.m4v","ShavingFunKen.m4v","FlashlightFunStacie.m4v","PizzaPartySkipper.m4v","BarbieCollectibles.m4v","ArrowheadTrucking.m4v","ArrowheadProcess.m4v","PrisonSearsSavingsBank.m4v"];
if (sectionVar != 0)
{
	count = sectionVar;
}else
{
	count = 0;
}
	
</script>
<!--<?php echo $sectionVar; ?>-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Eileen Turpin - Television Gallery</title>
	<meta name="description" content="Eileen Turpin - Television Gallery">
	<meta name="author" content="">
	
	
	<meta name="viewport" content="width=device-width,initial-scale=1">
  
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
	<script type="text/javascript" src="js/lectric.js"></script>

	<link rel="stylesheet" href="css/lectric.css" media="screen" type="text/css">
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css">
	<link href="css/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript">
	//<![CDATA[
	$(document).ready(function(){
	
		$("#jquery_jplayer_1").jPlayer({
			ready: function () {
				$(this).jPlayer("setMedia", {
					//poster: "http://www.jplayer.org/video/poster/Big_Buck_Bunny_Trailer_480x270.png",
					//http://www.jplayer.org/video/ogv/Big_Buck_Bunny_Trailer.ogv
					m4v: "media/videos/"+m4vArray[sectionVar],
					ogv: "media/videos/"+ogvArray[sectionVar]
					//m4v: "media/videos/ArrowheadProcess.m4v",
					//ogv: "media/videos/Arrowhead_ProcessAE.ogv",
				})//.jPlayer("play");;
			},
			ended: function (event) {
				$(this).jPlayer("play");
			},
			swfPath: "js",
			supplied: "m4v, ogv"
		});
	});
	//]]>
  </script>
</head>
<body>
<div id="container">
	<div class="siteFrame">
		<div id="logoHeaderContent">
			<img src="media/images/tv/tv_logo.png" alt="Eileen Tuprin Print Header" /><br /><br />
		</div>
		<div id="galleryNavContainer">
			<div id="galleryThumbs">
				<ul>
					<li><a href="eileen-turpin-television-section-gallery.php?sectionVar=0"><img src="media/images/tv/thumbs/nav/tv_nav_03.jpg" /></a></li>
					<li><a href="eileen-turpin-television-section-gallery.php?sectionVar=1"><img src="media/images/tv/thumbs/nav/tv_nav_05.jpg" /></a></li>
					<li><a href="eileen-turpin-television-section-gallery.php?sectionVar=2"><img src="media/images/tv/thumbs/nav/tv_nav_07.jpg" /></a></li>
					<li><a href="eileen-turpin-television-section-gallery.php?sectionVar=3"><img src="media/images/tv/thumbs/nav/tv_nav_09.jpg" /></a></li>
					<li><a href="eileen-turpin-television-section-gallery.php?sectionVar=4"><img src="media/images/tv/thumbs/nav/tv_nav_11.jpg" /></a></li>
					<li><a href="eileen-turpin-television-section-gallery.php?sectionVar=5"><img src="media/images/tv/thumbs/nav/tv_nav_13.jpg" /></a></li>
					<li><a href="eileen-turpin-television-section-gallery.php?sectionVar=6"><img src="media/images/tv/thumbs/nav/tv_nav_15.jpg" /></a></li>
					<li><a href="eileen-turpin-television-section-gallery.php?sectionVar=7"><img src="media/images/tv/thumbs/nav/tv_nav_17.jpg" /></a></li>
					<li><a href="eileen-turpin-television-section-gallery.php?sectionVar=8"><img src="media/images/tv/thumbs/nav/tv_nav_19.jpg" /></a></li>
				</ul>
			</div>
		</div><br />
		<!-- Jplayer div-->
		<div id="videoPlayer">
				<iframe src="http://player.vimeo.com/video/<?php echo $vimeoArray[$sectionVar]?>?autoplay=1" width="640" height="480" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		</div>	
			<!--"http://player.vimeo.com/video/$vimeoArray[$sectionVar]\" width=\"640\" height=\"480\" frameborder=\"0\" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			<!--
			<div class="jp-video jp-video-360p">
			<div class="jp-type-single">
				<div id="jquery_jplayer_1" class="jp-jplayer"></div>
				<div id="jp_interface_1" class="jp-interface">
					<div class="jp-video-play"></div>
					<ul class="jp-controls">
						<li><a href="#" class="jp-play" tabindex="1">play</a></li>
		
						<li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
						<li><a href="#" class="jp-stop" tabindex="1">stop</a></li>
						<li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
						<li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
					</ul>
					<div class="jp-progress">
						<div class="jp-seek-bar">
		
							<div class="jp-play-bar"></div>
						</div>
					</div>
					<div class="jp-volume-bar">
						<div class="jp-volume-bar-value"></div>
					</div>
					<div class="jp-current-time"></div>
					<div class="jp-duration"></div>
				</div>
		
				<div id="jp_playlist_1" class="jp-playlist">
				<ul>
					<li>Title here</li>
				</ul>
			</div>	
			
			-->		
		</div>
	</div>
</div>
		<script type="text/javascript">
			// Lectric slider function for thumbnails.
		  	// function getEvent(event)
		  	// {
		  		// var x=event.currentTarget;
		  		// count=x.id;
				// slider.to(count);
		  	// };
		</script>
		<!--Bottom Navigation here-->
		<br />
		<?php require($DOCUMENT_ROOT . "bottomNavigation.html");?>
		<!--End Bottom Navigation-->
		
	</div>
<!-- 		<a href="" class="next"><img src="media/images/eileenwebpagearrows_right.png" alt="Next"></a>
  		<a href="" class="previous"><img src="media/images/eileenwebpagearrows_left.png" alt="Previous"></a>
		<script type="text/javascript">
			  $(function() {
			    // Initialize the slider
			    slider = new Lectric();
			    slider.init('#slider', {next: '.next', previous: '.previous'});			    
			    slider.to(count);
			    
			    // Keyboard shortcuts for left and right arrows
			    $(document).keydown(function(e) {
			      if (e.keyCode === 39) { 
			        e.preventDefault();
			        previous = slider.page();
			        slider.to(previous + 1);
			      } else if (e.keyCode === 37) { 
			        e.preventDefault();
			        previous = slider.page();
			        slider.to(previous - 1);
			      }
			    });
			  });
		</script> -->
</div> 
<!--! end of #container -->

<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script>
	<script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
<![endif]-->

</body>
</html>
