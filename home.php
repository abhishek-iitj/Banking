<html>
<head>
<link rel="stylesheet" href="assest/fonta/css/font-awesome.min.css">
<link href="assest/boot/css/bootstrap.min.css" rel="stylesheet"></link>
<link href="assest/fonta/css/bootstrap.min.css" rel="stylesheet"></link>
<script src="assest/boot/js/bootstrap.min.js"></script>
<script src="assest/boot/js/jquery.js"></script>
<script type="text/javascript">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<style>
body{margin:0px;padding:0px;}
a .black{color:black;}
</style>
</head>
<body>
<header class="row" style="margin:0 auto;height:30px;background-color:#EFE8E6;padding-top:3px;">
<div class="col-lg-1"></div>
<div class="col-lg-8">
<a href="#"><i class="fa fa-facebook black" aria-hidden="true"></i></a>&nbsp &nbsp &nbsp &nbsp 
<a href="#"><i class="fa fa-envelope black" aria-hidden="true"></i></a>&nbsp &nbsp &nbsp &nbsp 
<a href="#"><i class="fa fa-youtube black" aria-hidden="true"></i></a>&nbsp &nbsp &nbsp &nbsp 
<a href="#"><i class="fa fa-twitter black" aria-hidden="true"></i></a>&nbsp &nbsp &nbsp &nbsp 
</div>
<div class="col-lg-2">
<i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp <a href="#" style="font-family: 'Montserrat', sans-serif;text-decoration:none;padding:3px;">LOGIN</a>
&nbsp &nbsp <i class="fa fa-search" aria-hidden="true"></i><a href="#" style="font-family: 'Montserrat', sans-serif;text-decoration:none;padding:3px;"onmouseover="text_search()">Search</a>
<script>
function text_search()
{
	<form action='' method='get'>
	<input type="text" placeholder="search"style="border_bottom:2px solid black;">
	</form>
	
}
</script>
</div>
<div class="col-lg-1"></div>
</header>

<div class="row" style="height:70px;margin:0 auto;">
<div class="col-lg-3" style="background-color:#40A788;margin:0px;"><img src="images/logo2.png" width="342" height="50px"></img></div>
<div class="col-lg-8">
<nav class = "navbar navbar-default" role = "navigation">
   <div class = "navbar-header">
      <button type = "button" class = "navbar-toggle" 
         data-toggle = "collapse" data-target = "#example-navbar-collapse">
         <span class = "sr-only">Toggle navigation</span>
         <span class = "icon-bar"></span>
         <span class = "icon-bar"></span>
         <span class = "icon-bar"></span>
      </button>
      <a class = "navbar-brand" href = "#">Services</a>
   </div>
   
   <div class = "collapse navbar-collapse" id = "example-navbar-collapse">
	
      <ul class = "nav navbar-nav">
         <li><a href = "personal_banking.php">Personal Banking</a></li>
         <li><a href = "#">Corporate Banking</a></li>
         <li><a href = "#">Mobile Banking</a></li>
			
         <li><a href = "#">NRI Banking</a>
		 <li><a href = "#">Recruitments</a></li>
		 <li class = "dropdown">
            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
               More 
               <b class = "caret"></b>
            </a>
            
            <ul class = "dropdown-menu">
               <li><a href = "#">About Us</a></li>
               <li><a href = "#">Vision</a></li>
               <li><a href = "#">Missions</a></li>
               
               <li class = "divider"></li>
               <li><a href = "#">Chareperson's message</a></li>
               
               <li class = "divider"></li>
               
            </ul>
            
         </li>
         </li>	
      </ul>
   </div>
   
</nav>
</div>
<div class="col-lg-1" style="margin-top:5px;" ><i class="fa fa-download" aria-hidden="true"></i> <a href="" style="text-decoration:none;">&nbsp Get the APP here</a></div>
</div>

<div class="row" style="margin:0 auto;">
<div class="col-lg-8" style="margin-left:30px;margin-right:50px;background-color:silver;">
<div id = "myCarousel" class = "carousel slide">
   
   <!-- Carousel indicators -->
   <ol class = "carousel-indicators">
      <li data-target = "#myCarousel" data-slide-to = "0" class = "active"></li>
      <li data-target = "#myCarousel" data-slide-to = "1"></li>
      <li data-target = "#myCarousel" data-slide-to = "2"></li>
   </ol>   
   
   <!-- Carousel items -->
   <div class = "carousel-inner">
      <div class = "item active">
         <img src = "images/slide6.jpg"  alt = "First slide">
      </div>
      
      <div class = "item">
         <img src = "images/slide7.png" alt = "Second slide">
      </div>
      
      <div class = "item">
         <img src = "images/slide8.jpg" alt = "Third slide">
      </div>
   </div>
   
   <!-- Carousel nav -->
   <a class = "carousel-control left" href = "#myCarousel" data-slide = "prev">&lsaquo;</a>
   <a class = "carousel-control right" href = "#myCarousel" data-slide = "next">&rsaquo;</a>
	
</div> 

<script>
   $(function() {
      $('#myCarousel').on('slide.bs.carousel', function () {
         alert("This event fires immediately when the slide instance method" +"is invoked.");
      });
   });
