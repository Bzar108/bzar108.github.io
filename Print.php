
<?php

session_start();
$cn = mysqli_connect('localhost', 'root', '', 'student_info');



?>

<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
   
<style>



  

    .form-box{
border: 1px solid black;

position: absolute; 

width: 850px;
height: 1100px;
background: ;
display: flex;
align-items: ;
color: #333;
text-align: ;
padding: ;
z-index: 1; 
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
 left:300px;


}
input[type=text] {
  
  box-sizing: border-box;
  border: none;
  border-bottom: 1px solid black;
}

.top {
  position: absolute; 
  top: 70px;
  left:225;
}
.bot
{
  position: absolute; 
  top: 95px;
  left:225;
}

.tbl{
  position: absolute; 
top: 140px;
left: 30px;


}

table {

  width:780px;
}






.line{
width :750px;
  box-sizing: border-box;
  border: none;
  border-bottom: 1px solid black;
  
}


.honor{
text-align: justify;
  width: 700px;
  position: relative;
  left:20px;
  font-size: 15px;
}





@media print {
.noPrint{
display :none;

}





}
</style>


    <title>
Print Record
</title></head>

<body>



<div class="form-box">

<h1> Daily Time Record   </h1>
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
<div class =" tbl">

<table border = 1>
<tbody>

<tr>

<th>Date</th>
<th>Arrival</th>
<th>Departure</th>

</tr>

<?php

if(isset($_POST['btnprint']))
{
$txtlrn = mysqli_real_escape_string($cn, $_POST['txtlrn']);
$sql = mysqli_query($cn, "SELECT * FROM timeclock where Student_Id = '$txtlrn'");
$grades = mysqli_num_rows($sql);
}


if($grades >= 1)
{
	
while($row = mysqli_fetch_assoc($sql))
{
echo"
<tr>


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




";
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



if(isset($_POST['btnprint']))
{
$txtlrn = mysqli_real_escape_string($cn, $_POST['txtlrn']);
$sqli = mysqli_query($cn, "SELECT * FROM student_info where LRN ='$txtlrn'");
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

<div class=" toho ">
<label> Total <input type = text  Readonly class ="line"   name ='tot' id ='tot'    >    </label>
</div>
<div class =" honor">
 I CERTIFY on my honor that the above is a true and correct report
  of the hours of work perform,record of which was made daily at the time of arrivaland departure from office.

</div>
<br><br>

<div class = " eme ">

 <input type = text  Readonly   class ="liner" >
          <br>   
<label   class = "cent">      Verified to Prescribed Office Hours           </label>

</div>


</div>
</div>


<?php

if(isset($_POST['btnprint']))
{
$txtlrn = mysqli_real_escape_string($cn, $_POST['txtlrn']);
$sqlh = mysqli_query($cn, "SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(Hours))) as total FROM timeclock where Student_Id = '$txtlrn'");
$cnt = mysqli_num_rows($sqlh);

$row = mysqli_fetch_assoc($sqlh);

echo"<script>
tot.value = '$row[total] '
</script>";


}

?>

</body>

</html>


