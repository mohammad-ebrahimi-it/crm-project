<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class CustomerController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function store(Request $request): JsonResponse
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
    public function destroy($id)
    {
        DB::table('customers')->whereIn('customer_id', [$id])->delete();
        echo $id;
    }

}
