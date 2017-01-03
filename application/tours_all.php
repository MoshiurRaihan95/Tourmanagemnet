<?php
include 'header.php';
?>  
<!-----------Start All tours -->
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="left_nav col-lg-2">
                <?php
                include 'left_nav.php';
                ?>
            </div>
            <div class="main_content col-lg-10 col-lg-offset-2 all_tours_content">
                <div class="inner_head">
                    <h2>All Tours</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Dashboard</a>
                        </li>
                        <li>All Tours</li>
                    </ol>
                </div>
                <!--main content start here-->
                <div class="content">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Leaving Date/Time</th>
                                <th>Return Date/time</th>
                                <th>Status</th>
                                <th width="100">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($r = 1; $r <= 12; $r++) {
                                ?>   
                                <tr>
                                    <td><?php
                                        echo $r;
                                        ?></td>
                                    <td>Cox's bazar tour</td>
                                    <td>4star hotel @best beach side location. Rooms are average...</td>
                                    <td>Dhaka</td>
                                    <td>Cox's Bazr</td>
                                    <td>20/11/2016</td>
                                    <td>25/11/2016</td>
                                    <td>Active</td>
                                    <td>
                                        <a class="btn btn-primary btn-xs" href="tours_view.php">
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                        </a>
                                        <a class="btn btn-primary btn-xs" href="tour_edit.php">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                        <a class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete_item" href="#delete_item">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <!--------- Start Delete Modal -->
                    <div class="modal fade" id="delete_item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Do you want to delete this item?</h4>
                                </div>
                                <div class="modal-body">
                                    Your item going to trash. You can find this item into trash.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                                </div>
                            </div>
                        </div>
                    </div><!--------- End Delete Modal -->
                </div>
                <!--main content end here-->
            </div>
        </div>
    </div>
</main><!--End All tours-->

<?php
include 'footer.php';
?>  

