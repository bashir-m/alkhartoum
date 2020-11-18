<?php  require_once('insert.php'); ?>
<!DOCTYPE html>
<html lang="ar" >
  <head>
  <meta charset="UTF-8"></>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>جامعة الخرطوم</title>

<link href="css/adminlte.css" rel="stylesheet">
<link href="css/bootstrap-rtl.css" rel="stylesheet">
<link href="css/all-fonts.css" rel="stylesheet">
<link href="css/update.css" rel="stylesheet">


  </head>
<body class="sidebar-mini layout-navbar-fixed" style="height: auto;">
<!-- Site wrapper -->
<div class="wrapper">
 

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link elevation-4">
      <img src="img/uok.png" alt="UOK" class="brand-image img-box elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">جامعة الخرطوم</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
            <li class="nav-item">
            <a class="nav-link" id="reg1">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">الطلاب المقبولين بالجامعة</p>
            </a>
          </li>
          
		  
            <li class="nav-item">
            <a class="nav-link" id="reg2">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p class="text">تقرير بأعداد الطلاب  والمسجلين</p>
            </a>
          </li>
		  
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p class="text">النتائج</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
  
   <!-- Report content section -->
   
  
  
    <!-- Content Header (Page header) -->
			 <h3><p title="نظام تسجيل الطلاب بجامعة الخرطوم" class="mb-5 nav-icon fas fa-th">نظام تسجيل الطلاب بجامعة الخرطوم</p></h3>

    <section class="content-header">
      <div class="reg-1">
        <div class="row mb-2">
          
          <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title card-title nav-icon far fa-plus-square">الطلاب المقبولين بالجامعة :</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body">
     <div class="container-fluid">
		  <div  dir="rtl" >
				<span>أدخل رقم الاستمارة ثم أضغط بحث: </span><input type="text" name="dept" id="dept" placeholder="أدخل رقم الاستمارة ثم أضغط بحث">
				<input type="button" id="drop" name="student" value="بحث"></input>
					
	   </div>
		  <hr>
	   <div id="list" class="message" ></div>
	   </div>
	   
	   
	   
	    </div>
              <!-- /.card-body -->
              <div class="card-footer">
                
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
			
			
          </div>
        </div>
      </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

   <section class="content" id="reg">
	
<div class="reg-2">
      <div class="card">

              <div class="card-header">

                <h3 class="card-title nav-icon far fa-save">تقرير تفصيلي بالاعداد </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body">
				<table class='table table-bordered table-hover'>
				<thead class='btn-primary'>
				<tr>
				<th>م</th><th>القسم</th><th>عدد الطلاب المقبولين</th><th>عدد الطلاب المسجلين</th><th>نسبة التسجيل</th><th>عدد الطلاب غير المسجلين</th><th>ملحوظة</th>
				</tr>
				</thead>
<?php 
  $sr=0;
  while ($row = mysqli_fetch_array($rm)){ $sr=$sr+1;
  ?>
				<tbody><tr>
				<td><?php echo $sr;?></td><td><?php echo $row['department'];?></td><td><?php echo $row['alll'];?></td><td><?php echo $row['reg'];?></td><td><?php echo "%".round($row['reg']/$row['alll']*100,2);?></td><td><?php echo $row['alll']-$row['reg'];?></td><td></td>
				</tr></tbody>
<?php }?>
				</table>

	</div>
	</div>
	</div>
	</section>
    <!-- /.content --> 
  
  </div>
  <!-- /.content-wrapper -->

 

 

<!-- jQuery -->
 <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.2
    </div>
    <strong>Copyright © 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>
	   
	   
        <script src="js/t.js"></script>
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/adminlte.js"></script>
   
  </body>
</html>