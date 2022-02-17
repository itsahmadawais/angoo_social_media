@extends('layouts.frontend')

@section('content')
    @include('frontend.components.header.header')
    <div class="wrapper">
        @include('frontend.components.header.leftsidebar')
        @include('frontend.components.feed.feed')
        @include('frontend.components.header.rightsidebar')
    </div>
@endsection