<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

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
     * @param Request $request
     * @return string
     * @throws ValidationException
     */
    public function store(Request $request): string
    {

//        $this->validate($request,['name'=>'required']);


        dd($request->firs_name);


        $data = DB::table('customers')->insert([
            'first_name' => $request->firs_name,
            'address_number' => $request->address_number,
            'address_street' => $request->address_street,
            'phone_number' => $request->phone_number
        ]);


//        $dat = Customers::create($request->all());

        return [$data,'done'];

//        $customer = new Customers();
//        $customer->name = $request->name;
//        $customer->address_number = $request->address_number;
//        $customer->address_street = $request->address_street;
//        $customer->phone_number = $request->phone_number;
//        $customer->save();


//        return response()->json([
//            'message' => 'new customer created'
//        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
