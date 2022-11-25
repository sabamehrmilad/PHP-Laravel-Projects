<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
@include('layout.head')<!--
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
                <div class="container">
                    <table class="table table-bordered table-responsive" style="border-radius: 15px; background-color: white; margin-top: 20px; ">
                        <thead>
                        <tr>
                            <th scope="col">نام</th>
                            <th scope="col">عکس</th>
                        </tr>
                        </thead>
                        @foreach($categories as $row)
                            <tr>
                                <td>{{$row->name}}</td>
                                <td><img class="img-thumbnail" alt="Responsive image" width="300px" height="300px"  src="images/{{$row->img}}" /></td>
                                <td>
                                    <form action="{{ route('categories.destroy', $row) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                            <i class="fa fa-trash fa-lg text-danger"></i>
                                        </button>

                                        <a href="{{ route('categories.edit', $row->id) }}">
                                            <i class="fa fa-edit  fa-lg"></i>
                                        </a>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{-- Pagination --}}
                    <div class=" d-flex  justify-content-center">
                        {!! $categories->links() !!}
                    </div>
                </div>
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
