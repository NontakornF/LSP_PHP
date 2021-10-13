<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../assets/dist/img/lsp.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Security LSP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php  echo $_SESSION['f_name']." ".$_SESSION['l_name'];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
          <li class="nav-item">
            <a href="index.php" class="nav-link">
             <i class="fa fa-home nav-icon"></i>
              <p>หน้าหลัก</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="index_edit_Security.php" class="nav-link">
             <i class="fa fa-cog nav-icon"></i>
              <p>เเก้ไขรหัสผ่าน</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="position.php" class="nav-link">
             <i class="fa fa-bullseye nav-icon"></i>
              <p>เลือกตำเเหน่งที่อยู่</p>
            </a>
          </li>


               <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-car"></i>
              <p>
                เส้นทาง
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index_list_in.php" class="nav-link">
                  <i class="fa fa-share nav-icon"></i>
                  <p>ขาเข้า</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index_list_out.php" class="nav-link">
                  <i class="fa fa-reply nav-icon"></i>
                  <p>ขาออก</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item mt-4">
            <a href="logout.php" class="nav-link">
            <i class="fas fa-sign-out-alt nav-icon"></i>
              <p>ออกจากระบบ</p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>