</script>
</div>
<div class="col-lg-3"><div class = "panel panel-success">
   <div class = "panel-heading">
      <h3 class = "panel-title">Create New Account </h3>
   </div>
   
   <div class = "panel-body"style=" text-align: justify;text-justify: inter-word;">
      You are welcome to open your new account with us. It is very easy to open an account with IDBI. You can apply online for opening of a savings bank account
	   A link 'Online IDBI Account Application' is available on the lower right corner of this panel or just walk in to any of our branches nearby. Our staff would be pleased to assist you.
   </div>
    <div class = "panel-footer"><a href="newacc.php">Click Here</a>
</div>
</div></div>
</div>
<div class="row"style="margin:0 auto;">

<div id="myCarouse2" class="carousel slide" data-ride="carousel"style="width:100%;height:auto;" data-interval="5000">
  <!-- Indicators -->
  <!--ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol-->

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active"style="">
      <div class="row " style="padding:20px 150px 20px 150px;">
	  <div class="col-lg-3"style="margin:30px;margin-left:80px;padding:5px;background-color:#D8D8D8">
		<div class="c1" style="float:left;background-color:#D8D8D8;;width:50%;"><p style="font-family:verdana;font-size:15px;background-color:#D8D8D8;padding:10px;;width:100%;"><b>CAR LOAN<br>@ 9.65%<br></b></div>
		<div class="c2"  style="float:left;background-color:#D8D8D8;width:50%;color:black;"><i class="fa fa-car fa-5x" aria-hidden="true"></i></div><br>
			<a href=""><br><button type = "button" class = "btn btn-success btn-xs"style="float:right;" >Apply Now</button><br></a></p>
	  </div>
	  <div class="col-lg-3"style="margin:30px;padding:5px;background-color:#D8D8D8">
		<div class="c1" style="float:left;background-color:#D8D8D8;;width:50%;"><p style="font-family:verdana;font-size:15px;background-color:#D8D8D8;padding:10px;;width:100%;"><b>HOME LOAN <br>@ 9.30%<br></b></div>
		<div class="c2"  style="float:left;background-color:#D8D8D8;width:50%;color:black;"><i class="fa fa-home fa-5x" aria-hidden="true"></i></div><br>
			<a href=""><br><button type = "button" class = "btn btn-success btn-xs"style="float:right;" >Apply Now</button><br></a></p>
	  </div>
	 <div class="col-lg-3"style="margin:30px;margin-left:60px;padding:5px;background-color:#D8D8D8">
		<div class="c1" style="float:left;background-color:#D8D8D8;;width:50%;"><p style="font-family:verdana;font-size:15px;background-color:#D8D8D8;padding:10px;;width:100%;"><b>PERSONAL<br>IDBI Schemes <br></b></div>
		<div class="c2"  style="float:left;background-color:#D8D8D8;width:50%;color:black;"><i class="fa fa-users fa-5x" aria-hidden="true"></i></div><br>
			<a href=""><br><button type = "button" class = "btn btn-success btn-xs"style="float:right;" >Apply Now</button><br></a></p>
	  </div> 
	  </div>
	</div>

    <div class="item">
      <div class="row " style="padding:20px 150px 20px 150px;">
	  <div class="col-lg-3"style="margin:30px;margin-left:80px;padding:5px;background-color:#D8D8D8">
		<div class="c1" style="float:left;background-color:#D8D8D8;;width:50%;"><p style="font-family:verdana;font-size:15px;background-color:#D8D8D8;padding:10px;;width:100%;"><b>IDBI Instant Moeny Transfer<br></b></div>
		<div class="c2"  style="float:left;background-color:#D8D8D8;width:50%;color:black;"><i class="fa fa-money fa-5x" aria-hidden="true"></i></div><br>
			<a href=""><br><button type = "button" class = "btn btn-success btn-xs"style="float:right;" >Apply Now</button><br></a></p>
	  </div>
	  <div class="col-lg-3"style="margin:30px;padding:5px;background-color:#D8D8D8">
		<div class="c1" style="float:left;background-color:#D8D8D8;;width:50%;"><p style="font-family:verdana;font-size:15px;background-color:#D8D8D8;padding:10px;;width:100%;"><b>IDBI Exclusive<br></b></div>
		<div class="c2"  style="float:left;background-color:#D8D8D8;width:50%;color:black;"><i class="fa fa-flag fa-5x" aria-hidden="true"></i></div><br>
			<a href=""><br><button type = "button" class = "btn btn-success btn-xs"style="float:right;" >Apply Now</button><br></a></p>
	  </div>
	 <div class="col-lg-3"style="margin:30px;margin-left:60px;padding:5px;background-color:#D8D8D8">
		<div class="c1" style="float:left;background-color:#D8D8D8;;width:50%;"><p style="font-family:verdana;font-size:15px;background-color:#D8D8D8;padding:10px;;width:100%;"><b>Global Markets<br></b></div>
		<div class="c2"  style="float:left;background-color:#D8D8D8;width:50%;color:black;"><i class="fa fa-globe fa-5x" aria-hidden="true"></i></div><br>
			<a href=""><br><button type = "button" class = "btn btn-success btn-xs"style="float:right;" >Apply Now</button><br></a></p>
	  </div> 
	  </div>
    </div>

    </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarouse2" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarouse2" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</body>
</html>