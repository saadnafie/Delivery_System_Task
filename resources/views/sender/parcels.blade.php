@extends('sender.layouts.header')
@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Current Parcels [InTransit - Pending]</h1>

                    <!-- Parcels List -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">In-transit Parcels</h6>
                        </div>
                        <div class="card-body">
                            @if(count($intransit_parcels) != 0)
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Parcel Type</th>
                                            <th>Weight</th>
                                            <th>Pick-up/Drop-off Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($intransit_parcels as $index=>$parcelData)
                                        <tr>
                                            <td>{{ $index+1 }}</td>
                                            <td>{{ $parcelData->parcel_type }}</td>
                                            <td>{{ $parcelData->weight }}</td>
                                            <td>{{ $parcelData->pickup_address }} <br> {{ $parcelData->dropoff_address }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @else
                                <center><i>No in-transit parcels available.</i></center>
                            @endif
                        </div>
                    </div>

                    <!-- Parcels List -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pending Parcels</h6>
                        </div>
                        <div class="card-body">
                        @if(count($pending_parcels) != 0)
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Parcel Type</th>
                                            <th>Weight</th>
                                            <th>Pick-up Address</th>
                                            <th>Drop-off Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pending_parcels as $index=>$parcelData)
                                        <tr>
                                            <td>{{ $index+1 }}</td>
                                            <td>{{ $parcelData->parcel_type }}</td>
                                            <td>{{ $parcelData->weight }}</td>
                                            <td>{{ $parcelData->pickup_address }}</td>
                                            <td>{{ $parcelData->dropoff_address }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @else
                                <center><i>No pending parcels available.</i></center>
                            @endif
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                @endsection