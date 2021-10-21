<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerEmployeeController extends Controller
{
    public function index()
    {
        return DB::table('customer_employees')
            ->join('employees', 'employees.employee_id', 'customer_employees.employee_id')
            ->join('customers', 'customers.customer_id', 'customer_employees.customer_id')
            ->select('customers.*', 'employees.*')
            ->get();
    }

    public function store(Request $request)
    {

        foreach ($request->customer_id as $item)
            foreach ($request->employee_id as $value)

                DB::table('customer_employees')->insert([

                    'customer_id' => (int)$item,
                    'employee_id' => (int)$value
                ]);

        return response()->json([
            'message' => 'successfully'
        ]);
    }
}
