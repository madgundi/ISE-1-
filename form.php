

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate Generation Form</title>
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
    <form  method="POST">
        <h1>Certificate Generation Form</h1>
        
        <label for="ename">Event Name</label>
        <input type="text" name="ename" id="ename" required>

        <label for="esname">Student Name</label>
        <input type="text" name="esname" id="esname" required>

        <label for="esmobile">Student Mobile</label>
        <input type="text" name="esmobile" id="esmobile" onblur="validate_mobile()" required>
        <span id="error"></span>

        <label for="edate">Event Date</label>
        <input type="date" name="edate" id="edate" required>

        <input type="submit" name="submit" id="submit" value="Generate Certificate">
    </form>

    <script>
        function validate_mobile() {
            var mobile = document.getElementById("esmobile").value;
            var len = mobile.length;

            if (len == 10) {
                document.getElementById("error").innerHTML = '';
                document.getElementById("button").style.display = 'block';
            } else {
                document.getElementById("error").innerHTML = 'Please enter a 10-digit number';
                document.getElementById("button").style.display = 'none';
            }
        }
    </script>
</body>
</html>


<?php

include("config.php");

if(isset($_POST['submit']))
{
	$ename=$_POST['ename'];
	$esname=$_POST['esname'];
	$esmobile=$_POST['esmobile'];
	$edate=$_POST['edate'];
	
	$qry="INSERT INTO `event`(`ename`, `sname`, `scont`, `edate`) VALUES ('$ename','$esname','$esmobile','$edate')";
	mysqli_query($conn,$qry);
	
	echo "<script>alert('data is inserted');window.location.href='form.php';</script>";
		
}
?>

<table border="1">

<th>Sr N0.</th>
<th>Event Name  </th>
<th>Student name  </th>
<th>Student contact  </th>
<th> Event Date </th>
<th> Edit </th>
<th>Delete</th>
<?php
$query="SELECT * FROM event";
$cnt=0;
$result=mysqli_query($conn,$query);

while($rows=mysqli_fetch_assoc($result))
{
	++$cnt;
	

?>

<tr>
  <td><?php echo $cnt;  ?> </td>
  <td><?php echo $rows['ename']; ?>  </td>
  <td><?php echo $rows['sname']; ?>  </td>
  <td><?php echo $rows['scont']; ?>  </td>
  <td><?php echo $rows['edate']; ?>  </td>
    <td><a href="editform.php?edit=<?php echo $rows['id']; ?>">Edit  </td>
  <td><a href="delete.php?del=<?php echo $rows['id']; ?>">Delete  </td>

  
</tr>

<?php
}
?>
</table>