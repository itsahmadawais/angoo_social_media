@extends('layouts.frontend')

@section('content')
    @include('frontend.components.header.header')
    <div class="wrapper">
        @include('frontend.components.header.leftsidebar')
        
        <main class="content-page ps-5 pe-5">
            <h1>Promote Your Business</h1>
            <hr>
            <form action="" method="POST">
                <div class="card">
                    <div class="card-header">
                        Company Information
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Headline</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Get amazing watch for yourself...">
                        </div>
                        <div class="mb-3">
                            <label for="company" class="form-label">Company Name</label>
                            <input type="text" name="company" id="company" class="form-control" placeholder="Company Name">
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        Ad Details
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Headline</label>
                                    <input type="date" name="title" id="title" class="form-control" placeholder="Get amazing watch for yourself...">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="company" class="form-label">Company Name</label>
                                    <input type="date" name="company" id="company" class="form-control" placeholder="Company Name">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        
                        
                        <div class="mb-3">
                            <label for="product" class="form-label">Product</label>
                            <input type="text" name="product" id="product" class="form-control" placeholder="Watch">
                        </div>
                        <div class="mb-3">
                            <label for="website" class="form-label">Website URL</label>
                            <input type="text" name="website" id="website" class="form-control" placeholder="https://website.com">
                        </div>
                        <div class="mb-3">
                            <label for="ad_message" class="form-label">Message</label>
                            <textarea class="form-control" rows="4" placeholder="Write Ad Message"></textarea>
                        </div>
            </form>
        </main>
        
        @include('frontend.components.header.rightsidebar')
    </div>
@endsection