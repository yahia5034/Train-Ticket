<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>travelTable</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/confirmbook.css">
</head>
<?php
    $fname=$_SESSION['fname']; 
    $row=$tr->get_data($conn,$travel_id);
    $source =$row['travel_source'];
    $destination=$row['travel_destination'];
    $date  = $row['travel_date'];
    $time  = $row['travel_time'];

    $type = $_GET['type'];
    if($class=='firstclass')
    {
        $price=$row['1st_price'];
    }else $price = $row['2nd_price'];
?>
<body style="height: 746.2px;background: #734c21;width: 1300px;">
    <div class="container profile profile-view" id="profile" style="width: 500px;height: 697.2px;">
        <div class="row" style="/*&quot;C: \Users\NourAllah\Pictures\Saved Pictures\17000073.jpg&quot;;*/">
            <div class="col-md-12 alert-col relative" style="/*&quot;C: \Users\NourAllah\Pictures\Saved Pictures\17000073.jpg&quot;;*/">
                <div class="alert alert-info alert-dismissible absolue center" role="alert" style="height: 70px;"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><span>Profile save with success</span></div>
            </div>
        </div>
        <form action="payment.php" method="get">
            <div class="row profile-row" style="height: 511.2px;width: 528px;margin-right: -12px;margin-left: -116px;">
                <div class="col-md-8" style="margin-bottom: -18px;height: 635.2px;margin-left: 75px;margin-top: 12px;padding-left: 53px;width: 403px;">
                    
                    <h1 style="margin: 132px 0px -19px;margin-top: 95px;width: 250.7px;padding-bottom: 1px;color: rgb(115,76,33);">Travel Details</h1>
                    <hr style="background: #734c21;">
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col" style="width: 97.5px;">
                                <div class="row">
                                    <div class="col" style="width: 97.5px;"><label class="col-form-label" style="color: #734c21;">Name</label></div>
                                    <div class="col" style="width: 264px;"><input class="form-control" type="text" value= "<?php echo $fname;?>" id="travelIdEditTravel" style="width: 240px;background: #bfa25e;border-color: rgb(115,76,33);border-top-color: #734c21;filter: sepia(0%);" readonly=""></div>
                                </div>
                                <div class="row">
                                    <div class="col" style="width: 97.5px;"><label class="col-form-label" style="color: #734c21;">travel ID</label></div>
                                    <div class="col" style="width: 264px;"><input class="form-control" type="text"value= "<?php echo $travel_id;?>"name="travel_id" id="travelIdEditTravel-1" style="width: 240px;background: #bfa25e;border-color: rgb(115,76,33);border-top-color: #734c21;filter: sepia(0%);" readonly=""></div>
                                </div>
                                <div class="row">
                                    <div class="col" style="width: 97.5px;"><label class="col-form-label" style="color: #734c21;">Source</label></div>
                                    <div class="col" style="width: 264px;"><input class="form-control" type="text" value= "<?php echo $source;?>" style="width: 240px;background: #bfa25e;border-color: rgb(115,76,33);border-top-color: #734c21;filter: sepia(0%);margin-left: 0px;" readonly=""></div>
                                </div>
                                <div class="row">
                                    <div class="col" style="width: 97.5px;"><label class="col-form-label" style="width: 97.5px;color: #734c21;">Destination&nbsp;</label></div>
                                    <div class="col"><input class="form-control" type="text"value= "<?php echo $destination;?>"  style="width: 240px;background: #bfa25e;border-color: rgb(115,76,33);border-top-color: #734c21;filter: sepia(0%);margin-left: 0px;" readonly=""></div>
                                </div>
                                <div class="row">
                                    <div class="col" style="width: 97.5px;"><label class="col-form-label" style="color: #734c21;">Date</label></div>
                                    <div class="col" style="width: 264px;"><input class="form-control" type="text"name="date" value="<?php echo $date;?>"  style="width: 240px;background: #bfa25e;border-color: rgb(115,76,33);border-top-color: #734c21;filter: sepia(0%);margin-left: 0px;" readonly=""></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3" style="width: 97.5px;"><label class="col-form-label" style="color: #734c21;">Time</label></div>
                                    <div class="col" style="width: 265.5px;"><input class="form-control" type="text" value="<?php echo $time;?>" style="width: 240px;background: #bfa25e;border-color: rgb(115,76,33);border-top-color: #734c21;filter: sepia(0%);margin-left: 0px;" readonly=""></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3" style="width: 97.5px;"><label class="col-form-label" style="color: #734c21;">Class</label></div>
                                    <div class="col" style="width: 265.5px;"><input class="form-control" type="text" name ="class" value="<?php echo $class;?>" style="width: 240px;background: #bfa25e;border-color: rgb(115,76,33);border-top-color: #734c21;filter: sepia(0%);margin-left: 0px;" readonly=""></div>
                                </div>
                                
                                <?php
                                if($type=="return") 
                                {
                                    $flag=1;
                                    $result=$tr->Search2($conn,$destination,$source,$date);
                                    $num_of_rows=mysqli_num_rows($result);
                                    if( $num_of_rows>0){
                                        $flag=1;
                                        echo'
                                        <div class="row">
                                            <div class="col-md-3" style="width: 97.5px;">
                                            <label class="col-form-label" style="color: #734c21;width: 97.5px;">Return date</label></div>
                                            <div class="col" style="width: 265.5px;">
                                            <select class="form-control" type="text" style="width: 240px;background: #bfa25e;border-color: rgb(115,76,33);border-top-color: #734c21;filter: sepia(0%);margin-left: 0px;" readonly="" name="return" id="">
                                            ';
                                            while($row=mysqli_fetch_assoc($result)){
                                                echo'
                                                <option value='.$row['travel_date'].'>'.$row['travel_date'].'</option>
                                                ';
                                            }
                                            echo'
                                            </select>
                                            </div>
                                            </div>';
                                    }else {
                                        echo"No available return travels for now";
                                        $flag=0;
                                    }
                                }
                                ?>
                                <input type="hidden" name ="flag"value="<?php echo $flag;?>">
                                <div class="row">
                                    <div class="col-md-3" style="width: 97.5px;height: 40px;"><label class="col-form-label" style="color: #734c21;">Price</label></div>
                                    <div class="col" style="width: 265.5px;">
                                    <input class="form-control" type="text"  value="<?php if($type=="return" && $flag){echo $price=$price*$no_of_seats*2;}else{echo $price*=$no_of_seats;} ?>" name ="price" style="width: 240px;background: #bfa25e;border-color: rgb(115,76,33);border-top-color: #734c21;filter: sepia(0%);margin-left: 0px;" readonly=""></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3" style="width: 97.5px;"><label class="col-form-label" style="color: #734c21;">Type</label></div>
                                    <div class="col" style="width: 265.5px;">
                                    <input class="form-control" type="text" value="<?php echo $type ?>" name='type' style="width: 240px;background: #bfa25e;border-color: rgb(115,76,33);border-top-color: #734c21;filter: sepia(0%);margin-left: 0px;" readonly=""></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3" style="width: 97.5px;"><label class="col-form-label" style="width: 99.7px;">No. Of Seats</label></div>
                                    <div class="col">
                                    <input class="form-control" type="text" name="no_of_seats" value="<?php echo $no_of_seats?>" style="width: 240px;background: #bfa25e;border-color: rgb(115,76,33);border-top-color: #734c21;filter: sepia(0%);margin-left: 0px;" readonly=""></div>
                                    <div class="col-md-11" style="width: 264.5px;">
                                    <button class="btn btn-primary" type="submit" name="submit" style="margin-left: 360px;/*margin-top: 30px;*/background: #734c21;border-radius: 10px;color: #dccab4;">Confirm</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
     
    <script src="assets/js/confirmbook.js"></script>
</body>

</html>