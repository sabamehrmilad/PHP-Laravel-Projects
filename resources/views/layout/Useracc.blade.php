<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
        <span class="hidden-xs">کاربر</span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
            <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

            <p>
                کاربر
                <small>مدیریت کل سایت</small>
            </p>
        </li>
        <!-- Menu Body -->
        <li class="user-body">
            <!-- /.row -->
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
{{--                <a href="{{route('logout')}}" class="btn btn-default btn-flat" onclick="event.pereventDefault(); document.getElementById('logout-form').submit();" >--}}
{{--                    خروج--}}
{{--                </a>--}}

{{--            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none">--}}
{{--                @csrf--}}
{{--            </form>--}}

            <div class="nav-link" id="nav-bar-logoutbutton">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-secondary btn-sm" type="submit">خروج</button>
                </form>
            </div>
        </li>
    </ul>
</li>
