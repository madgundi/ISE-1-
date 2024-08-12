<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Certificate UI</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 800px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .certificate {
        background-color: #f9f9f9;
        border-radius: 10px;
        padding: 40px;
        text-align: center;
        position: relative;
    }
    .certificate::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('certificate-background.jpg');
        background-size: cover;
        background-position: center;
        opacity: 0.4;
        border-radius: 10px;
        z-index: -1;
    }
    h1 {
        color: #333;
    }
    h2, h3 {
        margin: 10px 0;
    }
</style>
</head>
<body><center>
 
<div class="container">
    <div class="certificate">
	<img src="img.jpg" height="200px" width="200px">
	  
        <h1>Certificate of Achievement</h1>
		<h1><? echo $_GET['ename'] ?></h1>
        <h2>This is to certify that</h2>
        <h2></h2><? echo $_GET['sname'] ?>
        <h3>has successfully completed</h3>
        <h3>Web Development Course</h3>
        <h3>conducted on <?  echo $_GET['date']  ?></h3>
        <p>Signature</p>
        <img src="signature.png" alt="Signature"  width="500">
    </div>
</div>

</body>
</html>
