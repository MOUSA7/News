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
            <div class="card">
                <div class="card-header">

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th> المقال</th>
                            <th>المحتوى</th>
                            <th>المستخدم</th>
                            <th>الصورة</th>
                            <th>الوقت</th>
                            <th>العمليات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articles as $index => $article)
                            <tr>
                                <td>{{$index +1}}</td>
                                <td>{{Str::limit($article->title,25)}}</td>
                                <td>{!! Str::limit($article->content,30) !!}</td>
                                <td>{{$article->user->name}}</td>
                                <td><img src="/images/articles/{{$article->photo->file}}" style="height: 45px; width: 60px" alt=""></td>
                                <td>{{$article->created_at->diffForHumans()}}</td>
                                <td>
                                    <a href="{{URL::to('admin/articles/edit',$article->id)}}" class="btn btn-sm btn-primary">تعديل</a>
                                    <a href="{{URL::to('admin/articles/delete',$article->id)}}" class="btn btn-sm btn-danger">حذف</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

@stop
