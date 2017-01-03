<?php
include 'header.php';
if(isset($_POST['sign_in'])){
    $email = $_POST['email'];
    $password =$_POST['password'];
    if($obj->login("tms_user","*","user_email='$email'","user_password='$password'")){
        echo "hello";
    }  else {
        echo "not hello";
    }
}
?>
<html>
    <!--Start Dashboard -->
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="left_nav col-lg-2">
                    <?php
                    include 'left_nav.php';
                    ?>
                </div>
                <div class="main_content col-lg-10 col-lg-offset-2">
                    dasboard
                </div>
            </div>
        </div>
    </main><!--End Dashboard -->

    <?php
    include 'footer.php';
    ?>  
</html>