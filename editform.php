<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate Generation Form: Edit Mode</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        #error {
            color: red;
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    <form method="POST">
        <h1>Certificate Generation Form (Edit Mode)</h1>
        
		
		<?php
			include "config.php";
	
		$gid=$_GET['edit'];
	$query="select * from event where id='$gid'";
	$cnt=0;
	$result=mysqli_query($conn,$query);
	while($rows=mysqli_fetch_assoc($result))
	{
	++$cnt;
	?>
	
	
        <label for="ename">Event Name</label>
        <input type="text" name="ename" id="ename" value="<?php echo $rows['ename']; ?>">

        <label for="esname">Student Name</label>
        <input type="text" name="esname" id="esname" value="<?php echo $rows['sname']; ?>">

        <label for="esmobile">Student Mobile</label>
        <input type="text" name="esmobile" id="esmobile" value="<?php echo $rows['scont']; ?>">
        <span id="error"></span>
 
        <label for="edate">Event Date</label>
        <input type="date" name="edate" id="edate" value="<?php echo $rows['edate']; ?>">

        <input type="submit" name="submit" id="submit" value="Update Certificate">
    </form>


	<?php } ?>
	

	<?php
	
	include "connection.php";
	
	if(isset($_POST['submit'])){
		
		$gid=$_GET['edit'];
		$ename=$_POST['ename'];
		$esname=$_POST['esname'];
		$esmobile=$_POST['esmobile'];
		$edate=$_POST['edate'];
		
		
		$query="update event set ename='$ename', sname='$esname',
scont='$esmobile',edate='$edate' where id='$gid'		";
		
		//echo $query;
		
		mysqli_query($conn,$query); 
		
		echo "<script>alert('data is updated');window.location.href='form.php';</script>";
		
	}
	
	
	?>
	
	
    
</body>
</html>
