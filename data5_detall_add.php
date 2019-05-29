<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

      <br> 
      <div class="col-sm-4 col-md-5">
                    <h4>เพิ่มชื่อหนัง</h4>
                    <?php
                        if(isset($_GET['submit'])){
                            $day_id = $_GET['lct_ttl_id'];
                            $lct_name = $_GET['lct_name'];
                            
                            $sql = "insert into lecturer";
                            $sql .= " values (null,'$lct_name','$lct_ttl_id')";
                            include 'connectdb.php';
                            mysqli_query($conn,$sql);
                            mysqli_close($conn);
                            echo "เพิ่มชื่อหนัง เรียบร้อยแล้ว<br>";
                            header('refresh: 2; lecturer.php');
                            
                            
                        }else{
                            
                    ?>
                    <form class="form-horizontal" role="form" name="data5_detall_add" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <div class="form-group">
                            <label for="drt_id" class="col-md-2 col-lg-2 control-label">ลำดับ</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="drt_id" id="drt_id" class="form-control">
                           </div>    
                        </div>
                        <div class="form-group">
                            <label for="data_TH" class="col-md-2 col-lg-2 control-label">ชื่อหนังภาษาไทย</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="data_TH" id="data_TH" class="form-control">
                            </div>   
                            <div class="form-group">
                            <label for="data_EN" class="col-md-2 col-lg-2 control-label">ชื่อหนังภาษาอังกฤษ</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="data_EN" id="data_EN" class="form-control">
                            </div>
                            <div class="form-group">
                            <label for="day_day" class="col-md-2 col-lg-2 control-label">วัน</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="day_day" id="day_day" class="form-control">
                            </div>
                            <div class="form-group">
                            <label for="day_mouth" class="col-md-2 col-lg-2 control-label">เดือน</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="day_mouth" id="day_mouth" class="form-control">
                            </div>  
                            <div class="form-group">
                            <label for="day_year" class="col-md-2 col-lg-2 control-label">ปี</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="day_year" id="day_year" class="form-control">
                            </div>  
                            <div class="form-group">
                            <label for="money_mn" class="col-md-2 col-lg-2 control-label">รายได้</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="money_mn" id="monet_mn" class="form-control">
                            </div>  
                            <div class="form-group">
                            <label for="ttl_name" class="col-md-2 col-lg-2 control-label">คำนำหน้า</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="ttl_name" id="ttl_name" class="form-control">
                            </div>  
                            <div class="form-group">
                            <label for="drt_name" class="col-md-2 col-lg-2 control-label">ชื่อผู้กำกับ</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="drt_name" id="drt_name" class="form-control">
                            </div>  
                            <div class="form-group">
                            <label for="drt_lname" class="col-md-2 col-lg-2 control-label">นามสกุล</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="drt_lname" id="drt_lname" class="form-control">
                            </div>        
                          
                        </div> 
                        <div class="form-group">
                            <div class="col-md-10 col-lg-10">
                                <input type="submit" name="submit" value="ตกลง" class="btn btn-default">
                            </div>    
                        </div> 
                    </form>
                    <?php
                        }
                    ?>
                </div>    
            </div>
        </div>











  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>