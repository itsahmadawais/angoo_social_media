@extends('layouts.frontend')

@section('content')
    @include('frontend.components.header.header')
    @include('frontend.components.header.leftsidebar')
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    Settings
                </div>
            </div>
        </div>
    </div>
    @include('frontend.components.header.rightsidebar')
@endsection