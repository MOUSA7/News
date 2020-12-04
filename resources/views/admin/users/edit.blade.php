@extends('admin.layouts.app')

@section('title')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">لوحة التحكم</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">عرض الأخبار</a></li>
                <li class="breadcrumb-item active">لوحة التحكم</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@stop
@section('content')

    <div class="row">
        <div class="col-12">
            <!-- /.card-header -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title" style="float: right">تسجيل مستخدم جديد</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('users.update',$user->id)}}" enctype="multipart/form-data" role="form">
                    @csrf
{{--                    {{method_field('PATCH')}}--}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">أسم المستخدم</label>
                            <input  class="form-control" id="name" value="{{$user->name}}" name="name" placeholder="أدخل أسم المستخدم">
                        </div>


                        <div class="form-group">
                            <label for="email">البريد الالكتروني</label>
                            <input  class="form-control" id="email" name="email" value="{{$user->email}}" placeholder="أدخل البريد الالكتروني">
                        </div>

                        <div class="form-group">
                            <label for="password">كلمة المرور</label>
                            <input type="password" class="form-control" id="password" name="password" >
                        </div>



                        <div class="form-group form-check form-check-inline">
                            <span class="caption-subject font-dark bold uppercase">القسم :  </span>
                            @foreach($user->sections as $section)
                                &nbsp;
                                &nbsp;
                                <input type="checkbox" value="{{$section->id}}" name="section_id[]" <?php if ($section->id != null){
                                    echo "checked";
                                } ?> class="form-check-input">

                                <label class="form-check-label "> {{$section->name}}</label>

                            @endforeach
                        </div>
                        {{--                        <div class="form-check">--}}
                        {{--                            <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
                        {{--                            <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
                        {{--                        </div>--}}
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    </div>

@stop
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $(function () {
        // Summernote
        $('.textarea').summernote()
    })
</script>
