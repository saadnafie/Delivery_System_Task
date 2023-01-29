@extends('biker.layouts.header')
@section('content')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-biking fa-fw mr-1" ></i> To do</h1>

                    <!-- Parcels List -->
                    @foreach($orders as $order)
                    <div class="card shadow mb-4">
                        <div class="card-body">
                             <h6 class="m-0 font-weight-bold text-primary">
                                <i class="fas fa-user"></i> {{$order->parcel->sender->name}} <span class="mr-3 ml-3">|</span>
                                <i class="fas fa-phone-alt"></i> {{$order->parcel->sender->phone}} <span class="mr-3 ml-3">|</span>
                                <i class="fas fa-weight"></i> {{$order->parcel->weight}} <span class="mr-3 ml-3">|</span>
                                <i class="fas fa-box"></i> {{$order->parcel->parcel_type}} <span class="mr-3 ml-2"></span>
                                 [Status: {{$order->parcel->status->parcel_status}}]
                            </h6>

                            <div class="media">
                                <img src="{{ asset('dashboard_assets/img/parcel_icon.png') }}" class="mr-3" alt="Parcel" style="width:70px;">
                                <div class="media-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <u class="m-0 font-weight-bold text-primary">Pick-up:</u><br>
                                            <i class="fas fa-map-marker" ></i> {{$order->parcel->pickup_address}} <br>
                                            <i class="fas fa-clock" ></i> {{$order->pickup_timestamp}} <br>
                                        </div>
                                        <div class="col-md-3">
                                            <u class="m-0 font-weight-bold text-primary">Drop-off:</u><br>
                                            <i class="fas fa-map-marker" ></i> {{$order->parcel->dropoff_address}} <br>
                                            <i class="fas fa-clock" ></i> {{$order->dropoff_timestamp}}
                                        </div>
                                        <div class="col-md-6">
                                          @if($order->parcel->status_id == 2)
                                          <form method="POST" action="{{route('order-parcels.update',['order_parcel'=>$order->parcel->id])}}">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="status_id" value="3">
                                            <button type="submit" class="btn btn-success btn-lg float-right">Confirm Picked-Up</button>
                                          </form>
                                          @elseif($order->parcel->status_id == 3)
                                          <form method="POST" action="{{route('order-parcels.update',['order_parcel'=>$order->parcel->id])}}">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="status_id" value="4">
                                            <button type="submit" class="btn btn-success btn-lg float-right">Confirm Drop-off</button>
                                          </form>
                                          @endif
                                        </div>
                                    </div> <!--row -->
                                </div><!--media-body -->
                             </div><!--media -->
                        </div>
                     </div>
                     @endforeach

            </div>
            <!-- /.container-fluid -->

                @endsection
