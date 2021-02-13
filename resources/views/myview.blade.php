@extends('layouts.master')

@section('title','myview')

@section('container')
    {{-- @foreach ($list as $name)
        {{$name}}
    @endforeach --}}
    @include('layouts.partials.comments', compact('list'))
@endsection

@section('script')
    @parent
    <script src="test.js"></script>
@endsection