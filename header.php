<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />

        <title>UTS</title>

        <link rel="shortcut icon" href="<?= ('assets/img/'); ?>iicon.png" type="image/x-icon" />
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css" />
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="assets/css/adminlte.min.css" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   

         <script src="assets/plugins/jquery/jquery.min.js"></script>
         <script src="assets/jquery-ui.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
           <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
        

        <style type="text/css">
            .brand-link{
                padding: .73rem .5rem;
            }
            /*.navbar-white {
    background-color:#4bdd54;
}*/
.main-footer{
    background-color:#39b37fe6;
    color: white;
}
        </style>
    </head>
    <!-- <body class="hold-transition sidebar-mini"> -->

        <body class="sidebar-mini layout-fixed control-sidebar-slide-open layout-navbar-fixed" style="height: auto;" style="background-color: #37df42">
        
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Right navbar links -->
                <ul class="navbar-nav ">
                <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
                  
   <!-- 
       <p style="color: black;margin-top: 10px;text-align: center;display: block; margin: auto;"><b style="font-size: 25px;">SISTEM INFORMASI LAPORAN KEUANGAN </b></p> -->

                </ul>

               
                <ul class="navbar-nav ml-auto">

                <li class="nav-item ml-auto" >
                        <a href="#" class="nav-link">
                            <!-- <i class="fas fa-sign-out-alt"></i> -->
                          <i class="far fa-id-badge"></i>
                     
                        </a>
                    </li>
     
     
    </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #39b37fe6;">
                <!-- Brand Logo -->
                <a href="<?= ('dashboard'); ?>" class="brand-link navbar-white text-center" style="background-color: #39b37fe6; ">
                
                    <span class="text" style="color: white"><b>UTS Pemrograman Web</b></span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
 
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item">
                                <a href="<?= ('index.php'); ?>" class="nav-link" style="color: black">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                    
                          <li class="nav-item">
                                <a href="<?= ('dosen.php'); ?>" class="nav-link" style="color: black">
                                    <i class="nav-icon far fa-circle"></i>
                                    <!-- <i class="far fa-circle"></i> -->
                                    <p>
                                        Data Dosen
                                    </p>
                                </a>
                            </li>
                    

                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>