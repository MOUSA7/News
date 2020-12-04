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
                    <h3 class="card-title" style="float: right">أضافة قسم جديد</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('section.store')}}" enctype="multipart/form-data" role="form">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Name</label>
                                    <input  class="form-control" id="name"  name="name" placeholder="Section Name">
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                            <!-- /.card-body -->
                        </div>
                        <!-- /end-col-sm-8 -->
                        <div class="col-sm-6">
                            <br>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>القسم</th>
                                        <th>الوقت</th>
                                        <th>العمليات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sections as $index => $new)
                                        <tr>
                                            <td>{{$index +1}}</td>
                                            <td>{{$new->name}}</td>
                                            <td>{{$new->created_at->diffForHumans()}}</td>
                                            <td>
                                                <a href="{{URL::to('admin/section/edit',$new->id)}}" class="btn btn-sm btn-primary">تعديل</a>
                                                <a href="{{URL::to('admin/section/delete',$new->id)}}" class="btn btn-sm btn-danger">حذف</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </form>

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
