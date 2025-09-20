
<?php
session_start();

$cn = mysqli_connect('localhost','root','', 'student_info');

?>

<html> 
<head> 

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>


body{
  
margin:0;
padding:0;
background-image: url('gmc.jpg');
 background-repeat: no-repeat;
  background-attachment: fixed;
  background-size :1540px 700px;

  position:absolute;
  top :0px;
  left:0px;
}



.wrapper-main {
 width:1533;
 
}

.header{
  
 
  padding: 40px 0px;
  width: 1540px;
  background: linear-gradient( #ab7533,   #e9a739 );
  color:;
 
 

}

h1 {
    font-size: 60px;
    font-style: arial; 
    position: absolute; 
    top: 130px; 
    left: 40px; 
    color: maroon; 
    font-weight: bold;
  }


  p {
    font-style: arial;
    font-size: 25;
    position: absolute; 
    top: 300px; 
    left: 45px;
    color:black;
}




.form-box{
border: 3px solid black;
border-radius :20px;
position: absolute; 
top: 200px;
left: 700px;
width: 500px;
height: 400px;
background: ;
display: flex;
align-items: ;
color: #333;
text-align: ;
padding: ;
z-index: 1; 
background: rgba(97, 92, 92, 0.4);




}


.name {

    position: absolute; 
     top: 120px; 
     left: 30px;
     
}

.lrn{

position: absolute;
 top: 120px; 
 left: 265px;
 
}
.yns{

position: absolute;
 top: 200px; 
 left: 30px;
 
}

.strand{

position: absolute;
 top: 200px; 
 left: 265px;
 
}




input[type=submit] {

 font-size: 15; 
 height: 50px;
 width: 200px; 
 position: absolute;
 top: 300px; 
 left: 145px;
 border-radius: 10px; 
 border: none; 
 background-color:rgb(37, 42, 47); 
color: white;




}

.gmc1 {

 width:150px; 
 height: 150px; 
 border-radius: 160px; 
 position: absolute; 
 top: 0px; 
 left: 20px;

}

.box  {
  width: 215px;
  height: 500px;
  border: 3px solid #faef83;
  padding: 50px;
  margin: 20px;
  position: absolute;
 top: 20px; 
 left: 550px;
 



}

body {
  font-family: "Lato", sans-serif;
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

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}




/*Mobile*/


@media  (max-width:600px) {
    
    .wrapper-main {
      width:100%;
     padding :px;
    }


.name {

 position: absolute;
 top: 300px; 
 left: 60px;
 
}

.lrn{

 position: absolute;
 top: 225px; 
 left: 60px;

}
.yns{

 position: absolute;
 top: 375px; 
 left: 60px;

}

.strand{

 position: absolute;
 top: 450px; 
 left: 60px;

 }

.pass{

  position: absolute;
  top: 525px; 
  left: 60px;

}


.gmc1 {

width:100px; 
height: 100px; 
border-radius: 160px; 
position: absolute; 
top: 75px; 
left: 135px;


}

input[type=submit] {
    
    font-size: 15; 
    height: 50px;
     width: 250px; 
     position: absolute;
     top: 525px; 
     left: 60px;
     border-radius: 10px; 
     border: none; 
     background-color:#381d12; 
    color:#faef83;




}


}


</style>

<title>Register Account</title>
</head>
 <body>

<div class ="wrapper-main">

<div class ="header">
 </div>

<h1> Golden Minds
    <br> Colleges
</h1>
<p> Student Daily Time Record</p>

 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="Account Registration.php">Register Account</a>
  <a href="Timer.php" target = '_blank'           >TimeClock</a>
  <a href="ViewRecords.php">View Records</a>
  <a href="Logout.php">Log out</a>
  <a href="#">Contact</a>
</div>

<span style="font-size:30px;cursor:pointer;
position:absolute;
top:20;
left:1470;

" onclick="openNav()">&#9776; </span>

<img src='Gmc1.png' class="gmc1">


<form action = 'Account Registration.php' method = 'post'>

<div class = "form-box">
<input type= 'number' required name = 'lrn' style= 
"height: 40px; 
 width: 200px;
 border-radius: 10px; 
 border: 1px solid gray;
 background-color:#FBF5DF;"  placeholder ='LRN' class ="lrn">     
<br>
<input type= 'text' required name = 'sn'  style= 
"height: 40px; 
 width: 200px;
 border-radius: 10px; 
 border: 1px solid gray;
 background-color:#FBF5DF;"  placeholder ='Username' class ="name">
<br>
<input type= 'text' required name = 'yns'   style= 
"height: 40px; 
 width: 200px;
 border-radius: 10px; 
 border: 1px solid gray;
 background-color:#FBF5DF;"  placeholder ='Year and  Section' class ="yns"   >
<br>
<select name = 'strand' required style= 
"height: 40px; 
 width: 200px;
 border-radius: 10px; 
 border: 1px solid gray;
 background-color:#FBF5DF;"  class ="strand"   >
<option value = "">Strand</option>
<option>ABM</option>
<option>GAS</option>
<option>HUMSS</option>
<option>STEM</option>
<option>TVL-ICT</option>
<option>TVL-HE</option>
</select>

<br>

<input type = 'submit' value = 'Register Account'  name = 'btnca' >

</form>

</div>

</div>

</body>
</html> 


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>



<?php 

if(isset($_POST['btnca']))

{

$a = mysqli_real_escape_string($cn, $_POST['lrn']);
$b = mysqli_real_escape_string($cn, $_POST['sn']);
$c = mysqli_real_escape_string($cn, $_POST['yns']);
$d = mysqli_real_escape_string($cn, $_POST['strand']);

if(strlen($a) != 12) {
  echo "<script>alert('LRN must be exactly 12 digits');</script>";
} else {
  $sql = mysqli_query($cn, "INSERT INTO student_info(LRN, Student_Name, Yr_Sec, Strand) VALUES ('$a','$b','$c','$d')");

  if ($sql) {
      echo "<script>alert('Registration Successful');</script>";
  } else {
      echo "<script>alert('Registration Failed');</script>";
  }
}
}



?>








