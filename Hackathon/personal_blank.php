<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<title>Eventify</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap-responsive.css"/>
<link href="twitter-bootstrap-v2/docs/assets/css/example-fixed-layout.css" rel="stylesheet">

<style>
	#elem{
     background: url('http://www.whitetulipdesigns.com/wp-content/uploads/Website-Background-Pattern.jpg') center center no-repeat;
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
	.fbpluginrecommendationsbarright{right:10px}</style><style type="text/css">#hellobar-wrapper{height:30px;margin:0;overflow:visible;padding:0;position:relative;width:100%;z-index:2}#hellobar-pusher{height:30px;position:relative;overflow:hidden}#hellobar-wrapper.hellobar-button-default.hellobar-button #hellobar-container a.hellobar-cta-link,#hellobar-wrapper.hellobar-button-default.hellobar-button #hellobar-container a.hellobar-cta-link:link,#hellobar-wrapper.hellobar-button-default.hellobar-button #hellobar-container a.hellobar-cta-link:visited{position:relative;border-radius:4px;-moz-border-radius:4px;-webkit-border-radius:4px;padding:2px 8px 1px 8px;margin:0 0 0 7px;text-decoration:none;cursor:pointer;font-size:0.854em}#hellobar-wrapper.hellobar-button-default.hellobar-button.hellobar-dark-images #hellobar-container a.hellobar-cta-link,#hellobar-wrapper.hellobar-button-default.hellobar-button.hellobar-dark-images #hellobar-container a.hellobar-cta-link:link,#hellobar-wrapper.hellobar-button-default.hellobar-button.hellobar-dark-images #hellobar-container a.hellobar-cta-link:visited{background:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzRhNDg0NCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMyZDJjMjkiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);background:#4a4844; /* Old browsers */background:-moz-linear-gradient(top,#4a4844 0%,#2d2c29 100%); /* FF3.6+ */background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,#4a4844),color-stop(100%,#2d2c29)); /* Chrome,Safari4+ */background:-webkit-linear-gradient(top,#4a4844 0%,#2d2c29 100%); /* Chrome10+,Safari5.1+ */background:-o-linear-gradient(top,#4a4844 0%,#2d2c29 100%); /* Opera 11.10+ */background:-ms-linear-gradient(top,#4a4844 0%,#2d2c29 100%); /* IE10+ */background:linear-gradient(top,#4a4844 0%,#2d2c29 100%); /* W3C */box-shadow:1px 1px 3px rgba(0,0,0,0.28);-moz-box-shadow:1px 1px 3px rgba(0,0,0,0.28);-webkit-box-shadow:1px 1px 3px rgba(0,0,0,0.28);color:#fff}#hellobar-wrapper.hellobar-button-default.hellobar-button.hellobar-dark-images #hellobar-container a.hellobar-cta-link:hover{background:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzY3NjQ1ZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM0ZjRkNDciIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);background:#67645f; /* Old browsers */background:-moz-linear-gradient(top,#67645f 0%,#4f4d47 100%); /* FF3.6+ */background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,#67645f),color-stop(100%,#4f4d47)); /* Chrome,Safari4+ */background:-webkit-linear-gradient(top,#67645f 0%,#4f4d47 100%); /* Chrome10+,Safari5.1+ */background:-o-linear-gradient(top,#67645f 0%,#4f4d47 100%); /* Opera 11.10+ */background:-ms-linear-gradient(top,#67645f 0%,#4f4d47 100%); /* IE10+ */background:linear-gradient(top,#67645f 0%,#4f4d47 100%); /* W3C */border-color:#414141}#hellobar-wrapper.hellobar-dark-images #hellobar-container a.hellobar-cta-link:active{top:1px}#hellobar-wrapper.hellobar-button-default.hellobar-button.hellobar-light-images #hellobar-container a.hellobar-cta-link,#hellobar-wrapper.hellobar-button-default.hellobar-button.hellobar-light-images #hellobar-container a.hellobar-cta-link:link,#hellobar-wrapper.hellobar-button-default.hellobar-button.hellobar-light-images #hellobar-container a.hellobar-cta-link:visited{background:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNjYmNiY2IiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);background:#ffffff; /* Old browsers */background:-moz-linear-gradient(top,#ffffff 0%,#cbcbcb 100%); /* FF3.6+ */background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,#ffffff),color-stop(100%,#cbcbcb)); /* Chrome,Safari4+ */background:-webkit-linear-gradient(top,#ffffff 0%,#cbcbcb 100%); /* Chrome10+,Safari5.1+ */background:-o-linear-gradient(top,#ffffff 0%,#cbcbcb 100%); /* Opera 11.10+ */background:-ms-linear-gradient(top,#ffffff 0%,#cbcbcb 100%); /* IE10+ */background:linear-gradient(top,#ffffff 0%,#cbcbcb 100%); /* W3C */box-shadow:1px 1px 3px rgba(0,0,0,0.28);-moz-box-shadow:1px 1px 3px rgba(0,0,0,0.28);-webkit-box-shadow:1px 1px 3px rgba(0,0,0,0.28);color:#333}#hellobar-wrapper.hellobar-button-default.hellobar-button.hellobar-light-images #hellobar-container a.hellobar-cta-link:hover{background:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNkYmRiZGIiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);background:#ffffff; /* Old browsers */background:-moz-linear-gradient(top,#ffffff 0%,#dbdbdb 100%); /* FF3.6+ */background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,#ffffff),color-stop(100%,#dbdbdb)); /* Chrome,Safari4+ */background:-webkit-linear-gradient(top,#ffffff 0%,#dbdbdb 100%); /* Chrome10+,Safari5.1+ */background:-o-linear-gradient(top,#ffffff 0%,#dbdbdb 100%); /* Opera 11.10+ */background:-ms-linear-gradient(top,#ffffff 0%,#dbdbdb 100%); /* IE10+ */background:linear-gradient(top,#ffffff 0%,#dbdbdb 100%); /* W3C */}#hellobar-wrapper.hellobar-button-default.hellobar-button.hellobar-light-images #hellobar-container a.hellobar-cta-link:active{top:1px}#hellobar-container{font-size:14px;font-weight:normal;height:30px;line-height:30px;margin:0;overflow:visible;padding:0;position:relative;text-align:center;width:100%;z-index:1000;border-bottom-width:3px;border-bottom-style:solid;border-bottom-color:#fff}#hellobar-container.texture{background-image:url(//hb-assets.s3.amazonaws.com/system/modules/hellobar/lib/textures.png);background-repeat:repeat-x}#hellobar-container.texture.noise{background-position:0 0}#hellobar-container.texture.hard-shine{background-position:0 -30px}#hellobar-container.texture.light-gradient{background-position:0 -60px}#hellobar-container.texture.dark-gradient{background-position:0 -90px}#hellobar-container.texture.carbon{background-position:0 -120px}#hellobar-container.texture.paper{background-position:0 -150px}#hellobar-container.texture.diagonal{background-position:0 -180px}#hellobar-container.texture.linen{background-position:0 -210px}#hellobar-container.texture.stitch{background-position:0 -240px}#hellobar-container.texture.diamond{background-position:0 -270px}#hellobar-container a,#hellobar-container a:link,#hellobar-container a:visited,#hellobar-container a:hover{font-size:14px;padding:0;border:none;text-decoration:underline}#hellobar-container a:hover{text-decoration:none}#hellobar-shadow{position:absolute;bottom:-8px;left:0;width:100%;height:8px;line-height:8px;overflow:hidden;background:url(//hb-assets.s3.amazonaws.com/system/modules/hellobar/lib/sprite-8bit.png)}a#hellobar-logo,a#hellobar-logo:link,a#hellobar-logo:visited{background:url(//hb-assets.s3.amazonaws.com/system/modules/hellobar/lib/sprite-8bit.png) 0 -172px;height:0;left:20px;overflow:hidden;padding:22px 0 0;position:absolute;top:3px;width:44px}.hellobar-light-images a#hellobar-logo,.hellobar-light-images a#hellobar-logo:link,.hellobar-light-images a#hellobar-logo:visited{background-position:0 -202px}#hellobar-wrapper.hellobar-left a#hellobar-logo,#hellobar-wrapper.hellobar-left a#hellobar-logo:link,#hellobar-wrapper.hellobar-left a#hellobar-logo:visited{left:auto;right:20px}a#hellobar-close,a#hellobar-close:link,a#hellobar-close:visited{background-image:url(//hb-assets.s3.amazonaws.com/system/modules/hellobar/lib/sprite-8bit.png);background-position:0 58px;display:block;height:0;overflow:hidden;padding:19px 0 0 0;position:absolute;right:20px;top:6px;width:18px;z-index:10;border:none}.hellobar-light-images a#hellobar-close,.hellobar-light-images a#hellobar-close:link,.hellobar-light-images a#hellobar-close:visited{background-position:0 19px}#hellobar-wrapper.hellobar-left a#hellobar-close,#hellobar-wrapper.hellobar-left a#hellobar-close:link,#hellobar-wrapper.hellobar-left a#hellobar-close:visited{right:auto;left:20px}a#hellobar-close:hover{background-position:0 77px;padding:20px 0 0;border:none}.hellobar-light-images a#hellobar-close:hover{background-position:0 38px}a#hellobar-open,a#hellobar-open:link,a#hellobar-open:visited{background-image:url(//hb-assets.s3.amazonaws.com/system/modules/hellobar/lib/sprite-8bit.png);background-repeat:no-repeat;background-position:0 -8px;display:block;height:0;overflow:hidden;padding:80px 0 0;position:absolute;right:10px;top:-96px;width:35px;z-index:100;box-shadow:0 0 5px rgba(0,0,0,0.35);-moz-box-shadow:0 0 5px rgba(0,0,0,0.35);-webkit-box-shadow:0 0 5px rgba(0,0,0,0.35);-ms-filter:"progid:DXImageTransform.Microsoft.Shadow(Color=#e5e5e5,direction=120,strength=3)";filter:progid:DXImageTransform.Microsoft.Shadow(Color=#e5e5e5,direction=120,strength=3);-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-width:3px;border-style:solid}.hellobar-light-images a#hellobar-open,.hellobar-light-images a#hellobar-open:link,.hellobar-light-images a#hellobar-open:visited{background-position:0 -88px}#hellobar-wrapper.hellobar-left a#hellobar-open,#hellobar-wrapper.hellobar-left a#hellobar-open:link,#hellobar-wrapper.hellobar-left a#hellobar-open:visited{right:auto;left:10px}a#hellobar-open:hover{padding:80px 0 0;border-width:3px;border-style:solid}#hellobar-container{font-family:Georgia,Times New Roman,Times,serif;background:#eb583c;color:#fff;border-bottom-color:#fff;border-bottom:none}#hellobar-shadow{background-position:0 -3px}#hellobar-container a,#hellobar-container a:link,#hellobar-container a:visited{color:#80ccff}a#hellobar-open,a#hellobar-open:link,a#hellobar-open:visited{background-color:#eb583c;border-color: #fff}a#hellobar-open:hover{background-color:rgb(255,126,98)}
	</style>
	
