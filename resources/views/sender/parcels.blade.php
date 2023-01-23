@extends('sender.layouts.header')
@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Parcels</h1>

                    <!-- Parcels List -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Parcels</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Parcel Type</th>
                                            <th>Weight</th>
                                            <th>Pick-up Address</th>
                                            <th>Drop-off Address</th>
                                            <th>Status</th>
                                            <th>date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Car Keys</td>
                                            <td>50 gm</td>
                                            <td>Berline</td>
                                            <td>Munie</td>
                                            <td>Pending</td>
                                            <td>2023/1/13</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                @endsection