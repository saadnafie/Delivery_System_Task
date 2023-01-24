@extends('biker.layouts.header')
@section('content')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-biking fa-fw mr-1" ></i> To do</h1>

                    <!-- Parcels List -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                             <h6 class="m-0 font-weight-bold text-primary">
                                <i class="fas fa-user"></i> Sender1 <span class="mr-3 ml-3">|</span> 
                                <i class="fas fa-weight"></i> 0.5 KG <span class="mr-3 ml-3">|</span>
                                <i class="fas fa-box"></i> Car Keys
                            </h6>
                            
                            <div class="media">
                                <img src="{{ asset('dashboard_assets/img/parcel_icon.png') }}" class="mr-3" alt="Parcel" style="width:70px;">
                                <div class="media-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <u class="m-0 font-weight-bold text-primary">Pick-up:</u><br>
                                            <i class="fas fa-map-marker" ></i> Goerzallee, Berlin <br>
                                            <i class="fas fa-clock" ></i> 01 / 19 / 2023 6:00 PM <br>
                                        </div>
                                        <div class="col-md-3">
                                            <u class="m-0 font-weight-bold text-primary">Drop-off:</u><br>
                                            <i class="fas fa-map-marker" ></i> Goerzallee, Berlin <br>
                                            <i class="fas fa-clock" ></i> 01 / 19 / 2023 8:00 PM 
                                        </div>
                                        <div class="col-md-6">
                                        <a href="#" class="btn btn-success btn-circle btn-lg float-right"><i class="fas fa-check"></i></a>
                                        </div>
                                    </div> <!--row -->
                                </div><!--media-body -->
                             </div><!--media -->
                        </div>
                     </div>

                     <div class="card shadow mb-4">
                        <div class="card-body">
                             <h6 class="m-0 font-weight-bold text-primary">
                                <i class="fas fa-user"></i> Sender1 <span class="mr-3 ml-3">|</span> 
                                <i class="fas fa-weight"></i> 0.5 KG <span class="mr-3 ml-3">|</span>
                                <i class="fas fa-box"></i> Car Keys
                            </h6>
                            
                            <div class="media">
                                <img src="{{ asset('dashboard_assets/img/parcel_icon.png') }}" class="mr-3" alt="Parcel" style="width:70px;">
                                <div class="media-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <u class="m-0 font-weight-bold text-primary">Pick-up:</u><br>
                                            <i class="fas fa-map-marker" ></i> Goerzallee, Berlin <br>
                                            <i class="fas fa-clock" ></i> 01 / 19 / 2023 6:00 PM <br>
                                        </div>
                                        <div class="col-md-3">
                                            <u class="m-0 font-weight-bold text-primary">Drop-off:</u><br>
                                            <i class="fas fa-map-marker" ></i> Goerzallee, Berlin <br>
                                            <i class="fas fa-clock" ></i> 01 / 19 / 2023 8:00 PM 
                                        </div>
                                        <div class="col-md-6">
                                        <a href="#" class="btn btn-success btn-circle btn-lg float-right"><i class="fas fa-check"></i></a>
                                        </div>
                                    </div> <!--row -->
                                </div><!--media-body -->
                             </div><!--media -->
                        </div>
                     </div>
                    



            </div>
            <!-- /.container-fluid -->

                @endsection