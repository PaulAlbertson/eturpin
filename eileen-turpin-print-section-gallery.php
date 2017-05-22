<?php
$sectionVar = $_REQUEST["sectionVar"];
?>
<script type="text/javascript">
sectionVar = <?php echo $sectionVar ?>;
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

	<title>Eileen Turpin - Print Gallery</title>
	<meta name="description" content="Eileen Turpin - Print Gallery">
	<meta name="author" content="">
	
	
	<meta name="viewport" content="width=device-width,initial-scale=1">
  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

	<link href="css/lectric.css" rel="stylesheet" media="screen" type="text/css">
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css">
	<script src="js/lectric.js" type="text/javascript"></script>
  
</head>
<body>

<div id="container">
	<div class="siteFrame">
		<div id="logoHeaderContent">
			<img src="media/images/print/printLogo.png" alt="Eileen Tuprin Print Header" /><br /><br />
		</div>
		<div id="galleryNavContainer">
			<div id="galleryThumbs">
				<ul>
					<li><img src="media/images/print/thumbs/nav/kings.png" id="0" onmousedown="getEvent(event)"/></li>
					<li><img src="media/images/print/thumbs/nav/playa.png" id="3" onmousedown="getEvent(event)"/></li>
					<li><img src="media/images/print/thumbs/nav/locals.png" id="5" onmousedown="getEvent(event)"/></li>
					<li><img src="media/images/print/thumbs/nav/bennett.png" id="7" onmousedown="getEvent(event)"/></li>
					<li><img src="media/images/print/thumbs/nav/herbs.png" id="9" onmousedown="getEvent(event)"/></li>
					<li><img src="media/images/print/thumbs/nav/riviera.png" id="11" onmousedown="getEvent(event)"/></li>
					<li><img src="media/images/print/thumbs/nav/fashion.png" id="13" onmousedown="getEvent(event)"/></li>
					<li><img src="media/images/print/thumbs/nav/looney.png" id="16" onmousedown="getEvent(event)"/></li>
					<li><img src="media/images/print/thumbs/nav/biteme.png" id="18" onmousedown="getEvent(event)"/></li>
				</ul>
			</div>
		</div><br />
		<div id="slider">
		      <div class="item"><img src="media/images/print/full/kings_1.jpg" /></div>
		      <div class="item"><img src="media/images/print/full/kings_2.jpg" /></div>
		      <div class="item"><img src="media/images/print/full/kings_3.jpg" /></div>
		      <div class="item"><img src="media/images/print/full/playa_1.jpg" /></div>
		      <div class="item"><img src="media/images/print/full/playa_2.jpg" /></div>
		      <div class="item"><img src="media/images/print/full/locals_1.jpg" /></div>
		      <div class="item"><img src="media/images/print/full/locals_2.jpg" /></div>
 		      <div class="item"><img src="media/images/print/full/bennett_1.jpg" /></div>
		      <div class="item"><img src="media/images/print/full/bennett_2.jpg" /></div>
		      <div class="item"><img src="media/images/print/full/herbs_1.jpg" /></div>
		      <div class="item"><img src="media/images/print/full/herbs_2.jpg" /></div>
		      <div class="item"><img src="media/images/print/full/riviera_1.jpg" /></div>
		      <div class="item"><img src="media/images/print/full/riviera_2.jpg" /></div>
		      <div class="item"><img src="media/images/print/full/fashion_1.jpg" /></div>
		      <div class="item"><img src="media/images/print/full/fashion_2.jpg" /></div>
		      <div class="item"><img src="media/images/print/full/fashion_3.jpg" /></div>
		      <div class="item"><img src="media/images/print/full/looney_1.jpg" /></div>
		      <div class="item"><img src="media/images/print/full/looney_2.jpg" /></div>
		      <div class="item"><img src="media/images/print/full/bite_me_1.jpg" /></div>
		</div>
		<script type="text/javascript">
			// Lectric slider function for thumbnails.
		  	function getEvent(event)
		  	{
		  		var x=event.currentTarget;
		  		count=x.id;
				slider.to(count);
		  	};
		</script>
		<!--Bottom Navigation here-->
		<?php require($DOCUMENT_ROOT . "bottomNavigation.html");?>
		<!--End Bottom Navigation-->
		
	</div>
		<a href="" class="next"><img src="media/images/eileenwebpagearrows_right.png" alt="Next"></a>
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
		</script>
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
