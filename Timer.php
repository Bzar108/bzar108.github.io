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
TimeClock
</title></head>

<style>
 body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
  }
  
  
   .wrapper-main {
  
    width:1533px;
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

.Timeins{
 border: 2px solid black;
 border-radius :20px;
  position: absolute; 
 top: 100px;
 left: 200px;
 width: 800px;
 height: 150px;
 background: ;
 display: flex;
 align-items: ;
 color: #333;
 text-align: ;
 padding: ;
 z-index: 1; 
 background: linear-gradient( rgba(255, 0, 150, 0),   rgba(253, 144, 43, 0.83) );




}


h2{
position :absolute;
left :20px;
color :white;
font-size :30px;
}
.lrn{

 height: 45px; 
 width: 400px;
 border-radius: 10px; 
 border: 1px solid gray;
 background-color:#ebae65;
 position: absolute;
 top: 20px; 
 left: 200px;
  }

.TI{
    font-size: 17; 
    height: 40;
     width: 750;
      position: absolute;
      top: 80;
       left: 20px; 
   border-radius: 7px;
    border: none;
    background: linear-gradient( -75deg, grey, grey 49%, white 49%, black 51%, orange 51% ); 
  color:;
  }
  
.TO{
  
  font-size: 13;
   height: 40; 
   width: 375; 
   position: absolute;
   top: 80; 
   left: 410px; 
  border-radius: 7px; 
  border: none;
   background-color: black; 
   color:white;

}










.info {
  border: 2px solid black;
  border-radius :20px;
  position: absolute; 
  top: 295px;
  left: 1206px;
  width: 300px;
  height: 350px;
  background: ;
  display: flex;
  align-items: ;
  color: #333;
  text-align: ;
  padding: ;
  z-index: 1; 
  background: linear-gradient( rgba(255, 0, 150, 0),   rgba(253, 144, 43, 0.83) );


}


.name {
  height: 40px; 
 width: 200px;
 border-radius: 10px; 
 border: 1px solid gray;
 background-color:#ebae65;
 position: absolute;
 top: 30px; 
 left: 45px;

}

.yr_sec {
  height: 40px; 
 width: 200px;
 border-radius: 10px; 
 border: 1px solid gray;
 background-color:#ebae65;  
 position: absolute;
 top: 85px; 
 left: 45px;


}


.strand { 
  height: 40px; 
 width: 200px;
 border-radius: 10px; 
 border: 1px solid gray;
 background-color:#ebae65;
 position: absolute;
 top: 140px; 
 left: 45px;

}


.remain { 
  height: 40px; 
 width: 200px;
 border-radius: 10px; 
 border: 1px solid gray;
 background-color:#ebae65;
 position: absolute;
 top: 200px; 
 left: 45px;

}



.total { 
  height: 40px; 
 width: 200px;
 border-radius: 10px; 
 border: 1px solid gray;
 background-color:#ebae65;
 position: absolute;
 top: 260px; 
 left: 45px;

}






.table{
  border-radius: 10px; 
  border: 1px;
  background-color:rgb(218, 145, 35);
  height: 40px; 
  position: absolute; 
top: 300px;
left: 195px;
width: 800px;

}



th, td {
    padding: 5px;          /* Consistent padding */
    text-align: center;
    border-bottom: 1px solid #ddd;
    vertical-align: middle; /* Align text vertically */

}





label{

  position: absolute; 
top: 210px;
left: 75px;
width: 800px;
font-size :25px;





}

/*Mobile*/

@media  (max-width:600px) {
    
    .wrapper-main {
      width:100%;
    }
    
    
    }
</style>

<body bgcolor = "#ab7533" onload = 'txtqrcode.focus();'  >

</style>
</head>
<body>
<div  class="wrapper-main">
<div class ="header">
</div>

<img src='Gmc1.png' class ="gmc">



<div class="blush"></div>
    <div class="blush"></div>
    <div class="clock">
  
        <div class="time" id="time">00:00:00</div>
        <div class="date" id="date">January 1, 1970</div>
    </div>

    <script src="script.js"></script>


    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Contact</a>

</div>
<span style="font-size:30px;cursor:pointer;
position:absolute;
top:20;
left:1470; " onclick="openNav()">&#9776; </span>



<div class = "Timeins">
<form action = 'Timer.php' method = 'post'>
<h2> Enter LRN </h2>
  <input type ='number' class ="lrn" name='txtlrn' id='lrn' placeholder ='LRN' required> 
  <input type ='hidden' name = 'txtdate' id= 'txtdate'>
  <input type ='hidden' name = 'Ti' id= 'txtti'> 
  <input type ='hidden' name = 'To' id= 'txtto'>
  <input type ='submit' class ="TI" name='btnTI' id='TI'  value ='Time In         Time Out'  onclick="timeFunction()">
  <input type = 'hidden' name ='studname' id = 'studname'>
  <input type = 'hidden' name ='timeid' id = 'timeid'>
  <input type = 'hidden' name ='timeo' id = 'timeo'>
  <input type = 'hidden' name = 'needed' id ='txtneed' value = '800000'>

 
<input type = 'hidden' name = 'timeDifference' id = 'timeDifference'   >
</form>
</div>


</div>

</div>

<div class = "info">
<input type = 'text' class = 'name' placeholder ='Name' name ='Name' id = 'txtname' readonly   >
<br>
<input type = 'text' class =  'yr_sec' placeholder ='Year & Section' name ='Yr_sec' id = 'txtyr_sec' readonly  >
<br>
<input type = 'text' class =  'strand' placeholder ='Strand' name ='Strand' id = 'txtstrand'  readonly >
<br>
 
<label>             Total Hours :  </label>
<br>
<input type = 'text' class =  'total' placeholder ='Total Hours' name ='totalh' id = 'txttotal'  readonly >
<br>
<input type="hidden" class =  'strand'    name="timeOne"    id="timeOne"  value="00:00:01" >
<input type="hidden"class =  'remain'   name="timeTwo"    id="timeTwo"  value="00:00:00" >


</div>

<?php 

if(isset($_POST['btnTI'])) {

    // Time In/Time Out Logic
    $code_number = mysqli_real_escape_string($cn, $_POST['txtlrn']);
    $ti = mysqli_real_escape_string($cn, $_POST['Ti']);
    $txtdate = mysqli_real_escape_string($cn, $_POST['txtdate']);
    $to = mysqli_real_escape_string($cn, $_POST['To']);
  
    // Check if the code number exists in the database
    $sqlm = mysqli_query($cn, ("select * from student_info where LRN = '$code_number'"));
    $sea = mysqli_num_rows($sqlm);
    $sql = mysqli_query($cn, "SELECT * FROM student_info WHERE LRN = '$code_number'");
    $attendance_sql = mysqli_query($cn, "select * from timeclock where Student_Id = '$code_number' and Date = '$txtdate' ");
    $search = mysqli_num_rows($sql);
   







}

 ?>     


<script>
function updateClock() {
    const timeElement = document.getElementById('time');
    const dateElement = document.getElementById('date');
  
    const now = new Date();
  
    // Format time
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');
    timeElement.textContent = `${hours}:${minutes}:${seconds}`;

    // Format date
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    dateElement.textContent = now.toLocaleDateString(undefined, options);

    var x = new Date().toISOString().slice(0, 10);console.log(x);
    txtdate.value = x;
    timeTwo.value = timeElement.textContent;
    txtti.value = timeElement.textContent;
    txtto.value = timeElement.textContent;
}

setInterval(updateClock, 1000);
updateClock(); // Call once immediately to avoid delay

</script>
 


<?php

if(isset($_POST['btnTI'])) {

    if($search >= 1) 
    {


        $row = mysqli_fetch_assoc($sql);
    
   
        // Check if attendance exists for the current day
        $attendance = mysqli_num_rows($attendance_sql);

        if($attendance == 0) {
            // Time In: Insert record with time-in
            $insert = mysqli_query($cn, "insert into timeclock (Student_Id, Student_Name,  Date, Time_in)
                                         values ('$code_number', '$row[Student_Name]',  '$txtdate', '$ti')");

            if($insert) {

                echo "<script>alert('Time In recorded for $row[Student_Name].');
               
                </script>";
                                          
                $row = mysqli_fetch_assoc($sqlm);

                echo"<script>
              studname.value = '$row[Student_Name]'
                txtname.value = '$row[Student_Name]'
                txtyr_sec.value = '$row[Yr_Sec]'
                txtstrand.value = '$row[Strand]'
                </script>"
                ;
             
                date_default_timezone_set('Asia/Manila');
              
$timeInResult = mysqli_query($cn, "select Time_in FROM timeclock WHERE Student_Id = '$code_number'  and Date = '$txtdate'   ");
$timeInRow = mysqli_fetch_assoc($timeInResult);
$touter = date('H:i:s');
$timeIn = new DateTime($timeInRow['Time_in']);
$timeOut = new DateTime($touter);
$interval = $timeIn->diff($timeOut);

$tdiff = $interval->format('%H:%I:%S');










                
            } else {
                echo "<script>alert('Error: Could not record Time In');</script>";
            }
        } else {
            // Time Out: Update record with time-out

                
            date_default_timezone_set('Asia/Manila');
            $timeInResult = mysqli_query($cn, "select Time_in FROM timeclock WHERE Student_Id = '$code_number'  and Date = '$txtdate'   ");
            $timeInRow = mysqli_fetch_assoc($timeInResult);
            $touter = date('H:i:s');
            $timeIn = new DateTime($timeInRow['Time_in']);
            $timeOut = new DateTime($touter);
            $interval = $timeIn->diff($timeOut);
            
            $tdiff = $interval->format('%H:%I:%S');











            $update = mysqli_query($cn, "update timeclock SET Time_Out = '$to', Hours = '$tdiff' where Student_Id = '$code_number' and Date = '$txtdate'");
            if($update) {
                echo "<script>alert('Time Out recorded for $row[Student_Name].');
              
                </script>";
                
                
                
                $row = mysqli_fetch_assoc($sqlm);

                echo"<script>
              studname.value = '$row[Student_Name]'
                txtname.value = '$row[Student_Name]'
                txtyr_sec.value = '$row[Yr_Sec]'
                txtstrand.value = '$row[Strand]'
                </script>"
                
                









                
                
                ;
            } else {
                echo "<script>alert('Error: Could not record Time Out');</script>";
            }
        }
    } else {
        echo "<script>alert('Invalid Code Number.');</script>";
    }
}
?>








<?php

if(isset($_POST['btnTI']))
{
$txtlrn = mysqli_real_escape_string($cn, $_POST['txtlrn']);
$sqlh = mysqli_query($cn, "SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(Hours))) as total FROM timeclock where Student_Id = '$txtlrn'");


$cnt = mysqli_num_rows($sqlh);

$row = mysqli_fetch_assoc($sqlh);

echo"<script>
txttotal.value = '$row[total]'
txttot.value = '$row[total]'
</script>";


}

?>










<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>



<table    class = "table" border = 1>
        <tr>
          
            <th>Student_Name</th>
            <th>Date</th>
            <th>Time In</th>
            <th>Time Out</th>
         
        </tr>
        <?php ini_set('display_errors', 0); ?>
        <?php
        if(isset($_POST['btnTI'])){
        // Fetch attendance records for the current day
        $date = mysqli_real_escape_string($cn,$_POST['txtdate']);
        $attendance_query = mysqli_query($cn, "select * from timeclock where Date = '$date'   ");
        
        while($row = mysqli_fetch_assoc($attendance_query)) {
            echo "<tr>
                    <td>" . $row['Student_Name'] . "</td>
                    <td>" . $row['Date'] . "</td>
                    <td>" . $row['Time_In'] . "</td>
                    <td>" . $row['Time_Out'] . "</td>
                  
                </tr>";
            
        }
      }
        ?>
    </table>

    
<?php ini_set('display_errors', 0); ?>
        <?php
        if(isset($_POST['btnTI'])){
        // Fetch attendance records for the current day
        $date = mysqli_real_escape_string($cn,$_POST['txtdate']);
        $attendance_query = mysqli_query($cn, "select * from timeclock where Date = '$date' and Student_Id = '$code_number'   ");
        
        while($row = mysqli_fetch_assoc($attendance_query)) {
            
                echo"<script>
      timeOne.value = '$row[Time_In]'
      </script>";
        }
      }
        ?>



</body>
</html>