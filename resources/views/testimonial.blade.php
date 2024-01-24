@extends('layouts.template')

@push('header')
Testimonials
@endpush

@section('content')
@include('includes.header')
@include('includes.testimonialDB')
@include('includes.rentNow')
@endsection