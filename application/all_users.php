<html>
    <?php
    include 'header.php';
    ?>  
    <link href="plugins/bootstrap-switch-master/dist/css/bootstrap3/bootstrap-switch.min.css" rel="stylesheet">
    <script src="plugins/bootstrap-switch-master/dist/js/bootstrap-switch.min.js"></script>
    <script>
        $(document).ready(function () {
            $("[name='my-checkbox']").bootstrapSwitch();
        });
    </script>
    <!--Start all_users -->
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="left_nav col-lg-2">
                    <?php
                    include 'left_nav.php';
                    ?>
                </div>
                <div class="main_content col-lg-10 col-lg-offset-2 all_users_content">
                    <div class="inner_head">
                        <h2> All Users</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.php">Dashboard</a>
                            </li>
                            <li> All Users</li>
                        </ol>
                    </div>
                    <!--main content start here-->
                    <div class="content">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 1; $i < 10; $i++) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php
                                            echo $i;
                                            ?>
                                        </td>
                                        <td>Raihan</td>
                                        <td>Raihan@gmail.com</td>
                                        <td>Male</td>
                                        <td> I am a student</td>
                                        <td><input type="checkbox" name="my-checkbox" checked></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!--main content end here-->
                </div>
            </div>
        </div>
    </main><!--End all_users  -->

    <?php
    include 'footer.php';
    ?>
</html>