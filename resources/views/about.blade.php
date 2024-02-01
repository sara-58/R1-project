@extends('layouts.template')

@push('header')
About
@endpush

@section('content')
@include('includes.header')
@include('includes.info')
@include('includes.team')
@include('includes.history')
@include('includes.rentNow')
@endsection