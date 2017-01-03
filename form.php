<?php
$date_birth = strtotime("18-10-1993");
$current_date = strtotime("now");
$age = $current_date - $date_birth;
//echo strtotime($r);
echo date('d-m-Y', '-1644800400');
//echo "$r";

if(isset($_POST['submit_button'])){
    $day=$_POST['birth_day'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    
    //echo "$day <br>";
    //echo "$month <br>";
    //echo "$year";
    $date= "$day-$month-$year";
}

?>
<html> 
    <head>
        <title>
            form check 
        </title>
    </head>
    <body>
        <form action="form.php" method="post">
            <div class="col-lg-3">
                <label for="gender">Birthday</label>
                <select class="form-control" name="birth_day">
                    <?php
                    for ($i = 1; $i <= 31; $i++) {
                        ?>
                        <option value="<?= $i; ?>"><?= $i; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-lg-5">
                <label for="gender">&nbsp;</label>
                <select class="form-control" name="month">
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </div>
            <div class="col-lg-4">
                <label for="gender">&nbsp;</label>
                <select class="form-control" name="year">
                    <?php
                    for ($i = 1900; $i < 2016; $i++) {
                        ?>
                        <option value="<?= $i; ?>"><?= $i; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <button type="submit" name="submit_button">Submit </button>
        </form>
    </body>
</html>

