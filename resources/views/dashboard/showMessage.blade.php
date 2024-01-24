@extends('layouts.dash')

@push('header')
Show Messages
@endpush

@include('includesdash.listhead')


@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Manage Messages</h3>
            </div>

            @include('includesdash.searchfor')
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <form action="{{ route('showMessage', $message->id ) }}" method="post">

                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <h2>Full Name: {{$message->firstName}} {{$message->lastName}}</h2>
                        <br>
                        <h2>Email: {{$message->email}}</h2>
                        <br>
                        <h2>Message Content:</h2>
                        <p>{{$message->messageContent}}</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection