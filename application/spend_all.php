<html>
    <?php
    include 'header.php';
    ?>  
    <!--------Start Spend All -->
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="left_nav col-lg-2">
                    <?php
                    include 'left_nav.php';
                    ?>
                </div>
                <div class="main_content col-lg-10 col-lg-offset-2 deposit_all-content">
                    <div class="inner_head">
                        <h2>All Spend </h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.php">Dashboard</a>
                            </li>
                            <li>All Spend</li>
                        </ol>
                    </div>
                    <div class="content">
                        <table class="table table-bordered table-striped">
                            <thead>

                                <tr>
                                    <th>S.No</th>
                                    <th>Spend Details</th>
                                    <th>Related Member</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($m = 1; $m < 10; $m++) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php
                                            echo $m;
                                            ?>
                                        </td>
                                        <td>Bus,Breakfast,Dinner </td>
                                        <td>Raihan, Mamun sarower</td>
                                        <td> 20/10/2016</td>
                                        <td> 2.00PM</td>
                                        <td> 1000</td>
                                        <td>
                                            <a class="btn btn-primary btn-xs" href="spend_view.php">
                                                <span class="glyphicon glyphicon-eye-open"></span>
                                            </a>
                                            <a class="btn btn-primary btn-xs" href="spend_edit.php">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <a class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete_item" href="#delete_item">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php
                            }
                            ?>
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
                </div>
            </div>
        </div>
    </main><!--End Spend All -->

    <?php
    include 'footer.php';
    ?>  
</html>

