@extends('layout.starter')

@section('table')

    <section class="content container-fluid">

        <!--------------------------
          | Your Page Content Here |
          -------------------------->

        <div class="table table-bordered table-responsive" style="box-sizing: border-box;padding-right:100px; padding-left: 100px;padding-top: 60px;">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">نام</th>
                    <th scope="col">شماره همراه</th>
                    <th scope="col">کد ملی</th>
                    <th scope="col">تاریخ تولد</th>
                </tr>
                </thead>



                @foreach($user as $row)
                    <tr>
                        <td>{{$row->name}}</td>
                        <td>{{$row->phone}}</td>
                        <td>{{$row->national_code}}</td>
                        <td>{{$row->birthday}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>

@endsection
