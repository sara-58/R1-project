@extends('layouts.template')

@push('header')
Listing
@endpush

@section('content')
@include('includes.header')
@include('includes.carDB')
@include('includes.testi')
@include('includes.rentNow')
@endsection