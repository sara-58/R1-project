@extends('layouts.template')

@section('content')

@php
$imageUrl = asset('assets/images/hero_1_a.jpg');
@endphp
<div class="hero inner-page" style="background-image: url('{{ $imageUrl }}');" >

    <div class="container">
        <div class="row align-items-end ">
            <div class="col-lg-12">
                <div class="intro">
                    <h1><strong>{{$car->carTitle}}</strong></h1>
                    <div class="pb-4"><strong class="text-black">Posted on {{ \Carbon\Carbon::parse($car->created_at)->format('F j, Y')}}</strong></div>
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
