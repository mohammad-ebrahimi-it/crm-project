<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class CustomerController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return string
     * @throws ValidationException
     */
    public function store(Request $request): string
    {
        $this->validate($request, [
            'cus_name' => 'required',
            'address_number' => 'required',
            'address_street' => 'required',
            'phone_number' => 'required',
        ]);

        DB::table('customers')->insert([
            'cus_name' => $request->cus_name,
            'address_number' => $request->address_number,
            'address_street' => $request->address_street,
            'phone_number' => $request->phone_number
        ]);

        return response()->json([
            'message' => 'new customer created'
        ]);

    }


}
