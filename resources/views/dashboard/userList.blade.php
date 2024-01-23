@extends('layouts.dash')

@push('header')
Users
@endpush

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Manage <small>Users</small></h3>
            </div>

            @include('includesdash.searchfor')
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>List of Users</h2>
                        @include('includesdash.toolbox')

                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Registration Date</th>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Active</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <tr>
                                                <td>1 Jan 2023</td>
                                                <td>Tony Adam</td>
                                                <td>tony2023</td>
                                                <td>tony@gmail.com</td>
                                                <td>Yes</td>
                                                <td><img src="{{asset('assets/admin/images/edit.png')}}" alt="Edit"></td>
                                            </tr>
                                            <tr>
                                                <td>1 Jan 2023</td>
                                                <td>Tony Adam</td>
                                                <td>tony2023</td>
                                                <td>tony@gmail.com</td>
                                                <td>Yes</td>
                                                <td><img src="./images/edit.png" alt="Edit"></td>
                                            </tr>
                                            <tr>
                                                <td>1 Jan 2023</td>
                                                <td>Tony Adam</td>
                                                <td>tony2023</td>
                                                <td>tony@gmail.com</td>
                                                <td>Yes</td>
                                                <td><img src="./images/edit.png" alt="Edit"></td>
                                            </tr>
                                            <tr>
                                                <td>1 Jan 2023</td>
                                                <td>Tony Adam</td>
                                                <td>tony2023</td>
                                                <td>tony@gmail.com</td>
                                                <td>Yes</td>
                                                <td><img src="./images/edit.png" alt="Edit"></td>
                                            </tr>
                                            <tr>
                                                <td>1 Jan 2023</td>
                                                <td>Tony Adam</td>
                                                <td>tony2023</td>
                                                <td>tony@gmail.com</td>
                                                <td>Yes</td>
                                                <td><img src="./images/edit.png" alt="Edit"></td>
                                            </tr>
                                            <tr>
                                                <td>1 Jan 2023</td>
                                                <td>Tony Adam</td>
                                                <td>tony2023</td>
                                                <td>tony@gmail.com</td>
                                                <td>Yes</td>
                                                <td><img src="./images/edit.png" alt="Edit"></td>
                                            </tr>
                                            <tr>
                                                <td>1 Jan 2023</td>
                                                <td>Tony Adam</td>
                                                <td>tony2023</td>
                                                <td>tony@gmail.com</td>
                                                <td>Yes</td>
                                                <td><img src="./images/edit.png" alt="Edit"></td>
                                            </tr>
                                            <tr>
                                                <td>1 Jan 2023</td>
                                                <td>Tony Adam</td>
                                                <td>tony2023</td>
                                                <td>tony@gmail.com</td>
                                                <td>Yes</td>
                                                <td><img src="./images/edit.png" alt="Edit"></td>
                                            </tr>
                                            <tr>
                                                <td>1 Jan 2023</td>
                                                <td>Tony Adam</td>
                                                <td>tony2023</td>
                                                <td>tony@gmail.com</td>
                                                <td>Yes</td>
                                                <td><img src="./images/edit.png" alt="Edit"></td>
                                            </tr>
                                            <tr>
                                                <td>1 Jan 2023</td>
                                                <td>Tony Adam</td>
                                                <td>tony2023</td>
                                                <td>tony@gmail.com</td>
                                                <td>Yes</td>
                                                <td><img src="./images/edit.png" alt="Edit"></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection