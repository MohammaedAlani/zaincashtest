<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = \DB::select("SELECT city, salary, GROUP_CONCAT(CONCAT_WS(' ',first_name, last_name) SEPARATOR ',') AS full_name, sum(salary) as total_salary FROM employees GROUP BY city");

        return response()->json($employees);
    }

}
