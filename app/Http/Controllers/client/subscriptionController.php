<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\subscription;
use App\Http\Requests\StoresubscriptionRequest;
use App\Http\Requests\UpdatesubscriptionRequest;
use Mockery\Expectation;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

class subscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function payment()
    {
        $api = new Api("rzp_test_FIlnINN54j6AE2", "Kl2OTIuvQFcbSlL67O5X97BU");

        $orderData = [
            'receipt'         => 'rcptid_11',
            'amount'          => 15000, // 39900 rupees in paise
            'currency'        => 'INR'
        ];
        
        $razorpayOrder = $api->order->create($orderData);

       return view('client.payment',compact('razorpayOrder'));
    }

    public function storePayment(Request $request)
    {
        dd($request);
    //    $input = $request->all();

    //    $api = new Api("rzp_test_FIlnINN54j6AE2", "Kl2OTIuvQFcbSlL67O5X97BU");
    //     $payment = $api->payment->fetch($input['razorpay_payment_id']);

    //     if(count($input) && !empty($input['razorpay_payment_id'])){
    //         try{
    //             $response = $payment->capture(array('amount'=>$payment['amount']));
    //         }
    //         catch(Exception $e){
    //             return $e->getMessage();
                
    //         }
    //         return redirect()->back()->with('Successfully');
    //     }
    }

    public function billing($package_id){
        echo 'package_'.$package_id;
        return view('client.billing');
    }

    public function index()
    {
        echo 'package';
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
     * @param  \App\Http\Requests\StoresubscriptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresubscriptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function edit(subscription $subscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesubscriptionRequest  $request
     * @param  \App\Models\subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesubscriptionRequest $request, subscription $subscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(subscription $subscription)
    {
        //
    }

    
}

