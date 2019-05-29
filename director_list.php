<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>รายชื่อหนัง10เรื่อง</h1>
  <p></p>
  <img width="362"  height="300" class="card-img-top" src="http://soulofjakarta.com/images-artikel/besar/movie-theater-revival-setup.jpg" alt="Card image cap"> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="Untitled-1.php">หน้าหลัก</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="data_list.php">ชื่อหนัง</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="director_list.php">ชื่อผู้กำกับ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="data5_detall_list.php">รายชื่อภาพยนตร์ที่ทำเงินสูงสุด</a>
      </li>    
    </ul>
  </div>  
</nav>
<div class="container">
                    <h4>แสดงชื่อผู้กำกับ</h4>
                    <a href="director_add.php" class="btn btn-link">เพิ่มชื่อผู้กำกับ</a>
                    <div class="container">
                    <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>

                                    <th>คำนำหน้า</th>
                                    
                                    <th>ชื่อผู้กำกับ</th>

                                    <th>นามสกุล</th>
                                </tr>
                            </thead>
                            <tbody>
                    <?php
                        include 'connect.php';                        
                        $sql =  'SELECT * FROM director_detall order by drt_id';
                        $result = mysqli_query($conn,$sql);
                        while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                            echo '<tr>';
                            echo '<td>' . $row['drt_id'] . '</td>';
                            echo '<td>' . $row['ttl_name'].'</td>';
                            echo '<td>' . $row['drt_name'] .'</td>';
                            echo '<td>' . $row['drt_lname'].'</td>';
                           
                            echo '<td>';
                            ?>
                                <a href="director_edit.php?drt_id=<?php echo $row['drt_id'];?>" class="btn btn-warning">แก้ไข</a>
                                <a href="JavaScript:if(confirm('ยืนยันการลบ')==true)
                                   {window.location='director_delete.php?drt_id=<?php echo $row["drt_id"];?>'}" class="btn btn-primary">ลบ</a>
                            <?php
                                    echo '</td>';                            
                            echo '</tr>';
                        }
                        mysqli_free_result($result);
                        echo '</table>';
                        mysqli_close($conn);
                    ?>
                            </tbody>
                        </table>    
                </div>    
              </div>
            </div>
          </div>
</body>
</html>