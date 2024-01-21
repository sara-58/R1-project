@extends('layouts.template')

@section('content')
<div class="hero inner-page" style="background-image: url('assets/images/hero_1_a.jpg');">
    <div class="container">
        <div class="row align-items-end ">
            <div class="col-lg-12">
                <div class="intro">
                    <h1><strong>Single Blog Posts Title</strong></h1>
                    <div class="pb-4"><strong class="text-black">Posted on May 22, 2020</strong></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-content">
            @include('includes.carinfo')
            @include('includes.comments')
            </div>
            @include('includes.sidebar')
        </div>
    </div>
</div>
@endsection
