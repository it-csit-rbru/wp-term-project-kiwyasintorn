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
   
  <body>

      <div class="col-sm-4 col-md-5">
                    <h4>แก้ไขชื่อหนัง</h4>
                    <?php
                        $day_id = $_REQUEST['day_id'];
                        if(isset($_GET['submit'])){
                            $day_id = $_GET['day_id'];
                            $data_TH = $_GET['data_TH'];
                            $data_EN = $_GET['data_EN'];
                            $day_day = $_GET['day_day'];
                            $day_mouth = $_GET['day_mouth'];
                            $day_year = $_GET['day_year'];
                            $money_mn = $_GET['money_mn'];
                            $ttl_name = $_GET['ttl_name'];
                            $drt_name = $_GET['drt_name'];
                            $drt_lname = $_GET['drt_lname'];
                            $sql = "update data5_detall set ";
                            $sql .= "lct_name='$lct_name',lct_ttl_id='$lct_ttl_id' ";
                            $sql .="where lct_id='$lct_id' ";
                            include 'connectdb.php';
                            mysqli_query($conn,$sql);
                            mysqli_close($conn);
                            echo "แก้ไขรายชื่อหนัง เรียบร้อยแล้ว<br>";
                            header('refresh: 2; data5_detall.php');
                            echo '<a href="data5_detall.php">แสดงรายชื่อหนังทั้งหมด</a>';
                            
                        }else{
                    ?>
                    <form class="form-horizontal" role="form" name="data_edit" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <div class="form-group">
                            <input type="hidden" name="data_id" id="data_id" value="<?php echo "$data_id";?>">
                            <label for="data_drt_id" class="col-md-2 col-lg-2 control-label">ลำดับ</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="data_drt_id" id="data_drt_id" class="form-control">
                                <?php
                                    include 'connect.php';
                                    $sql2 = "select * from data_list where data_id='$data_id'";
                                    $result2 = mysqli_query($conn,$sql2);
                                    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                                    $fdata_TH = $row2['data_TH'];
                                    $fdata_EN = $row2['data_EN'];
                                    $fdata_drt_id = $row2['data_drt_id'];
                                    $sql =  "SELECT * FROM data_list order by data_id";
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                        echo '<option value=';
                                        echo '"' . $row['data_id'].'"';
                                        if($row['data_id']==$fdata_drt_id){
                                            echo ' selected="selected" ';
                                        }
                                        echo ">";
                                        echo $row['data_TH'];
                                        echo '</option>';
                                    }
                                    mysqli_free_result($result);
                                    mysqli_close($conn);
                                ?>
                                </select>
                           </div>    
                        </div>
                        <div class="form-group">
                            <label for="lct_name" class="col-md-2 col-lg-2 control-label">ชื่อหนังภาษาไทย</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="data_TH" id="data_TH" class="form-control" 
                                       value="<?php echo $fdata_TH;?>">
                            </div>    
                        </div> 
                        <div class="form-group">
                            <label for="data_EN" class="col-md-2 col-lg-2 control-label">ชื่อหนังภาษาอังกฤษ</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="data_EN" id="data_EN" class="form-control" 
                                       value="<?php echo $fdata_EN;?>">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="data_EN" class="col-md-2 col-lg-2 control-label">วัน</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="data_EN" id="data_EN" class="form-control" 
                                       value="<?php echo $fdata_EN;?>">
                            </div>    
                        </div> 
                        <div class="form-group">
                            <label for="data_EN" class="col-md-2 col-lg-2 control-label">เดือน</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="data_EN" id="data_EN" class="form-control" 
                                       value="<?php echo $fdata_EN;?>">
                            </div>    
                        </div> 
                        <div class="form-group">
                            <label for="data_EN" class="col-md-2 col-lg-2 control-label">ปี</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="data_EN" id="data_EN" class="form-control" 
                                       value="<?php echo $fdata_EN;?>">
                            </div>    
                        </div> 
                        <div class="form-group">
                            <label for="data_EN" class="col-md-2 col-lg-2 control-label">รายได้</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="data_EN" id="data_EN" class="form-control" 
                                       value="<?php echo $fdata_EN;?>">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="data_EN" class="col-md-2 col-lg-2 control-label">คำนำหน้า</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="data_EN" id="data_EN" class="form-control" 
                                       value="<?php echo $fdata_EN;?>">
                            </div>    
                        </div> 
                        <div class="form-group">
                            <label for="data_EN" class="col-md-2 col-lg-2 control-label">ชื่อผู้กำกับ</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="data_EN" id="data_EN" class="form-control" 
                                       value="<?php echo $fdata_EN;?>">
                            </div>    
                        </div> 
                        <div class="form-group">
                            <label for="data_EN" class="col-md-2 col-lg-2 control-label">นามสกุล</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="data_EN" id="data_EN" class="form-control" 
                                       value="<?php echo $fdata_EN;?>">
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







<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>