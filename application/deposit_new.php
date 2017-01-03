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
    <!---------Start Deposit New-->
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="left_nav col-lg-2">
                    <?php
                    include 'left_nav.php';
                    ?>
                </div>
                <div class="main_content col-lg-10 col-lg-offset-2 deposit_new-content">
                    <div class="inner_head">
                        <h2>New Deposit</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.php">Dashboard</a>
                            </li>
                            <li>New Deposit</li>
                        </ol>
                    </div>
                    <div class="content"><!--main content start here-->
                        <form class="deposit_form">
                            <div class="row">
                                <div class="form-group col-lg-offset-4 col-lg-4">
                                    <label for="name">Name</label>
                                    <input type="email" class="form-control" id="name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-offset-4 col-lg-4">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-offset-4 col-lg-2">
                                    <label for="date">Date</label>
                                    <input type="email" class="form-control datepicker" id="date">
                                </div>
                                <div class="form-group  col-lg-2">
                                    <label for="time">Time</label>
                                    <input type="email" class="form-control" id="time">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-offset-4 col-lg-2">
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
    </main><!--End Deposit New -->

    <?php
    include 'footer.php';
    ?>  
</html>

