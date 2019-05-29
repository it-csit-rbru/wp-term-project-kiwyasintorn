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

      <?php include 'header.php';?>
      <?php include 'menu.php';?>
      <br>
      <br>
      <div class="col-sm-4 col-md-5">
                    <h4>แก้ไขข้อมูลผู้สอน</h4>
                    <?php
                        $lct_id = $_REQUEST['lct_id'];
                        if(isset($_GET['submit'])){
                            $lct_id = $_GET['lct_id'];
                            $lct_ttl_id = $_GET['lct_ttl_id'];
                            $lct_name = $_GET['lct_name'];
                            $sql = "update lecturer set ";
                            $sql .= "lct_name='$lct_name',lct_ttl_id='$lct_ttl_id' ";
                            $sql .="where lct_id='$lct_id' ";
                            include 'connectdb.php';
                            mysqli_query($conn,$sql);
                            mysqli_close($conn);
                            echo "แก้ไขข้อมูลอาจารย์ เรียบร้อยแล้ว<br>";
                            header('refresh: 2; lecturer.php');
                            echo '<a href="lecturer.php">แสดงรายชื่ออาจารย์ทั้งหมด</a>';
                            
                        }else{
                    ?>
                    <form class="form-horizontal" role="form" name="lecturer_edit" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <div class="form-group">
                            <input type="hidden" name="lct_id" id="lct_id" value="<?php echo "$lct_id";?>">
                            <label for="lct_ttl_id" class="col-md-2 col-lg-2 control-label">คำนำหน้าชื่อ</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="lct_ttl_id" id="lct_ttl_id" class="form-control">
                                <?php
                                    include 'connectdb.php';
                                    $sql2 = "select * from lecturer where lct_id='$lct_id'";
                                    $result2 = mysqli_query($conn,$sql2);
                                    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                                    $flct_name = $row2['lct_name'];
                                    $flct_lname = $row2['lct_lname'];
                                    $flct_ttl_id = $row2['lct_ttl_id'];
                                    $sql =  "SELECT * FROM title order by ttl_id";
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                        echo '<option value=';
                                        echo '"' . $row['ttl_id'].'"';
                                        if($row['ttl_id']==$flct_ttl_id){
                                            echo ' selected="selected" ';
                                        }
                                        echo ">";
                                        echo $row['ttl_name'];
                                        echo '</option>';
                                    }
                                    mysqli_free_result($result);
                                    mysqli_close($conn);
                                ?>
                                </select>
                           </div>    
                        </div>
                        <div class="form-group">
                            <label for="lct_name" class="col-md-2 col-lg-2 control-label">ชื่อ-นามสกุล</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="lct_name" id="lct_name" class="form-control" 
                                       value="<?php echo $flct_name;?>">
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