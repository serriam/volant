<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\GmailSend;
use Illuminate\Support\Facades\Mail;
use App\orders;
use App\User;
use Session;
use Storage;
use Notification;
use App\Notifications\adminNotification;


class orderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = orders::orderBy('id', 'desc')->paginate(10);
        return view('backend.orders.index')->withorder($order);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.orders.create');
    }

    public function serve($id){

        $order = orders::find($id);
        return view('backend.orders.service')->withorder($order);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function service(Request $request){

        // dd($request);

        $name = $request->get('name');
        $amount = $request->get('amount');
        $time = $request->get('time');
        $to = $request->get('to');
        $from = $request->get('from');

        
        // $count = strlen($amount);

        // if ($count > 8) {
            
        // }else{
        //     $newAmount = substr($amount, -3);

        // }

        // dd($newAmount);

        $order = new orders;

        $order->to = $to;
        $order->from = $from;
        $order->package = $name;
        $order->info = $amount;
        $order->time = $time;

        $order->save();

        
        return $order->id;

    }

    public function store(Request $request)
    {

        dd($request);

         $this->validate($request, array(
            'company' => 'required|max:255',
            'email' => 'required|max:255',
            'first' => 'required|max:255',
            'last' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'postcode' => 'required|max:255',
        ));



        $order = new orders;

        //

        $order->company = $request->company;
        $order->firstname = $request->first;
        $order->lastname = $request->last;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->postcode = $request->postcode;

        Mail::to($order->email)->send(new GmailSend($order->firstname));

        $order->save();

        session::flash('success', 'The order was successfully saved!');

        return redirect()->route('orders.show', $order->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = orders::find($id);
        return view('backend.orders.show')->withorder($order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = orders::find($id);
        return view('backend.orders.edit')->withorder($order);
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
        
        $order = orders::find($id);

              // dd($request);

         $this->validate($request, array(
            'email' => 'required|max:255',
            'instruct' => 'required|max:255',
        ));
        // dd($order);
        
        $order->instruct = $request->instruct;
        $order->mark = 0;
        $order->email = $request->email;
       
        Mail::to($request->email)->send(new GmailSend($order->package, $order->time, $order->info));

        $data = array( 
            'id' => $order->id,
            'to' => $order->to,
            'from' => $order->from,
            'package' => $order->package,
            'charge' => $order->info,
            'time' => $order->time,
            'email' => $request->email,
            'intructions' => $request->intruct 
        );

        // dd($data);

        $user = User::first();
  
        $details = [
            'greeting' => 'Hi Admin',
            'body' => $data['email'].' made an order'.' details are as follows'.' to: '.$data['to'].' from: '.$data['from'].' package name: '.$data['package'],
            'thanks' => 'Thank you for using volantcourier.com!',
            'actionText' => 'View this Site',
            'actionURL' => url('/'),
            'order_id' => $data['id']
        ];
  
        Notification::send($user, new adminNotification($details));

        $order->save();

        session::flash('success', 'The order was successfully saved!');

        return redirect()->route('orders.index');
    }


    public function confirm(Request $request){
        
        $order = orders::find($request->id);

        $order->mark = $request->mark;

        $order->save();

        return $order->package;
    }

    public function deleteorder(Request $request){
        $order = orders::find($request->id);

        $order->delete();

        return $order->package;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = orders::find($id);

        $order->delete();

        Session::flash('success', 'The order was successfully deleted.');

        return redirect()->route('orders.index');
    }
}
