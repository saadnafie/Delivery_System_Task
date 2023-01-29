@extends('sender.layouts.header')
@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Current Parcels</h1>

                    <!-- Parcels List -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> Parcels List</h6>
                        </div>
                        <div class="card-body">
                            @if(count($parcels) != 0)
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Parcel Type</th>
                                            <th>Weight</th>
                                            <th>Pick-up/Drop-off Address</th>
                                            <th>Status</th>
                                            <th>Biker Name</th>
                                            <th>Pick-up/Drop-off time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($parcels as $index=>$parcelData)
                                        <tr>
                                            <td>{{ $index+1 }}</td>
                                            <td>{{ $parcelData->parcel_type }}</td>
                                            <td>{{ $parcelData->weight }}</td>
                                            <td>{{ $parcelData->pickup_address }} <br> {{ $parcelData->dropoff_address }}</td>
                                            <td><span class="badge {{ $parcelData->status->status_color }}">{{ $parcelData->status->parcel_status }}</span></td>
                                            <td>{{ ($parcelData->order != null) ? $parcelData->order->biker->name : '-' }}</td>
                                            <td>
                                              {{ ($parcelData->order != null) ? $parcelData->order->pickup_timestamp : '-' }} <br>
                                              {{ ($parcelData->order != null) ? $parcelData->order->dropoff_timestamp : '-' }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @else
                                <center><i>No parcels available.</i></center>
                            @endif
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                @endsection
