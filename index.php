
<?php
session_start();

$cn = mysqli_connect('localhost', 'root', '', 'student_info');

?>



<?php
if(isset($_POST['btnlogin']))
{

    $a = mysqli_real_escape_string($cn, $_POST['txtusername']);
    $b = mysqli_real_escape_string($cn, $_POST['txtpassword']);	
$sql = mysqli_query($cn, ("select * from admin where Name = '$a' and Password = '$b'"));

$login = mysqli_num_rows($sql);
if($login == 1)
{
echo"<script>
alert('Login Successful')
window.location.href = 'Account Registration.php'
</script>";
}
else
{
echo"<script>
alert('Login Failed')
</script>";	
}


}

?>

















