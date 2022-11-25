<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
@include('layout.head')
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<div class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <!-- Main Header -->
    @include('layout.header')


    <!-- right side column. contains the logo and sidebar -->

        <!-- Sidebar Menu -->
    @include('layout.sidebarmenu')
    <!-- Sidebar Menu -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">

                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
                    <li class="active">صفحه</li>
                </ol>
            </section>

            <!-- Main content -->
            <div class="container">
            <form action="{{url('admin.index')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group col-md-9">
                    <label for="formGroupExampleInput">نام کاربری</label>
                    <input type="text" name="name" class="form-control"  id="formGroupExampleInput" placeholder="نام کاربری خود را وارد کنید">
                </div>
                <div class="form-group col-md-6">
                    <label for="formGroupExampleInput2">ایمیل</label>
                    <input   type="email" name="email" class="form-control" id="formGroupExampleInput2" placeholder="ایمیل مورد نظر خود را وارد کنید ">
                </div>
                <div class="form-group col-md-6">
                    <label for="formGroupExampleInput2">پسورد</label>
                    <input   type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="رمز عبور خود را وارد کنید ">
                </div>
                <button type="submit"  value="save img" style="background-color: green; color: white;position:relative; top: 70px; " class="btn btn-secondary btn-lg  col-md-1 ">ثبت</button>
            </form>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
    @include('layout.footer')

    <!-- Control Sidebar -->

        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
        immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>


    </div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</html>
