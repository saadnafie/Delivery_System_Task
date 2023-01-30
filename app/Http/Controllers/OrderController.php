<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parcel;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::where('biker_id', auth()->user()->id)->with('parcel')
        ->whereHas('parcel', function ($query) {
              return $query->where('status_id', 2)->orWhere('status_id',3);
          })->get();
        return view('biker/to-do', compact('orders'));
    }

    public function available_parcels(){
        $parcels = Parcel::with('sender')->where('status_id', 1)->get();
        return view('biker/parcels-list', compact('parcels'));
    }

    public function complete_parcels(){
        $parcels = Parcel::with('sender')->where('status_id', 4)->get();
        return view('biker/complete-parcels', compact('parcels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //return $request;
      $parcel_id = $request->parcel_id;

      $parcel = Parcel::find($parcel_id);
      if($parcel->status_id == 1){
        //create new order for biker
        $order = new Order();
        $order->parcel_id = $parcel_id;
        $order->biker_id = auth()->user()->id;
        $order->pickup_timestamp = $request->pickup_timestamp;
        $order->dropoff_timestamp = $request->dropoff_timestamp;
        $order->save();

        //update parcel status from pending = 1 to biker accepeted = 2
        Parcel::find($parcel_id)->update(['status_id' => 2]);
      }
      return redirect()->route('orders.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
