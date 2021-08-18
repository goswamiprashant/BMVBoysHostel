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
	height:50px;
	width:330px;
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
<script>
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").value = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>

</head>
<body>

<?php include"header.html" ?>
   <center>
<form  method="get" action="test_n_months_bill.php">
<table id="t1_mess" border="0 px" cellspacing="0" cellpadding="10px" >
<tr>
<th>Name:</th>
<td><input class="n1" type="text" name="name" onkeyup="showHint(this.value)" id="txtHint" placeholder="Enter your name"/></td>
</tr>
<tr><td><p>Suggestions: <span ></span></p></td></tr>

<br/><br/>
<tr>
<th>Select Your Branch</th>
<td>
IT<input type="radio" value='IT'  name="branch"/>
ME<input type="radio" value='ME'  name="branch"/>
EE<input type="radio" value='EE' name="branch"/>
EC<input type="radio" value='EC' name="branch"/>
CE<input type="radio" value='CE' name="branch"/>
</td>
</tr>
<br/><br/>
<tr>
<th>Select Your Year</th>
<td>
1st <input type="radio" value='1' name="year"/>
2nd <input type="radio" value='2'name="year"/>
3rd <input type="radio" value='3'name="year"/>
4th <input type="radio" value='4'name="year"/>
</td> 
 </tr>  
 <br/><br/>  
   <tr>
<tr >
<td colspan="2">
<input type="submit"class="s_btn" name="submit" /></td>
</tr>
</form>
</table>


<a id="b1" style="position:relative;bottom:60px;" href="test_mess_bill.php">Click here to see month wise mess bill</a>
<br/>
<br/></center>


<?php include"footer.html"   ?>
</body>

</html>  