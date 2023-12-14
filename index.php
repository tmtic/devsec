<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="login.css">
<script>
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});

</script>
</head>
<body>

    <div class="login-page">
    <div class="form">
        <form class="register-form" method="POST" action="login.php">
        <input type="text" placeholder="name"/>
        <input type="password" placeholder="password"/>
        <input type="text" placeholder="email address"/>
        <button>create</button>
        <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form" method="POST" action="login.php">
        <input type="text" placeholder="username" name="login"/>
        <input type="password" placeholder="password" name="senha"/>
        <button>login</button>
        </form>
    </div>
    </div>
</body>
</html>
