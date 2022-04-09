<?php
session_start();
if($_SESSION['role']!='1'){
    header('location:index.php');
  }
include'connection.php';
$msg = "";
    if (isset($_SESSION['msg'])) {
        $msg = $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    if ($msg != "") {
        echo "<script> alert('$msg')</script>";
    }
     $query="SELECT t1.*, t2.name , t2.contact_no, t2.gst_no, t2.email_id FROM myc_shadule_online as t1 LEFT JOIN myc_customer as t2 ON t1.user_id=t2.id WHERE t1.payment_status=1";
    $run=mysqli_query($conn,$query);
    while ($data=mysqli_fetch_assoc($run)) {
      $eot[]=$data;
    };
    // echo '<pre>';
    // print_r($eot);die;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Department</title>
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
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">
                      ONLINE ASSESSMENT/HEALTH CHECK-UP/INSPECTION REQUEST-EOT/GANTRY/JIB CRANES & HOISTS</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="row">
                
                <div class="col-md-12">
                  <div class="department-list">
                     <div class="card">
              <div class="card-header">
                <h5 style="font-weight: bold;">
                      ONLINE ASSESSMENT/HEALTH CHECK-UP/INSPECTION REQUEST-EOT/GANTRY/JIB CRANES & HOISTS</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S. No.:</th>
                    <th>Name</th>
                    <th>Company Name</th>
                    <th>Country</th>
                    <th>Contact No.</th>
                    <th>Email Id</th>
                    <th>GST </th>
                    <th>Qty</th>
                    <th>Days</th>
                    <th>Total Amount</th>
                    <th>date </th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      if(!empty($eot)) {$sn=0;
                        foreach ($eot as $key => $row){$sn++;?>
                            <tr>
                              <td><?php echo $sn; ?></td>
                              <td><?php echo $row['name']; ?></td>
                              <td><?php echo $row['comp_name']; ?></td>
                              <td><?php echo $row['country']; ?></td>
                              <td><?php echo $row['contact_no']; ?></td>
                              <td><?php echo $row['email_id']; ?></td>
                              <td><?php echo $row['gst_no']; ?></td>
                              <td><?php echo $row['qty']; ?></td>
                              <td><?php echo $row['days']; ?></td>
                              <td><?php echo $row['total_val']; ?></td>
                              <td><?php echo date('d-m-Y',strtotime($row['added_on'])); ?></td>
                            </tr>
                          <?php
                        }
                      }
                    ?>
                  
                        
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
 <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>

<!-- Modal -->
<div class="modal fade" id="departmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Department Update</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form action="action.php" method="post">
        <div class="modal-body">
           <input type="hidden" name="cat_id" id="cat_id" class="form-control" value="1"> 
           <label>Department <span style="color:red;">*</span></label>
           <input type="text" name="department" id="department" class="form-control" required="" value="abc">

        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
          <button type="submit" name="change-department" class="btn btn-primary">Save changes</button>
        </div>
       </form>
    </div>
  </div>
</div>
 <script type="text/javascript">
   $(document).ready(function(){
      $('body').on('click','.editdepartment',function(){
        $('#cat_id').val($(this).data('id'));
        $('#department').val($(this).data('department'));
      });
   });
 </script>
</body>
</html>
