<?php
 include "config.php";
 
 $id=$_GET['del'];
 
 $query="delete FROM event where id='$id'";
 
 mysqli_query($conn,$query);
 
 echo "<script>alert('Record is delete'); window : location.href='form.php'</script>";

?>