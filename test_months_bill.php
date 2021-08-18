<html>
<head>

<meta name="description" content="Detailed desciption about Food Facilites Goverment Boys Hostel of IGEC College or BMV Boys Hostel"/>
<meta name="keywords" content="BMV Mess,Boys Hostel Mess,Food in BMV hostel,Gov Boys Hostel Sagar,IGEC Hostel,BMV Boys Hostel Sagar "/>
<meta  name="author" content="Prashant Goswami"/> 
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

<link rel="stylesheet" type="text/css" href="css/style.css"/>
<style>

.mess1
{   margin-right:auto;
margin-left:auto;
 
	width:80%;
	font-size:15px;
text-align:center;	
}
.mess1 td{
	width:350px;
	padding:5px;
	background-color:rgba(0,0,0,0.3);
}

.mess1 th{
	height:50px;
	width:350px;
	font-size:20px;
	background-color:yellow;
}
</style>

</head>
<body>
<br/><br/>
<center><h1>Month :<?php 
echo " ". $_GET["month"];

?></h1></center>
	<br/><br/>
	<table class="mess1" border="0 px" cellspacing="0" cellpadding="10", width="100%">
<tr>
<th>Sr.No</th>
<th>Name</th>
<th>Year</th>
<th>Diet</th>
<th>Diet Charge</th>
<th>Service Charge</th>
<th>Total</th>
<th>Account Balance June</th>
<th>Charge Per Diet</th>
<th>Slip Untill 9 nov</th>
<th>Account Balance Feburary</th>
<th>Updated Slip Balance</th>
</tr>

<?php

 $month=$_GET["month"];
try{
//connection to database
$dbh =new PDO('mysql:host=localhost;dbname=test_months','root','');
	
}
catch(PDOException $e)
{
	//display errors
	echo $e->getMessage();
}
//create query
$sth=$dbh->query("select * from $month ");

//set fetch mode
$sth->setFetchMode(PDO::FETCH_OBJ);

//fetching the data
while($row=$sth->fetch())
{
	

  
	?>
	<tr>
	<td><?php echo $row->C_1 ?></td>
	<td><?php echo $row->C_2 ?></td>
	<td><?php echo $row->C_3 ?></td>
	<td><?php echo $row->C_4?></td>
	<td><?php echo $row->C_5 ?></td>
	<td><?php echo $row->C_6 ?></td>
	<td><?php echo $row->C_7?></td>
	<td><?php echo $row->C_8?></td>
	<td><?php echo $row->C_9 ?></td>
	<td><?php echo $row->C_10 ?></td>
	<td><?php echo $row->C_11 ?></td>
	<td><?php echo $row->C_12 ?></td>

	

	</tr>
<?php  }?>
<br/>

</table>
</body>
</html>