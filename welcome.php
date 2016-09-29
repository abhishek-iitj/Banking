<?php
session_start();
//7Kp6yB6kT9
include("constant.php");
$connect=mysqli_connect(SERVER, USER, PASS, DB) or die("error in myql_connect");
if( !isset($_SESSION['login']) && $_SESSION['login']!=true)
	header("location:personal_banking.php");
$check=mysqli_query($connect,"SHOW TABLES LIKE '".$_SESSION['acc']."'" );
$table_exist=mysqli_num_rows($check);

/*if(mysqli_num_rows(mysqli_query($connect, "SHOW TABLES LIKE '".$_SESSION['acc']."'"))==true) 
    echo "Table exists";
else {
	//Need to create the table...note that the constant TB denotes the customers table in bank db
	$newtb=$_SESSION['acc'];
	$connect=mysqli_connect(SERVER, USER, PASS, DB) or die("error in myql_connect");
	//$create="'CREATE TABLE '.$newtb. '(date VARCHAR(10) NOT NULL, time VARCHAR (8) NOT NULL, transaction VARCHAR (6) NOT NULL, medium VARCHAR (33) NOT NULL, balance INT (20) NOT NULL'";
	$crt_qry='CREATE TABLE `'.$newtb.'`(`date` varchar(10),`time` varchar(8),`transaction` varchar(6),`medium` varchar(33), `balance` varchar(8))';
	$qry_res=mysqli_query($connect, $crt_qry);
	echo 1;
	if ($qry_res==true)
		echo "A new table cretaed successfully";
	else
		echo "Problem creating table";
	
}*/
if ($table_exist>0)
	$connect=mysqli_connect(SERVER, USER, PASS, DB) or die("error in myql_connect");
	//echo "Table has been created previously";
else{
	//Need to create the table...note that the constant TB denotes the customers table in bank db
	$newtb=$_SESSION['acc'];
	//$create="'CREATE TABLE '.$newtb. '(date VARCHAR(10) NOT NULL, time VARCHAR (8) NOT NULL, transaction VARCHAR (6) NOT NULL, medium VARCHAR (33) NOT NULL, balance INT (20) NOT NULL'";
	$crt_qry='CREATE TABLE `'.$newtb.'`(`date` varchar(10),`time` varchar(8),`transaction` varchar(6),`medium` varchar(33), `balance` varchar(8))';
	$qry_res=mysqli_query($connect, $crt_qry);
	/*echo 1;
	if ($qry_res==true)
		echo "A new table cretaed successfully";
	else
		echo "Problem creating table";*/
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
<script>
function fun1(){
	var his=document.getElementById("history");
	
	
	
	
}

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
<marquee>Currently logged in as &nbsp &nbsp <b><?php echo $_SESSION['name']; ?></b></marquee>
<b>

</br>
			<table class='table'><tr><Td> <?php echo "Welcome Mr./Mrs.::".$_SESSION['acc']; ?></td>
				<Td><a href='logout.php' style="text-decoration:none;color:black;"><b>LOGOUT</B> </a></td></tr></table>
				</b>
	<br>
Account Information:<br>
<table  border=2>
<tr><td>NAME</td><td><b><?php echo $_SESSION['name'];?></B></td></tr>
<tr><td>Account Number</td><td><b><?php echo $_SESSION['acc'];?></B></td></tr>
<tr><td>Balance</td><td><b></B></td></tr>
</table>
<br>
</div>
<div class="row" style="margin:0 auto;" >
<div class="col-lg-2"></div>
<div class="col-lg-8">
<button onClick="fun1()">Account History</button><br><br>
<table id="history" border=2>
<?php 
$tbname=$_SESSION['acc'];
$connect=mysqli_connect(SERVER, USER, PASS, DB) or die("error in myql_connect");
$qry="select * from ".$tbname;
$table_res=mysqli_query($connect, $qry) or die("Connection failed: " . mysqli_connect_error());

echo"<tr><td> <b>DATE </b></td><td><b>TIME</b></td><td><b>TRANSACTION TYPE</b></td><td><b>MEDIUM</b></td><td><b>BALANCE</b></td></tr>";
//if (mysqli_num_rows($table_res)>0){
	while($r=mysqli_fetch_array($table_res))
		echo"<tr><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td></tr>";
//}
?>
</table>
</div>
<div class="col-lg-2"></div>


</div>
</body>
</html>