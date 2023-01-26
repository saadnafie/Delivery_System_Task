@extends('sender.layouts.header')
@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Create Parcel</h1>

                    <!-- Parcels List -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Parcel</h6>
                        </div>
                        <div class="card-body">
                            <!-- Content Row -->
                            <div class="row">
                                <div class="col-xl-6 col-md-6 mb-4">
                                    <form class="user" method="POST" action="{{ route('add-parcel') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label>Pick-up Address</label>
                                            <input type="text" class="form-control form-control-user" name="pickup_address" placeholder="Pick-up Address" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Drop-off Address</label>
                                            <input type="text" class="form-control form-control-user" name="dropoff_ddress" placeholder="Drop-off Address" required>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label>Parcel Type</label>
                                                <input type="text" class="form-control form-control-user" name="parcel_type" placeholder="Car Keys" value="Car Keys" >
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Parcel Weight</label>
                                                <input type="text" class="form-control form-control-user" name="parcel_weight" placeholder="0.5 Kg" value="0.5 Kg" >
                                            </div>
                                        </div>
                                        
                                    
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Create New Parcel
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                @endsection