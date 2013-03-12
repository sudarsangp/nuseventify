<!DOCTYPE html>
<html>
<head>
<title>NUS Eventify</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css" />
<link
	href="twitter-bootstrap-v2/docs/assets/css/example-fixed-layout.css"
	rel="stylesheet">
<style>
	#elem{
	
     background: url('http://payload.cargocollective.com/1/3/108619/1612251/background-white.jpg') center center no-repeat;
     -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
	}
	.peopleCarouselImg{
	  width: 1450px;
	  height: 525px;
		max-height: 525px;	
	}
	</style>
						<script>
						$(document).ready(function() {

	    				var ImgURLArray=new Array();
	    				var SiteURLArray=new Array();
	    				
	    				ImgURLArray=<?php echo json_encode($ImgURL_List);  ?>;
	    				SiteURLArray=<?php echo json_encode($SiteURL_List); ?>;
						for(var i=0;i<ImgURLArray.length;i++)
						{
							SiteURLArray[i]=stripslashes(SiteURLArray[i]);
							ImgURLArray[i] = stripslashes(ImgURLArray[i]);
							Console.log("slashes stripped");
						}
						var imgUrls;
						for(var i=0;i<ImgURLArray.length;i++)
						{
							imgUrls += '<div>' + ('<div class="item"><img class="peopleCarouselImg" src='+ImgURLArray[i]+'>'+ '</div>');	
							
						}
						$(".carousel-inner").append(imgUrls);
						});
						</script>
						<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="twitter-bootstrap-v2/docs/assets/js/jquery.js"></script>  
    <script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-carousel.js"></script>  
    <script type="text/javascript">

		$('#myCarousel, #myCarousel2').carousel({
		  	interval: 2000
		})
	</script>
</head>
<body>
	<?php
	$link = mysql_connect('localhost','root','');
	mysql_set_charset('UTF-8');
	if(!$link){
		echo('Could not connect successfully');
	}
	else{
    	echo('Connected successfully');
	}
	$db_selected = mysql_select_db('database',$link);
	if(!$db_selected)
	{
    	die('Could not find the database' .mysql_error());
	}
	$query="Select Img_URL,Site_URL from image";
	$result=mysql_query($query);
	if(!$result)
	{
		die('Invalid query: ' . mysql_error());
	}
	$ImgURL_List=array();
	$SiteURL_List=array();
	$i=0;
	while($URL_row = mysql_fetch_array($result))
	{
		$ImgURL_List[$i]="$URL_row[Img_URL]";
		$SiteURL_List[$i]="$URL_row[Site_URL]";
		$i++;
	}
	for($i=0;$i<1;$i++)
	{
		print($ImgURL_List[$i]);
		//print($SiteURL_List[$i]);
	}
	?>

	<div class="container-fluid" id="elem">
	<!--<div class="container">	-->

		<!--<h1>Sandeep</h1>-->
		<div class="container">
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">Eventify </a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">Submit an event</a></li>
               </div>
               </div>
                <!-- Navbar Ends -->
                
	    				<script type="text/javascript">
	    				function stripslashes (str) {
	    					  return (str + '').replace(/\\(.?)/g, function (s, n1) {
	    					    switch (n1) {
	    					    case '\\':
	    					      return '\\';
	    					    case '0':
	    					      return '\u0000';
	    					    case '':
	    					      return '';
	    					    default:
	    					      return n1;
	    					    }
	    					  });
	    					}
	    					
	    					
	    			//	var ImgURLArray=new Array();
	    			//	var SiteURLArray=new Array();
	    				
	    			//	ImgURLArray=<?php echo json_encode($ImgURL_List);  ?>;
	    			//	SiteURLArray=<?php echo json_encode($SiteURL_List); ?>;
	    				</script>

	    				<h1 align="center"> <color="#ffffff">Events </h1>
						<div id="myCarousel" class="carousel slide" style="margin: 0px 0px 0px; width = 1200; height=100; overf">
	  					<!-- Carousel items -->
	  					<div class="carousel-inner">
		    				<div class="active item" id="foo">
		    					<img class="peopleCarouselImg" src="http://www.kinglyprojects.co.uk/sites/default/files/images/events-and-programs-lo-res.jpg"  >
	    				</div>	

					  <!-- Carousel nav -->
					  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		
		
		
		
		
		
		<h1 align="center"> <color="#ffffff">Competitions</h1>
		<div id="myCarousel2" class="carousel slide" style="margin: 0px 0px 0px; width = 1200; height=100; overf">
  					<!-- Carousel items -->
  					<div class="carousel-inner">
	    				<div class="active item">
	    					<img class="peopleCarouselImg" src="http://www.santamonica.com/includes/media/images/Calendar-of-Events-Header.jpg" >
	    				</div>
	    				<div class="item">
	    					<img class="peopleCarouselImg" src="http://www.rbs.ac.mu/event_management.jpg" >
	    				</div>
	    				<div class="item">
	    					<img class="peopleCarouselImg" src="http://www.tourismpei.com/photos/sites/visitorsguide/sliders/events_sliders.jpg" >
	    				</div>
					</div>
				  <!-- Carousel nav -->
				  <a class="carousel-control left" href="#myCarousel2" data-slide="prev">&lsaquo;</a>
				  <a class="carousel-control right" href="#myCarousel2" data-slide="next">&rsaquo;</a>
		</div>



		<footer>
			&copy; Sandeep Paul 2012 - <a href="http://twitter.com">Twitter</a> - <a href="https://www.facebook.com/sandeep.paul.93">Facebook</a> - <a href="mailto:supersan03@gmail.com">Email</a>
		</footer>
	</div>
	
</body>
</html>

<!--    
<script src="twitter-bootstrap-v2/docs/assets/js/jquery.js"></script>  !>
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-carousel.js"></script> 
-->
