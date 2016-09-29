<?php
session_start();
include ("constant.php");
$conn=mysqli_connect(SERVER,USER,PASS,DB) or die("not connect");
$accno=uniqid();
//echo $accno;
if (isset($_POST['xsub'])){
	$name=$_POST['xname'];
	$fathname=$_POST['xfathname'];
	$add=$_POST['xpadd'];
	$dob=$_POST['xdob'];
	$gen=$_POST['xgen'];
	$income=$_POST['xin'];
	$mob=$_POST['xmob'];
	//echo "1";
	// Select 1 from table_name will return false if the table does not exist.
	//$val = mysql_query('select 1 from `customer` LIMIT 1');
	//if($val !== FALSE)
	//{
   //DO SOMETHING! IT EXISTS!
		$qry="insert into customer set name='$name', father='$fathname',address='$add',dob='$dob', gender='$gen', income='$in', mobile='$mob', accno='$accno'" ;
		//echo "2";
		$r=mysqli_query($conn, $qry) or die('not fire');
		if ($r==true)
			$m= "YOUR Data sent succesfully for verification. Wait till you get a call from us.";
		else
			$m= "NOt submitted...";
	//}
	/*else
	{
    	$sql = "CREATE TABLE customer (name VARCHAR(33), father VARCHAR(30), address VARCHAR(30), dob VARCHAR(14),
		gender VARCHAR(6), income int(10), mobile int(10), accno varchar(70), username varchar(10), 
		password varchar(10))";
		if(mysqli_query($conn, $sql)){
				$qry="insert into customer set name='$name', father='$fathname',address='$add',dob='$dob', gender='$gen', income='$in', mobile='$mob', accno='$accno'" ;
				//echo "2";
				$r=mysqli_query($conn, $qry) or die('not fire');
				if ($r==true)
					$m= "YOUR Data sent succesfully for verification. Wait till you get a call from us.";
				else
					$m= "NOt submitted...";
		}
		else
			echo "Some error occured";
		

	}*/
	
	if(!file_exists("detail/".$accno))
		mkdir("detail/".$accno);
	
	//uploaded files here...
		//echo "Uploaded files are as detailed.....";
	$target1="detail/".$accno."/".$_FILES['xphoto']['name'];
	$target2="detail/".$accno."/".$_FILES['xsig']['name'];
	$target3="detail/".$accno."/".$_FILES['xid']['name'];
	$target4="detail/".$accno."/".$_FILES['xr']['name'];
	$target5="detail/".$accno."/".$_FILES['xin']['name'];
	$rr1=move_uploaded_file($_FILES['xphoto']['tmp_name'], $target1);
	$rr2=move_uploaded_file($_FILES['xsig']['tmp_name'], $target2);
	$rr3=move_uploaded_file($_FILES['xid']['tmp_name'], $target3);
	$rr4=move_uploaded_file($_FILES['xr']['tmp_name'], $target4);
	$rr5=move_uploaded_file($_FILES['xin']['tmp_name'], $target5);
	/*if ($rr1 == true && $rr2 == true && $rr3 == true && $rr4 == true && $rr5 == true)
		echo "SUCCESSFUL UPLOADED ALL FILES";
	else
		echo "FILES were not upload successfully";
	*/
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
<div class="col-lg-1" style="margin-top:5px;" ><i class="fa fa-home" aria-hidden="true"></i> <a href="home.php" style="text-decoration:none;">
&nbsp Go to HOME</a></div>
</div>
<div class="row" style="margin:0 auto;margin-left:20px;"><label>Kindly fill in these details in order to open a new account (Use CAPITAL LETTERS)<br></label></div>
<div class="row" style="margin:0 auto;">
<div class="col-lg-1"></div>
<div class="col-lg-6" >
<form action="" method="post" enctype="multipart/form-data">
<br>
	<label>NAME</label>
	<input type="textbox" name="xname" class="form-control"/><br>
	<label>Father's Name</label>
	<input type="textbox" name="xfathname" class="form-control"/><br>
	<label>Address(Permanent)</label>
	<textarea col=40 rows=10 name="xpadd" class="form-control"></textarea><br>
	<label>Date Of Birth(dd/mm/yy)</label>
	<input type="textbox" name="xdob" class="form-control"/><br>
	</td><td>
	<label>Gender</label>
	<!--&nbsp &nbsp <input type="radio" name="male" value="Male">Male &nbsp &nbsp
	<input type="radio" name="female" value="Male">Female <br><br>-->
	<input type="textbox" name="xgen" class="form-control"/><br>
	<label>Annual Income (in Rs.)</label>
	<input type="textbox" name="xin" class="form-control"/><br>
	<label>Mobile No</label>
	<input type="textbox" name="xmob" class="form-control"/><br>
	<label>Photo</label>
	<input type="file" name="xphoto" class="form-control"/><br>
	<label>Signature</label>
	<input type="file" name="xsig" class="form-control"/><br>
	<label>Identity Proof (.pdf only)</label><br>
	<select>
	<option value="voter">Voter ID(Election commission of India)</option>
	<option value="aadhar">Aadhar Card(Neeti Aayog)</option>
	<option value="college">College ID (Recognised centraland state and other deemed colleges)</option>
	<option value="govt">ID Issued by govt authorities</option>
	<option value="pass">Passports</option>
	<option value="drive">Driving License</option>
	</select><br><br>
	<input type="file" name="xid" class="form-control"/><br>
	<label>Residential Proof (.pdf only)</label>
	<input type="file" name="xr" class="form-control"/><br>
	<label>Income Certificate (.pdf only)</label>
	<input type="file" name="xin" class="form-control"/><br>
	<input type="submit" name="xsub" value="Submit the details" class="btn btn-success">
</form>
<?php if(!empty($m)) echo $m; ?>
</div>
<div class="col-lg-5"></div>
</div>
</body>
</html>