<!-- right side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-right image">
                <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-right info">
                <p>کاربر</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
            </div>
        </div>

        <!-- search form (Optional) -->

        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">عناوین</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview ">
                <a href="#"><i class="fa fa-link"></i> <span>اسلایدر</span>
                    <span class="pull-left-container">
                <i class="fa fa-angle-right pull-left"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/slider')}}"> اسلایدر</a></li>
                    <li><a href="{{url('/createSlider')}}">ایجاد اسلایدر </a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#"><i class="fa fa-link"></i> <span>کاربران</span>
                    <span class="pull-left-container">
                <i class="fa fa-angle-right pull-left"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/users')}}"> کاربران</a></li>
                    <li><a href="{{url('/user/create')}}">ایجاد کاربر</a></li>
                </ul>
            </li>

            <li class="treeview ">
                <a href="#"><i class="fa fa-link"></i> <span>مطالب</span>
                    <span class="pull-left-container">
                <i class="fa fa-angle-right pull-left"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/post')}}">مطالب</a></li>
                    <li><a href="{{url('/createPost')}}">ایجاد مطلب</a></li>
                </ul>
            </li>

            <li class="treeview ">
                <a href=""><i class="fa fa-link"></i> <span>دسته بندی ها</span>
                    <span class="pull-left-container">
                <i class="fa fa-angle-right pull-left"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/categories')}}">دسته بندی ها</a></li>
                    <li><a href="{{url('/createcategory')}}">ایجاد دسته بندی ها</a></li>
                </ul>
            </li>

            <li><a href="{{url('admin.index')}}"><i class="fa fa-link"></i> <span>ادمین </span></a></li>


            <li><a href="{{url('/comments')}}"><i class="fa fa-link"></i> <span>نظر سنجی </span></a></li>


        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
