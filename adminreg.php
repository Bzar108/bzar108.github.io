<?php session_start();

 $cn = mysqli_connect('localhost','root','','student_info');
 ?>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <style>
:root {
    background: #ab7533;
}

html{

}
body {
}
.wrapper-main {
    width:1920px;
}
 
  h1 {
    font-size: 60px;
    font-style: arial; 
    position: absolute; 
    top: 15px; left: 30px; 
    color: maroon; 
    font-weight: bold;
  }

 p {
    font-style: arial;
    font-size: 15;
    position: absolute; 
    top: 185px; 
    left: 35px;
    color:black;
}

.inputs{


position: absolute;
top: 250px; 
left: 800px;


}

input[type=checkbox] {
    position: absolute; 
    top: 335px;
    left: 1020px;
    background-color :;

}

input[type=submit] {

    font-size: 15; 
    height: 50px; 
    width: 250px; 
    position: absolute;
    top: 390px; 
    left: 803px;
    border-radius: 10px; 
    border: none; 
    background-color:#381d12; 
    color:#faef83;


}

input[type=button]{

    font-size: 13px; 
    height: 47px; 
    width: 150px;
    position: absolute;
    top: 460px; 
    left: 850px;border-radius: 7px;
    border: none; 
    background-color:black; 
    color:white;
}

img {

    width:300px; 
    height: 300px; 
    border-radius: 160px; 
    position: absolute; 
    top: 100px; 
    left: 1150px;

}
  
@media  (max-width:600px) {
    
    .wrapper-main {
      width:100%;

      padding:20px;
      
    }
      h1{
      font-size: 40px; 
      font-style:; 
      position: absolute; 
      top: 20px; 
      left: 20px; 
      color: maroon; 
      font-weight: bold;

      }
    
   
     p{

        font-size: 15px;
         font-style: arial; 
         position: absolute;
          top: 130px;
           left: 30px;
           color:black;

     }

     .inputs{

     
     position: absolute;
     top: 250px; 
     left: 60px;
     

     }

     

input[type=checkbox] {

    position: absolute;
     top: 335px; 
     left: 280px; 
     background-color :;'


}

input[type=submit] {
    
    font-size: 15; 
    height: 50px;
     width: 250px; 
     position: absolute;
     top: 390px; 
     left: 60px;
     border-radius: 10px; 
     border: none; 
     background-color:#381d12; 
    color:#faef83;


}


 input[type=button] {


    font-size: 13px; 
    height: 47px ;
     width: 150px; 
     position: absolute;
     top: 460px; 
     left: 110px ;
     border-radius: 7px; 
     border: none;
      background-color: black; 
    color: white;



 }


  img{

    width:100px; 
    height: 100px;
     border-radius: 160px; 
     position: absolute; 
     top: 575px; 
     left: 130px;
  }

}


   </style>

    <title>
   Digi-DTR Log in or Sign up
    </title>
</head>


<body>

<div class ="wrapper-main">
<h1>GOLDEN MINDS<br> COLLEGES</h1>

<p>Digital Daily Time Record </p>

<form action = 'adminreg.php' method = 'post'>
<div class ="inputs">
 <input type = 'text' id = 'user' name ='txtusername' placeholder="Admin Username" style ="font-size: 15; 
 height: 50px; 
 width: 250px;
 border-radius: 10px; 
 border: 1px solid gray;
 background-color:#ebae65;">
 <br> <br>
 <input type = 'password' id = 'txtpass' name = 'txtpassword' placeholder="Password" style="font-size: 15px; 
 height: 50px;
 width: 250px; 

 border-radius: 10px; 
 border: 1px solid gray;
 background-color :#ebae65; 
">
 
 </div>
 <input type = 'checkbox' id = 'chkshow' onclick = 'labas()'>

 <input type = 'submit' value= "Register " class ="Login"  name = 'btnlogin' >

</form>

<a href = "LogIn.php"  >  <input type="button" value="Log In" ></a>


<img src='Gmc1.png'>

</div>

</body>

</html>

<script type ="text/javascript"> 
function labas() {
var pass = document.getElementById('txtpass');
if (pass.type=='password') {
    pass.type='text'
}
else {

   pass.type = 'password'

}
}
</script>

<?php 

if(isset($_POST['btnlogin']))

{

$a = mysqli_real_escape_string($cn, $_POST['txtusername']);
$b = mysqli_real_escape_string($cn, $_POST['txtpassword']);





$sql = mysqli_query($cn, "insert into admin(Name,Password) values ('$a','$b')");

echo"<script>
alert('Registration Successful')
</script>";




}

?>

