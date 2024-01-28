<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>payment</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<?php
    include "includes/dbh.php";
    include "Classes/User.php";
    $u=new User();
        function balance($amount,$u){
            include "includes/dbh.php";
            $userid=$_SESSION['userid'];
            $row=$u -> get_cus_data($conn,$userid);
            if($row==0)
            {
            echo "error";
            }
            else{
                $balance=$row['balance'];
                if($amount >$balance )
                { return false;  }
                else 
                {return true;  }
            }
        }
       
            ?>
<body style="background: #d6b881;height: 600px;">
    <div style="width: 100%;"></div>
                    <?php
                    if(isset($_GET['submit']))  
                    {   include "nav.php";
                        $amount=$_GET['price'];
                        $type=$_GET['type'];
                        $class=$_GET['class'];
                        $travel_id=$_GET['travel_id'];
                        $no_of_seats=$_GET['no_of_seats'];
                        $flag=$_GET['flag'];
                        if($flag==1){
                            $return=$_GET['return'];
                        }
                        $time=time();
                        $date=$_GET['date'];
                        echo'
                        <div class="container" style="margin-top: 43px;margin-right: 0px;margin-left: 140px;padding-right: 0px;height: 455px;width: 77%;padding-left: 50px;border-radius: 3px;border: 5px double #633a1a;">
                        <div class="row" style="height: 386px;">
                         <div class="col" style="margin-right: 0px;background: #d6b881;margin-top: 0px;width: 518px;height: 437px;margin-left: 8px;">
                        
                         <form action="" >            
                        <input type="hidden" name="type" value='.$type.' readonly>
                        <input type="hidden" name="class" value='.$class.' readonly>
                        <input type="hidden" name="travel_id" value='.$travel_id.' readonly>
                        <input type="hidden" name="no_of_seats" value='.$no_of_seats.' readonly>
                        <input type="hidden" name="date" value='.$date.' readonly><br>
                        <h1 style="margin-top: 26px;margin-bottom: 31px;font-weight: bold;color: #633a1a;">Pay your ticket</h1>
                        <hr style="border-width: 0px;height: 2px;">
                        <div class="row" style="margin-right: 1px;margin-left: 12px;">
                        <div class="col-lg-5" style="color: #734c21;font-size: 19px;font-weight: bold;">
                        <label class="col-form-label" style="font-size: 21px;font-weight: bold;color: #633a1a;border-color: #633a1a;"  readonly>Amount</label></div>
                        <div class="col"><input type="number" name="amount" value='. $amount.' readonly=""></div>
                        </div>
                        <div class="row" style="margin-right: 1px;margin-left: 12px;">
                        <div class="col-lg-5" style="color: #734c21;font-size: 19px;font-weight: bold;padding-right: 3px;">
                        <label class="col-form-label" style="color: #633a1a;padding-top: 4px;padding-right: 0px;margin-right: 0px;margin-left: -36px;width: 187.2px;">Method Of Payment</label></div>
                        <div class="col">
                        ';                    
                    if($_GET['flag']==1){
                        echo' <input type="hidden" name="return" value='.$return.' readonly><br>';
                        }
                        echo'<select name="pay" id="" style="width:188.2px;">
                            <option value="cash">cash</option>
                            <option value="credit">credit</option>
                            <option value="balance">balance</option>
                        </select><br>   <br>    
                        ';
                        echo'
                        <div class="row" style="margin-right: 1px;margin-left: 12px;">
                        <label class="col-form-label" style="font-size: 21px;font-weight: bold;color: #633a1a;border-color: #633a1a;"  readonly>Credit Number</label></div>
                       
                                    <input type="text" name ="credit" placeholder="Credit Number">
                                    ';
                    }else 
                    { 
                        if(isset($_GET['confirm']))  
                        {
                            $amount=$_GET['amount'];
                            $type=$_GET['type'];
                            $class=$_GET['class'];
                            $travel_id=$_GET['travel_id'];
                            $no_of_seats=$_GET['no_of_seats'];
                            $date=$_GET['date'];
                            $pay=$_GET['pay'];
                                include "nav.php";
                                $userid=$_SESSION['userid'];
                                
                                $x=balance($amount,$u);
                                if($x=true){
                                    include "Classes/Travel.php";
                                    $u=new user();
                                    $t=new Travel();
                                    if($pay=='balance')
                                    {
                                        $u->updatebalance($conn,$userid,$amount);
                                    }
                                    $t->updateseats($conn,$no_of_seats,$travel_id);
                                    if(isset($_GET['return']))
                                    {$amount=($amount/$no_of_seats)/2;}
                                    else{ $amount/=$no_of_seats;}
                                    while($no_of_seats--)
                                    { 
                                        $u->generateticket($conn,$class,$type,$amount,$userid,$travel_id,$date); 
                                    }
                                    if(isset($_GET['return'])){
                                        $return=$_GET['return'];
                                        $row=$t->get_data($conn,$travel_id);
                                        $source=$row['travel_source'];
                                        $destination=$row['travel_destination'];
                                        $sql="SELECT * FROM travel WHERE travel_source='$destination' AND travel_destination='$source'and travel_date = '$return';";
                                        $result = mysqli_query($conn,$sql);
                                        $row=mysqli_fetch_assoc($result);
                                        $source=$row['travel_source'];
                                        $destination=$row['travel_destination'];
                                        $u->generateticket($conn,$class,$type,$amount,$userid,$row['travel_id'],$date); 
                                    }
                                    include "view_ticket.php";
                                }else{
                                    echo" no enough money";
                                }
                        }
                    else{
                        echo '
                        <h1 style="margin-top: 26px;margin-bottom: 31px;font-weight: bold;color: #633a1a;">Error</h1>
                        <button href="" name="recharge" class="btn btn-primary" type="submit" style="margin-left: 76px;margin-top: 32px;border-color: #734c21;background: #633a1a;width: 160px;height: 40px;padding-left: 0px;padding-right: 4px;margin-right: 60px;">Recharge</button>
                        <hr style="border-width: 0px;height: 2px;">
                        <div class="row" style="margin-right: 1px;margin-left: 12px;">
                        <div class="col-lg-5" style="color: #734c21;font-size: 19px;font-weight: bold;"></div>
                        <div class="col"></div>
                        </div>
                        <div class="row" style="margin-right: 1px;margin-left: 12px;">
                        <div class="col-lg-5" style="color: #734c21;font-size: 19px;font-weight: bold;padding-right: 3px;"></div>
                        <div class="col">
                        ';
                        }
                       die();
                    }
                    ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col"><button class="btn btn-primary" type="submit"  name="confirm" value="confirm"style="margin-left: 76px;margin-top: 32px;border-color: #734c21;background: #633a1a;width: 160px;height: 40px;padding-left: 0px;padding-right: 4px;margin-right: 60px;">Confirm&nbsp;</button></div>
                    <?php echo'</form>';?>
                </div>
            </div>
             </form>     
            <div class="col" style="background: #d6b881;width: 200px;margin-right: 21px;margin-top: 6px;border-width: 0px;height: 428px;"><img src="assets/img/3e4e7178-3a5b-4732-9d4d-90252059aa66.jpg" style="margin-right: 0px;margin-left: 43px;padding-left: 0px;height: 250px;margin-top: 80px;width: 385.5px;"></div>
        </div>
    </div>
    
</body>

</html>

 