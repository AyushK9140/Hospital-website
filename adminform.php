<?php session_start();?>
<!DOCTYPE html>
<html>
<?php include("header.php");?>
    <!-- end header section -->
  </div>
 <?php
  include ('connection.php');
  $sql= mysqli_query($conn,"SELECT * FROM user1 where usertype!='2'");
  if($_SESSION['id']!='')
  ?> <table>
 
            <tr>
            <th>id</th>
            <th>Name</th>
            <th>Age</th>
            <th>USERNAME</th>
            <th>Mobile No.</th>
            <th>Address</th>
            <th>datetime</th>
            <th>update</th>
            <th>Delete</th>
            </tr>

    
    
<?php
  $i=0;
while($row = mysqli_fetch_array($sql)) {
?>
<tr>
    <td><?php echo $i=$i+1; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["age"]; ?></td>
    <td><?php echo $row["username"]; ?></td>
    <td><?php echo $row["mobile"]; ?></td>
    <td><?php echo $row["address"]; ?></td>
    <td><?php echo $row["datetime"]; ?></td>
     <td><a href="pageupdate.php?id=<?php echo $row['id'];?>">Edit</a></td>
     <td><a href="pagedelete.php?id=<?php echo $row['id'];?>">Delete</a></td>
    
</tr>
<?php
}
?>
</table>
  
  
