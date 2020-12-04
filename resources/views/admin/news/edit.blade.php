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
                    <h3 class="card-title" style="float: right">تعديل خبر جديد</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('news.update',$news->id)}}" enctype="multipart/form-data" role="form">
                    @csrf
                    <div class="row">
                    <div class="col-sm-8">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">عنوان الخبر</label>
                            <input  class="form-control" id="title" value="{{$news->title}}" name="title" placeholder="أدخل عنوان الخبر">
                        </div>
                        <div class="form-group">
                            <label for="">المحتوى الخبري</label>
                            <textarea  class="textarea" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; " name="content" >{!! $news->content !!}</textarea>
                        </div>

                        <div class="form-group">
                            <label>تحديد القسم</label>
                            <select class="form-control" name="section_id">
                                @foreach($sections as $id => $name)
                                    <option  value="{{$id}}" <?php if ($id == $news->section_id){
                                        echo "selected"; } ?> >{{$name}}</option>
                                @endforeach
                            </select>
                        </div>



                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /end-col-sm-8 -->
                    <div class="col-sm-4">
                        <br>
                        <div class="form-group">
                            <label for="photo_id">{{$news->photo_id}}صورة الخبر</label>
                            <img src="/images/news/{{$news->photo->file}}" style="height: 70%; width: 100%;" alt="">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="old_image" value="{{$news->photo_id}}">
                            <input type="file" class="form-control" id="photo_id" name="photo_id" placeholder="صورة الخبر">
                        </div>

                    </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
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
