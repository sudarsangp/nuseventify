    <html>
      <head>
        <title>NUS Eventify</title>
        
        <!--Meta tags go here -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        
      	<!--Importing Twitter Bootstrap -->
      	<link rel="stylesheet" type="text/css" href="bootstrap.css" />
    	<link rel="stylesheet" type="text/css" href="bootstrap-responsive.css" />
       </head>

      

      <body>
         <!-- NAVBAR
        ================================================== -->
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
                <a class="brand" href="http://localhost/Hackathon/latest_personal_blank.php#close">NUS Eventify </a>
                <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
                <div class="nav-collapse collapse">
                  <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="http://localhost/Hackathon/latest_personal_blank.php#close">View events</a></li>
                    <li><a href="http://localhost/Hackathon/places.html">Locate events</a></li>
                 
                  </ul>
                </div><!--/.nav-collapse -->
              </div><!-- /.navbar-inner -->
            </div><!-- /.navbar -->

          </div> <!-- /.container -->
        </div><!-- /.navbar-wrapper -->
       
      <div class = "hero-unit">
        
          

          <form id="SubmitEvent" action="backEnd.php" method="POST" >
          <fieldset>
          <legend>Create an Event</legend>
          
          <label><b>Site URL</b></label>
          <input type="text" name="site_URL">
          
          <label><b>Image URL</b></label>
          <input type="text"  name="img_URL">
          
          <label><b>Category</b></label>
          <select name="Category">
          	<option value="Competitions">Competitions</option>
          	<option value="Talks">Talks</option>
          	<option value="Workshops">Workshops</option>
          	<option value="Others">Others</option>
          </select>
          <div></div>
          <input type="submit" class="btn" name = "submit" value = "submit" ></button>
          </fieldset>
          </form>
         
    
    
    </div>
    </div>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

  <script type="text/javascript">
  $('document').ready(function(){
    $("#SubmitEvent").submit(function(){
      
         // Get all the forms elements and their values in one step
          var values = $('#SubmitEvent').serialize();
         // alert("working" + values);
          $.ajax({
           type:"POST",
           url: 'http://localhost/Hackathon/backEnd.php',
          data: values,
          success:function(){
           //alert("successfully passed" + values);
           }
			
      });
      

        return false;
      });

  });
    var globaldata;

    



    </script>
    </body>
    </html>
