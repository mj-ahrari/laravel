@extends('layouts.master')

@section('title', 'All Posts')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>آی تی بکس</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('post.create')}}"> پست جدید </a>
        </div>
    </div>
</div>

@if (!empty(Session::get('message')))
    <div class="alert alert-info">{{Session::get('message')}}</div>
@endif



<table class="table table-bordered">
    <tr>
        <th style="text-align: center">شناسه</th>
        <th style="text-align: center">عنوان</th>
        <th style="text-align: center">نویسنده</th>
        <th style="text-align: center">عملیات</th>
    </tr>
    @foreach ($posts as $post)
    <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->user_id}}</td>
        <td>
            <form action="{{route('post.destroy', ['post' => $post])}}" method="POST">
                @csrf
                @method('delete')
                <a class="btn btn-info" href="{{route('post.show',['post' => $post])}}">نمایش</a>
                <a class="btn btn-primary" href="{{route('post.edit', ['post' => $post])}}">ویرایش</a>
                <button type="submit" class="btn btn-danger">حذف</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
    