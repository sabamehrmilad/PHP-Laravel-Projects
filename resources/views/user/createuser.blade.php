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
            <section class="content container-fluid">

                <!--------------------------
                  | Your Page Content Here |
                  -------------------------->

                <form  name="createuser-form" id="createuser-form" method="POST" action="{{'/user/store '}}" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group ">
                        <label for="formGroupExampleInput">نام و نام خانوادگی</label>
                        <input  type="text" name="user_name" required="required" class="form-control " id="formGroupExampleInput" placeholder="نام و نام خانوادگی خود را وارد بکنید">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">شماره موبایل</label>
                        <input type="text" name="user_phone" required="required" class="form-control" id="formGroupExampleInput2" placeholder="شماره موبایل خود را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">کد ملی</label>
                        <input type="text" name="user_national_code" required="required" class="form-control " id="formGroupExampleInput2" placeholder="کد ملی خود را وارد کنید ">
                    </div>


                    <div class="form-group" >
                        <label>تاریخ تولد</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input  type="text" name="date_picker" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <button type="submit" value="save user" style="background-color: green; color: white;margin-top: 30px" class="btn btn-secondary btn-lg">ثبت نام</button>
                </form>

            </section>
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
