@extends('layouts.master')

@section('title','myview')

@section('container')
    this is myview page body.
@endsection

@section('script')
    @parent
    <script src="test.js"></script>
@endsection