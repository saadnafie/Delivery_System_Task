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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Sender1 <br> +49 222 39 989 221 </td>
                                            <td>Car Keys <br> 0.5 KG</td>
                                            <td>Berline</td>
                                            <td>Munie</td>
                                            <td>
                                            <button type="button" class="btn btn-info btn-circle" data-toggle="modal" data-target="#myModal">
                                                 <i class="fas fa-info-circle"></i>
                                            </button>
                                                 <!-- The Modal -->
                                                <div class="modal fade" id="myModal">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                    
                                                        <!-- Modal Header -->
                                                        <div class="modal-header bg-primary text-white">
                                                            <h6 class="modal-title">Add Pick-up/Drop-off Time</h6>
                                                            <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        
                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <form method="post" action="" class="user">
                                                                <div class="form-group">
                                                                    <label for="Pickuptime"> Pick-up (date and time):</label>
                                                                    <input type="datetime-local" id="birthdaytime" name="birthdaytime" class="form-control form-control-user" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="Dropofftime">Drop-off (date and time):</label>
                                                                    <input type="datetime-local" id="birthdaytime" name="birthdaytime" class="form-control form-control-user" required>
                                                                </div>
                                                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                                                    Confirm
                                                                </button>
                                                            </form>
                                                        </div>
                                                        
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                @endsection