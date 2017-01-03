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
            <div class="main_content col-lg-10 col-lg-offset-2 tour_edit_content">
                <div class="inner_head">
                    <h2>Add new tour</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Dashboard</a>
                        </li>
                        <li> Edit tour</li>
                    </ol>
                </div>
                <!--main content start here-->
                <div class="content">
                    <div class="row">
                        <div class="col-lg-9"> 
                            <div class="form-group">
                                <input type="email" class="form-control input-lg" placeholder="Title" value="Lorem ipsum dolor sit amet">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control input-lg ckeditor" rows="10" id="eventdescription" placeholder="Details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum</textarea>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">Status</div>
                                <div class="panel-body">
                                    <select class="form-control">
                                        <option selected="selected">Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">From</div>
                                <div class="panel-body">
                                    <textarea class="form-control">Dhaka,Mohammodpur</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">To</div>
                                <div class="panel-body">
                                    <textarea class="form-control">Sonamoshjid,Chapai Nawabganj</textarea>
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
                                                <input type="text" class="form-control datepicker" value="20/11/2016">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="2:00PM">
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
                                                <input type="text" class="form-control datepicker" value="20/11/2016">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="2:00PM">
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
                                <div class="panel-heading">Update Details</div>
                                <div class="panel-body">
                                    <input type="submit" class="btn btn-primary btn-block" value="Update">
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

