<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeProspectController extends Controller
{
    public function index(): \Illuminate\Support\Collection
    {

        return DB::table('prospect_employees')
            ->join('employees', 'employees.employee_id', 'prospect_employees.employee_id')
            ->join('prospects', 'prospects.prospect_id', 'prospect_employees.prospect_id')
            ->select('prospects.*', 'employees.*')
            ->get();
    }

    public function store(Request $request): \Illuminate\Http\JsonResponse
    {

        foreach ($request->prospect_id as $item)
            foreach ($request->employee_id as $value)

                DB::table('prospect_employees')->insert([

                    'prospect_id' => (int)$item,
                    'employee_id' => (int)$value
                ]);

        return response()->json([
            'message' => 'successfully'
        ]);
    }
}
