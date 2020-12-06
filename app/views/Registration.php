<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
<script src="../../js/jquery.min.js"></script>
<script src="../../js/jquery.maskedinput.js"></script>
<script src="../../js/jquery-1.8.3.min.js"></script>
<script src="../../js/jquery.maskedinput (1).js"></script>
</body>
</html>
<script>
    function pswCheck(){
        let p1 = document.getElementById('psw').value;
        let p2 = document.getElementById('psw2').value;
        let pInd = document.getElementById('pswInd').value;
        if (p1 == p2){
            pInd.style.color = "green";
            pInd.innerHTML = "Пароли совпадают";
        }else {
            pInd.style.color = "red";
            pInd.innerHTML = "Пароли не совпадают";
        }
    }
    jQuery(function($){
        $("#phone").mask("+38(999) 999-9999");
    });
</script>
<form method="post" action="<?=Url::getAction('registration', 'registr')?>" >
    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Login" name="Login" required>
        <input type="email" placeholder="Enter Email" name="Email" required class="form-control" pattern="\w+@\w+\.\w{2,6}">
        <input type="tel" placeholder="Enter phone number  " name="Phone" id="phone"  required >
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password  " name="Password" id="psw" required >
        <label for="psw2"><b>Repeat password</b></label>
        <input type="password" placeholder="Repeat Password  " name="psw2" id="psw2" required onkeyup="pswCheck()">
        <span id="pswInd"></span>

        <button type="submit" name='submitName'>Login</button>
    </div>
</form>

<?php
