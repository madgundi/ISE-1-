<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        #invalid {
            color: red;
            margin-bottom: 10px;
        }

        #success {
            color: green;
            margin-bottom: 10px;
        }

        input[type="button"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="button"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form>
        <h1>Certificate Generator</h1>
        <input type="text" placeholder="Enter Username" id="username"><br/><br/>
        <input type="password" placeholder="Enter Password" id="password">
        <p id="invalid"></p>
        <p id="success"></p>
        <input type="button" value="Login" onClick="do_login()">
    </form>

    <script>
        function do_login(){
            var username=document.getElementById("username").value;
            var password=document.getElementById("password").value;
            
            if(username=='Vinayak' && password=='24102002'){
                document.getElementById("success").innerHTML='Successful login';
                document.getElementById("invalid").innerHTML='';
				window.location.href='form.php';

            }else{
                document.getElementById("invalid").innerHTML='Invalid password';
                document.getElementById("success").innerHTML='';
            }
        }
    </script>
</body>
</html>
