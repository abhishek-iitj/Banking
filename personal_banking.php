<?php
session_start();
include ("constant.php");
$conn=mysqli_connect(SERVER,USER,PASS,DB) or die("not connect");
//Customer Registration Code...
if (isset($_POST['xsubm'])){
	$user=$_POST['user'];
	$accnom=$_POST['xacc'];
	$passwd=$_POST['password'];
	$update="UPDATE customer SET username='$user', password='$passwd' WHERE accno='$accnom'"; 
	$res=mysqli_query($conn, $update) or die("query not fired");
		if ($res==true)	
			echo " Now, You can access the online banking facility on this portal.";
		else 
			echo "Error";
	
}
//Customer Login Code...
if (isset($_POST['xlog'])){
	$user=$_POST['xuser'];
	$pass=$_POST['xpass'];
	$chkqry="select * from customer where username='$user' and password='$pass'";
	$res=mysqli_query($conn,$chkqry)or die("not fire check");
	if(mysqli_affected_rows($conn)>=1)
	{
		$row=mysqli_fetch_array($res,MYSQLI_NUM);
		//echo $row[0];
		$_SESSION['name']=$row[0];
		$_SESSION['acc']=$row[7];
		$_SESSION['login']=true;
		header("location:welcome.php");
	}
	else	
		$xlogm="<font color='red'>Your User ID or Password is invalid</font>";
}
//Authentication login code...
if (isset($_POST['xauthlog'])){
	$auth_user=$_POST['xauth_name'];
	$auth_pass=$_POST['xauth_pass'];
	$chkqry="select * from employee where auth_name='$auth_user' and auth_pass='$auth_pass'";
	$res=mysqli_query($conn,$chkqry)or die("not fire check");
	if(mysqli_affected_rows($conn)>=1)
	{
		$row=mysqli_fetch_array($res,MYSQLI_NUM);
		//echo $row[0];
		$_SESSION['auth_name']=$row[0];
		$_SESSION['auth_pass']=$row[8];
		$_SESSION['auth_login']=true;
		header("location:auth_welcome.php");
	}
	else	
		$xlogm="<font color='red'>INVALID CREDENTIALS</font>";
}

?>
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
</style>
</head>
<body>
<header class="row" style="margin:0 auto;background-color:#EFE8E6;padding-top:3px;">
<div class="col-lg-1"></div>
<div class="col-lg-8">
<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>&nbsp &nbsp &nbsp &nbsp 
<a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>&nbsp &nbsp &nbsp &nbsp 
<a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>&nbsp &nbsp &nbsp &nbsp 
<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>&nbsp &nbsp &nbsp &nbsp 
</div>
<div class="col-lg-2">
<i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp <a href="personal_banking.php" style="font-family: 'Montserrat', sans-serif;text-decoration:none;padding:3px;">LOGIN</a>
&nbsp &nbsp <i class="fa fa-search" aria-hidden="true"></i><a href="#" style="font-family: 'Montserrat', sans-serif;text-decoration:none;padding:3px;">Search</a>
</div>
<div class="col-lg-1"></div>
</header>

<div class="row" style="margin:0 auto;">
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
         <li><a href = "#"></a></li>
			
         <li><a href = "#">NRI Banking</a>
		 <li><a href = "#">Recruitments</a></li>
		 <li class = "dropdown">
            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
               More 
               <b class = "caret"></b>
            </a>
            
            <ul class = "dropdown-menu">
               <li><a href = "#">Personal Loan</a></li>
               <li><a href = "#">Car Loan </a></li>
               <li><a href = "#">Home Loan</a></li>
               <li><a href = "#">Business Loan</a></li>
               <li><a href = "#">Education Loan</a></li>
               
               <li class = "divider"></li>
               
            </ul>
            
         </li>
         </li>	
      </ul>
   </div>  
</nav>
</div>
<div class="col-lg-1" style="margin-top:5px;" ><i class="fa fa-home" aria-hidden="true"></i> <a href="home.php" style="text-decoration:none;">
&nbsp Go to HOME</a></div>
</div>
<div class="row" style="margin:0 auto;font-size:20px;color:green;" align="center" ><marquee><b>Welcome to IDBI BANK Personal Banking Portal<b></marquee></div>
<br>
<div class="row" style="margin:0 auto;"align="center">
<img src="images/personal.jpg"></img></div>

<br><br>
<div class="row" style="margin:0 auto;border-bottom:2px solid black;">
<div class="col-lg-1"></div>

<div class="col-lg-5" style="border-right:2px solid silver;" >
<?php if(!empty($xlogm)) echo $xlogm; ?><br>
<b>Existing User LOGIN</b><br><br>
<form action="" method="post">
<table class="table"> 
<tr ><td>User Id</td><td><input type="text" name="xuser"></td></tr>
<tr ><td>Password</td><td><input type="password" name="xpass"></td></tr>
<tr ><td><input type="submit" value="Login" name="xlog"></td></tr>
</table></form>
<hr><hr>

<form action="" method="post">
<b>AUTHENTICATED LOGIN ONLY</b><br><br>
<table class="table"> 
<tr ><td>Authentication No.</td><td><input type="text" name="xauth_name"></td></tr>
<tr ><td>Password</td><td><input type="password" name="xauth_pass"></td></tr>
<tr ><td><input type="submit" value="Login" name="xauthlog"></td></tr>
</table>

</form>
</div>


<div class="col-lg-5">
<b>
New User Registration</b><br><br>
<form action="" method="post">
<table class="table"> 
<tr ><td>Name</td><td><input type="text" name="xname"></td></tr>
<tr ><td>Account Number</td><td><input type="text" name="xacc"></td></tr>
<tr ><td>User Name</td><td><input type="text" name="user"></td></tr>
<tr ><td>Password</td><td><input type="password" name="password"></td></tr>
<tr ><td><input type="submit" value="Submit" name="xsubm"></td></tr>
</table></form>
<p><h3>Note:</h3>We provide banking facilities through this portal i.e. www.idbibank.personal_banking.php only.
Do not provide your login credentials to any other person or community or website. Otherwise IDBI Bank would not be 
liable to any kind of loss or theft kind of transactions from your account.</p>
</div>

<div class="col-lg-1"></div>

</div>
<div class="row" style="margin:0 auto;"><font face="verdana">
<p style="margin-left:20px;">
<h2 style="color:green;padding:10px;">
PERSONAL BANKING
</h2>
Welcome to IDBI's Retail Banking
IDBI offers a wide range of services in the Personal Banking Segment which are indexed here.<br><br>
Click on each of them to access the details. Our products are designed with flexibility to suit your personal requirements.<br>
Enjoy 24 hour facility through our ATMs - growing speedily it has crossed the 21000 mark Watch this space for more details.<br>
"IDBI now provides your Account Balance and Transaction details over phone round-the-clock. <br>
Information on deposits & loan schemes and services also available. <br>
Call 1800 11 2211,1800 425 3800 (tollfree from BSNL/MTNL) or 080-26599990 (toll number)."<br>
</p></font>
</div>

</body>
</html>