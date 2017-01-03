<html>
    <?php
    include 'header.php';
    ?>  
    <link rel="stylesheet" type="text/css" href="plugins/bootstarp_datepicker/css/bootstrap-datepicker.min.css">
    <script src="plugins/bootstarp_datepicker/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.datepicker').datepicker();
        });
    </script>
    <!---------Start Add Spend-->
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="left_nav col-lg-2">
                    <?php
                    include 'left_nav.php';
                    ?>
                </div>
                <div class="main_content col-lg-10 col-lg-offset-2 spend-add-content">
                    <div class="inner_head">
                        <h2>Add Spend</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.php">Dashboard</a>
                            </li>
                            <li>Add Spends</li>
                        </ol>
                    </div>
                    <div class="content"><!--main content start here-->
                        <form class="spend_form">
                            <div class="row">
                                <div class="form-group  col-lg-4 col-lg-offset-2">
                                    <label for="name">Spend Details</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group  col-lg-4 col-lg-offset-2">
                                    <label for="name">Related Member</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group  col-lg-2 col-lg-offset-2">
                                    <label for="date">Date</label>
                                    <input type="email" class="form-control datepicker" id="date">
                                </div>
                                <div class="form-group  col-lg-2">
                                    <label for="time">Time</label>
                                    <input type="email" class="form-control" id="time">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-2 col-lg-offset-2">
                                    <label for="amount">Amount</label>
                                    <input type="email" class="form-control" id="amount" placeholder="/Tk">
                                </div>
                                <div class="form-group col-lg-2">
                                    <label>&nbsp;</label><br/>
                                    <button type="button" class="btn btn-default btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div><!--End content start here-->
                </div>
            </div>
        </div> 
    </main><!--End Add Spend -->

    <?php
    include 'footer.php';
    ?>  
</html>



