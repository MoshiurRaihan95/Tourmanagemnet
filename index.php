<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Page for tour management</title>

        <!-- Bootstrap v3.3.7 -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- google font-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">

        <!--    theme styling-->
        <link href="css/style.css" rel="stylesheet">


        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- main content start-->
        <main class="login">
            <div class="container">
                <div class="alert_box">
                    <div class="hidden alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Error!</strong> Your user name or password is not correct.
                    </div>
                </div>
                <!-- Login form start -->
                <form action="application/index.php" method="POST" class="login_form">
                    <h2>Please Sign in</h2>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="Remember me"></input>
                            Remember me
                        </label>
                        <a href="forget_password.php" class="forget_pass">Forget password?</a>
                    </div>
                    <button class="btn  btn-primary" type="submit" name="sign_in">Sign in</button>
                </form><!-- End login form -->
                <div class="registration">
                    <a href="registration.php">Don't have account? Create new one</a>
                </div>
                
            </div>
        </main><!-- End main content --> 

        <!-- jQuery v1.12.4 -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap v3.3.7 -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
