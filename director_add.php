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
                    <h4>เพิ่มผู้กำกับ</h4>
                    <?php
                        if(isset($_GET['submit'])){
                            $drt_id = $_GET['drt_id'];
                            $ttl_name = $_GET['ttl_name'];
                            $drt_name = $_GET['drt_name'];
                            $drt_lname = $_GET['drt_lname'];
                            $sql = "insert into director";
                            $sql .= " values ('$drt_id','$ttl_name','$drt_name','$drt_lname')";
                            include 'connect.php';
                            mysqli_query($conn,$sql);
                            mysqli_close($conn);
                            echo "เพิ่มชื่อหนัง เรียบร้อยแล้ว<br>";
                            header('refresh: 2; director_list.php');
                            
                            
                        }else{
                            
                    ?>
                    <form class="form-horizontal" role="form" name="director_add" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <div class="form-group">
                            <label for="drt_id" class="col-md-2 col-lg-2 control-label">ลำดับ</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="drt_id" id="drt_id" class="form-control">
                           </div>    
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