<html>
<head>
<title>Food(mess)</title>
<meta name="description" content="Detailed desciption about Food Facilites Goverment Boys Hostel of IGEC College or BMV Boys Hostel"/>
<meta name="keywords" content="BMV Mess,Boys Hostel Mess,Food in BMV hostel,Gov Boys Hostel Sagar,IGEC Hostel,BMV Boys Hostel Sagar "/>
<meta  name="author" content="Prashant Goswami"/> 
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

<link rel="stylesheet" type="text/css" href="css/style.css"/>
<style>
	body
	{
	
	}
.t1_mess
{
	background-color:rgba(120,120,120,.6);
	box-shadow:3px 3px 3px 8px red;
    border-radius:10px; 
	border:0 gray ridge;
	font-size:20px;
	text-align:center;
	padding:14px;
}
.t1_mess td{
	height:50px;
	width:320px;
}
.n1
{ 
	padding-left:7px;
	text-align:left;
	width:150px;
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
	text-decoration:underline;s
}
#up
{
	position: relative;
	bottom: 175px;
}
</style>
</head>
<body>

<?php include"header.html" ?>
   <center>
<form  method="get" action="test_months_bill.php">
<div id="up">
<table class="t1_mess" border="0 px" cellspacing="0" cellpadding="10px" >
	
<tr ><h2 style="font-size:30px;"> Select month here to see mess bill</h2>
   </tr><br/><br/>
<tr >		
   <tr>

<th>Month:</th>
<td ><select style="text-align:center;" class="n1" name="month">
<option value="Jan"> January</option>
<option value="Feb"> Feburary </option>
<option value="Mar"> March </option>
<option value="Apr"> April </option>
<option value="May"> May </option>
<option value="Jun"> June </option>
<option value="Jul"> July </option>
<option value="Aug"> August </option>
<option value="Sep"> September </option>
<option value="Oct"> October </option>
<option value="Nov"> November </option>
<option value="Decm"> Decemebrs </option>



</select>
</td>
</tr>

<td colspan="2">
<input type="submit"class="s_btn" name="submit" /></td>
</tr>
</form>
</table></div>

<a id="b1" style="position:relative;bottom:60px;" href="test_mess_bill_2.php">Click here to see your personal account details</a><br/><br/>
</center>

<?php include"footer.html"   ?>
</body>

</html>  