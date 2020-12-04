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
                    <h3 class="card-title" style="float: right">تعديل المقال جديد</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('articles.update',$article->id)}}" enctype="multipart/form-data" role="form">
                    @csrf
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">عنوان المقال</label>
                                    <input  class="form-control" id="title" value="{{$article->title}}" name="title" placeholder="أدخل عنوان الخبر">
                                </div>
                                <div class="form-group">
                                    <label for="">المحتوى المقال</label>
                                    <textarea  class="textarea" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; " name="content" >{!!  $article->content !!}</textarea>
                                </div>



                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /end-col-sm-8 -->
                        <div class="col-sm-4">
                            <br>
                            <div class="form-group">
                                <label for="photo_id">{{$article->photo_id}}صورة المقال</label>
                                <img src="/images/articles/{{$article->photo->file}}" style="height: 70%; width: 100%;" alt="">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="old_image" value="{{$article->photo_id}}">
                                <input type="file" class="form-control" id="photo_id" name="photo_id" placeholder="صورة المقال">
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
