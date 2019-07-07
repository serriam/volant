<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\orders;
use App\Http\Resources\ordersRest as ordersRest;

class ordersrestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = orders::paginate(10);

        return ordersRest::collection($orders);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);

        // $order->save();

        $order = new orders;

        // $order->id = $request->input('id');
        $order->to = $request->input('to');
        $order->from = $request->input('from');
        $order->package = $request->input('packagename');
        $order->info = $request->input('cost');
        $order->time = $request->input('time');
        $order->instruct = $request->input('instructions');
        $order->mark = 0;
        $order->cancel = 0;
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');

        if ($order->save()) {
            return new ordersRest($order);
        }
        // $order = orders::create($request->all());

        // return response()->json($order);

        // return ordersRest::collection($order);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = orders::findOrfail($id);

        return new ordersRest($order);
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
        $order = orders::findOrfail($id);

        // $order->id = $request->input('id');
        $order->to = $request->input('to');
        $order->from = $request->input('from');
        $order->package = $request->input('packagename');
        $order->info = $request->input('cost');
        $order->time = $request->input('time');
        $order->instruct = $request->input('instructions');
        $order->mark = 0;
        $order->cancel = 0;
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');

        if ($order->save()) {
            return new ordersRest($order);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // dd($id);
        $order = orders::findOrfail($id);

        $order->delete();
        return new ordersRest($order);
        
        
    }
}
