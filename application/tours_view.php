<?php
include 'header.php';
?>
<!--Start all_users -->
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="left_nav col-lg-2">
                <?php
                include 'left_nav.php';
                ?>
            </div>
            <div class="main_content col-lg-10 col-lg-offset-2 tour_view_content">
                <div class="inner_head">
                    <h2>Add new tour</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Dashboard</a>
                        </li>
                        <li>View tour</li>
                    </ol>
                </div>
                <!--main content start here-->
                <div class="content">
                    <div class="row">
                        <div class="col-lg-9"> 
                            <div class="details">
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">Status</div>
                                <div class="panel-body">
                                    <span>Active</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">From</div>
                                <div class="panel-body">
                                    <span>Dhaka,Mohammodpur</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">To</div>
                                <div class="panel-body">
                                    <span>Sonamoshjid,Chapai Nawabganj</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">Leaving Date/Time</div>
                                <div class="panel-body">
                                    <span>20/11/2016 2:00PM</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">Return Date/Time</div>
                                <div class="panel-body">
                                    <span>20/11/2016 2:00PM</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">Photos</div>
                                <div class="panel-body">
                                    <div class="row">
                                        <?php
                                        for ($i = 0; $i < 4; $i++) {
                                            ?>
                                            <div class="col-xs-6 col-md-3">
                                                <a href="#" class="thumbnail">
                                                    <img src="../images/thumbnail/73X73.png" alt="...">
                                                </a>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
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
