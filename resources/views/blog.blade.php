@extends('layouts.template')

@push('header')
Blog
@endpush

@section('content')
@include('includes.header')
@include('includes.carDB')
@include('includes.rentNow')
@endsection