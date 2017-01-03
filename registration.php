<?php
include('application/Database.php');
$error_message = 'NO ERROR';
if (isset($_POST['sign_up_button'])) {
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conforimPassword = $_POST['conforim_password'];
    $birth_day = $_POST['day'];
    $birth_month = $_POST['month'];
    $birth_year = $_POST['year'];
    $gender = $_POST['gender'];
    $createdate = strtotime("now");
    $role = "2";
    $profilepic = "";
    $status = "1";
    $birthday = $birth_day . '-' . $birth_month . '-' . $birth_year;
    $str_birthday = strtotime($birthday);
    if (isset($firstname) && trim($firstname) != '') {
        if (isset($lastname) && trim($lastname) != '') {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if (preg_match('/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/', $password)) {
                    if ($password === $conforimPassword) {
                        if (!empty($gender)) {
                            $obj->Insert('tms_user', "user_first_name='$firstname',user_last_name='$lastname',user_email='$email',user_password='$password',user_date_birth='$str_birthday',user_gender='$gender',user_date_create='$createdate',user_role='$role',user_profile_pic='$profilepic',user_status='$status'");
                        } else {
                            $error_message = "plz input gender";
                        }
                    } else {
                        $error_message = "password is not matched";
                    }
                } else {
                    $error_message = 'the password does not meet the requirements! asdfASDF1234';
                }
            } else {
                $error_message = "Your Email Is Not Valid";
            }
        } else {
            $error_message = "Last name not valid.";
        }
    } else {
        $error_message = "First name not valid.";
    }
}

$user = $obj->login('tms_user','*','sarowerj93@gmail.com','12345');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign Up Page</title>

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
                    <?php
                    if ($error_message != 'NO ERROR') {
                        ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Error!</strong> <?= $error_message ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <!-- Login form start -->
                <form action="" class="login_form registrationform" method="POST">
                    <h2>Please Sign Up</h2>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="firstName">Name</label>
                                <input type="text" name="first_name" id="firstName" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-lg-6">
                                <label for="lasttName">&nbsp;</label>
                                <input type="text" name="last_name" id="lasttName" class="form-control" placeholder="Last Nmae">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="yourname@mail.com">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="********"/>
                    </div>
                    <div class="form-group">
                        <label for="conforimPassword">Confirm Password</label>
                        <input type="password" name="conforim_password" id="conforimPassword" class="form-control" placeholder="********"/>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3">
                                <label for="gender">Birthday</label>
                                <select class="form-control" name="day">
                                    <?php
                                    for ($i = 1; $i <= 31; $i++) {
                                        ?>
                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-lg-5">
                                <label for="gender">&nbsp;</label>
                                <select class="form-control" name="month">
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="gender">&nbsp;</label>
                                <select class="form-control" name="year">
                                    <?php
                                    for ($i = 1900; $i < 2016; $i++) {
                                        ?>
                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="gender">
                            <option value="0">Select Gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            <option value="3">Others</option>
                        </select>
                    </div>
                    <button class="btn  btn-primary" type="submit" name="sign_up_button">Sign up</button>
                </form><!-- End login form -->
                <div class="registration">
                    <a href="index.php">Already have account? Sign in</a>
                </div>
            </div>
        </main><!-- End main content --> 

        <!-- jQuery v1.12.4 -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap v3.3.7 -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>


