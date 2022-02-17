@extends('layouts.frontend')

@section('content')
    @include('frontend.components.header.header')
    @include('frontend.components.profile.header')
    @include('frontend.components.friends.peopleyoumayknow')
    @include('frontend.components.friends.loop')
    @include('frontend.components.profile.friends')
@endsection