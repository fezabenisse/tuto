<?php 
include('authHeader.php');
include('db.config.php');
?>

<section class="container">
 <div class="add"><a href="addproduct.php">Add product</a></div>
 <table>
  <tr>
   <th>Name</th>
   <th>Description</th>
   <th>Price</th>
   <th>Added at</th>
   <th>Owner</th>
   <th colspan="2">Actions</th>
  </tr>
  <?php
  $sql = "SELECT * FROM `product`";
  $query = mysqli_query($con,$sql);

  while ($row = mysqli_fetch_array($query)) {

   $sql2 = "SELECT * FROM `user` WHERE uid = '$row[5]' ";
   $query2 = mysqli_query($con,$sql2);
   $uname = mysqli_fetch_array($query2);
   
   ?>
   
   <tr>
    <td><?=$row[1]?></td>
    <td><?=$row[3]?></td>
    <td><?=$row[2]?></td>
    <td><?=$row[4]?></td>
    <td><?=$uname[1]?></td>
    <?php
    if ($row[5] !== $_SESSION['user']) {?>
     <td>no Update</td>
    <td>no Delete</td>
    <?php } else {?>
     <td><a href="updateproduct.php?pid=<?=$row[0]?>" >Update</a></td>
    <td><a href="deleteproduct.php?pid=<?=$row[0]?>">Delete</a></td>
    <?php }
    
    ?>
   </tr>
  <?php }
  
  ?>
 </table>
</section>