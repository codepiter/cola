<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Assignment;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
         $request->validate([
			'dni' => 'required',
			'name' => 'required',
		]);

		$requestData = $request->all();
		$cliente = Customer::create($requestData);
	
	
		if($cliente){
			$asig_cola1 = Assignment::where('queue_id', 1)->where('status', 0)->get();
				$time_cola1 = count($asig_cola1)*2;
			 
			$asig_cola2 = Assignment::where('queue_id', 2)->where('status', 0)->get();
				$time_cola2 = count($asig_cola2)*3;
	
			$assig = new Assignment([
				'customer_id' => $cliente->id,
				'queue_id' => ($time_cola1 == 0 || $time_cola1 <= $time_cola2) ? 1 : 2,
				'status' => 0,							  
			]);
			$assig->save();
		
		}
		$msg = 'Su solicitud de ticket fue enviada, se encuentra en la cola Nº '.$assig->queue_id;
		 return redirect()->back()->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
