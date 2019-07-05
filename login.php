<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
        
    </head>
    <body style="background-color:#00fff2cb;">
    <br/>
        <h1 class="title">River Shop</h1>
        <div class="login">
            <h1>Welcome!</h1>
            <form action="index.php" method="post">
                <label>Username</label>
                <br/>
                <input type="text" name="username" id="username"/>
                <br/>
                <label>Password</label>
                <br/>
                <input type="password"name="password" id="password"/>
                <br/>
                <div class="inputlogin">
                    <input type="submit" name="login" value="login" class="inputbutton"/>
                    <input
                        type="submit"
                        name="register"
                        id="register"
                        formaction="register.php"
                        value="Register"
                        class="inputbutton"/>
                </div>
            </form>
        </div>
    </body>
</html>