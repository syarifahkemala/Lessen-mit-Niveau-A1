<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<style type="text/css">
body{
    margin: 0;
    padding: 0;
    background: url(images/bg.png);
    background-size: 1390px 600px;
    background-repeat: no-repeat;
    
    font-family: sans-serif;
}
.login-box{
    width: 320px;
    height: 420px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login-box input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.login-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}

.login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
   
}
.login-box a:hover
{
    color: #39dc79;
}


</style>
	
	</head>
<body>

	 <div class="login-box">
    <img src="images/user.png" class="avatar">
        <h1>Registieren Sie hier </h1>
            <form method='post' action='aksidaftar.php'>
            <p>Name</p>
            <input type="text" name='nama'>
            <p>Nutzername</p>
            <input type="text" name='username'>
            <p>Passwort</p>
            <input type="password" name='password'>
            <input type="submit" id="submit" value="Registieren">
              
            </form>
        
        
        </div>
    
    </body>
</body>
<!--<script>
	$(document).ready(function(){
		$('#submit').click(function(){
			var username = $('#username').val();
			var password = $('#password').val();

			if(username == "" || password == "")
			{
				alert("GAGAL LOGIN");
			}
			else
			{
				$.ajax({
					url:"login_act.php",
					method:"post",
					data:{
						"username":username,
						"password":password
					},
					success:function(data){
						data = JSON.parse(data);
						console.log(data);
						if(data.status == 0)
						{
							alert("GAGAL");
						}
						else
						{
							window.location.href="index.php"
						}
					}
				})
			}
		})
	})

</script>-->