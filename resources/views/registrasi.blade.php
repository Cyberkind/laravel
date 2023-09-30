<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
   .login {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body {
	background-color: #f5f5f5;
	font-family: Arial, sans-serif;
}

.container {
	width: 400px;
	margin: 100px auto;
	background-color: #ffffff;
	padding: 50px;
	border-radius: 10px;
	box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
}

h1 {
	text-align: center;
	margin-bottom: 30px;
	color: #f50505;
}

form {
	display: flex;
	flex-direction: column;
	
}

label {
	margin-top: 20px;
	font-weight: bold;
	color: #f50505;
}
input[type="number"],
input[type="text"],
input[type="password"] {
	padding: 10px;
	border: none;
	border-bottom: 1px solid #ddd;
	width: 100%;
	font-size: 16px;
	color: #333;
}

button[type="submit"] {
	margin-top: 30px;
	padding: 10px 20px;
	background-color: #ff0707;
	color: #ffffff;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	transition: all 0.3s ease-in-out;
}

button[type="submit"]:hover {
	background-color: #ffffff;
	color: #f50505;
	border: 1px solid #f50505;
}
</style>
<body>
    

        
        <div class="container">
            <h1>Daftar </h1>
            <form>
                <label for="nik">NIK:</label>
                <input type="number" id="nik" name="nik" required>
                <label for="username">Nama:</label>
                <input type="text" id="username" name="username" required>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <label for="tlp">No.Telpon:</label>
                <input type="number" id="tlp" name="tlp" required>
				<button type="submit">Login</button>
                
            </form>
        </div>
</body>
</html>