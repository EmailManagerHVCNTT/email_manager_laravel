@extends('main')

@section('content')
    <div class="sidebar" data-background-color="white" data-active-color="danger">
        <!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Email Campain
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="#">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="ti-view-list-alt"></i>
                        <p>Email</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        @include('partials._nav')

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Campaign name</h4>
                                <p class="category">Here is statistical of campaign</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Number of receiving</th>
                                    <th>Sent</th>
                                    <th>Seen</th>
                                    <th>Clicked</th>
                                    <th>Reaction</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Sinh nhật quán</td>
                                        <td>Gửi ngay</td>
                                        <td>1000</td>
                                        <td>1000</td>
                                        <td>950</td>
                                        <td>900</td>
                                        <td>500</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Sinh nhật quán</td>
                                        <td>Gửi ngay</td>
                                        <td>1000</td>
                                        <td>1000</td>
                                        <td>950</td>
                                        <td>900</td>
                                        <td>500</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Sinh nhật quán</td>
                                        <td>Gửi ngay</td>
                                        <td>1000</td>
                                        <td>1000</td>
                                        <td>950</td>
                                        <td>900</td>
                                        <td>500</td>
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
@endsection