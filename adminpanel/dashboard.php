<?php
session_start();
include_once('connection.php');
if($_SESSION['role']!='1'){
    header('location:index.php');
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <?php include'includes/header-links.php'; ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



 
    <?php include'includes/top-header.php'; ?>
    <?php include'includes/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   <?php include'includes/page-header.php'; ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- <?php 
        $sql = "select * from products where status = '1'";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($res);
        ?> -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
               <!--  <?php 
                  $sql1 = "select * from department_master where status = '1'";
                  $res1 = mysqli_query($conn, $sql1);
                  $row1 = mysqli_num_rows($res1);
                  ?> --> 
                <h3>20<!-- <?php echo $row1; ?> --></h3>

                <p>Total Electric Chain</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="department.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
               <!--  <?php 
                  $sql1 = "select * from student where status = '1'";
                  $res1 = mysqli_query($conn, $sql1);
                  $row1 = mysqli_num_rows($res1);
                  ?>  -->
                <h3>56<!-- <?php echo $row1; ?> --></h3>

                <p>Total Customer</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="student_list.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
             <!--  <?php 
                  $sql1 = "select * from faculty where status = '1'";
                  $res1 = mysqli_query($conn, $sql1);
                  $row1 = mysqli_num_rows($res1);
                  ?>  -->
                <h3>45<!-- <?php echo $row1; ?> --></h3>

                <p>Total Request</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="faculty_list.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
     <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                
                <h3>10</h3>

                <p>Total Chain Pully </p>
              </div>
              <div class="icon">
                <i class="fas fa-gift"></i>
              </div>
              <a href="gifted-winners.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> 
          <!-- ./col -->
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include'includes/copyright.php'; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include'includes/footer-links.php'; ?>
</body>
</html>
