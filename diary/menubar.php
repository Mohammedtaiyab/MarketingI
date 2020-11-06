<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $admin['firstname'].' '.$admin['lastname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="treeview">
        <a href="#">
          <i class="fa fa-folder"></i>
          <span>Folders</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-file"></i>1</a></li>
          <li><a href="#"><i class="fa fa-file"></i>2</a></li>
        </ul>
      </li>
      <li class="header">MANAGE</li>
      <li><a href="#"><i class="fa fa-pencil"></i> <span>Write</span></a></li>


    </ul>
  </section>
  <!-- /.sidebar -->
</aside>