</head>
	
<body>
	<?php
	$link = mysql_connect('localhost','root','');
	mysql_set_charset('UTF-8');
	if(!$link){
		echo('Could not connect successfully');
	}
	else{
    	//echo('Connected successfully');
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
	$query1="Select Img_URL,Site_URL from image where Category='Competitions'";
	$query2="Select Img_URL,Site_URL from image where Category='Talks'";
	$query3="Select Img_URL,Site_URL from image where Category='Workshops'";
	$query4="Select Img_URL,Site_URL from image where Category='Others'";
	$result1=mysql_query($query1);
	$result2=mysql_query($query2);
	$result3=mysql_query($query3);
	$result4=mysql_query($query4);
	if(!$result1 || !$result2 || !$result3 || !$result4)
	{
		die('Invalid query: ' . mysql_error());
	}
	$Competitions_ImgURL_List = array();
	$Talks_ImgURL_List = array();
	$Workshops_ImgURL_List = array();
	$Others_ImgURL_List = array();
	$Competitions_SiteURL_List = array();
	$Talks_SiteURL_List = array();
	$Workshops_SiteURL_List = array();
	$Others_SiteURL_List = array();
	$i=0;
	while($URL_row = mysql_fetch_array($result1))
	{
		$Competitions_ImgURL_List[$i]="$URL_row[Img_URL]";
		$Competitions_SiteURL_List[$i]="$URL_row[Site_URL]";
		$i++;
	}
	$i=0;
	while($URL_row = mysql_fetch_array($result2))
	{
		$Talks_ImgURL_List[$i]="$URL_row[Img_URL]";
		$Talks_SiteURL_List[$i]="$URL_row[Site_URL]";
		$i++;
	}
	$i=0;
	while($URL_row = mysql_fetch_array($result3))
	{
		$Workshops_ImgURL_List[$i]="$URL_row[Img_URL]";
		$Workshops_SiteURL_List[$i]="$URL_row[Site_URL]";
		$i++;
	}
	$i=0;
	while($URL_row = mysql_fetch_array($result4))
	{
		$Others_ImgURL_List[$i]="$URL_row[Img_URL]";
		$Others_SiteURL_List[$i]="$URL_row[Site_URL]";
		$i++;
	}
	?>
	
	<div class="container-fluid" id="elem">
	<div id="hellobar-pusher" style="height: 33px;"></div><div style="display: block; position: fixed; width: 100%; top: 0px; left: 0px; z-index: 5000; height: 33px;" id="hellobar-wrapper" class=" hellobar-right hellobar-dark-images hellobar-button-default hellobar-button"><div id="hellobar-container" style="top: 0px;"><span>Do you want to your event to be featured on Eventify?</span> <a class="hellobar-cta-link" href="http://www.google.com.sg/" target="_blank">Click right here</a><a href="#close" id="hellobar-close">Close</a><div id="hellobar-shadow"></div></div><a href="#close" id="hellobar-open" style="top: -96px;">Open</a></div><div id="wrap">
	
	
		<div class="container">
   	<img src="brwc0lA.png" height = "200px" width="1450 px"alt='Create your own banner at mybannermaker.com!' border=0 /></a><br>
   	
                
	    				

	    				<h1 align="center"> <color="#ffffff">Competitions</h1>
						<div id="competitionsCarousel" class="carousel slide" style="margin: 0px 0px 0px; width = 1200; height=100; overf">
	  					<!-- Carousel items -->
	  					<div class="carousel-inner" id='event-carousel'>
		    				<div class="active item" id="foo">
		    					<img class="peopleCarouselImg" 
		    					src="http://www.kinglyprojects.co.uk/sites/default/files/images/events-and-programs-lo-res.jpg">  
		    				</div>	
		    				<?php
		    				foreach ($Competitions_ImgURL_List as $j)
		    				{
		    				$i=0;
		    				 echo  "<div class='item'><a target='_blank' href=".$Competitions_SiteURL_List[$i]."><img class='peopleCarouselImg' src=".$j."></a></div>";
	    					$i++;
		    			}?>
		    			</div>

					  <!-- Carousel nav -->
						<a class="carousel-control left" href="#competitionsCarousel" data-slide="prev">&lsaquo;</a>
				  <a class="carousel-control right" href="#competitionsCarousel" data-slide="next">&rsaquo;</a>
					</div>

		
		
		
		
		<h1 align="center"> <color="#ffffff">Talks</h1>
		<div id="talksCarousel" class="carousel slide" style="margin: 0px 0px 0px; width = 1200; height=100; overf">
  					<!-- Carousel items -->
  					<div class="carousel-inner">
	    				<div class="active item">
	    					<img class="peopleCarouselImg" src="http://www.santamonica.com/includes/media/images/Calendar-of-Events-Header.jpg" >
	    				</div>
	    				
	    				<?php
		    				foreach ($Talks_ImgURL_List as $j)
		    				{
		    				$i=0; 
		    				echo  "<div class='item'><a target='_blank' href".$Talks_SiteURL_List[$i]."><img class='peopleCarouselImg' src=".$j."></a></div>";
	    					$i++;
		    			}?>
					</div>
				  <!-- Carousel nav -->
				  <a class="carousel-control left" href="#talksCarousel" data-slide="prev">&lsaquo;</a>
				  <a class="carousel-control right" href="#talksCarousel" data-slide="next">&rsaquo;</a>
		</div>


		<h1 align="center"> <color="#ffffff">Workshops</h1>
		<div id="workshopsCarousel" class="carousel slide" style="margin: 0px 0px 0px; width = 1200; height=100; overf">
  					<!-- Carousel items -->
  					<div class="carousel-inner">
	    				<div class="active item">
	    					<img class="peopleCarouselImg" src="http://www.santamonica.com/includes/media/images/Calendar-of-Events-Header.jpg" >
	    				</div>
	    				
	    				<?php
		    				foreach ($Workshops_ImgURL_List as $j)
		    				{
		    				$i=0;
		    				 echo  "<div class='item'><a target='_blank' href=".$Workshops_SiteURL_List[$i]."><img class='peopleCarouselImg' src=".$j."></a></div>";
	    					$i++;
		    			}?>
					</div>
				  <!-- Carousel nav -->
				  <a class="carousel-control left" href="#workshopsCarousel" data-slide="prev">&lsaquo;</a>
				  <a class="carousel-control right" href="#workshopsCarousel" data-slide="next">&rsaquo;</a>
		</div>

		<h1 align="center"> <color="#ffffff">Other Events</h1>
		<div id="othersCarousel" class="carousel slide" style="margin: 0px 0px 0px; width = 1200; height=100; overf">
  					<!-- Carousel items -->
  					<div class="carousel-inner">
	    				<div class="active item">
	    					<img class="peopleCarouselImg" src="http://www.santamonica.com/includes/media/images/Calendar-of-Events-Header.jpg" >
	    				</div>
	    				
	    				<?php
		    				foreach ($Others_ImgURL_List as $j)
		    				{
		    				$i=0;
		    				 echo  "<div class='item'><a target='_blank' href=".$Others_SiteURL_List[$i]."><img class='peopleCarouselImg' src=".$j."></a></div>";
	    					$i++;
		    			}?>
					</div>
				  <!-- Carousel nav -->
				  <a class="carousel-control left" href="#othersCarousel" data-slide="prev">&lsaquo;</a>
				  <a class="carousel-control right" href="#othersCarousel" data-slide="next">&rsaquo;</a>
		</div>



		<footer>
			<br></br>
			<p align="center">&copy; Sandeep 2012 - <a href="http://twitter.com">Twitter</a> - <a href="https://www.facebook.com">Facebook</a></p>
			<br></br>
			<!--
			<iframe src="https://www.facebook.com/plugins/like.php?href=localhost/nuseventify"
			scrolling="no" frameborder="0"
			style="border:none; width:450px; height:80px"></iframe>


			<iframe src="https://platform.twitter.com/widgets/tweet_button.html"
			scrolling="no" frameborder="0"
			style="border:none; width:450px; height:80px"></iframe>
			-->

		</footer>
		</div>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="twitter-bootstrap-v2/docs/assets/js/jquery.js"></script>  
    <script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-carousel.js"></script>  
    <script type="text/javascript">

		$('#competitionsCarousel, #talksCarousel, #workshopsCarousel, #othersCarousel').carousel({
		  	interval: 3000
		})
	</script>
</body>
</html>

<!--    
<script src="twitter-bootstrap-v2/docs/assets/js/jquery.js"></script>  !>
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-carousel.js"></script> 
-->
