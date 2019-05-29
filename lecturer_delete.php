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
        <?php
             
            include 'connectdb.php';
            $lct_id = $_GET['lct_id'];
            $sql = "delete from lecturer where lct_id='$lct_id'";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo 'ลบแล้ว';
                header('refresh: 2; lecturer.php');
            }else{
                echo 'ลบไม่ได้';
                header('refresh: 2; lecturer.php');
            }
            mysqli_close($conn);
           
        ?>
        <?php 
            
        ?>
        <script type="text/javascript">
            window.location("lecturer.php");
        </script>
    </body>
</html>