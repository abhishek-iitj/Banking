<?php
session_start();
include ("constant.php");
$connect=mysqli_connect(SERVER, USER, PASS, DB) or die("error in myql_connect");
if (!isset($_SESSION['auth_login']) && $_SESSION['auth_login']!=true)
	header("location:personal_banking.php");
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
<script>
/*function tabheight(){
	var tab=document.getElementById("update");
	tab.style.setProperty('height',200+'px');
	tab.style.setProperty('background','blue');
	tab.style.setProperty('overflow','auto');
}*/
</script>
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
<div class="row" style="margin:0 auto;">
<marquee>Currently logged in as &nbsp &nbsp <b><?php echo $_SESSION['auth_name']; ?></b></marquee>
<b>
</br>
	<table class='table'><tr><Td><b> <?php echo "Welcome Employee Mr./Mrs.::".$_SESSION['auth_name']; ?></b></td>
		<Td><a href='auth_logout.php' style="text-decoration:none;color:black;"><b>LOGOUT</B> </a></td></tr></table>
	</b>
<br>
</div>
<div class="row" style="margin:0 auto;">
<div class="col-lg-2"></div>
<div class="col-lg-6">
UPDTAE Customer's Account<button onClick="fill()">Click Here</button><br>
<table class="table" id="detail" align="center">
<form action="" method="post">
<tr><td>Customer Name</td><td><input type="text" name="cust_name"></td></tr><br>
<tr ><td>Customer Account Number</td><td><input type="text" name="cust_acc"></td></tr>
<tr><td></td><td><input type="submit" name="xauth_sub"></td></tr>
</form>
</table>
<br>
<form method="post">
<table class="table">
<?php
if (isset($_POST['xauth_sub'])){
	$_SESSION['custacc']=$_POST['cust_acc'];
	$custname=$_POST['cust_name'];
	$cust_acc=$_POST['cust_acc'];
	
//$qry="select * from ".$cust_acc;
$check=mysqli_query($connect,"SHOW TABLES LIKE '".$cust_acc."'" );
$table_exist=mysqli_num_rows($check);

if ($table_exist>0){
	$tbname=$cust_acc;
	$connect=mysqli_connect(SERVER, USER, PASS, DB) or die("error in myql_connect");
	$qry="select * from ".$tbname;
	$table_res=mysqli_query($connect, $qry) or die("Connection failed: " . mysqli_connect_error());
	echo"<b>ACCOUNT SUMMARY</b> <br><br>";
	echo "<label>Name</label>$custname<br><label>Account Number</label>$cust_acc<br><hr> ";
	echo"<b>ACCOUNT HISTORY</b> <br><br>";
	echo"<tr><td> <b>DATE </b></td><td><b>TIME</b></td><td><b>TRANSACTION TYPE</b></td><td><b>MEDIUM</b></td><td><b>BALANCE</b></td></tr>";
	while($r=mysqli_fetch_array($table_res))
		echo"<tr><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td></tr>";
	echo "</table>";
	echo "<button id='tabheight'>Add Trancastion</button>";
	echo "<br>";
	}

else
	echo "<p>No such Account in Database</p>";
}

?>
</form>
<div class="row well" id ="update" ><!--style="margin:0 auto;height:0px;overflow:hidden;"-->
<form action="" method="post">
<label>Transaction Type</label>
<input type="text" name="t_type" placeholder="Debit/Credit">
<br><br>
<label>Medium</label>
<input type="text" name="medium" placeholder="Cash/ATM/Online"><br>
<br><br>
<label>Amount</label>
<input type="text" name="amount" ><br><br>
<input type='submit' name='update' id='update'>


</form>
<?php
if (isset($_POST['update'])){
	$ttype=$_POST['t_type'];
	$medium=$_POST['medium'];
	$amount=$_POST['amount'];
	$tbname=$_SESSION['custacc'];
	//echo $tbname;
	$date=date('Y-m-d');
	$time=time('h:i:sa');
$connect=mysqli_connect(SERVER, USER, PASS, DB) or die("error in myql_connect");
$qry="insert into ".$tbname." set date='$date', time='$time',transaction='$ttype',medium='$medium', balance='$amount'" ; 	
$fire=mysqli_query($connect, $qry) or die("dies");
if ($fire==true)
	echo "<p style='color:green'>Account Updated successfully</p>";
else
	echo "<p style='color:green'>Error</p>";
unset($_SESSION['custacc']);
}

?>
</div>
</div>
<div class="col-lg-4"></div>
</div>
</body>
</html>