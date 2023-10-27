<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins";
}

body {
    display: flex;
}

.login {
    width: 33%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}
.login h1 {
    font-size: 50px;
    margin-top: 30px;
    margin-bottom: 20px;
}

.login input {
    margin: 10px;
    width: 250px;
    border: none;
    border-bottom: 2px solid #1385f7;
    border-radius: 3px;
    background-color: transparent;
    color: black;
}

.login img {
    margin-top: 30px;
    height: 100px;
    display: flex;
}

.login .button {
    height: 40px;
    border: 0;
    background-color: lime;
    border-radius: 10px;
    color: white;
    
}

.sidebar {
    background-image : url('apotek1.jpg');  
    display: flex;
    flex-direction: column;
    background-position: center;
    background-size: cover;
    text-align: center;
    align-items: center;
    width: 67vw;
    height: 100vh;
}
.image {
   
    width : 100%;
}


    </style>
</head>

<body>
    <div class="login">
        <img src="logoapotek.jpg" alt="">
    <h1>LOGIN</h1>
    <form action="proses_login.php" method="POST">
        
        <input type="text" name="username" placeholder="Masukkan Username" required> <br>
        <input type="password" name="password" placeholder="Masukkan Password" required> <br>
        <br>
        <input class="button" type="submit" value="Login">
    </form>
    </div>

    <div class="sidebar">
    </div>

</body>

</html>