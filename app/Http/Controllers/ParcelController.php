<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parcel;


class ParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parcels = Parcel::with('order', 'status')->where('sender_id', auth()->user()->id)->where('status_id', '!=', 4)->get();
        //return $parcels;
        return view('sender/parcels' ,compact('parcels'));
    }

    public function complete_parcel(){
        $parcels = Parcel::with('order', 'status')->where('sender_id', auth()->user()->id)->where('status_id', 4)->get();
        return view('sender/parcels', compact('parcels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sender/create-parcel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pickup_address' => 'required',
            'dropoff_ddress' => 'required',
        ]);

        $parcel = new Parcel();
        $parcel->sender_id  = auth()->user()->id;
        $parcel->pickup_address = $request->pickup_address;
        $parcel->dropoff_address = $request->dropoff_ddress;
        $parcel->parcel_type = $request->parcel_type;
        $parcel->weight = $request->parcel_weight;
        $parcel->save();

        return redirect()->route('current-parcels');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        Parcel::find($id)->update(['status_id' => $request->status_id]);
        return back();
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
