<html>
    <?php
    include 'header.php';
    ?>  
    <!--------Start Deposit All -->
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
                        <h2>All Deposit </h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.php">Dashboard</a>
                            </li>
                            <li>All Deposit</li>
                        </ol>
                    </div>
                    <div class="content">
                        <table class="table table-bordered table-striped">
                            <thead>

                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Amount</th>
                                    <th>Status</th>
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
                                        <td> Raihan</td>
                                        <td> Raihan@gmail.com</td>
                                        <td> 20/10/2016</td>
                                        <td> 2.00PM</td>
                                        <td> 1000</td>
                                        <td> Paid</td>
                                    </tr>
                                </tbody>
                                <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main><!--End Deposit All -->

    <?php
    include 'footer.php';
    ?>  
</html>

