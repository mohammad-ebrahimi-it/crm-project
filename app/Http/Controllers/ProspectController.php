<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class ProspectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Collection
     */
    public function index(): Collection
    {
        return DB::table('prospects')
            ->leftJoin('customers', 'customers.customer_id', '=', 'prospects.customer_id')
            ->select('prospects.*', 'customers.cus_name')
            ->get();
    }

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
            'pro_name' => 'required',
            'address_number' => 'required',
            'address_street' => 'required',
            'phone_number' => 'required',
            'customer_id' => 'required',
        ]);

        $pros = DB::select('select * from `prospects` where `prospects`.`customer_id` = :id', ['id' => $request->customer_id]);

        if (!$pros) {
            DB::table('prospects')->insert([
                'pro_name' => $request->pro_name,
                'address_number' => $request->address_number,
                'address_street' => $request->address_street,
                'phone_number' => $request->phone_number,
                'customer_id' => $request->customer_id
            ]);
            return response()->json([
                'message' => 'add prospect successfully'
            ]);
        }
        return response()->json([
            'message' => 'field customer id is repetitious'
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
//    public function edit(int $id): Response
//    {
//        //
//    }


}
