<?php
include 'header.php';
?>
<link rel="stylesheet" type="text/css" href="plugins/bootstarp_datepicker/css/bootstrap-datepicker.min.css"/>
<script src="plugins/ckeditor/ckeditor.js"></script>
<script src="plugins/bootstarp_datepicker/js/bootstrap-datepicker.min.js"></script>
<script>
    $(document).ready(function () {
        $('.datepicker').datepicker();
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
                    <h2>Add new tour</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Dashboard</a>
                        </li>
                        <li> Add new tour</li>
                    </ol>
                </div>
                <!--main content start here-->
                <div class="content">
                    <div class="row">
                        <div class="col-lg-9"> 
                            <div class="form-group">
                                <input type="email" class="form-control input-lg" id="exampleInputEmail1" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control input-lg ckeditor" rows="10" id="eventdescription" placeholder="Details"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">Status</div>
                                <div class="panel-body">
                                    <select class="form-control">
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">From</div>
                                <div class="panel-body">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">To</div>
                                <div class="panel-body">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">Leaving Date/Time</div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <input type="text" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">Return Date/Time</div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <input type="text" class="form-control datepicker">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">Upload Photo</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input type="file">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">Save Details</div>
                                <div class="panel-body">
                                    <input type="submit" class="btn btn-primary btn-block" value="Save">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--main content end here-->
            </div>
        </div>
    </div>
</main><!--End all_users  -->

<?php
include 'footer.php';
?>
