  <?php
  $cp = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
  $cpage = explode('.',$cp); 
  $page=$cpage[0];
  $armkey=array('category','subcategory','company','delivery-zone');
  $product=array('add-product','product-list');
  ?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Cranium Services</span>
    </a>
 <!-- Sidebar -->
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Cranium Services</a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
               <li class="nav-item">
            <a href="dashboard.php" class="nav-link <?php if($page == 'dashboard'){ echo 'active';} ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?php if(in_array($page, $armkey)){echo 'menu-open';} ?>">
            <a href="#" class="nav-link <?php if(in_array($page, $armkey)){echo 'active';} ?>">
              <i class="fas fa-key nav-icon"></i>
              <p>
                Quotation Request
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="eot_crane.php" class="nav-link <?php if($page == 'category'){ echo 'active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>EOT Crane</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="gantry_crane.php" class="nav-link <?php if($page == 'subcategory'){ echo 'active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gantry Crane</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="jibcrane.php" class="nav-link <?php if($page == 'subcategory'){ echo 'active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>JIB Crane</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="electric_wire.php" class="nav-link <?php if($page == 'subcategory'){ echo 'active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Electric Wire</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?php if(in_array($page, $product)){echo 'menu-open';} ?>">
            <a href="#" class="nav-link <?php if(in_array($page, $product)){echo 'active';} ?>">
              <i class="fas fa-layer-group nav-icon"></i>
              <p>
                Customer
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- <li class="nav-item">
                <a href="add_faculty.php" class="nav-link  <?php if($page == 'add-product'){ echo 'active'; }?>">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Add Faculty</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="customer_list.php" class="nav-link  <?php if($page == 'product-list'){ echo 'active'; }?>">
                  <i class="fas fa-clipboard-list nav-icon"></i>
                  <p>Customer List</p>
                </a>
              </li>
            </ul>
          </li> 
          <!--  <li class="nav-item has-treeview <?php if(in_array($page, $product)){echo 'menu-open';} ?>">
            <a href="#" class="nav-link <?php if(in_array($page, $product)){echo 'active';} ?>">
              <i class="fas fa-layer-group nav-icon"></i>
              <p>
                Student
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="student_list.php" class="nav-link  <?php if($page == 'product-list'){ echo 'active'; }?>">
                  <i class="fas fa-clipboard-list nav-icon"></i>
                  <p>Student List</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="health_checkup.php" class="nav-link <?php if($page == 'order'){ echo 'active';} ?>">
              <i class="fas fa-clipboard-list nav-icon"></i>
              <p>
               Health Checkup
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="electric_chain_hoist.php" class="nav-link <?php if($page == 'order'){ echo 'active';} ?>">
              <i class="fas fa-list-alt nav-icon"></i>
              <p>
                Electric Chain Hoist
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="chain_pully.php" class="nav-link <?php if($page == 'assignment'){ echo 'active';} ?>">
              <i class="fas fa-trophy nav-icon"></i>
              <p>
               Chain Pully Block
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="gifted-winners.php" class="nav-link <?php if($page == 'gifted-winners'){ echo 'active';} ?>">
              <i class="fas fa-medal nav-icon"></i>
              <p>
                Gifted Winners
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    
  </aside>