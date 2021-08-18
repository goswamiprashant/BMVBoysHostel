<html>
<head>
<title>Food(mess)</title>
<meta name="description" content="Detailed desciption about Food Facilites Goverment Boys Hostel of IGEC College or BMV Boys Hostel"/>
<meta name="keywords" content="BMV Mess,Boys Hostel Mess,Food in BMV hostel,Gov Boys Hostel Sagar,IGEC Hostel,BMV Boys Hostel Sagar "/>
<meta  name="author" content="Prashant Goswami"/> 
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

<link rel="stylesheet" type="text/css" href="style.css"/>
<style>
	body
	{
	
	}
#t1_mess
{
	background-color:rgba(120,120,120,.6);
	box-shadow:3px 3px 3px 8px red;
    border-radius:10px; 
	border:0 gray ridge;
	font-size:20px;
	text-align:center;
	padding:14px;
		position:relative;
		bottom:200px;
}
#t1_mess td{
	height:30px;
	width:290px;
}
.n1
{
	width:190px;
	height:30px;
	font-size:20px;
}
.mess1
{
	font-size:20px;
text-align:center;	
}
.mess1 td{
	background-color:rgba(0,0,0,0.3);
}

.mess1 th{
	height:50px;
	font-size:25px;
	background-color:yellow;
}

.s_btn{
	font-size:18px;
margin-top:10px;
width:100px;
	height:30px;
	background-color:red;
	
	
}
#b1{
	font-size:20px;
	color:blue;
	text-decoration:underline;
}
</style>
</head>
<body>

<?php include"header.html" ?>
   <center>
<form  method="get" action="test_months_bill.php">
<table id="t1_mess" border="0 px" cellspacing="0" cellpadding="10px" >
   <tr>
<th>Month:</th>
<td><select class="n1" name="month">
<option value="Jan"> Jan</option>
<option value="Feb"> Feb </option>
<option value="Mar"> Mar </option>
<option value="Apr"> Apr </option>
<option value="May"> May </option>
<option value="Jun"> Jun </option>
<option value="Jul"> Jul </option>
<option value="Aug"> Aug </option>
<option value="Sep"> Sep </option>
<option value="Oct"> Oct </option>
<option value="Nov"> Nov </option>
<option value="Decm"> Dec </option>



</select>
</td>
</tr>
<tr >
<td colspan="2">
<input type="submit"class="s_btn" name="submit" /></td>
</tr>
</form>
</table>
<br/><br/>
<a id="b1" href="test_mess_bill.php">Click here to see your personal account details</a>
</center>
<!--
<table class="mess1" border="2 px" cellspacing="0" width="100%">
<tr>
<th>NAME</th>
<th>YEAR</th>
<th>DIETS</th>
<th>DIET CHARGE</th>
<th>SERVICE CHARGE</th>
<th>TOTAL</th>
<th>ACCOUNT BALANCE</th>
</tr>

<?php
$con=mysqli_connect('localhost','root','','mess_bill');
$q="select * from bill";
$x=mysqli_query($con,$q);
$num=mysqli_num_rows($x);
for($i=0;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($x);
	echo "<tr>";
	echo "<td>". $row['Name'] ."</td>";
	echo "<td>". $row['Branch_Year'] ."</td>";
	echo "<td>". $row['Diets'] ."</td>";
	echo "<td>". $row['Diet_Charge'] ."</td>";
	echo "<td>". $row['Service_Charge'] ."</td>";
	echo "<td>". $row['Total'] ."</td>";
	echo "<td>". $row['Account_Balance'] ."</td>";
echo "</tr>";
	}
	/*echo $row['Diets'];
	echo $row['Diet_Charge'];
	echo $row['Service_Charge'];
	echo $row['Total'];
	echo $row['Account_Balance'];
	*/
?><!--
<tr>
<td></td>
<td> ME-3rd  </td>
<td> 58 </td>
<td> -1102</td>
<td> 1280 </td>
<td>-2382  </td>
<td> -4957 </td>
</tr> -->
<br/>

</table>-->
<?php
  include "connection.php";
if(isset($GET['submit']))
  {
	$name=$GET['name'];
	$branch=$GET['branch'];
	$year=$GET['year'];
	$month=$GET['month'];	
	
$q="select * from bill where Name=$name ";	
$x=mysqli_query($con,$q);		
$arr=mysqli_fetch_assoc($x);
if($arr)
{
	echo $arr['Name']; 
}	
		
	}






?>










<?php include"footer.html"   ?>
</body>

</html>  