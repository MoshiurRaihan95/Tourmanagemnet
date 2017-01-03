<html>
    <?php
    include 'header.php';
    ?>
    <!---------Start View Spend-->
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
                        <h2>View Spend</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.php">Dashboard</a>
                            </li>
                            <li>View Spends</li>
                        </ol>
                    </div>
                    <div class="content"><!--main content start here-->
                        <form class="spend_form">
                            <div class="row">
                                <div class="form-group  col-lg-4 col-lg-offset-2">
                                    <label for="name">Spend Details</label>
                                    <span class="form-control">Bus,Breakfast,Dinner</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group  col-lg-4 col-lg-offset-2">
                                    <label for="name">Related Member</label>
                                    <span class="form-control">Raihan, Mamun sarower</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group  col-lg-2 col-lg-offset-2">
                                    <label for="date">Date</label>
                                    <span class="form-control">20/10/2016</span>
                                </div>
                                <div class="form-group  col-lg-2">
                                    <label for="time">Time</label>
                                    <span class="form-control">3.00PM</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-2 col-lg-offset-2">
                                    <label for="amount">Amount</label>
                                    <span class="form-control">2000/Tk</span>
                                </div>
                            </div>
                        </form>
                    </div><!--End content start here-->
                </div>
            </div>
        </div> 
    </main><!--End View Spend -->

    <?php
    include 'footer.php';
    ?>  
</html>





