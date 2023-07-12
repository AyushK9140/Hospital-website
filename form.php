<?php include('connection.php');
//echo $_POST['submit']; exit(); 
if($_POST['submit']=='signup')
{
    
$a=$_POST['name'];
$b=$_POST['age'];
$c=$_POST['username'];
$d=$_POST['password'];
$e=$_POST['mobile'];
$f=$_POST['address'];
$date=date('d-m-y h:i:s');
if($a!='' && $b!='' && $c!='' && $d!='' && $e!='')
{

$sql=mysqli_query($conn,"insert into user1(name,age,username,password,mobile,address,usertype,datetime) values('$a','$b','$c','$d','$e','$f','1','$date')");
echo '<script>alert("submitted successfully");</script>';
echo '<script>window.location.href ="login.php";</script>';
}
else{

    echo '<script>alert("Please Fillup all Fields");</script>';
   echo '<script>window.location.href = "signup.php";</script>';
}
}

else
{
  echo '<script>alert("Please signup your self");</script>';
   echo '<script>window.location.href = "signup.php";</script>';
}










?>