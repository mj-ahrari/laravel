@extends('layouts.master')

@section('title', 'Edit Posts')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ویرایش پست</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('post.index')}}">بازگشت</a>
            </div>
        </div>
    </div>

    @if (!empty(Session::get('message')))
        <div class="alert alert-info">{{Session::get('message')}}</div>
    @endif
    <form action="{{route('post.update',['post' => $post])}}" method="POST">
        @csrf
        @method('put') 
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>عنوان:</strong>
                    <input type="text" name="title" value="{{$post->title}}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>نویسنده:</strong>
                    <input type="number" name="user_id" id="" class="form-control" value="{{$post->user_id}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">ثبت</button>
            </div>
        </div>

    </form>
    @endsection 