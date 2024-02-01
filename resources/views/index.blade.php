@extends('layouts.template')

@section('content')
    <div class="hero" style="background-image: url('assets/images/hero_1_a.jpg');">
     @include('includes.searchBox')
    </div>

    @include('includes.howWork')
    @include('includes.meetNow')
    @include('includes.carList')
    @include('includes.features')
    @include('includes.testi')
    @include('includes.rentNow')
@endsection