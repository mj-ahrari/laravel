@extends('layouts.master')

@section('title','myview')

@section('container')
    {{$count}}
    {{-- @foreach ($list as $name)
        {{$name}}
    @endforeach --}}
    @component('layouts.partials.block')
        @slot('linkname')
            google
        @endslot
        @slot('linkhref')
            http://www.google.com
        @endslot
    @endcomponent
@endsection

@section('script')
    @parent
    <script src="test.js"></script>
@endsection