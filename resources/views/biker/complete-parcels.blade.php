@extends('biker.layouts.header')
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
                                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Sender</th>
                                            <th>Parcel Type / Weight</th>
                                            <th>Pick-up Address</th>
                                            <th>Drop-off Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($parcels as $index=>$parcelData)
                                        <tr>
                                            <td>{{$index+1}}</td>
                                            <td>{{$parcelData->sender->name}} <br>{{$parcelData->sender->phone}} </td>
                                            <td>Car Keys <br> 0.5 KG</td>
                                            <td>{{$parcelData->pickup_address}}</td>
                                            <td>{{$parcelData->dropoff_address}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                @endsection
