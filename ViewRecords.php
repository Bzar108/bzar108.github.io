<?php
session_start();

$cn = mysqli_connect('localhost', 'root', '', 'student_info');

?>

<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="time.css">

<title>
Users Page
</title></head>

<style>
 body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
  }
  
  
  
  
  .header{
  
    text-align: center;
    padding: 40px 16px;
    background: linear-gradient( rgba(255, 0, 150, 0),   #e9a739 );

    background:;
    color:;
  
  
  }
  
  .gmc{
    width:150px; 
    height: 150px; 
    border-radius: 5px;
    position: absolute;
      top: 0px;
       left: 20px ; 
  
  
  
  }
  
  .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  z-index: 1000;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.search {
  height: 45px; 
 width: 650px;
 border-radius: 10px; 
 border: 1px solid gray;
 background-color:#ebae65;
 position: absolute;
 top: 100px; 
 left:300px ;

}


button{

font-size: 13; 
  height: 40;
   width: 100;
    position: absolute;
    top: 105;
     left: 1150px; 
 border-radius: 7px;
  border: none;
   background-color: orange; 
color:;






}



.btnsearch{

  font-size: 13; 
    height: 40;
     width: 100;
      position: absolute;
      top: 105;
       left: 1000px; 
   border-radius: 7px;
    border: none;
     background-color: orange; 
  color:;



}





.tbl{

  border-radius: 10px; 
  border: 1px #ebae65;
  background-color:#ebae65;
  height: 85px; 
  width: 980px;
  position: absolute;
 top: 175px; 
 left:290px ;



}

th, td {
    padding: 5px;          /* Consistent padding */
    text-align: center;
    border-bottom: 1px solid #ddd;
    vertical-align: middle; /* Align text vertically */

}




th{
  background-color: black;
color :white;

}

td {


}


.form{
border: 1px solid black;

position: absolute; 
top: 0px;
left: 0px;
width: 550px;
height: 800px;
background: ;
display: flex;
align-items: ;
color: #333;
text-align: ;
padding: ;
z-index: 0; 
background: white;
visibility :hidden;
}
input[type=text] {
  
  box-sizing: border-box;
  border: none;
  border-bottom: 1px solid black;
}

h1{
  position :absolute;
 left:135;


}
input[type=text] {
  
  box-sizing: border-box;
  border: none;
  border-bottom: 1px solid black;
}

.top {
  position: absolute; 
  top: 70px;
  left:25;
}
.bot
{
  position: absolute; 
  top: 95px;
  left:25;
}

.tble{
  position: absolute; 
top: 140px;
left: 80px;


}

table {

  width:400;
}






.line{
width :300px;
  box-sizing: border-box;
  border: none;
  border-bottom: 1px solid black;
}



.honor {

 position: absolute; 
 width :400px;
left: px;
text-align :Justify;

}






.cent{
  position: absolute; 
top :450;
left: 80px;



}



.liner{
width :400px;
  box-sizing: border-box;
  border: none;
  border-bottom: 1px solid black;
  position: absolute; 

top: 425px;


}




@media print { .print

    .form
{
border: 1px solid black;

position: absolute; 
top: 0px;
left: 0px;
width: 550px;
height: 800px;
background: ;
display: flex;
align-items: ;
color: #333;
text-align: ;
padding: ;
z-index: 100; 
background: white;
visibility :;
}

input[type=text] {
  
  box-sizing: border-box;
  border: none;
  border-bottom: 1px solid black;
}

h1{
  position :absolute;
 left:135;


}
input[type=text] {
  
  box-sizing: border-box;
  border: none;
  border-bottom: 1px solid black;
}

.top {
  position: absolute; 
  top: 70px;
  left:25;
}
.bot
{
  position: absolute; 
  top: 95px;
  left:25;
}

.tble{
  position: absolute; 
top: 140px;
left: 80px;


}

table {

  width:400;
}






.line{
width :300px;
  box-sizing: border-box;
  border: none;
  border-bottom: 1px solid black;
}



.honor {

 position: absolute; 
 width :400px;
left: px;
text-align :Justify;

}






.cent{
  position: absolute; 
top :450;
left: 80px;



}



.liner{
width :400px;
  box-sizing: border-box;
  border: none;
  border-bottom: 1px solid black;
  position: absolute; 

top: 425px;


}


}


















</style>

<body bgcolor = "#ab7533">

</style>
</head>
<body>

<div class ="header">
</div>

<img src='Gmc1.png' class ="gmc">






    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="Account Registration.php">Register Account</a>
  <a href="Timer.php"  target = '_blank'             >TimeClock</a>
  <a href="ViewRecords.php">View Records</a>
  <a href="Logout.php">Log out</a>
  <a href="#">Contact</a>

</div>
<span style="font-size:30px;cursor:pointer;
position:absolute;
top:20;
left:1470; " onclick="openNav()">&#9776; </span>

 
<form action = 'ViewRecords.php' method = 'post'>
<div>

<input type ='search' name = 'search' id = 'search' class ="search">
<input type ='submit' name = 'btnsearch' id = 'srch' class="BtnSearch" value = 'Search'>
</form>

<form action = 'Print.php' method = 'post' target = '_blank'>
<button type = 'submit' class ="print" name = 'btnprint'>
<input type = 'hidden' name = 'txtlrn' id = 'txtlrn'>
Print 
</button>
</form>


</div>



<div class = "table-wrappper">

<table border = 1   class ="tbl" name='tbl' >

<tr>
<th>Student Name</th>
<th>Date</th>
<th>Time_In</th>
<th>Time_out</th>

</tr>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<?php

if(isset($_POST['btnsearch']))
{
$search = mysqli_real_escape_string($cn, $_POST['search']);
$sql = mysqli_query($cn, "SELECT * FROM timeclock where Student_Id like '%$search%' or Student_Name like '%$search%'");
$grades = mysqli_num_rows($sql);
}
else
{
$sql = mysqli_query($cn, "SELECT * from timeclock");
$grades = mysqli_num_rows($sql);	
}

if($grades >= 1)
{
	
while($row = mysqli_fetch_assoc($sql))
{
echo"<tr>

<td>
".$row['Student_Name']."
</td>

<td>
".$row['Date']."
</td>

<td>
".date('h:i A', strtotime($row['Time_In']))."
</td>

<td>
".date('h:i A', strtotime($row['Time_Out']))."
</td>



</tr>

<script>
txtlrn.value = '$row[Student_Id]'
</script>";
}

}

else
{
echo"<tr>
<th colspan = 5>
No Record Found
</th>
</tr>";
}

?> </table>

</div>

<div class="form">

<h1> Daily TIme Record   </h1>
<br>
<div class='top'>
Name:
<input type ='text'  name='name' id='tname'  readonly  > 
LRN :
<input type ='text'  name='lrn' id='tlrn' readonly  >

</div>

<div class="bot">
Grade and Section :
<input type ='text'  name='gns' id='tgns' readonly  >
Strand :
<input type ='text'  name='stra' id='tstra' readonly style = width:120;  >
</div>
<div class =" tble">

<table border = 1>
<tbody>

<tr>

<th>Date</th>
<th>Arrival</th>
<th>Departure</th>

</tr>

<?php

if(isset($_POST['btnsearch']))
{
$search = mysqli_real_escape_string($cn, $_POST['search']);
$sql = mysqli_query($cn, "SELECT * FROM timeclock where Student_Id = '$search' or Student_Name = '$search'");
$grades = mysqli_num_rows($sql);
}


if($grades >= 1)
{
	
while($row = mysqli_fetch_assoc($sql))
{
echo"<tr>
<td>
".$row['Date']."
</td>

<td>
".date('h:i A', strtotime($row['Time_In']))."
</td>

<td>
".date('h:i A', strtotime($row['Time_Out']))."
</td>
</tr>

<script>
txtlrn.value = '$row[Student_Id]'
</script>";
}


}

else
{
echo"<tr>
<th colspan = 5>
No Record Found
</th>
</tr>";
}



if(isset($_POST['btnsearch']))
{
$search = mysqli_real_escape_string($cn, $_POST['search']);
$sqli = mysqli_query($cn, "SELECT * FROM student_info where LRN ='$search' or Student_Name = '$search'");
$grade = mysqli_num_rows($sqli);	

}


if($grade >= 1)
{
	$rowi = mysqli_fetch_assoc($sqli);

echo"<script>
tname.value = '$rowi[Student_Name]'
tlrn.value = '$rowi[LRN]'
tgns.value = '$rowi[Yr_Sec]'
tstra.value = '$rowi[Strand]'
</script>";

}
?> </table>
<br>
<label> Total <input type = text  Readonly class ="line"  >    </label>

<br>
<label class ="honor"> I CERTIFY on my honor that the above is a true and correct report of the hours of work perform,record of which was made daily at the time of arrivaland departure from office.</Label>
<br>
<label > <input type = text  Readonly   class ="liner"           >    </label>

<br>    
<label   class = "cent">      Verified to Prescribed Office Hours           </label>
















<tbody>
</table>

</div>
</div>






</body>
</html>




   